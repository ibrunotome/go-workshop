// Back-End in Go server
// @jeffotoni

package rproducts

import (
	//"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/dblog"
	mp "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/models/produto"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
	pg "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/psql"
	"net/http"
	"strconv"
	"strings"
)

func Insert(codemp int64, p *mp.Product) (int, string) {

	Db := pg.ConnectNew()

	codprod := p.Sku //int64(temp)
	descrprod := p.Name
	caracteristicas := p.Description

	// recebe string
	atmp := p.Status
	ativo := false //bool

	if atmp == "enabled" {
		ativo = true //bool
	}

	excluido := p.Removed //bool
	estoque := p.Qty
	preco := p.Price
	preco_promocional := p.Promotional_price

	// pointer null
	custo := float64(0.0)
	if p.Cost != nil {
		custo = *p.Cost
	}

	peso := p.Weight
	altura := p.Height
	largura := p.Width
	profundidade := p.Length
	marca := p.Brand
	ean := p.Ean

	// pointer
	nbm := ""
	if p.Nbm != nil {
		nbm = *p.Nbm
	}

	tx, err := Db.Begin()
	if err != nil {
		return http.StatusBadRequest, err.Error()
	}

	var codgrupoprod int64
	for _, c1 := range p.Categories {

		tmpcodgru, _ := strconv.Atoi(c1.Code)
		codgrupoprod = int64(tmpcodgru)
		grupoprod := c1.Name

		insertCatg := `INSERT INTO public.categorias as tg(codgrupoprod,grupoprod,codemp)
			VALUES ($1,$2,$3) ON CONFLICT (codgrupoprod,grupoprod,codemp) DO UPDATE SET grupoprod=$2
			WHERE tg.codgrupoprod=$1 AND tg.grupoprod=$2 AND tg.codemp=$3`
		_, err := tx.Exec(insertCatg, codgrupoprod, grupoprod, codemp)
		if err != nil {
			tx.Rollback()
			logrus.WithFields(logrus.Filelds{
				"version": "1.0.0",
				"host":    "goworkshop.s3wf.com",
				"handler": "Insert Categories categorias",
				"method":  "Db.Exec",
			}).Error(err.Error())
			return http.StatusBadRequest, err.Error()
		}
	}

	// insert produto
	{

		insertProd := `INSERT INTO public.produto(codprod,descrprod,caracteristicas,
		 	ativo,excluido,estoque,preco,preco_promocional,custo,peso,altura,largura,
		 	profundidade,marca,ean,nbm,codemp,codgrupoprod)
	 	VALUES ($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14,$15,$16,$17,$18)`
		_, err := tx.Exec(insertProd, codprod, descrprod, caracteristicas,
			ativo, excluido, estoque, preco, preco_promocional, custo, peso, altura, largura,
			profundidade, marca, ean, nbm, codemp, codgrupoprod)

		if err != nil {
			tx.Rollback()
			logrus.WithFields(logrus.Filelds{
				"version": "1.0.0",
				"host":    "goworkshop.s3wf.com",
				"handler": "Insert Products public.produto",
				"method":  "Db.Exec",
			}).Error(err.Error())
			return http.StatusBadRequest, err.Error()
		}
	}

	// listar Imagens urls and insert
	for _, url := range p.Images {

		{
			// url =>"http://belamagazine.cldns.top/AMBR01_4500.jpg
			vtmp := strings.Split(url, "/")
			lasttmp := len(vtmp) - 1
			nameImgTmp := vtmp[lasttmp]
			vtmp = strings.Split(nameImgTmp, ".")
			nameImg := vtmp[0]

			insertImg := `INSERT INTO public.imagem(codprod,codemp,nome,url)
			VALUES ($1,$2,$3,$4);`
			_, err := tx.Exec(insertImg, codprod, codemp, nameImg, url)

			if err != nil {
				tx.Rollback()
				logrus.WithFields(logrus.Filelds{
					"version": "1.0.0",
					"host":    "goworkshop.s3wf.com",
					"handler": "Insert Images public.imagem",
					"method":  "Db.Exec",
				}).Error(err.Error())
				return http.StatusBadRequest, err.Error()
			}
		}
	}

	// Specifications
	{
		for _, c2 := range p.Specifications {
			atributoTsi := c2.Key // key => especificacao = string
			valorTgf := c2.Value  // valor => especificacao = string
			insertSpec := `INSERT INTO public.especificacao as tr(atributo, codprod, codemp, valor)
			VALUES ($1,$2,$3,$4) ON CONFLICT (atributo, codprod, codemp) DO UPDATE SET valor=$4
			WHERE tr.codprod=$2 AND tr.codemp=$3 AND tr.atributo=$1`
			_, err := tx.Exec(insertSpec, atributoTsi, codprod, codemp, valorTgf)
			if err != nil {
				tx.Rollback()
				logrus.WithFields(logrus.Filelds{
					"version": "1.0.0",
					"host":    "goworkshop.s3wf.com",
					"handler": "Insert Specifications especificacao",
					"method":  "Db.Exec",
				}).Error(err.Error())
				return http.StatusBadRequest, err.Error()
			}
		}
	}

	tx.Commit()
	return http.StatusCreated, "sucesso"
}

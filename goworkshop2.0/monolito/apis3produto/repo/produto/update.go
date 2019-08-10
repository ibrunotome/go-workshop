// Back-End in Go server
// @jeffotoni
// 2019-04-28

package rproducts

import (
	"fmt"
	mp "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/models/produto"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
	pg "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/psql"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	"net/http"
	"strconv"
	"strings"
)

func Update(codemp int64, p *mp.Product) (int, string) {

	Db := pg.ConnectNew()

	codprod := p.Sku

	if len(codprod) <= 0 {
		return http.StatusBadRequest, "Campo codprod é obrigatório"
	}

	if codemp <= 0 {
		return http.StatusBadRequest, "Campo codemp é obrigatório"
	}

	// where field
	var WHERE, setField string
	//var posi int

	// where
	codempS := strconv.FormatInt(codemp, 10)
	WHERE = util.Concat(" WHERE codprod='", p.Sku, `' AND codemp=`, codempS)

	descrprod := p.Name
	if len(descrprod) > 0 {
		setField += util.Concat(`descrprod='`, descrprod, `',`)
	}

	caracteristicas := p.Description
	if len(caracteristicas) > 0 {
		setField += util.Concat(`caracteristicas='`, caracteristicas, `',`)
	}

	if len(p.Status) > 0 && p.Status == "enabled" {
		setField += `ativo=true,`
	} else if len(p.Status) > 0 {
		setField += `ativo=false,`
	}

	if p.Removed {
		setField += `excluido=true,`
	} else {
		setField += `excluido=false,`
	}

	estoque := p.Qty
	if estoque >= 0 || estoque <= 0 {
		estoqueS := strconv.FormatInt(estoque, 10)
		setField += util.Concat(`estoque=`, estoqueS, `,`)
	}

	preco := p.Price
	if preco > 0 {
		precoS := fmt.Sprintf("%f", preco)
		setField += util.Concat(`preco=`, precoS, `,`)
	}

	preco_promocional := p.Promotional_price
	if preco_promocional > 0 {
		preco_promocionalS := fmt.Sprintf("%f", preco_promocional)
		setField += util.Concat(`preco_promocional=`, preco_promocionalS, `,`)
	}

	// pointer null
	custo := float64(0.0)
	if p.Cost != nil {
		custo = *p.Cost
	}

	if custo > 0 {
		custoS := fmt.Sprintf("%f", custo)
		setField += util.Concat(`custo=`, custoS, `,`)
	}

	peso := p.Weight
	if peso > 0 {
		pesoS := fmt.Sprintf("%f", peso)
		setField += util.Concat(`peso=`, pesoS, `,`)
	}

	altura := p.Height
	if altura > 0 {
		alturaS := fmt.Sprintf("%f", altura)
		setField += util.Concat(`altura=`, alturaS, `,`)
	}

	largura := p.Width
	if largura > 0 {
		larguraS := fmt.Sprintf("%f", largura)
		setField += util.Concat(`largura=`, larguraS, `,`)
	}

	profundidade := p.Length
	if profundidade > 0 {
		profundidadeS := fmt.Sprintf("%f", profundidade)
		setField += util.Concat(`profundidade=`, profundidadeS, `,`)
	}

	marca := p.Brand
	if len(marca) > 0 {
		setField += util.Concat(`marca='`, marca, `',`)
	}

	ean := p.Ean
	if len(ean) > 0 {
		setField += util.Concat(`ean='`, ean, `',`)
	}

	nbm := ""
	if p.Nbm != nil {
		nbm = *p.Nbm
	}

	if len(nbm) > 0 {
		setField += util.Concat(`nbm='`, nbm, `',`)
	}

	if len(setField) <= 0 {
		return http.StatusBadRequest, "Campos para update em produto está vazio"
	}

	// ///////////////// IMAGES UPDATE
	// //codempiS := strconv.FormatInt(codemp, 10)
	// Del := `DELETE FROM public.imagem WHERE codprod=$1 AND codemp=$2`
	// _, err = Db.Exec(Del, codprod, codemp)
	// if err != nil {
	// 	logrus.WithFields(logrus.Filelds{
	// 		"version": "1.0.0",
	// 		"host":    "goworkshop.s3wf.com",
	// 		"handler": "Delete Images",
	// 		"method":  "Db.Exec",
	// 	}).Error(err.Error())
	// 	return http.StatusBadRequest, err.Error()
	// }

	for _, url := range p.Images {

		{
			vtmp := strings.Split(url, "/")
			lasttmp := len(vtmp) - 1
			nameImgTmp := vtmp[lasttmp]
			vtmp = strings.Split(nameImgTmp, ".")
			nameImg := vtmp[0]

			insert := `INSERT INTO public.imagem as tr(codprod,codemp,nome,url)VALUES($1,$2,$3,$4) 
			ON CONFLICT (codprod,codemp,url) DO UPDATE SET url=$4
			WHERE tr.codprod=$1 AND tr.codemp=$2 AND tr.url=$4`
			_, err := Db.Exec(insert, codprod, codemp, nameImg, url)
			if err != nil {

				logrus.WithFields(logrus.Filelds{
					"version": "1.0.0",
					"host":    "goworkshop.s3wf.com",
					"handler": "Insert/Update na Imagems",
					"method":  "Db.Exec",
				}).Error(err.Error())
				return http.StatusBadRequest, err.Error()
			}
		}
	}

	// Specifications
	{
		for _, c2 := range p.Specifications {

			atributoTsi := c2.Key // key => tsiatr = string
			valorTgf := c2.Value  // valor => tgfatr = string

			insertSpec := `INSERT INTO public.especificacao as tr(atributo, codprod, codemp, valor)
			VALUES ($1,$2,$3,$4) ON CONFLICT (atributo, codprod, codemp) DO UPDATE SET valor=$4
			WHERE tr.codprod=$2 AND tr.codemp=$3 AND tr.atributo=$1`
			_, err := Db.Exec(insertSpec, atributoTsi, codprod, codemp, valorTgf)

			if err != nil {
				logrus.WithFields(logrus.Filelds{
					"version": "1.0.0",
					"host":    "goworkshop.s3wf.com",
					"handler": "Insert Specifications",
					"method":  "Db.Exec",
				}).Error(err.Error())
				return http.StatusBadRequest, err.Error()
			}
		}
	}

	// Update produto
	{
		// cleam comma
		setField = strings.Trim(setField, ",")
		Up := `UPDATE public.produto SET ` + setField + ` ` + WHERE

		_, err := Db.Exec(Up)
		if err != nil {
			logrus.WithFields(logrus.Filelds{
				"version": "1.0.0",
				"host":    "goworkshop.s3wf.com",
				"handler": "Update produto",
				"method":  "Db.Exec",
			}).Error(err.Error())
			return http.StatusBadRequest, err.Error()
		}
	}

	return http.StatusOK, "update success"
}

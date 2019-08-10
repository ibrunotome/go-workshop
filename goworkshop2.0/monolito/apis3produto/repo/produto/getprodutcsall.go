// Back-End in Go server
// @jeffotoni

package rproducts

import (
	mp "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/models/produto"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/logrus"
	pg "github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/psql"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	"net/http"
	"strconv"
)

// return list Products all
func GetProductsAll(codemp int64) (mp.GetProduct2, int, string) {

	if codemp <= 0 {
		codemp = 10
	}

	// connect
	Db := pg.ConnectNew()

	// where
	codempS := strconv.FormatInt(codemp, 10)
	WHERE := util.BuildJSON(` WHERE excluido=false AND codemp=`, codempS, " LIMIT ", LIMIT_PRODUTCS)
	WHERE_SUB := util.BuildJSON(` WHERE excluido=false AND codemp=`, codempS)

	// list produc..
	sql := util.BuildJSON(`SELECT codprod,descrprod,caracteristicas,ativo,excluido,estoque,preco,preco_promocional,
  custo,peso,altura,largura,profundidade,codgrupoprod,marca,ean,nbm FROM public.produto `, WHERE)
	//println(sql)

	var codgrupoprod int64
	var codprod, descrprod, caracteristicas, marca, ean string
	var ativo, excluido bool
	var estoque, preco, preco_promocional, peso, altura, largura, profundidade float64
	var custo *float64
	var nbm *string
	var total int

	var mproduct = mp.GetProduct2{}
	vproducts := []mp.Product{}

	rows, err := Db.Query(sql)
	if err != nil {
		// logrus.WithFields(logrus.Filelds{
		// 	"version": "1.0.0",
		// 	"host":    "goworkshop.s3wf.com",
		// 	"handler": "GetProduct2s",
		// 	"method":  "Db.Query",
		// }).Error(err.Error())
		return mproduct, http.StatusBadRequest, "bad request"
	}

	//////////////////////////////////////////
	// dangerous, you have to always do close
	/////////////
	defer rows.Close()
	////////////////////////////////////////

	for rows.Next() {

		err = rows.Scan(&codprod, &descrprod, &caracteristicas, &ativo, &excluido, &estoque, &preco,
			&preco_promocional, &custo, &peso, &altura, &largura, &profundidade,
			&codgrupoprod, &marca, &ean, &nbm)
		if err != nil {
			logrus.WithFields(logrus.Filelds{
				"version": "1.0.0",
				"host":    "goworkshop.s3wf.com",
				"handler": "GetProduct2s",
				"method":  "rows.Scan",
			}).Error(err.Error())
			continue
		}

		//item := new(mp.Products)
		item := mp.Product{}

		//codprodS := codprod // strconv.FormatInt(codprod, 10)
		item.Sku = codprod
		// item.Product = append(item.Sku, codprodS)

		item.Name = descrprod
		item.Description = caracteristicas

		// bool string
		item.Status = strconv.FormatBool(ativo)

		item.Removed = excluido
		item.Qty = int64(estoque)
		item.Price = preco
		item.Promotional_price = preco_promocional

		// pointer string
		item.Cost = custo

		item.Weight = peso
		item.Height = altura
		item.Width = largura
		item.Length = profundidade
		item.Brand = marca
		item.Ean = ean

		// pointer string
		item.Nbm = nbm

		Categories := GetCategories2(Db, codemp, codgrupoprod)
		if len(Categories) > 0 {
			item.Categories = GetCategories2(Db, codemp, codgrupoprod)
		} else {
			item.Categories = []mp.Categories{}
		}

		Images := GetImages2(Db, codemp, codprod)
		if len(Images) > 0 {
			item.Images = Images
		} else {
			item.Images = []string{}
		}

		Specifications := GetSpecifications2(Db, codemp, codprod)
		if len(Specifications) > 0 {
			item.Specifications = GetSpecifications2(Db, codemp, codprod)
		} else {
			item.Specifications = []mp.Specifications{}
		}

		// vector struct
		vproducts = append(vproducts, item)
	}

	mproduct.P = vproducts

	var sqlTotal string = util.BuildJSON(`SELECT count(*) as total FROM public.produto `, WHERE_SUB)
	row := Db.QueryRow(sqlTotal)
	err = row.Scan(&total)
	if err != nil {
		// logrus.WithFields(logrus.Filelds{
		// 	"version": "1.0.0",
		// 	"host":    "goworkshop.s3wf.com",
		// 	"handler": "GetProductsAll total",
		// 	"method":  "rows.Scan total",
		// }).Error(err.Error())
		mproduct.Total = 0
		return mproduct, http.StatusOK, "nao encontrou total"
	}

	mproduct.Total = total
	return mproduct, http.StatusOK, "sucesso"
}

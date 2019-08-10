# Api Server Produto

O projeto é o desenvolvimento de diversas API's para comunicação com Marketplaces. Cada API estará em diretórios individuais e isolados, conforme a necessidade.

## Endpoints 

DOMAIN: localhost:8081

| Endpoint               | Method |
|------------------------|:------:|
| /ping                  | POST   |
| /auth                  | POST   |
| /sendjson              | POST   |
| /produto               | POST   |
| /produto               | PUT    |
| /produto               | GET    |
| /produto/{id}          | GET    |
| /produto/{id}          | DELETE |

## Possíveis Responses:

| Code | Mensagem                 |
|------|:------------------------:|
| 200  |                          |
| 201  | "Criado"                 |
| 204  | "Sem conteúdo"           |
| 400  | "Requisição mal-formada" |
| 500  | "Erro interno "          |

## /ping

O endpoint **Ping** está aberto para testar se o servidor está respondendo.

#### Request

```bash

$ curl -i -XPOST \
localhost:8081/ping

```

## /auth

O endpoint **auth** é para fazer o login e authenticação no server

#### Request

```bash
curl -i -H "Content-Type:application/json" \
-H "Authorization: Basic 12345=:54321" \
-d '{"login":"jeff.otoni@s3wf.com.br","password":"123456"} \
-XPOST localhost:8081/auth
```

### Test Stress /auth

```bash
hey -n 10000 -c 200 \
-m POST \
-T "application/json" \
-T "Authorization: Basic 12345=:54321" \
-d '{"login":"jeff.otoni@s3wf.com.br","password":"123456"}' \
http://localhost:8081/auth
```


### Enpoint /sendjson
Este endpoit é para teste de envios de json e com autenticação do token...

```bash
curl -i \
-H "Authorization: Bearer $TOKEN_2" \
-XPOST localhost:8081/sendjson \
-d @json/produto.json
```
### Test Stress /sendjson

```bash
hey -n 10000 -c 200 \
-m POST \
-T "application/json" \
-T "Authorization: Bearer $TOKEN_2" \
-D json/produto.json
http://localhost:8081/sendjson
```

## /produto

O método *Post* terá dois efeitos: Inserir **novo** produto e **atualizar** produto que já existe.

O produto **existe**, ele atualiza automaticamente.
O produto **não existe**, ele cria um novo produto, imagens se tiver, especificação e categorias se existir.

Na atualização as imagens estão sendo excluídas, e novas imagens são criadas a partir do *Json* enviado com o produto.

### Post

Este endpoint **insere** um novo produto, e se existir produto ele faz um **update**.

#### Json Enviado 

```json
{
   "product":{
      "sku":"1000",
      "name":"Pc Completo Gamer Com Monitor Lcd! 4gb, Wifi + 30 Jogos!",
      "description":"descricao do produto Pc Completo Gamer Com Monitor Lcd! 4gb, Wifi + 30 Jogos!",
      "status":"enabled",
      "removed":false,
      "qty":20,
      "price":699,
      "promotional_price":1600.99,
      "cost":null,
      "weight":49.12,
      "height":17.49,
      "width":72.49,
      "length":111,
      "brand":"ITATIAIA",
      "ean":"7892946327425",
      "nbm":null,
      "categories":[
         {
            "code":"10103002",
            "name":"Informatica"
         }
      ],
      "images":[
         "https://http2.mlstatic.com/pc-completo-gamer-com-monitor-lcd-4gb-wifi-30-jogos-D_NQ_NP_942100-MLB31092984544_062019-F.webp",
         "https://http2.mlstatic.com/pc-completo-gamer-com-monitor-lcd-4gb-wifi-30-jogos-D_NQ_NP_942100-MLB31092984544_062019-F2.webp",
         "https://http2.mlstatic.com/pc-completo-gamer-com-monitor-lcd-4gb-wifi-30-jogos-D_NQ_NP_942100-MLB31092984544_062019-F3.webp",
         "https://http2.mlstatic.com/pc-completo-gamer-com-monitor-lcd-4gb-wifi-30-jogos-D_NQ_NP_942100-MLB31092984544_062019-F4.webp",
         "https://http2.mlstatic.com/pc-completo-gamer-com-monitor-lcd-4gb-wifi-30-jogos-D_NQ_NP_942100-MLB31092984544_062019-F5.webp"
      ],
      "specifications":[
         {
            "key":"PROCESSADOR",
            "value":"I7"
         }
      ]
   }
}
```

#### Request

```bash
$ curl -i -XPOST \
-H "Authorization: Bearer $TOKEN_2" \
-H "Content-Type:application/json" \
--data @json/produto.json 
localhost:8081/produto

```

### Put

Este endpoint **atualiza** o produto e um *Json* é enviado.

#### Request

```bash
$ curl -i -XPUT \
-H "Authorization: Bearer $TOKEN_2" \
-H "Content-Type:application/json" \
--data @jsonValid/produto.json 
localhost:8081/produto

```

### Get Todos Produtos Limite 50

Este endpoint **lista** todos com um limite de 50.

#### Request

```bash
curl -i -XGET \
-H "Content-Type:application/json" \
-H "Authorization: Bearer $TOKEN_2" \
localhost:8081/produto

```

## /produto/{id}

### Get Por Produto

O método *Get* irá **listar** o *Json* do produto.

#### Request

```bash
curl -i -XGET \
-H "Content-Type:application/json" \
-H "Authorization: Bearer $TOKEN_2" \
localhost:8081/produto/{id}

``` 

### Delete

O método Delete irá setar como **excluído** o produto, apesar dele existir na base, o sistema irá reconhecê-lo como não existente.

#### Request

```bash
curl -i -XDELETE \
-H "Content-Type:application/json" \
-H "Authorization: Bearer $TOKEN_2" \
localhost:8081/produto/{id}

```

#### Responses

+ Response igual a [200]

```
HTTP/1.1 200 OK
```
+ Response diferentes de [200]

```
{
  "msg":"error"
}
```

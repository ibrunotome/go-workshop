<?php

// require("../../s3wfcore/config/configambiente.conf.php");
// $PATH_HTTP = PATH_HTTP."/oficina-do-php/goworkshop2.0";
$PATH_HTTP = "http://localhost:8484/goworkshop2.0";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Go Workshop 2.0</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="<?=$PATH_HTTP?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=$PATH_HTTP?>/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?=$PATH_HTTP?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=$PATH_HTTP?>/css/s3css.css" rel="stylesheet">
    <link href="<?=$PATH_HTTP?>/plugins/prism/prism.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<header class="navbar navbar-bright navbar-fixed-top main-header" role="banner">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<div class="logo">
					<a href="<?=$PATH_HTTP?>">
						<span class="title-logo"><strong>Go</strong> Workshop 2.0</span>
					</a>
				</div>
				
				<div class="logo-right hidden-xs">
					<img src="<?=$PATH_HTTP?>/img/gopher.png" alt="" />
				</div>
			</div>
		</div>
	</header>

	<!-- Begin Body -->
	<div class="container-fluid">
		<div class="col-xs-12">
			<div class="sidebar" id="leftCol">
				<ul class="nav nav-stacked" id="sidebar">

					<!--- WORKSHOP 2.0 BOOTCAMP --->

					<li>
						<a href="#sec17">Workshop 2.0 BootCamp</a>
					</li>

					<!--- PREVIA GO --->

					<li>
						<a href="#sec18">Pr&eacute;via Go</a>
					</li>

					<!--- OVERVIEW --->

					<li>
						<a href="#sec19">Overview</a>
					</li>

					<!--- INTRODUCAO CONTEUDOS --->

					<li>
						<a href="#sec20">Introdu&ccedil;&atilde;o conte&uacute;dos</a>
					</li>

					<!--- FUNDAMENTOS DA LINGUAGEM --->

					<li>
						<a href="#sec21">Fundamentos da Linguagem</a>

						<ul class="nav">
							<li class=""><a href="#sec21_1">Compilada e est&aacute;tica</a></li>
							<li class=""><a href="#sec21_2">Gc (Garbage Collector)</a></li>
							<li class=""><a href="#sec21_3">Paradigma Concorrente</a></li>
							<li class=""><a href="#sec21_4">Tipagem est&aacute;tica</a></li>
							<li class=""><a href="#sec21_5">Sem&acirc;ntica &eacute; clara</a></li>
							<li class=""><a href="#sec21_6">Sintaxe &eacute; limpa</a></li>
							<li class=""><a href="#sec21_7">&Eacute; de uso Geral</a></li>
							<li class=""><a href="#sec21_8">Plataformas: Windows, Linux, Mac e FreeBSD</a></li>
						</ul>
					</li>

					<!--- FUNDAMENTOS DA LINGUAGEM --->

					<li>
						<a href="#sec22">Instala&ccedil;&atilde;o</a>

						<ul class="nav">
							<li class=""><a href="#sec22_1">Introdu&ccedil;&atilde;o &agrave; Instala&ccedil;&atilde;o</a></li>
							<li class=""><a href="#sec22_2">Instala&ccedil;&atilde;o</a></li>
							<li class=""><a href="#sec22_3">Linux</a></li>
							<li class=""><a href="#sec22_4">$GOPATH</a></li>
							<li class=""><a href="#sec22_5">Teste nossa instala&ccedil;&atilde;o</a></li>
							<li class=""><a href="#sec22_6">Workspace</a></li>
							<li class=""><a href="#sec22_7">Outside GOPATH</a></li>
							<li class=""><a href="#sec22_8">Instala&ccedil;&atilde;o Docker</a></li>
							<li class=""><a href="#sec22_9">Instala&ccedil;&atilde;o Docker para Golang</a></li>
							<li class=""><a href="#sec22_10">Compile seu aplicativo dentro do cont&ecirc;iner Docker</a></li>
							<li class=""><a href="#sec22_11">Faça a compilação cruzada do seu aplicativo dentro do contêiner do Docker</a></li>
						</ul>
					</li>





























					<?php /* 

					<!--- INTRODUCAO CONTEUDOS GOLANG --->

					<li>
						<a href="#sec1">Introdu&ccedil;&atilde;o conte&uacute;dos golang</a>

						<ul class="nav">
							<li class=""><a href="#sec1_1">Instala&ccedil;&atilde;o</a></li>
							<li class=""><a href="#sec1_2">$GOPATH and workspace</a></li>
							<li class=""><a href="#sec1_3">Go commands</a></li>
							<li class=""><a href="#sec1_4">Editor plugins and IDEs</a></li>
							<li class=""><a href="#sec1_5">Faq Golang</a></li>
							<li class=""><a href="#sec1_6">Effective Go</a></li>
							<li class=""><a href="#sec1_7">Diagnostics</a></li>
							<li class=""><a href="#sec1_8">Packages</a></li>
							<li class=""><a href="#sec1_9">Release</a></li>
							<li class=""><a href="#sec1_10">Especifica&ccedil;&atilde;o da Linguagem</a></li>
							<li class=""><a href="#sec1_11">Play Golang</a></li>
						</ul>
					</li>

					<!--- FUNDAMENTOS DA LINGUAGEM --->

					<li>
						<a href="#sec2">Fundamentos da Linguagem</a>

						<ul class="nav">
							<li class=""><a href="#sec2_1">Install Go Linux, Mac e Windows</a></li>
							<li class=""><a href="#sec2_2">Go Workspace</a></li>
							<li class=""><a href="#sec2_3">Packages</a></li>
							<li class=""><a href="#sec2_4">go run</a></li>
							<li class=""><a href="#sec2_5">go build</a></li>
							<li class=""><a href="#sec2_6">go install</a></li>
							<li class=""><a href="#sec2_7">go test</a></li>
							<li class=""><a href="#sec2_8">go clean</a></li>
							<li class=""><a href="#sec2_9">go tool</a></li>
							<li class=""><a href="#sec2_10">go get</a></li>
							<li class=""><a href="#sec2_11">go run/build -race , flags</a></li>
							<li class=""><a href="#sec2_12">Vari&aacute;veis</a></li>
							<li class=""><a href="#sec2_13">Scope</a></li>
							<li class=""><a href="#sec2_14">Closure</a></li>
							<li class=""><a href="#sec2_15">lang Spec</a></li>
							<li class=""><a href="#sec2_16">Mem&oacute;ria</a></li>
						</ul>
					</li>

					<!--- ERRORS --->

					<li>
						<a href="#sec3">Errors</a>

						<ul class="nav">
							<li class=""><a href="#sec3_1">Introdu&ccedil;&atilde;o</a></li>
							<li class=""><a href="#sec3_2">Como funciona o controle de Erros</a></li>
							<li class=""><a href="#sec3_3">Log.fatal</a></li>
							<li class=""><a href="#sec3_4">Log.panic</a></li>
							<li class=""><a href="#sec3_5">panic</a></li>
							<li class=""><a href="#sec3_6">Custom Erros</a></li>
							<li class=""><a href="#sec3_7">Interface Erros</a></li>
							<li class=""><a href="#sec3_8">Errors.New</a></li>
							<li class=""><a href="#sec3_9">fmt.Errorf</a></li>
						</ul>
					</li>

					<!--- POINTERS --->

					<li>
						<a href="#sec4">Pointers</a>

						<ul class="nav">
							<li class=""><a href="#sec4_1">Introdu&ccedil;&atilde;o</a></li>
							<li class=""><a href="#sec4_2">Como funciona os ponteiros em Go</a></li>
							<li class=""><a href="#sec4_3">Quando usar ponteiros</a></li>
							<li class=""><a href="#sec4_4">Metodos sets</a></li>
						</ul>
					</li>

					<!--- STRUCTS --->

					<li>
						<a href="#sec5">Structs</a>

						<ul class="nav">
							<li class=""><a href="#sec5_1">Criando Type Struct Json</a></li>
							<li class=""><a href="#sec5_2">Composi&ccedil;&atilde;o</a></li>
							<li class=""><a href="#sec5_3">Anonymus Struct</a></li>
						</ul>
					</li>

					<!--- ARRAY --->

					<li>
						<a href="#sec6">Array</a>

						<ul class="nav">
							<li class=""><a href="#sec6_1">Declarando Array</a></li>
							<li class=""><a href="#sec6_2">Inicializando Array</a></li>
							<li class=""><a href="#sec6_3">Acessando elementos do Array</a></li>
							<li class=""><a href="#sec6_4">Array n&atilde;o podem ser redimensionadas</a></li>
						</ul>
					</li>

					<!--- SLICES --->

					<li>
						<a href="#sec7">Slices</a>

						<ul class="nav">
							<li class=""><a href="#sec7_1">Slices - make</a></li>
							<li class=""><a href="#sec7_2">Slices - append</a></li>
							<li class=""><a href="#sec7_3">Slices - range</a></li>
							<li class=""><a href="#sec7_4">Slices of Slices</a></li>
							<li class=""><a href="#sec7_5">Slices Nil</a></li>
							<li class=""><a href="#sec7_6">Slice len() e cap()</a></li>
						</ul>
					</li>

					<!--- MAPS --->

					<li>
						<a href="#sec8">Maps</a>

						<ul class="nav">
							<li class=""><a href="#sec8_1">Maps - make</a></li>
							<li class=""><a href="#sec8_2">Maps - int, string, interfaces</a></li>
							<li class=""><a href="#sec8_3">Maps - Struct</a></li>
							<li class=""><a href="#sec8_4">Maps - Mutante</a></li>
							<li class=""><a href="#sec8_5">Maps not sync</a></li>
						</ul>
					</li>

					<!--- INTERFACES --->

					<li>
						<a href="#sec9">Interfaces</a>

						<ul class="nav">
							<li class=""><a href="#sec9_1">Introdu&ccedil;&atilde;o</a></li>
							<li class=""><a href="#sec9_2">OOP em Golang</a></li>
							<li class=""><a href="#sec9_3">Interface vazias</a></li>
							<li class=""><a href="#sec9_4">Metodos e Interfaces</a></li>
							<li class=""><a href="#sec9_5">Convers&atilde;o vs Assertion</a></li>
							<li class=""><a href="#sec9_6">Metodos sets</a></li>
						</ul>
					</li>

					<!--- FUNÇÕES --->

					<li>
						<a href="#sec10">Fun&ccedil;&otilde;es</a>

						<ul class="nav">
							<li class=""><a href="#sec10_1">Syntax e Introdu&ccedil;&atilde;o</a></li>
							<li class=""><a href="#sec10_2">Parametros Vari&aacute;dicos</a></li>
							<li class=""><a href="#sec10_3">Passagem por Valor</a></li>
							<li class=""><a href="#sec10_4">Passagem por Refer&ecirc;ncia</a></li>
							<li class=""><a href="#sec10_5">Anonymous</a></li>
							<li class=""><a href="#sec10_6">Func como parametros / Callbacks</a></li>
							<li class=""><a href="#sec10_7">Return Func</a></li>
							<li class=""><a href="#sec10_8">Defer</a></li>
							<li class=""><a href="#sec10_9">Callback</a></li>
							<li class=""><a href="#sec10_10">Closure</a></li>
							<li class=""><a href="#sec10_11">Recursion</a></li>
							<li class=""><a href="#sec10_12">Fun&ccedil;&otilde;es Assícronas</a></li>
						</ul>
					</li>

					<!--- JSON --->

					<li>
						<a href="#sec11">JSON</a>

						<ul class="nav">
							<li class=""><a href="#sec11_1">Json marshal</a></li>
							<li class=""><a href="#sec11_2">Json Unmarshal</a></li>
							<li class=""><a href="#sec11_3">json Encode</a></li>
							<li class=""><a href="#sec11_4">Json Decode</a></li>
						</ul>
					</li>

					<!--- TESTES --->

					<li>
						<a href="#sec12">Testes</a>

						<ul class="nav">
							<li class=""><a href="#sec12_1">Introdu&ccedil;&atilde;o</a></li>
							<li class=""><a href="#sec12_2">Exemplos Test</a></li>
							<li class=""><a href="#sec12_3">go test</a></li>
							<li class=""><a href="#sec12_4">Benchmark</a></li>
							<li class=""><a href="#sec12_5">Golint</a></li>
						</ul>
					</li>

					<!--- PATTERNS --->

					<li>
						<a href="#sec13">O que s&atilde;o os Patterns Fan Out / Fan In?</a>

						<ul class="nav">
							<li class=""><a href="#sec13_1">O que &eacute; Fan Out</a></li>
							<li class=""><a href="#sec13_2">O que &eacute; Fan In</a></li>
							<li class=""><a href="#sec13_3">Exerc&iacute;cio Fan Out</a></li>
							<li class=""><a href="#sec13_4">Exerc&iacute;cio Fan In</a></li>
						</ul>
					</li>

					<!--- GOROUTINE --->

					<li>
						<a href="#sec14">Goroutine</a>

						<ul class="nav">
							<li class=""><a href="#sec14_1">Channel</a></li>
							<li class=""><a href="#sec14_2">Paralelismo</a></li>
							<li class=""><a href="#sec14_3">GOMAXPROCS</a></li>
							<li class=""><a href="#sec14_4">WaitGroup</a></li>
							<li class=""><a href="#sec14_5">Race Conditions</a></li>
							<li class=""><a href="#sec14_6">Mutex</a></li>
							<li class=""><a href="#sec14_7">Atomicity</a></li>
							<li class=""><a href="#sec14_8">Worker</a></li>
							<li class=""><a href="#sec14_9">Deadlock</a></li>
							<li class=""><a href="#sec14_10">Ticker</a></li>
							<li class=""><a href="#sec14_11">Singleton Connect Thread Safe</a></li>
						</ul>
					</li>

					<!--- DATABASE / SQL --->

					<li>
						<a href="#sec15">Database/Sql</a>

						<ul class="nav">
							<li class=""><a href="#sec15_1">Introdu&ccedil;&atilde;o</a></li>
							<li class=""><a href="#sec15_2">Postgres</a></li>
							<li class=""><a href="#sec15_3">Criando conex&atilde;o</a></li>
							<li class=""><a href="#sec15_4">Criando conex&atilde;o singleton</a></li>
							<li class=""><a href="#sec15_5">Criando conex&atilde;o singleton thread safe</a></li>
							<li class=""><a href="#sec15_6">Create Table</a></li>
							<li class=""><a href="#sec15_7">Insert Table</a></li>
							<li class=""><a href="#sec15_8">Update Table</a></li>
							<li class=""><a href="#sec15_9">Select Table</a></li>
							<li class=""><a href="#sec15_10">Delete Table</a></li>
							<li class=""><a href="#sec15_11">Transaction</a></li>
							<li class=""><a href="#sec15_12">Erros</a></li>
						</ul>
					</li>

					<!--- API REST --->

					<li>
						<a href="#sec16">API REST e Construindo nosso primeiro Server e Client</a>

						<ul class="nav">
							<li class=""><a href="#sec16_1">Organizando nosso c&oacute;digo</a></li>
							<li class=""><a href="#sec16_2">Clean Code</a></li>
							<li class=""><a href="#sec16_3">Tipos de arquitetura (hexagonal, em camadas)</a></li>
							<li class=""><a href="#sec16_4">Banco de dados</a></li>
							<li class=""><a href="#sec16_5">Docker</a></li>
							<li class=""><a href="#sec16_6">Monitoramento</a></li>
							<li class=""><a href="#sec16_7">Server Standalone http e https</a></li>
							<li class=""><a href="#sec16_8">Server Ngnix</a></li>
							<li class=""><a href="#sec16_9">Client cURL</a></li>
						</ul>
					</li>

              	</ul> */ ?>

	  		</div>  







	  		<div class="mainContent" id="mainCol">

	  			<br />

	  			<div id="sec17">

	  				<h2>Workshop 2.0 BootCamp</h2>

	  				<p>Material por 8 horas Imersão Prática com Golang Este é um material em Golang que será apresentado "cara a cara" em uma oficina "de mãos dadas" que será realizada em 8 horas.</p>

	  			</div>

  				<hr />
	  				
	  			<div id="sec18">

	  				<h2>Pr&eacute;via Go</h2>

	  				<p>Todo o conteúdo visa o nível básico do aluno, muitos exemplos práticos foram feitos com detalhes riqueza para tornar a vida mais fácil do que está iniciando. Se você sabe pouco e quase nada de programação não será problema todo manual foi feito para nivelar começando a avançado. Todas as dificuldades que tive quando comecei a tentar contemplar esse material. Vamos tentar melhorar o material o tempo todo para que possamos ter uma referência quando se trata de ir.</p>

	  				<p>Espero que todos gostem e possam servir de base para aprender e ajudar vários Gophers possíveis.</p>

	  				<p>O conteúdo e as referências usadas são do <a href="" target="_blank">Site Oficial de Golang</a> e do material que está sendo desenvolvido, que é uma compilação de toda a linguagem de Golang e pode ser conferida aqui em <a href="" target="_blank">jeffotoni / Compilation</a>.</p>

	  				<p>Algumas apresentações que fiz podem ser vistas aqui <a href="" target="_blank">Apresentações</a>.</p>

	  				<p>Há milhares de referências hoje em relação a Golang, vamos começar no começo e não poderíamos parar de falar sobre a <a href="" target="_blank">Golang Tour</a>. Bem, esse site aqui <a href="" target="_blank">Jogue Golang</a> ou <a href="" target="_blank">jogue no Go Space</a>, podemos jogar Golang online.</p>

	  				<p>Temos um link muito interessante que pudemos pesquisar por pacotes escritos em Golang. Confira este link: <a href="" target="_blank">Go Doc</a></p>

	  				<p>Nós temos este link que nos apresenta como um manual todas as bibliotecas desenvolvidas no Golang <a href="" target="_blank">Dev Docs</a></p>

	  				<p>Aqui encontramos um incrível go, há várias listas como é, e às vezes é legal verificar algumas bibliotecas para nos ajudar com alguns projetos. <a href="" target="_blank">awesome-go</a></p>

	  				<p>Logo abaixo alguns canais que participo e posso me encontrar online.</p>

	  			</div>

  				<hr />

  				<div id="sec19">

	  				<h2>Overview</h2>

	  				<p>Go é uma linguagem poderosa quando se trata de competição e alto desempenho, com uma arquitetura limpa e eficiente. Ela cresce ano após ano e todos os dias as comunidades crescem ainda mais.</p>

	  				<p>Alguns paradigmas foram quebrados para torná-lo uma linguagem de alto desempenho, onde a competição é um dos seus pontos fortes. O Go facilita a criação de programas que aproveitam ao máximo as máquinas multicore e em rede, enquanto o novo sistema de tipos permite que você crie programas flexíveis e modulares.</p>

	  				<p>É uma linguagem rápida e estaticamente compilada que se parece com uma linguagem interpretada dinamicamente. Este recurso Golang se torna uma linguagem única como o assunto é web.</p>

	  				<p>Go é uma linguagem de programação compilada, competitiva, forte e estaticamente tipada. É uma linguagem de "Uso Geral" que pode ser usada para resolver vários problemas e em diferentes áreas. Problemas envolvendo concorrência, aplicações web, aplicações de alto desempenho, desenvolvimento de APIs, soquetes de comunicação etc ... É onde a linguagem está se tornando cada vez mais proeminente no mercado e nas comunidades.</p>

	  			</div>

  				<hr />

  				<div id="sec20">

	  				<h3>Introdu&ccedil;&atilde;o conte&uacute;dos</h3>

	  				<p>Go está na versão 1.12.7 e caminhando para versão 2.0, todo ciclo de desenvolvimento de seu core respeita o arcaboço e designer do que foi proposto no inicio do surgimento da linguagem. O objetivo centrarl sobre Go é torna-lá cada vez mais produtiva e deixar a linguagem ainda mais simples para os que forem desenvolver em Go.</p>

	  				<p>Durante o processo, a equipe de desenvolvimento Go apresentou quatro maneiras principais de simplificar a experiência geral de escrever programas Go: Remodelando, Redefinindo, Removendo e Restringindo chamado os quatro R's da simplificações.</p>

	  				<p>Neste cenário percebe-se claramente que no designer de Go "Menos é exponencialmente Mais", e nasceu o termo "Programar do jeito Go de fazer as coisas".</p>

	  				<p>Espero que todos gostem e possam servir de base para aprender e ajudar vários Gophers possíveis.</p>

	  				<p>O conteúdo e as referências usadas são do Site Oficial de Golang e grande parte é feita sobre a ótica prática do autor.</p>

	  			</div>


	  			<div id="sec21">

	  				<h3>Fundamentos da Linguagem</h3>

	  			</div>

	  			<div id="sec21_1">

	  				<h4>1 - Compilada e estática</h4>

<pre><code class="language-go">$ go build
$ go build -ldflags="-s -w" hello.go</code></pre>

					<p>Compilando para Lambda</p>

<pre><code class="language-go">$ GOOS=linux GOARCH=amd64 go build -o lambda lambda.go</code></pre>

					<p>Compilando para WebAssembly</p>

<pre><code class="language-go">$ GOARCH=wasm GOOS=js go build -o test.wasm hello.go</code></pre>


					<p>Compilando e gerando um .o file, e gera o seu assembly</p>

<pre><code class="language-go">$ GOOS=linux GOARCH=amd64 go tool compile -S hello.go 
$ go tool compile -S hello.go > hello.S
$ go build -gcflags -S hello.go</code></pre>

					<p>Gerando o dump do assembly</p>

<pre><code class="language-go">go tool objdump hello > ref-assembly</code></pre>

					<p>Isso está no código para quando compilamos para diferenciar e compilar somente aqueles que contêm essas tags. Ao compilar basta informar a tag que você colocou no seu código.</p>

<pre><code class="language-go">// +build !windows
$ go build -o main main</code></pre>

					<p>Buildmode</p>

<pre><code class="language-go">$ go help buildmode
-buildmode=plugin
-buildmode=shared</code></pre>

					<p>Compilando estática em C</p>

<pre><code class="language-go">$ gcc -static -o hello-c hello.c -lm
$ GO111MODULE=on
$ GOMAXPROCS=NUMERO-CPU</code></pre>

	  			</div>

	  			<hr />

	  			<div id="sec21_2">

	  				<h4>2 - Gc (Garbage Collector)</h4>
	  				<small><a href="https://blog.golang.org/ismmkeynote" target="_blank">https://blog.golang.org/ismmkeynote</a></small>

<pre><code class="language-go">package main

import "fmt"
import "runtime"
import "sync"

func  main() {
	lotsOf := make([]*int, 15e8)
	runtime.GC()
	numWorkers := runtime.NumCPU()
	var wg sync.WaitGroup
	for i := 0; i < numWorkers; i++ {
		wg.Add(1)
		go func() {
			defer wg.Done()
			work()
		}()
	}
	wg.Wait()
	runtime.KeepAlive(lotsOf)
}</code></pre>

	  			</div>

	  			<hr />

	  			<div id="sec21_3">

	  				<h4>3 - Paradigma Concorrente</h4>

	  				<p>Canais são como filas que forne acesso sincronizado automático entre goroutines. 
	  				Esse entendimento nos levará a escrever códigos concorrentes.</p>

	  				<p>O importante é sempre focar como eles se comportam. 
	  				Um canal permite que uma goroutine sinalize outra goroutine sobre um determinado evento. 
	  				A sinalização está no centro de tudo que você deve fazer com os canais. 
	  				Pensar nos canais como um mecanismo de sinalização permitirá que você escreva um código melhor com um comportamento bem definido e mais preciso. </p>

	  				<p>Para entender como funciona a sinalização, precisamos entender seus três atributos:

	  					<br />- Garantia de entrega
	  					<br />- Estado
	  					<br />- Com ou sem dados
	  				</p>

	  				<p>Esses três atributos trabalham juntos para criar uma filosofia de design em torno da sinalização. </p>

	  				<p>Garantia de entrega<br />
	  				A garantia de entrega é baseada em uma pergunta: "Preciso de uma garantia de que o sinal enviado por uma goroutine específica foi recebido?"</p>

<pre><code class="language-go">func main() {
ch := make(chan string)
go func() {
p := <-ch // Receive
}()

ch <- "paper" // Send
}</code></pre>

					<p>Estado<br />
					O comportamento de um canal é diretamente influenciado pelo seu estado atual. O estado de um canal pode ser nulo, aberto ou fechado.</p>

<pre><code class="language-go">// ** nil channel
// Um chan é um estado com nil quando ele é declardo com zero value
var ch chan string

// Um chan pode ser alterado com nil e torna um estado de forma explicita
ch = nil

// ** open channel
// Um chan é de estado aberto quando é usado built-in function make.
ch := make(chan string)    

// ** closed channel
// Um chan é fechado o estado quando é usado built-in function close.
close(ch)</code></pre>

					<p>Quando um canal está em um estado nulo , qualquer tentativa de envio ou recebimento no canal será bloqueada. Quando um canal está em estado aberto , os sinais podem ser enviados e recebidos. Quando um canal é colocado em um estado fechado , os sinais não podem mais ser enviados, mas ainda é possível receber sinais.</p>

					<p>Esses estados fornecerão os diferentes comportamentos que você precisa para as diferentes situações que encontrar. Ao combinar Estado com Garantia de Entrega , você pode começar a analisar os custos / benefícios que você está incorrendo como resultado de suas escolhas de projeto. Em muitos casos, você também será capaz de identificar rapidamente os bugs apenas lendo o código, porque você entende como o canal vai se comportar.</p>

<pre><code class="language-go">package main

import "fmt"

func main() {
	ch := make(chan string,10)

	ch <- "paper 1" // Send
	ch <- "paper 2" // Send
	ch <- "paper 3" // Send

	fmt.Println(<-ch) // Receive
	fmt.Println(<-ch) // Receive
	fmt.Println(<-ch) // Receive
}</code></pre>

<br />

<pre><code class="language-go">package main

import "fmt"
import "time"

var stream = make(chan int)
var fin = make(chan bool)

func produce() {
    for i := 0; i < 10; i++ {
        fmt.Println("sending")
        stream <- i
        fmt.Println("sent")
    }

    fmt.Println("No closing channel")
    //close(stream)
    fin <- true
}

func consume() {
    for {
        data := <-stream
        fmt.Println("Consumer: ", data)
        time.Sleep(500 * time.Millisecond)
    }
}

func main() {
    go consume()
    go produce()
    <-fin
    fmt.Println("After calling DONE")
}</code></pre>

		  			</div>

		  			<hr />

		  			<div id="sec21_4">

		  				<h4>4 - Tipagem estática</h4>

		  				<p>Go é uma linguagem de programação compilada e pertence a família da linguagem C. 
		  				Contudo, seu tempo de compilação é muito mais rápido do que outras linguagens da mesma família. Ela possui apenas 25 palavras-chave (palavras reservadas). Vamos dar uma olhada nessas palavras antes de começar.</p>

		  				<table class="tbl-palavras-reservadas">
		  					<tr>
		  						<td>break</td>
		  						<td>default</td>
		  						<td>func</td>
		  						<td>interface</td>
		  						<td>select</td>
		  					</tr>
		  					<tr>
		  						<td>case</td>
		  						<td>defer</td>
		  						<td>go</td>
		  						<td>map</td>
		  						<td>struct</td>
		  					</tr>
		  					<tr>
		  						<td>chan</td>
		  						<td>else</td>
		  						<td>goto</td>
		  						<td>package</td>
		  						<td>switch</td>
		  					</tr>
		  					<tr>
		  						<td>const</td>
		  						<td>fallthrough</td>
		  						<td>if</td>
		  						<td>range</td>
		  						<td>type</td>
		  					</tr>
		  					<tr>
		  						<td>continue</td>
		  						<td>for</td>
		  						<td>import</td>
		  						<td>return</td>
		  						<td>var</td>
		  					</tr>
		  				</table>

		  				<br />

<pre><code class="language-go">package main

import "fmt"

func main() {
	
	type MyString string 

	const nome string = "@jeffotoni"

	var vars MyString
	var t string
	var a int

	vars = MyString(nome)
	t = "ola"
	a = 100

	fmt.Println(t, a, nome)
}</code></pre>

		  			</div>

		  			<hr />

		  			<div id="sec21_5">

		  				<h4>5 - Semântica é clara</h4>

<pre><code class="language-go">package main

import "fmt"

func main() {
	fmt.Println("Workshop2.0")
}</code></pre>

		  			</div>

		  			<hr />

		  			<div id="sec21_6">

		  				<h4>6 - Sintaxe é limpa</h4>

<pre><code class="language-go">package main

import "fmt"

func main() {
	io.Copy(os.Stdout, strings.NewReader(f.(func() string)()))
}</code></pre>

		  			</div>

		  			<hr />

		  			<div id="sec21_7">

		  				<h4>7 - É de uso Geral</h4>

<pre><code class="language-go">package main
package main

/*
#include <stdio.h>
#include <stdlib.h>

void GoPrint(char* s) {
printf("%s\n", s);
}
*/
import "C"

func main() {
C.GoPrint(C.CString("Workshop 2.0\n"))
}</code></pre>

		  			</div>

		  			<hr />

		  			<div id="sec21_8">

		  				<h4>8 - Plataformas: Windows, Linux, Mac e FreeBSD</h4>

		  			</div>

	  				<hr />

		  			<div id="sec22">

		  				<h2>Instala&ccedil;&atilde;o</h2>

		  			</div>

		  			<div id="sec22_1">
		  				
		  				<h3>Introdu&ccedil;&atilde;o &agrave; Instala&ccedil;&atilde;o</h3>

		  				<p>Em golang a instalação é muito simples e prática, para Linux, Mac e Windows.</p>

		  				<p>Basta copiar os arquivos para o diretório correto para cada sistema operacional e exportar os caminhos para o ambiente e solicitar, golang está instalado.</p>

		  				<p>Vamos dar uma olhada em como fazemos isso.</p>

		  			</div>

		  			<hr />

		  			<div id="sec22_2">
		  				
		  				<h3>Instala&ccedil;&atilde;o</h3>

		  				<p>Vamos baixar o arquivo, descompactá-lo e instalá-lo em /usr/local/go, se tivermos golang já instalado na máquina teremos que remover o existente para deixar nossa instalação como única. Vamos criar nosso diretório em nosso espaço de trabalho e testar para ver se tudo correu bem.</p>

		  			</div>

		  			<hr />

		  			<div id="sec22_3">
		  				
		  				<h3>Linux</h3>

<pre><code class="language-go">$ sudo rm -rf /usr/local/go
$ wget https://dl.google.com/go/go1.11.5.linux-amd64.tar.gz
$ sudo tar -C /usr/local -xzf go$VERSION.$OS-$ARCH.tar.gz</code></pre>

		  			</div>

		  			<hr />

		  			<div id="sec22_4">
		  				
		  				<h3>$GOPATH</h3>

		  				<p>$GOPATH é o golang em seu $HOME, isso é necessário para que seus projetos usem o pkg e construam corretamente. Isso era obrigatório para todas as versões anteriores à versão 1.11. O legal é que a partir de agora não teremos que criar projetos no $GOPATH, podemos criar em qualquer outro diretório que não esteja no $GOPATH.</p>

		  				<p>Aqui está o link para a proposta de versão proposta: <a href="" target="_blank">Módulos Go versionados</a> ou <a href="" target="_blank">Go 1.11 Modules</a></p>

		  				<p>Vamos detalhar como trabalhar com o <strong>go mod</strong>, foi uma das melhores experiências que tive para projetos de versionamento usando Golang.</p>

		  				<p>Vamos configurar nosso ambiente para rodar o Go. Adicione <strong>/usr/local/go/bin</strong> à variável de ambiente PATH. Você pode fazer isso adicionando esta linha ao seu <strong>/etc/profile</strong> (para uma instalação em todo o sistema) ou <strong>$HOME/.profile.</strong></p>

<pre><code class="language-go">$ export PATH=$PATH:/usr/local/go/bin</code></pre>

						<p><strong>Nota:</strong> as alterações feitas em um arquivo de perfil podem não se aplicar até a próxima vez que você fizer login no seu computador. Para aplicar as alterações imediatamente, basta executar os comandos do shell diretamente ou executá-los a partir do perfil usando um comando como o source $HOME/.profile.</p>

<pre><code class="language-go">$ echo "export GOPATH=$HOME/go" >> $HOME/.profile
$ echo "export PATH=$PATH:/usr/local/go/bin" >> $HOME/.profile
$ echo "export PATH=$PATH:$GOPATH/bin" >> $HOME/.profile</code></pre>

		  			</div>

		  			<hr />

		  			<div id="sec22_5">

		  				<h3>Teste nossa instala&ccedil;&atilde;o</h3>

		  				<p>Vamos executar a versão para ver se tudo está correto.</p>

<pre><code class="language-go">$ go version
go version go1.11.5 linux/amd64</code></pre>

						<p>Verifique se o Go está instalado corretamente configurando um espaço de trabalho e construindo um programa simples, da seguinte maneira.</p>

						<p>Crie seu diretório de área de trabalho, $HOME/go. (Se você quiser usar um diretório diferente, precisará definir a variável de ambiente $GOPATH.)</p>

						<p>Em seguida, faça o diretório src/hello dentro de sua área de trabalho e, nesse diretório, crie um arquivo chamado hello.go que se pareça com:</p>

		  				<h4>Workspace</h4>

		  				<p>O espaço de trabalho é o nosso local de trabalho, onde organizaremos nossos diretórios com nossos projetos. Como mostrado acima, até o Go versão 1.11 fomos forçados a fazer tudo sob o Espaço de Trabalho. $GOPATH Down Projects.</p>

<pre><code class="language-go">$ export GOPATH=$HOME/go
$ mkdir $HOME/go
$ mkdir $HOME/go/src
$ mkdir $HOME/go/src/hello
$ vim $HOME/go/src/hello/hello.go</code></pre>

<br />

<pre><code class="language-go">$GOPATH/
  |-src
    |-hello
      |-hello.go</code></pre>

<br />

		  				<h4>Projeto de Exemplo</h4>

<pre><code class="language-go">$ export GOPATH=$HOME/go
$ mkdir $HOME/go/src/project1
$ mkdir $HOME/go/src/project1/my-pkg
$ mkdir $HOME/go/src/project1/my-cmd
$ mkdir $HOME/go/src/project1/my-vendor
$ mkdir $HOME/go/src/project1/my-logs
$ mkdir $HOME/go/src/project1/my-models
$ mkdir $HOME/go/src/project1/my-repo
$ mkdir $HOME/go/src/project1/my-handler</code></pre>

<br />

		  				<h4>Projeto de Exemplo</h4>

<pre><code class="language-go">$GOPATH/
|-src
|-github.com/user/project1/
|-cmd (do project1)
|-main.go
|-vendor
|-logs
|-models
|-repo
|-handler
|-github.com/user/project2/
....
....</code></pre>

<br />

						<p>A variável de ambiente $GOPATH informa a ferramenta Go onde sua área de trabalho está localizada.</p>

<pre><code class="language-go">$ go get github.com/user/project1</code></pre>

						<p>O comando go get recupera repositórios de origem da Internet e os coloca em sua área de trabalho. Os caminhos do pacote são importantes para a ferramenta Ir. Usar "github.com/..." significa que a ferramenta sabe como buscar seu repositório.</p>

						<p>No cenário acima, tudo teria que ficar em nosso $ GOPATH para que nossos projetos funcionassem corretamente.</p>
		  				
		  				<h3>Fora do $GOPATH</h3>

		  				<p>Agora podemos fazer nossos projetos sem estar em $GOPATH, podemos, por exemplo, fazê-lo em qualquer diretório.</p>

		  				<h4>Projeto Fora do GOPATH</h4>

<pre><code class="language-go">$ export GOPATH=$HOME/go
$ mkdir $HOME/2019/project1
$ mkdir $HOME/2019/project1/my-pkg
$ mkdir $HOME/2019/project1/my-cmd
$ mkdir $HOME/2019/project1/my-logs
$ mkdir $HOME/2019/project1/my-models
$ mkdir $HOME/2019/project1/my-repo
$ mkdir $HOME/2019/project1/my-handler</code></pre>

<br />

<pre><code class="language-go">$HOME/
|-2019
|-github.com/user/project1/
  |-cmd
    |-main.go
  |-vendor
  |-logs
  |-models
  |-repo
  |-handler</code></pre>

  <br />

  						<p>Podemos colocar nosso projeto em qualquer diretório agora.</p>


<pre><code class="language-go">$HOME/
|-any-directory
|-github.com/user/project1/
  |-cmd
    |-main.go
  |-vendor
  |-logs
  |-models
  |-repo
  |-handler</code></pre>

  						<p>Para o cenário acima, teremos que usar o go mod em nosso projeto para que todos os pacotes externos possam funcionar corretamente, assim poderemos gerenciá-los corretamente e versão. Mais informações podem ser encontradas aqui: Wiki Go Modules</p>

  						<p>Exemplo prático de como você irá proceder:</p>


<pre><code class="language-go">$ go mod init github.com/user/project1</code></pre>









	  			<?php /* 
	  			<div id="sec1">

	  				<h2>1. Introdu&ccedil;&atilde;o conte&uacute;dos golang</h2>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>

	  				<p>Maecenas dapibus ullamcorper gravida. Vestibulum in fringilla nibh, vel mollis ligula. Curabitur a est a odio pulvinar pulvinar. Etiam et est non nisi finibus tempor. Aliquam sit amet nunc vel eros scelerisque rhoncus. Sed commodo id massa vitae imperdiet. Aenean et semper sapien, vel accumsan lacus. Cras interdum, velit eget faucibus rhoncus, felis nulla vehicula lectus, vel elementum nisl odio condimentum lectus. Suspendisse sit amet libero vel ante porta efficitur in ut libero. Sed et convallis mi. Aliquam vehicula risus et felis congue pulvinar. In tincidunt, magna mollis molestie porta, massa ipsum accumsan nisl, id dapibus arcu augue porttitor ligula. In hac habitasse platea dictumst. Proin maximus, lectus vitae tempus porta, felis nibh porta velit, et semper erat nibh vel tortor. Phasellus facilisis risus metus, sed viverra tortor pharetra eu. Nullam id blandit mauris.</p>

	  			</div>

	  			<hr />

	  			<div id="sec1_1">

	  				<h3>1.1 Instala&ccedil;&atilde;o</h3>
	  				
	  				<p>Pellentesque efficitur nulla id urna aliquet porttitor. Etiam consectetur mollis aliquet. Phasellus et iaculis eros. Aenean non vulputate augue, pharetra aliquet tortor. In tempus sodales lacus nec mattis. Ut sit amet neque nulla. Praesent eget tempus ipsum. Duis finibus ante non aliquet finibus. Proin vel lectus non ante fermentum lobortis. Ut neque metus, eleifend sit amet vulputate eget, pretium non tortor. Curabitur eleifend quis odio in ullamcorper. Quisque quis ante et sem tempor pellentesque et vitae ipsum.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<div class="code-container">
	  					<div class="code-link">
	  						<a href="https://play.golang.org/p/jcGg3dndii2" target="_blank" title="Run code">
	  							<img src="<?= PATH_HTTP ?>/oficina-do-php/apostila/img/gopher-play.png" alt="" />
	  						</a>
	  					</div>

<pre><code class="language-go">package main

import "fmt"

func adder() func(int) int {
	sum := 0
	return func(x int) int {
		sum += x
		return sum
	}
}

func main() {
	pos, neg := adder(), adder()
	for i := 0; i < 10; i++ {
		fmt.Println(
			pos(i),
			neg(-2*i),
		)
	}
}</code></pre>

	  			</div>
	  			
				<hr />

	  			<div class="code-container">

<pre><code class="language-sql">SELECT * FROM tbl_test WHERE id = 1;
UPDATE tbl_test SET nome = 'go lang' WHERE id = 1;</code></pre>

	  			</div>
	  			
				<hr />

	  			<div class="code-container">

<pre><code class="language-git">git status
git add example.go
git commit -m "exemplo go lang"
git push origin master
</code></pre>

	  			</div>
	  			
				<hr />

	  			<div class="code-container">

<pre><code class="language-bash">curl -X PUT s3api.com:9010/v1/api/apdata \
-H "X-KEY: x4764Xr393" \
-H "Content-Type: application/json" \
--data @json-update-clean</code></pre>

	  			</div>

				<hr />

	  			<div class="code-container">

<pre><code class="language-php">echo "exemplo de PHP";
$golang = 1;

if ($golang == 1) {
	echo "OK";
}</code></pre>

	  			</div>

	  			<hr />

	  			<div id="sec1_2">

	  				<h3>1.2 $GOPATH and workspace</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  				<p>Pellentesque efficitur nulla id urna aliquet porttitor. Etiam consectetur mollis aliquet. Phasellus et iaculis eros. Aenean non vulputate augue, pharetra aliquet tortor. In tempus sodales lacus nec mattis. Ut sit amet neque nulla. Praesent eget tempus ipsum. Duis finibus ante non aliquet finibus. Proin vel lectus non ante fermentum lobortis. Ut neque metus, eleifend sit amet vulputate eget, pretium non tortor. Curabitur eleifend quis odio in ullamcorper. Quisque quis ante et sem tempor pellentesque et vitae ipsum.</p>
					
					<img class="img-responsive" src="<?= PATH_HTTP ?>/oficina-do-php/apostila/img/exemplos/exemplo-1-2-basic.png" alt="" />
					
					<hr />

					<img class="img-responsive center-block" src="<?= PATH_HTTP ?>/oficina-do-php/apostila/img/exemplos/exemplo-1-2-basic.png" alt="" />

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut faucibus tortor et velit consequat varius. Sed nibh arcu, pellentesque id velit et, lobortis fermentum tellus. Morbi bibendum rhoncus facilisis. Ut velit sem, tincidunt mollis nibh nec, pharetra imperdiet mauris. Vivamus malesuada pharetra purus, id vestibulum tellus sollicitudin vel. Aliquam purus justo, tempus eget mauris quis, tincidunt maximus ipsum. Pellentesque a mollis felis. Cras blandit mi a sem consequat porta. Cras commodo ex in dui vestibulum gravida. Nunc metus ligula, bibendum a eros ut, pretium rhoncus nisi. Morbi a mauris luctus, faucibus odio ac, aliquam libero. Fusce rutrum viverra erat, commodo interdum eros consectetur vitae. Pellentesque id iaculis libero, quis tempus elit.</p>

	  			</div>

	  			<hr />

	  			<div id="sec1_3">

	  				<h3>1.3 Go commands</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  				<p>Ut faucibus tortor et velit consequat varius. Sed nibh arcu, pellentesque id velit et, lobortis fermentum tellus. Morbi bibendum rhoncus facilisis. Ut velit sem, tincidunt mollis nibh nec, pharetra imperdiet mauris. Vivamus malesuada pharetra purus, id vestibulum tellus sollicitudin vel. Aliquam purus justo, tempus eget mauris quis, tincidunt maximus ipsum. Pellentesque a mollis felis. Cras blandit mi a sem consequat porta. Cras commodo ex in dui vestibulum gravida. Nunc metus ligula, bibendum a eros ut, pretium rhoncus nisi. Morbi a mauris luctus, faucibus odio ac, aliquam libero. Fusce rutrum viverra erat, commodo interdum eros consectetur vitae. Pellentesque id iaculis libero, quis tempus elit.</p>

	  				<p>Pellentesque efficitur nulla id urna aliquet porttitor. Etiam consectetur mollis aliquet. Phasellus et iaculis eros. Aenean non vulputate augue, pharetra aliquet tortor. In tempus sodales lacus nec mattis. Ut sit amet neque nulla. Praesent eget tempus ipsum. Duis finibus ante non aliquet finibus. Proin vel lectus non ante fermentum lobortis. Ut neque metus, eleifend sit amet vulputate eget, pretium non tortor. Curabitur eleifend quis odio in ullamcorper. Quisque quis ante et sem tempor pellentesque et vitae ipsum.</p>

	  			</div>

	  			<hr />

	  			<div id="sec1_4">

	  				<h3>1.4 Editor plugins and IDEs</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  			</div>

	  			<hr />

	  			<div id="sec1_5">

	  				<h3>1.5 Faq Golang</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  				<p>Ut faucibus tortor et velit consequat varius. Sed nibh arcu, pellentesque id velit et, lobortis fermentum tellus. Morbi bibendum rhoncus facilisis. Ut velit sem, tincidunt mollis nibh nec, pharetra imperdiet mauris. Vivamus malesuada pharetra purus, id vestibulum tellus sollicitudin vel. Aliquam purus justo, tempus eget mauris quis, tincidunt maximus ipsum. Pellentesque a mollis felis. Cras blandit mi a sem consequat porta. Cras commodo ex in dui vestibulum gravida. Nunc metus ligula, bibendum a eros ut, pretium rhoncus nisi. Morbi a mauris luctus, faucibus odio ac, aliquam libero. Fusce rutrum viverra erat, commodo interdum eros consectetur vitae. Pellentesque id iaculis libero, quis tempus elit.</p>

	  				<p>Pellentesque efficitur nulla id urna aliquet porttitor. Etiam consectetur mollis aliquet. Phasellus et iaculis eros. Aenean non vulputate augue, pharetra aliquet tortor. In tempus sodales lacus nec mattis. Ut sit amet neque nulla. Praesent eget tempus ipsum. Duis finibus ante non aliquet finibus. Proin vel lectus non ante fermentum lobortis. Ut neque metus, eleifend sit amet vulputate eget, pretium non tortor. Curabitur eleifend quis odio in ullamcorper. Quisque quis ante et sem tempor pellentesque et vitae ipsum.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec1_6">

	  				<h3>1.6 Effective Go</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  				<p>Ut faucibus tortor et velit consequat varius. Sed nibh arcu, pellentesque id velit et, lobortis fermentum tellus. Morbi bibendum rhoncus facilisis. Ut velit sem, tincidunt mollis nibh nec, pharetra imperdiet mauris. Vivamus malesuada pharetra purus, id vestibulum tellus sollicitudin vel. Aliquam purus justo, tempus eget mauris quis, tincidunt maximus ipsum. Pellentesque a mollis felis. Cras blandit mi a sem consequat porta. Cras commodo ex in dui vestibulum gravida. Nunc metus ligula, bibendum a eros ut, pretium rhoncus nisi. Morbi a mauris luctus, faucibus odio ac, aliquam libero. Fusce rutrum viverra erat, commodo interdum eros consectetur vitae. Pellentesque id iaculis libero, quis tempus elit.</p>

	  				<p>Pellentesque efficitur nulla id urna aliquet porttitor. Etiam consectetur mollis aliquet. Phasellus et iaculis eros. Aenean non vulputate augue, pharetra aliquet tortor. In tempus sodales lacus nec mattis. Ut sit amet neque nulla. Praesent eget tempus ipsum. Duis finibus ante non aliquet finibus. Proin vel lectus non ante fermentum lobortis. Ut neque metus, eleifend sit amet vulputate eget, pretium non tortor. Curabitur eleifend quis odio in ullamcorper. Quisque quis ante et sem tempor pellentesque et vitae ipsum.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec1_7">

	  				<h3>1.7 Diagnostics</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  				<p>Ut faucibus tortor et velit consequat varius. Sed nibh arcu, pellentesque id velit et, lobortis fermentum tellus. Morbi bibendum rhoncus facilisis. Ut velit sem, tincidunt mollis nibh nec, pharetra imperdiet mauris. Vivamus malesuada pharetra purus, id vestibulum tellus sollicitudin vel. Aliquam purus justo, tempus eget mauris quis, tincidunt maximus ipsum. Pellentesque a mollis felis. Cras blandit mi a sem consequat porta. Cras commodo ex in dui vestibulum gravida. Nunc metus ligula, bibendum a eros ut, pretium rhoncus nisi. Morbi a mauris luctus, faucibus odio ac, aliquam libero. Fusce rutrum viverra erat, commodo interdum eros consectetur vitae. Pellentesque id iaculis libero, quis tempus elit.</p>

	  				<p>Pellentesque efficitur nulla id urna aliquet porttitor. Etiam consectetur mollis aliquet. Phasellus et iaculis eros. Aenean non vulputate augue, pharetra aliquet tortor. In tempus sodales lacus nec mattis. Ut sit amet neque nulla. Praesent eget tempus ipsum. Duis finibus ante non aliquet finibus. Proin vel lectus non ante fermentum lobortis. Ut neque metus, eleifend sit amet vulputate eget, pretium non tortor. Curabitur eleifend quis odio in ullamcorper. Quisque quis ante et sem tempor pellentesque et vitae ipsum.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec1_8">

	  				<h3>1.8 Packages</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  				<p>Ut faucibus tortor et velit consequat varius. Sed nibh arcu, pellentesque id velit et, lobortis fermentum tellus. Morbi bibendum rhoncus facilisis. Ut velit sem, tincidunt mollis nibh nec, pharetra imperdiet mauris. Vivamus malesuada pharetra purus, id vestibulum tellus sollicitudin vel. Aliquam purus justo, tempus eget mauris quis, tincidunt maximus ipsum. Pellentesque a mollis felis. Cras blandit mi a sem consequat porta. Cras commodo ex in dui vestibulum gravida. Nunc metus ligula, bibendum a eros ut, pretium rhoncus nisi. Morbi a mauris luctus, faucibus odio ac, aliquam libero. Fusce rutrum viverra erat, commodo interdum eros consectetur vitae. Pellentesque id iaculis libero, quis tempus elit.</p>

	  				<p>Pellentesque efficitur nulla id urna aliquet porttitor. Etiam consectetur mollis aliquet. Phasellus et iaculis eros. Aenean non vulputate augue, pharetra aliquet tortor. In tempus sodales lacus nec mattis. Ut sit amet neque nulla. Praesent eget tempus ipsum. Duis finibus ante non aliquet finibus. Proin vel lectus non ante fermentum lobortis. Ut neque metus, eleifend sit amet vulputate eget, pretium non tortor. Curabitur eleifend quis odio in ullamcorper. Quisque quis ante et sem tempor pellentesque et vitae ipsum.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec1_9">

	  				<h3>1.9 Release</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  				<p>Ut faucibus tortor et velit consequat varius. Sed nibh arcu, pellentesque id velit et, lobortis fermentum tellus. Morbi bibendum rhoncus facilisis. Ut velit sem, tincidunt mollis nibh nec, pharetra imperdiet mauris. Vivamus malesuada pharetra purus, id vestibulum tellus sollicitudin vel. Aliquam purus justo, tempus eget mauris quis, tincidunt maximus ipsum. Pellentesque a mollis felis. Cras blandit mi a sem consequat porta. Cras commodo ex in dui vestibulum gravida. Nunc metus ligula, bibendum a eros ut, pretium rhoncus nisi. Morbi a mauris luctus, faucibus odio ac, aliquam libero. Fusce rutrum viverra erat, commodo interdum eros consectetur vitae. Pellentesque id iaculis libero, quis tempus elit.</p>

	  				<p>Pellentesque efficitur nulla id urna aliquet porttitor. Etiam consectetur mollis aliquet. Phasellus et iaculis eros. Aenean non vulputate augue, pharetra aliquet tortor. In tempus sodales lacus nec mattis. Ut sit amet neque nulla. Praesent eget tempus ipsum. Duis finibus ante non aliquet finibus. Proin vel lectus non ante fermentum lobortis. Ut neque metus, eleifend sit amet vulputate eget, pretium non tortor. Curabitur eleifend quis odio in ullamcorper. Quisque quis ante et sem tempor pellentesque et vitae ipsum.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec1_10">

	  				<h3>1.10 Especifica&ccedil;&atilde;o da Linguagem</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  				<p>Ut faucibus tortor et velit consequat varius. Sed nibh arcu, pellentesque id velit et, lobortis fermentum tellus. Morbi bibendum rhoncus facilisis. Ut velit sem, tincidunt mollis nibh nec, pharetra imperdiet mauris. Vivamus malesuada pharetra purus, id vestibulum tellus sollicitudin vel. Aliquam purus justo, tempus eget mauris quis, tincidunt maximus ipsum. Pellentesque a mollis felis. Cras blandit mi a sem consequat porta. Cras commodo ex in dui vestibulum gravida. Nunc metus ligula, bibendum a eros ut, pretium rhoncus nisi. Morbi a mauris luctus, faucibus odio ac, aliquam libero. Fusce rutrum viverra erat, commodo interdum eros consectetur vitae. Pellentesque id iaculis libero, quis tempus elit.</p>

	  				<p>Pellentesque efficitur nulla id urna aliquet porttitor. Etiam consectetur mollis aliquet. Phasellus et iaculis eros. Aenean non vulputate augue, pharetra aliquet tortor. In tempus sodales lacus nec mattis. Ut sit amet neque nulla. Praesent eget tempus ipsum. Duis finibus ante non aliquet finibus. Proin vel lectus non ante fermentum lobortis. Ut neque metus, eleifend sit amet vulputate eget, pretium non tortor. Curabitur eleifend quis odio in ullamcorper. Quisque quis ante et sem tempor pellentesque et vitae ipsum.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec1_11">

	  				<h3>1.11 Play Golang</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  				<p>Ut faucibus tortor et velit consequat varius. Sed nibh arcu, pellentesque id velit et, lobortis fermentum tellus. Morbi bibendum rhoncus facilisis. Ut velit sem, tincidunt mollis nibh nec, pharetra imperdiet mauris. Vivamus malesuada pharetra purus, id vestibulum tellus sollicitudin vel. Aliquam purus justo, tempus eget mauris quis, tincidunt maximus ipsum. Pellentesque a mollis felis. Cras blandit mi a sem consequat porta. Cras commodo ex in dui vestibulum gravida. Nunc metus ligula, bibendum a eros ut, pretium rhoncus nisi. Morbi a mauris luctus, faucibus odio ac, aliquam libero. Fusce rutrum viverra erat, commodo interdum eros consectetur vitae. Pellentesque id iaculis libero, quis tempus elit.</p>

	  				<p>Pellentesque efficitur nulla id urna aliquet porttitor. Etiam consectetur mollis aliquet. Phasellus et iaculis eros. Aenean non vulputate augue, pharetra aliquet tortor. In tempus sodales lacus nec mattis. Ut sit amet neque nulla. Praesent eget tempus ipsum. Duis finibus ante non aliquet finibus. Proin vel lectus non ante fermentum lobortis. Ut neque metus, eleifend sit amet vulputate eget, pretium non tortor. Curabitur eleifend quis odio in ullamcorper. Quisque quis ante et sem tempor pellentesque et vitae ipsum.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2">

	  				<h3>2. Fundamentos da Linguagem</h3>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>

	  				<p>Maecenas dapibus ullamcorper gravida. Vestibulum in fringilla nibh, vel mollis ligula. Curabitur a est a odio pulvinar pulvinar. Etiam et est non nisi finibus tempor. Aliquam sit amet nunc vel eros scelerisque rhoncus. Sed commodo id massa vitae imperdiet. Aenean et semper sapien, vel accumsan lacus. Cras interdum, velit eget faucibus rhoncus, felis nulla vehicula lectus, vel elementum nisl odio condimentum lectus. Suspendisse sit amet libero vel ante porta efficitur in ut libero. Sed et convallis mi. Aliquam vehicula risus et felis congue pulvinar. In tincidunt, magna mollis molestie porta, massa ipsum accumsan nisl, id dapibus arcu augue porttitor ligula. In hac habitasse platea dictumst. Proin maximus, lectus vitae tempus porta, felis nibh porta velit, et semper erat nibh vel tortor. Phasellus facilisis risus metus, sed viverra tortor pharetra eu. Nullam id blandit mauris.</p>

	  				<div class="row">
	  					<div class="col-md-12"><img src="//placehold.it/300x300" class="img-responsive"></div>
	  				</div>

					<hr />

	  				<div class="row">
	  					<div class="col-md-6"><img src="//placehold.it/300x300" class="img-responsive"></div>
	  					<div class="col-md-6"><img src="//placehold.it/300x300" class="img-responsive"></div>
	  				</div>

					<hr />

	  				<div class="row">
	  					<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
	  					<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
	  					<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
	  				</div>

					<hr />

	  				<div class="row">
	  					<div class="col-md-3"><img src="//placehold.it/300x300" class="img-responsive"></div>
	  					<div class="col-md-3"><img src="//placehold.it/300x300" class="img-responsive"></div>
	  					<div class="col-md-3"><img src="//placehold.it/300x300" class="img-responsive"></div>
	  					<div class="col-md-3"><img src="//placehold.it/300x300" class="img-responsive"></div>
	  				</div>

	  			</div>

	  			<hr />

	  			<div id="sec2_1">

	  				<h3>2.1 Install Go Linux, Mac e Windows</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_2">

	  				<h3>2.2 Go Workspace</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_3">

	  				<h3>2.3 Packages</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_4">

	  				<h3>2.4 go run</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_5">

	  				<h3>2.5 go build</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_6">

	  				<h3>2.6 go install</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_7">

	  				<h3>2.7 go test</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_8">

	  				<h3>2.8 go clean</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_9">

	  				<h3>2.9 go tool</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_10">

	  				<h3>2.10 go get</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_11">

	  				<h3>2.11 go run/build -race , flags</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_12">

	  				<h3>2.12 Vari&aacute;veis</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_13">

	  				<h3>2.13 Scope</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_14">

	  				<h3>2.14 Closure</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_15">

	  				<h3>2.15 lang Spec</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec2_16">

	  				<h3>2.16 Mem&oacute;ria</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Sed nec turpis facilisis, placerat mauris vel, sagittis arcu. Proin sed diam eu metus varius aliquet. Nulla vel suscipit tortor. Sed nec sapien orci. Phasellus convallis arcu nec risus vestibulum volutpat. Nunc sit amet nibh eu velit pellentesque aliquam. Sed eu tellus tristique, finibus leo vitae, sagittis mi. Proin sagittis, est malesuada lobortis porta, metus nisi ornare felis, in cursus ex nulla eget felis.</p>

	  				<p>Ut eget imperdiet turpis. Pellentesque sit amet hendrerit ligula. Sed tempor, magna sit amet tempus elementum, turpis ligula pretium nibh, vitae consequat dui dolor eget libero. Vestibulum a lacinia massa. Praesent lacinia dolor non mattis interdum. Vestibulum ultrices dui eget erat placerat, vitae tempor magna posuere. Aliquam tempor, eros et egestas imperdiet, odio velit eleifend urna, nec porttitor dui nulla eu quam. Donec tincidunt arcu non elit vestibulum sodales. Praesent sagittis venenatis felis sit amet sodales. Donec consequat quam et nisl eleifend, sed luctus erat consequat.</p>

	  			</div>

	  			<hr />

	  			<div id="sec3">

	  				<h2>3. Errors</h2>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>

	  			</div>

	  			<hr />

	  			<div id="sec3_1">

	  				<h3>3.1 Introdu&ccedil;&atilde;o</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec3_2">

	  				<h3>3.2 Como funciona o controle de Erros</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec3_3">

	  				<h3>3.3 Log.fatal</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec3_4">

	  				<h3>3.4 Log.panic</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec3_5">

	  				<h3>3.5 panic</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec3_6">

	  				<h3>3.6 Custom Erros</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec3_7">

	  				<h3>3.7 Interface Erros</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec3_8">

	  				<h3>3.8 Errors.New</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec3_9">

	  				<h3>3.9 fmt.Errorf</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec4">

	  				<h2>4. Pointers</h2>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>

	  			</div>

	  			<hr />

	  			<div id="sec4_1">

	  				<h3>4.1 Introdu&ccedil;&atilde;o</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec4_2">

	  				<h3>4.2 Como funciona os ponteiros em Go</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec4_3">

	  				<h3>4.3 Quando usar ponteiros</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec4_4">

	  				<h3>4.4 Metodos sets</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec5">

	  				<h2>5. Structs</h2>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>

	  			</div>

	  			<hr />

	  			<div id="sec5_1">

	  				<h3>5.1 Criando Type Struct Json</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec5_2">

	  				<h3>5.2 Composi&ccedil;&atilde;o</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec5_3">

	  				<h3>5.3 Anonymus Struct</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec6">

	  				<h2>6. Array</h2>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>

	  			</div>

	  			<hr />

	  			<div id="sec6_1">

	  				<h3>6.1 Declarando Array</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec6_2">

	  				<h3>6.2 Inicializando Array</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec6_3">

	  				<h3>6.3 Acessando elementos do Array</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec6_4">

	  				<h3>6.4 Array n&atilde;o podem ser redimensionadas</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec7">

	  				<h2>7. Slices</h2>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>

	  			</div>

	  			<hr />

	  			<div id="sec7_1">

	  				<h3>7.1 Slices - make</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec7_2">

	  				<h3>7.2 Slices - append</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec7_3">

	  				<h3>7.3 Slices - range</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec7_4">

	  				<h3>7.4 Slices of Slices</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec7_5">

	  				<h3>7.5 Slices Nil</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec7_6">

	  				<h3>7.6 Slice len() e cap()</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec8">

	  				<h2>8. Maps</h2>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>

	  			</div>

	  			<hr />

	  			<div id="sec8_1">

	  				<h2>8.1 Maps - make</h2>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec8_2">

	  				<h2>8.2 Maps - int, string, interfaces</h2>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec8_3">

	  				<h2>8.3 Maps - Struct</h2>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec8_4">

	  				<h2>8.4 Maps - Mutante</h2>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec8_5">

	  				<h2>8.5 Maps not sync</h2>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec9">

	  				<h3>9. Interfaces</h3>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>

	  			</div>

	  			<hr />

	  			<div id="sec9_1">

	  				<h2>9.1 Introdu&ccedil;&atilde;o</h2>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec9_2">

	  				<h3>9.2 OOP em Golang</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec9_3">

	  				<h3>9.3 Interface vazias</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec9_4">

	  				<h3>9.4 Metodos e Interfaces</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec9_5">

	  				<h3>9.5 Convers&atilde;o vs Assertion</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec9_6">

	  				<h3>9.6 Metodos sets</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10">

	  				<h2>10. Fun&ccedil;&otilde;es</h2>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>
	  				
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae fringilla mauris. Nullam elementum elit nec consequat consequat. Aenean ultricies, justo et semper sollicitudin, libero lorem vestibulum odio, eget condimentum ante lacus quis mi. Integer et tortor ac leo viverra semper non eu libero. Donec consectetur massa purus, nec sollicitudin neque euismod vitae. Cras interdum maximus sodales. Morbi tortor quam, consequat at nulla et, tempus accumsan ante. Praesent iaculis malesuada felis at aliquam. Cras non feugiat est, ut cursus lectus. Aliquam auctor efficitur nulla. Vivamus vulputate magna a neque dignissim, et pellentesque urna varius. Suspendisse elementum, eros ut tristique lobortis, purus quam mollis felis, sit amet feugiat urna enim eu orci.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_1">

	  				<h3>10.1 Syntax e Introdu&ccedil;&atilde;o</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_2">

	  				<h3>10.2 Parametros Vari&aacute;dicos</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_3">

	  				<h3>10.3 Passagem por Valor</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_4">

	  				<h3>10.4 Passagem por Refer&ecirc;ncia</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_5">

	  				<h3>10.5 Anonymous</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_6">

	  				<h3>10.6 Func como parametros / Callbacks</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_7">

	  				<h3>10.7 Return Func</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_8">

	  				<h3>10.8 Defer</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_9">

	  				<h3>10.9 Callback</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_10">

	  				<h3>10.10 Closure</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_11">

	  				<h3>10.11 Recursion</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec10_12">

	  				<h3>10.12 Fun&ccedil;&otilde;es Ass&iacute;cronas</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec11">

	  				<h2>11. JSON</h2>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec11_1">

	  				<h3>11.1 Json marshal</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec11_2">

	  				<h3>11.2 Json Unmarshal</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec11_3">

	  				<h3>11.3 json Encode</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec11_4">

	  				<h3>11.4 Json Decode</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec12">

	  				<h2>12. Testes</h2>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec12_1">

	  				<h3>12.1 Introdu&ccedil;&atilde;o</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec12_2">

	  				<h3>12.2 Exemplos Test</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec12_3">

	  				<h3>12.3 go test</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec12_4">

	  				<h3>12.4 Benchmark</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec12_5">

	  				<h3>12.5 Golint</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec13">

	  				<h2>13. O que s&atilde;o os Patterns Fan Out / Fan In?</h2>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec13_1">

	  				<h3>13.1 O que &eacute; Fan Out</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec13_2">

	  				<h3>13.2 O que &eacute; Fan In</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec13_3">

	  				<h3>13.3 Exerc&iacute;cio Fan Out</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div>

	  			<hr />

	  			<div id="sec13_4">

	  				<h3>13.4 Exerc&iacute;cio Fan In</h3>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus convallis velit, ac dictum massa tempor ut. Aenean auctor ornare elit, finibus imperdiet tortor congue non. Mauris lacus ex, tincidunt vitae orci ut, viverra tincidunt libero. Praesent non nulla pulvinar lacus dignissim pellentesque et ut nibh. Suspendisse congue volutpat est non facilisis. Morbi cursus auctor turpis, ut dictum nibh aliquam ac. Curabitur tincidunt purus at tellus consequat, at viverra mi dignissim. Cras vel neque vitae elit mollis fermentum. Curabitur iaculis nunc vel massa pharetra facilisis. Integer tincidunt hendrerit est vel rutrum. Sed elit nibh, volutpat non aliquam in, venenatis eu velit. Mauris et turpis eu ex placerat condimentum. Donec vulputate turpis ac augue sollicitudin ultricies.</p>

	  			</div> */ ?>

	  			<hr />
	            
	  		</div> 
		</div>
	</div>

    <!-- jQuery -->
    <script src="<?=$PATH_HTTP?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=$PATH_HTTP?>/js/bootstrap.min.js"></script>

    <!-- Custom js -->
    <script src="<?=$PATH_HTTP?>/js/custom.js"></script>

    <!-- Prism Syntax Highlighting -->
    <script src="<?=$PATH_HTTP?>/plugins/prism/prism.js"></script>

</body>
</html>

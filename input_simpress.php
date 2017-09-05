<?php
/**
 * Created by PhpStorm.
 * User: 79240SP
 * Date: 04/09/2017
 * Time: 18:21
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Fornecedores - CRUD Simpress</title>

    <link href="src/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <script src="src/js/jquery-3.2.1.min.js"></script>
    <script src="src/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Controle Fornecedores</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Teste</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="main" class="container-fluid">
        <h3 class="page-header">Teste</h3>
    </div>

    <form>
        <label>Série: <input type="text" name="serie"><br></label>
        <label>IP: <input type="text" name="ip"><br>
        <label>Item Contrato: <input type="text" name="item_contrato"><br>
        <label>Modelo: <input type="text" name="modelo"><br>
        <label>Instalação: <input type="text" name="instalacao"><br>
        Desinstalação: <input type="text" name="desinstalacao"><br>
        Valor: <input type="text" name="valor"><br>
        Código CR: <input type="text" name="cr"><br>
        Descrição CR: <input type="text" name="descricao_cr"><br>
        Superintendência: <input type="text" name="superint"><br>
        Gerência: <input type="text" name="gerencia"><br>
        Endereço: <input type="text" name="endereco"><br>
        Cidade: <input type="text" name="cidade"><br>
        UF: <input type="text" name="uf"><br>
        CEP: <input type="text" name="cep"><br>
    </form>

</body>

</html>

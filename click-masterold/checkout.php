<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link href="css/material-fullpalette.min.css" rel="stylesheet">
    <title>Document</title>

    <style>
        .navbar{
            margin: 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-defaul navbar-static-top">

    <div class="navbar-header">
        <a href="index.php" class="navbar-brand">Mirror Fashion</a>
        <button class="navbar-toggle nav" type="button" data-target=".navbar-collapse" data-toggle="collapse">
            <span class="glyphicon glyphicon-briefcase"></span>
            Menu
        </button>
    </div>

    <ul class="nav navbar-nav navbar-collapse collapse">
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="#">Ajuda</a></li>
        <li><a href="#">Perguntas frequentes</a></li>
        <li><a href="#">Entre em contato</a></li>
    </ul>
</nav>

<div class="jumbotron">
    <div class="container">
        <h1>Otima escolha</h1>
        <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
    </div> <!--Fim container jumboton-->

    </div>  <!--Fim jumbotrom-->

    <div class="container">

        <div class="panel panel-default col-lg-3 col-md-3 col-sm-3">

            <div class="panel-heading">
                <h2 class="panel-title">Sua compra</h2>
            </div> <!--Fim do panel-heading-->

        <div class="panel-body">

            <img src="img/produtos/foto<?=$_POST["id"]?>-<?=$_POST["cor"]?>.png" class="img-thumbnail img-responsive" alt="responsive img"/>

            <?php
                $tamanho = $_POST["tamanho"];
                $cor = $_POST["cor"];
                $preco = $_POST["preco"];
                $produto = $_POST["nome"];
            ?>

            <dl>
                <dt>Produto:</dt>
                <dd><?=$produto?></dd>

                <dt>Tamanho:</dt>
                <dd><?=$tamanho?></dd>

                <dt>Cor:</dt>
                <dd><?=$cor?></dd>

                <dt>Preço:</dt>
                <dd><?=$preco?></dd>
            </dl>

            </div>  <!--Fim do panel-body-->

        </div>  <!--Fim do .panel-->

        <form action="efetivar.php" method="post" class="col-lg-9 col-md-9">

            <fieldset class="col-lg-7 col-md-7 col-sm-7">  <!--Campos para dados pessoais-->
                <legend>Dados pessoais</legend>

                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" autofocus required/>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com"required/>
                </div>

                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input class="form-control" id="cpf" type="text" name="cpf" placeholder="012.345.678.90" maxlength="11"/>
                </div>

                <div class="checkbox-material">
                    <label>
                        <input type="checkbox" checked>
                        Quero receber blá da Mirror Fashion
                    </label>
                </div>

            </fieldset>

            <fieldset class="col-lg-5 col-md-5 col-sm-5">  <!--Campos para dados do cartao-->
                <legend>Cartão de crédito</legend>

                <div class="form-group">  <!--Numero do cartão-->
                    <label for="numero-cartao">Número - CVV</label>
                    <input class="form-control" id="numero-cartao" type="text" name="numero-cartao" required/>
                </div>  <!--Numero do cartão-->


                <div class="form-group"> <!--Bandeira do cartão-->
                    <label for="">Bandeira do Cartão</label>
                        <select class="form-control" name="" id="bandeira-cartao" required>
                            <option value="master">MASTERCARD</option>
                            <option value="visa">VISA</option>
                            <option value="elo">ELO</option>
                            <option value="amex">AMERICAN EXPRESS</option>
                        </select>
                </div> <!--Bandeira do cartão-->


                <div class="form-group"><!--Validade do cartão-->
                    <label for="validade-cartao">Validade do cartão</label>
                    <input type="month" class="form-control" id="validade-cartao" name="validade-cartao" required/>
                </div>  <!--Validade do cartão-->

                <button type="submit" class="btn btn-primary btn-lg pull-right">
                    <span class="glyphicon glyphicon-thumbs-up"></span>
                    Confimar pedido
                </button>

            </fieldset>
        </form>
    </div><!--Fim .container do .panel-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>

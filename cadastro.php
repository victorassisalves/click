<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/master.css">
<body>
    <div class="container">
    <section class="formulario">

<!------------------------CONDOMÍNIOS----------------------------->

        <form class="dados condominio">
            <div class="form">
            <div class="campos">
                <h2>Conta</h2>
                <input type="email" placeholder="E-mail" autofocus required>
                <input type="password" placeholder="Senha" required>
            </div>
            <div class="campos">
                <h2>Perfil</h2>
                <input type="text" placeholder="Nome completo" required>
                <input type="text" placeholder="RG" required>
                <input type="number" placeholder="CPF" maxlength="11" required/>
                <input type="tel" placeholder="Telefone" required>
            </div>
            <div class="campos">
                <h2>Condomínio</h2>
                <input type="text" placeholder="Nome do condomínio" required>
                <input type="number" placeholder="CEP" maxlength="8" required>
                <input type="text" placeholder="Endereço" required/>
                <input type="number" placeholder="Número de residências" required>
                <button type="submit">CRIAR CONTA</button>
            </div>
                <div class="texto">
        Ao clicar em "Criar conta", você concorda com os <a class="termos-politica" href="#">Termos e Condições da Click</a> e <a class="termos-politica" href="#">política de Privacidade</a></div>
            </div>
        </form>

<!------------------------ Cooperativas ----------------------------->

        <form class="dados cooperativa">
            <div class="form">
                <div class="campos">
                    <h2>Conta</h2>
                    <input type="email" placeholder="E-mail" autofocus required>
                    <input type="password" placeholder="Senha" required>
                </div>
                <div class="campos">
                    <h2>Perfil</h2>
                    <input type="text" placeholder="Nome da Cooperativa" required>
<!--                    <input type="text" placeholder="CNPJ" required>-->
                    <input type="tel" placeholder="Telefone" required>
                </div>
                <div class="campos">
                    <h2>Cooperativa</h2>
                    <input type="number" placeholder="CEP" maxlength="8" required>
                    <input type="text" placeholder="Endereço" required/>
                    <input type="text" placeholder="Estado" required/>
                    <input type="text" placeholder="Cidade" required>
                    <button type="submit">CRIAR CONTA</button>
                </div>
                <div class="texto">
                    Ao clicar em "Criar conta", você concorda com os <a class="termos-politica" href="#">Termos e Condições da Click</a> e <a class="termos-politica" href="#">política de Privacidade</a></div>
            </div>
        </form>

    </section>
    </div>
</body>
</html>
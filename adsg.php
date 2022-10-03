<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário HTML</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form action="form.php" class="formulario" method="post"> 
        <p> Envie uma mensagem preenchendo o formulário abaixo</p>
        
        <div class="field">
            <label for="nome">Seu Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required>
        </div>
        
        <div class="field">
            <label for="telefone">Seu Telefone:</label>
            <input type="text" id="telefone" name="telefone" placeholder="Digite seu Telefone">
        </div>

        <div class="field">
            <label for="email">Seu E-Mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" required>
        </div>        
        <div class="field radiobox">
            <span>Gênero</span>
            <input type="radio" name="sexo" id="masc" value="m" checked><label for="sim">M</label>
            <input type="radio" name="sexo" id="fem" value="f"><label for="nao">F</label>
            <input type="radio" name="sexo" id="nao" value="nao informar"><label for="nao">Não informar</label>
        </div>
        <div class="field">
            <span>Data de Nscimento: </span>
            <input type="date" name="nasc" id="nasc">
        </div>        
        <input type="submit" name="acao" value="Enviar">
    </form>

</body>
</html>
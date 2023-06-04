<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="conteudo-login">
        <section class="conteudo-formulario">
            <form id="form-log" method="POST" action="processamento/processamento.php">
                <label id="input-log">Entre</label>

                <input id="input-log" type="text" placeholder="cpf" name="inputcpfLog">
                
                <input id="input-log" type="password" placeholder="Senha" name="inputSenhaLog">
                
                <input id="botao-log" type="submit" value="ENTRE">
            </form>
            <p>Novo na ulx? <a href="cadastroUsuario.php">Cadastrar</a></p>
        </section>
    </section>
    
</body>
</html>
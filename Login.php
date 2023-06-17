<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecPegue / TecPague - Login</title>
    <?php include "incHead.php" ?>
    
    </head>
    <body>
    <?php include "incMenuSup.php" ?>
        <section class="conteudo-form">
            <form id="form-log" method="POST" action="processamento/processamento.php">
                <h1>LOGIN</h1>

                <input id="input-log" type="text" placeholder="cpf" name="inputcpfLog">
                
                <input id="input-log" type="password" placeholder="Senha" name="inputSenhaLog">
                
                <input id="botao-log" type="submit" value="ENTRE" class="butom">
                <br>
                <p>Novo na ulx? <a href="cadastroUsuario.php">Cadastrar</a></p>
            </form>
            
        </section>
        <?php include "incFooter.php" ?>
    
</body>
</html>
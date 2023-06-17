<?php require "processamento/funcoesBD.php";
session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecPegue / TecPague</title>
    <?php include "incHead.php" ?>
</head>
<body>
<?php include "incMenuSup.php" ?>


<section class="conteudo-form">
    <h1>
        <?php
        if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                }
                session_destroy();
            ?>
    </h1>
            <form  method="POST" action="processamento/enviaFormEmail.php">
            <h1>CONTATO</h1>
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome">


                <label for="fone" class="form-label">Telefone:</label>
                <input type="tel" id="fone">

                <label for="email" class="form-label">E-mail:</label>
                <input type="text" id="email">
                
                <label for="assunto" class="form-label">Assunto:</label>
                <input type="text" id="assunto">

                <label for="msg" class="form-label">Mensagem:</label>
                <textarea id="msg" name="msg" rows="4" ></textarea>

                <br>
                <input type="submit" value="Enviar" class="butom">

            </form>
        </section>

    

    <?php include "incFooter.php" ?>   
</body>
</html>
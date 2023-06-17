<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5; URL='index.php'"/>
    <title>TecPegue / TecPague</title>
    
    <?php include "incHead.php" ?>
    
    </head>
    <body>
    <?php include "incMenuSup.php" ?>
        <section class="aviso2">
            <h1>Você foi desconectado com sucesso!</h1>
            <p>
                <img src="img/loading.gif" width="100px">
            </p>
            
        </section>
        <?php include "incFooter.php" ?>
    
</body>
</html>
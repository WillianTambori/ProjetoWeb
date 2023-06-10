<?php
    ini_set("display_errors","On");
    function conectarBD(){
        $conexao = mysqli_connect("localhost","root","","ulx");
        return($conexao);
    }
    $conexao = conectarBD();
    $cod = $_GET['cod'];
    $consulta = "select * FROM produto  where cod = $cod";
    //$consulta = "select * FROM produto inner join usuario on id = id where cod = $cod";
    $resultBusca = mysqli_query($conexao, $consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECPeg / TECPag</title>
    <?php include "incHead.php" ?>
</head>
<body>
<?php include "incMenuSup.php" ?>

<?php
    while($rows_produto = mysqli_fetch_assoc($resultBusca)){
?>
<section> <h1>Produto: <?php echo $rows_produto['nome'] ?></h1></section>
    <section>
    <article class="contentHome">
        <div class="container">
            <div class="prod1">
                <figure> <img src="img/usersContent/<?php echo $rows_produto['foto'] ?>" width="100%"> </figure>
            </div>
            <div class="prod">
                    <h2>Marca: <?php echo $rows_produto['marca'] ?></h2>
                    <h3>Modelo: <?php echo $rows_produto['modelo'] ?></h3>
                    <h3>R$: <?php echo $rows_produto['valor'] ?></h3>
                    <h3>Usuário: </h3>
            </div>
        </div>

            <?php } ?>
            <!-- <div class="prodMini"></div> -->

        </article>
    </section>

    

    <?php include "incFooter.php" ?>   
</body>
</html>
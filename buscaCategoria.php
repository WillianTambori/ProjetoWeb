<?php
    ini_set("display_errors","On");
    function conectarBD(){
        $conexao = mysqli_connect("localhost","root","","ulx");
        return($conexao);
    }
    $conexao = conectarBD();
    $pesquisar = $_GET['cat'];
    $consulta = "select * FROM produto where nome LIKE '%$pesquisar%' LIMIT 20";
    $resultBusca = mysqli_query($conexao, $consulta);
?>

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

<section> <h1>Resultado busca produto: <?php echo $pesquisar; ?></h1></section>
    <section>
        <article class="contentHome">
            <?php
                while($rows_produto = mysqli_fetch_assoc($resultBusca)){
            ?>
            <div class="prodMini">
                <a href="produtoDetalhe.php?cod=<?php echo $rows_produto['cod'] ?>">    
                    <figure> <img src="<?php include "incCaminho.php" ?><?php echo $rows_produto['foto'] ?>" width="100%"> </figure>
                </a>
                <legend>
                    <h2><?php echo $rows_produto['nome'] ?></h2>
                    <p>Marca: <?php echo $rows_produto['marca'] ?><br>Modelo: <?php echo $rows_produto['modelo'] ?>
                    <br>R$: <?php echo $rows_produto['valor'] ?></p>
                </legend>
            </div>
            <?php } ?>
            <!-- <div class="prodMini"></div> -->

        </article>
    </section>

    

    <?php include "incFooter.php" ?>   
</body>
</html>
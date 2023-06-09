<?php
    ini_set("display_errors","On");
    function conectarBD(){
        $conexao = mysqli_connect("localhost","root","","ulx");
        return($conexao);
    }
    $conexao = conectarBD();
    $pesquisar = $_POST['pesquisar'];
    $consulta = "select * FROM produto where nome LIKE '%$pesquisar%' LIMIT 20";
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

<section> <h1>Resultado busca produto: <?php echo $pesquisar; ?></h1></section>
    <section>
        <article class="contentHome">
            <?php
                while($rows_produto = mysqli_fetch_assoc($resultBusca)){
                    echo "Busca pelo produto: " .$rows_produto['nome'];
            ?>
            <div class="prodMini">
                <figure> <img src="<?php $foto ?>" width="100%"> </figure>
                <legend>
                    <h2><?php $nome ?></h2>
                    <p>Marca: <?php $marca ?> / Modelo: <?php $modelo ?>
                    <br>R$: <?php $valor ?></p>
                </legend>
            </div>
            <?php } ?>
            <!-- <div class="prodMini"></div> -->

        </article>
    </section>

    

    <?php include "incFooter.php" ?>   
</body>
</html>
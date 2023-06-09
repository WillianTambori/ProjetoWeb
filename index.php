<?php require "processamento/funcoesBD.php" ?>
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

<section class="bannerHome"></section>
    <section>
        <h1>Produtos em destaque</h1>
        <article class="contentHome">
            <?php $listaProduto = retornarProduto();
            while($produto = mysqli_fetch_assoc($listaProduto))
            { ?>
            $id, $produto, $marca, $modelo, $dataFabr, $descricao, $valor, $foto
            <div class="prodMini">
                <figure> <img src="<?php $foto ?>" width="100%"> </figure>
                <legend>
                    <h2><?php $produto ?></h2>
                    <p>Marca: <?php $modelo ?> / Modelo: <?php $modelo ?>
                    <br>R$: <?php $valor ?></p>
                </legend>
            </div>
            <?php } ?>
            <!-- <div class="prodMini"></div>
            <div class="prodMini"></div>
            <div class="prodMini"></div>
            <div class="prodMini"></div> -->

        </article>
    </section>

    

    <?php include "incFooter.php" ?>   
</body>
</html>
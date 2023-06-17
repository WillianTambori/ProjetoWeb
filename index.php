<?php require "processamento/funcoesBD.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wid th=device-width, initial-scale=1.0">
    <title>TecPegue / TecPague</title>
    <?php include "incHead.php" ?>
</head>
<body>
<?php include "incBanner.php" ?>
<?php include "incMenuSup.php" ?>


    <section>
        <h1>Produtos em destaque</h1>
        <article class="contentHome">
            <?php
            $control = 0;
                $listaProduto = retornarProduto();
                while($produto = mysqli_fetch_assoc($listaProduto))
                { if($control < 1){?>
                    <div class="prodMini">
                        <a href="produtoDetalhe.php?cod=<?php echo $produto['cod'] ?>"><figure> <img src="<?php include "incCaminho.php" ?><?php echo $produto["foto"]; ?>" width="100%"> </figure></a>
                        <legend>
                            <h2><?php echo $produto['nome'] ?></h2>
                            <p>Marca: <?php echo $produto["modelo"] ?> / Modelo: <?php echo $produto['descricao'] ?>
                            <br>R$: <?php echo  $produto['valor'] ?></p>
                        </legend>
                    </div>
                <?php $control += 1;} }
                ?>
             <!-- <div class="prodMini"></div>
            <div class="prodMini"></div>
            <div class="prodMini"></div>
            <div class="prodMini"></div>  -->  

        </article>
    </section>

    

    <?php include "incFooter.php" ?>   



    
</body>
</html>
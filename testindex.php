<?php require "processamento/funcoesBD.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wid th=device-width, initial-scale=1.0">
    <title>TECPeg / TECPag</title>
    <?php include "incHead.php" ?>
</head>
<body>
<div class="bannerHome">

<div class="slideshow" style="height: 0; overflow: hidden">
  <div class="slide" ><img src="img/carousel/carousel-1.jpg"></div>
  <div class="slide" ><img src="img/carousel/carousel-2.jpg"></div>
  <div class="slide" ><img src="img/carousel/carousel-3.jpg"></div>
  <div class="slide"><img src="img/carousel/carousel-4.jpg" width="900px"></div>
</div>

</div>
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
            <div class="prodMini"></div> -->

        </article>
    </section>

    

    <?php include "incFooter.php" ?>   



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="extraContent/lib/imagesloaded.js"></script>
	<script src="extraContent/lib/smartresize.js"></script>
	<script src="extraContent/src/jquery.skidder.js"></script>
	<script src="js/meusSlides.js"></script>
</body>
</html>
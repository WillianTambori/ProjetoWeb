<?php 
 require "processamento/funcoesBD.php";
 ini_set("display_errors","off");
session_start();

if(isset($_SESSION['login'])){
}else{
    header("Location: acessoNegado.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/userCSS.css">
    <?php include "incHead.php" ?>

</head>
<body>
    <?php include "incMenuSup2.php" ?>
    <div style="clear:both"></div>
        <!-- Nova diagramação -->
        <article class="contentPag">
        <div class="container">
            <div class="prod1 entreLinhas">
                <!-- <h1>Cadastrado</h1>-->
                <?php
                
                $encontrado = login();
                echo ($encontrado > 0) ?"<h1>Bem vindo!!</h1>":"<h1>Não Encontrado!</h1>";
                $listaCliente = retornarClientes();
                while($cliente = mysqli_fetch_assoc($listaCliente)){
                    if($encontrado == $cliente['id']){?>

                        <section class="conteudo-bloco">
                        <img src="<?php include 'incCaminho.php' ?><?php echo $cliente['foto']?>" height='100px'" >
                        <h2><?php echo $cliente["nome"] ?> <?php echo $cliente["sobrenome"] ?></p>
                        <p>CPF: <?php echo $cliente["cpf"] ?> Cadstro nº: <?php echo $cliente["id"] ?> <p>
                        <p>E-mail: <?php echo $cliente["email"] ?><p>
                        <br>
                        <p class="aviso"><a href="logout.php">
                            <img src="img/logout.png" width="32px" title="Clique para sair">
                        </a></p>
                        </section>
                        

                    <?php } ?>
                <?php } ?>
                
            </div>
            <div class="prod">
                    <section class="formulario conteudo-form">
                        <form method="POST" action="processamento/processamento.php" enctype="multipart/form-data" >
                            <h1>Cadastrar Produto</h1>

                            <input type="hidden" value="<?php echo login(); ?>" name="inputId"> 
                            
                            <label for="produto">Nome do Produto:</label>
							<input type="text" placeholder="Nome" id="produto" name="inputNome">
                            
							<label for="marca">Marca:</label>
                            <input type="text" id="marca" placeholder="Marca" name="inputMarca">
                            
							<label for="modelo">Modelo:</label>
                            <input type="text" id="modelo" placeholder="Modelo"  name="inputModelo">
                            
							<label for="dtF">Data de Fabricação:</label>
                            <input type="date" id="dtF" placeholder="Data de Fabricação" name="inputDataFabr">
                            
							<label for="desc">Descrição:</label>
                            <input type="text" id="desc" placeholder="Descrição" name="inputDescricao">
							
							<label for="valor">Valor:</label>
                            <input type="text" id="valor" placeholder="Valor" name="inputValor"><br>


                            <label>Foto</label>
                            <input type="file" name="imagem" ><br>

                            <input name="enviar" type="submit" value="cadastrar">
                        </form>
                    </section>
            </div>
        </div>


        </article>


        <!-- final -->








         <section class="produto-lista">
                <hr>
                <?php
                    
                    $listaProduto = retornarProduto();
                    $encontrado = false;
                while($produto = mysqli_fetch_assoc($listaProduto)){
                    if(login() == $produto["id"]){?>
                        <div class="divFormat">
                        <img src="<?php include 'incCaminho.php' ?><?php echo $produto['foto'] ?>" height=100px" >
                        
                        <div class="prodLista">
                        <p><span class="destaque">Produto:</span><?php echo $produto["nome"] ?> Modelo: <?php echo $produto["modelo"] ?></p>
                            <p><span class="destaque">Fabricante:</span> <?php echo $produto["marca"] ?></p>
                            <p><span class="destaque">Descrição:</span> <?php echo $produto["descricao"] ?></p>
                            <p><span class="destaque">Valor:</span> <?php echo $produto["valor"] ?></p>
                            <br>



                    </div>
                        
                       
                        <form class='editar' method='POST' action='processamento/processamento.php' enctype='multipart/form-data'>
                        <input type='hidden' value="<?php echo $produto['cod']?>" name="produto"> 
                          <input name='editar'  type='submit' value='editar' class="botEditar">
                                <input name='excluir' type='submit' value='excluir' class="botExcluir">
                         </form>
                        </div>
                        <?php
                        if($_SESSION['codigo'] == $produto['cod']){?>
                            
                            <section class='produto-produto' >
                                
                                <section class='formulario '>
                                    <form method='POST' action='processamento/processamento.php' enctype='multipart/form-data' class="formEditaProdutos">
                                    <h2>Atualizar Produto</h2>
                                    
                                    <input id="produto" type="hidden" value="<?php echo $produto['cod'] ?>" name="produto">
                                    
                                    <label for="Nome">Produto: </label><br>
                                    <input id="Nome" type="text" placeholder=" <?php echo $produto['nome'] ?>" name='Nome'><br>
                                    
                                    <label for="Marca">Marca: </label><br>
                                    <input id="Marca" type="text" placeholder=" <?php echo $produto['marca'] ?>" name="Marca"><br>
                                    
                                    <label for="Modelo">Modelo: </label><br>
                                    <input type="text" placeholder="<?php echo $produto['modelo'] ?>" name="Modelo"><br>
                                    
                                    <label for="Data">Data de Fabricação: </label><br>
                                    <input id="Data" type="date" placeholder="<?php echo $produto['dataFabr'] ?>" name="DataFabr"><br>

                                    <label for="desc">Descrição: </label><br>
                                    <input id="desc" type="text" placeholder="<?php echo $produto['descricao'] ?>" name="Descrição"><br>
                                    
                                    <label for="valor">Valor: </label><br>
                                    <input id="valor" type="text" placeholder="<?php echo $produto['valor'] ?>" name="Valor"><br>
                                    
                                    
                                    <label>Foto</label><br>
                                    <input type='file' name='imagem' ><br>                         
                                    <input name='editar' type='submit' value='editar'>
                                    </form>
                                </section>
                            
                                    <?php } ?>
                                <?php } ?>
                
                            <?php } ?>
                

                         </div>
                        </section>
                    </section>


            <?php include "incFooter.php" ?>
</body>
</html>

<?php 
 require "processamento/funcoesBD.php";
 ini_set("display_errors","On");
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 80%;
            margin: 10px auto;
        }
        .produto-usuario{
            width: 20%;
            height:50vb;


        }
        .produto-produto{
            width: 70%;
            height:50vb;

        }
        .produto-lista{
            
            width:80%;  
            
        }
        .produto-lista .produto {
            background: gray;
        }
        form{
            color:white;
            width: 600px;
            margin: auto;
            display: flex;
            flex-direction: column;
                        
        }
        form label{
            color: black;
            font-size: 20px;
            font-weight: bold;
        }
        form input{
            color: black;
            background-color:white;
            border-color: black;
            font-size: 20px;
            height: 30px;
        }
    </style>
</head>
<body>
    <section class="produto-usuario" >
    <h1>Cadastrado</h1>

        <?php
        session_start();
        $encontrado = login();
        echo ($encontrado > 0) ?"Bem vindo!!":"Não Encontrado!";
        $listaCliente = retornarClientes();
        while($cliente = mysqli_fetch_assoc($listaCliente)){
            if($encontrado == $cliente['id']){

                echo "<section class=\"conteudo-bloco\">";
                echo "<h2>" . $cliente["nome"]."". $cliente["sobrenome"] . "</p>";
                echo "<p>CPF:" . $cliente["cpf"]." Cadstro nº: ". $cliente["id"]." <p>";
                echo "<p>E-mail:" . $cliente["email"]."<p>";
                echo "</section>";
                

            }
        }
        ?>
        </section>
        <section class="produto-produto" >
            <h1>Produto</h1>
            <section class="formulario">
                <form method="POST" action="processamento/processamento.php" enctype="multipart/form-data" >
                    <label>Cadastrar Produto</label>

                    <input type="hidden" value="<?php echo login(); ?>" name="inputId"> 
                    
                    <input type="text" 
                    placeholder="Nome" name="inputNome">
                    
                    <input type="text" 
                    placeholder="Marca" name="inputMarca">
                    
                    <input type="text" placeholder="Modelo" 
                    name="inputModelo">
                    
                    <input type="date" placeholder="Data de Fabricação" name="inputDataFabr">
                    
                    <input type="text" placeholder="Descrição" name="inputDescricao">

                    <input type="text" placeholder="Valor" name="inputValor"><br>


                     <label>Foto</label>
                     <input type="file" name="imagem" ><br>

                    
                    
                

                    <input name="enviar" type="submit" value="cadastrar">
                </form>
            </section>
            <section class="produto-lista">
                
                <?php

                    $listaProduto = retornarProduto();
                    $encontrado = false;
                while($produto = mysqli_fetch_assoc($listaProduto)){
                    if(login() == $produto["id"]){

                        echo "<img src='processamento/".$produto["foto"]."' height='100px' >";
                        echo "<section class=\produto\">";
                        echo "<h2> produto nº". $produto["cod"]."</h2>"; 
                        echo "<h2>" . $produto["nome"]." ". $produto["marca"] . "</h2>";
                        echo "</p>modelo: " . $produto["modelo"]. "Data de faricação:" . $produto["dataFabr"]."descrição" . $produto["descricao"]."valor:" . $produto["valor"]."<p>";
                        echo "</section>";
                        $encontrado = true;
                        $id = $produto["id"];
                    }
    
                }
                ?>

            </section>
            </section>

</body>
</html>
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
        div{
            display: flex;
            justify-content:space-between;
            box-shadow: 0px 6px 11px 0px #C3C3C3;

        }
        .conteudo-bloco{
            box-shadow: 0px 6px 11px 0px #C3C3C3;
        }
        .editar{
            width: 15%;
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
                echo "<img src='img/usersContent/".$cliente["foto"]."' height='100px' >";
                echo "<h2>" . $cliente["nome"]." ". $cliente["sobrenome"] . "</p>";
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
                        echo"<div>";
                        echo "<img src='img/usersContent/".$produto["foto"]."' height='100px' >";
                        echo"<table>";
                        echo"<tr>";
                        echo"<th>Produto:</th>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<td>" .$produto["nome"]." ".$produto["modelo"]. "</td>";
                        echo"</tr>";
                        echo"</table>";
                        echo"<table>";
                        echo"<tr>";
                        echo "<th>Fabricante:</th>";
                        echo" <td> ". $produto["marca"] ."<br></td>";
                        echo" </tr>";
                        
                        echo"    <tr>";
                        echo"        <th>descrição:</th>";
                        echo"        <td>" . $produto["descricao"]. "</td>";
                        echo"    </tr>";
                        echo"    <tr>";
                        echo"        <th>valor</th>";
                        echo"        <td>" . $produto["valor"]."</td>";
                        echo"    </tr>";
                        echo"</table>";
                        echo "<form class='editar' method='POST' action='processamento/processamento.php' enctype='multipart/form-data'>";
                        echo "<input type='hidden' value='" . $produto["cod"]."' name='produto'> ";
                        echo "    <input name='editar'  type='submit' value='editar'>
                                <input name='excluir' type='submit' value='excluir'>";
                        echo" </form>";
                        echo"</div>";
                        
                        if($_SESSION['codigo'] == $produto["cod"]){
                            echo "
                            <section class='produto-produto' >
                            <h1>Produto</h1>
                            <section class='formulario'>
                            <form method='POST' action='processamento/processamento.php' enctype='multipart/form-data'>
                            <label>Cadastrar Produto</label>
                            
                            <input type='hidden' value='" . $produto["cod"]."' name='produto'> 
                            
                            <input type='text' 
                            placeholder='" . $produto["nome"]."' name='Nome'>
                            
                            <input type='text' 
                            placeholder='" . $produto["marca"]."' name='Marca'>
                            
                            <input type='text' placeholder='" . $produto["modelo"]."' 
                            name='Modelo'>
                            
                            <input type='date' placeholder='" . $produto["dataFabr"]."' name='DataFabr'>
                            
                            <input type='text' placeholder='" . $produto["descricao"]."' name='Descricao'>
                            
                            <input type='text' placeholder='" . $produto["valor"]."' name='Valor'><br>
                            
                            
                            <label>Foto</label>
                            <input type='file' name='imagem' ><br>                         
                            <input name='editar' type='submit' value='editar'>
                            </form>
                            </section>
                            ";
                        }
                    }
    
                }
                ?>

            </section>
            </section>

</body>
</html>
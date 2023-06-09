<?php
ini_set("display_errors","On");
session_start();
require "funcoesBD.php";

//Cadastro de usuario
if(!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
   !empty($_POST['inputCPF']) && !empty($_POST['inputDataNasc']) && 
   !empty($_POST['inputTelefone']) && !empty($_POST['inputEndereco']) && !empty($_POST['inputEndNumero']) && !empty($_POST['inputCep']) && !empty($_POST['inputBairro']) && !empty($_POST['inputCidade']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputSenha'] && !empty($_FILES['perfil']))){


      $nome = $_POST['inputNome'];
      $sobrenome = $_POST['inputSobrenome'];
      $cpf = $_POST['inputCPF'];
      $dataNasc = $_POST['inputDataNasc'];
      $telefone = $_POST['inputTelefone'];
      $endereco = $_POST['inputEndereco'];
      $numero = $_POST['inputEndNumero'];
      $cep = $_POST['inputCep'];
      $bairro = $_POST['inputBairro'];
      $cidade = $_POST['inputCidade'];
      $email = $_POST['inputEmail'];
      $senha = $_POST['inputSenha'];
      $foto = "img/Perfil_".$cpf."_".$_FILES['perfil']['name'];
      move_uploaded_file($_FILES['perfil']['tmp_name'],$foto);

      echo "nome";

      inserirCliente($nome, $sobrenome, $dataNasc, $cpf, $telefone, $endereco, $numero, $cep, $bairro, $cidade, $email, $senha,$foto);
      header('Location:../Login.php');
      die();
   }
   if(!empty($_POST['inputNome']) && !empty($_POST['inputMarca']) && 
   !empty($_POST['inputModelo']) && !empty($_POST['inputDataFabr']) && 
   !empty($_POST['inputDescricao']) && !empty($_POST['inputValor']) && !empty($_FILES['imagem'])){

      $id = $_POST['inputId'] ;
      $produto = $_POST['inputNome'];
      $marca = $_POST['inputMarca'];
      $modelo = $_POST['inputModelo'];
      $dataFabr = $_POST['inputDataFabr'];
      $descricao = $_POST['inputDescricao'];
      $valor = $_POST['inputValor']; 
      $foto = "img/Usu".$id."_".$_FILES['imagem']['name'];
      move_uploaded_file($_FILES['imagem']['tmp_name'],$foto);
      if($id > 0){   
         inserirProduto($id, $produto, $marca, $modelo, $dataFabr, $descricao, $valor, $foto);
      }
      header('Location:../Usuario.php');
   }
   if(!empty($_POST['inputcpfLog']) && !empty($_POST['inputSenhaLog'])){
      $_SESSION['login'] = $_POST['inputcpfLog'];
      $_SESSION['Senha'] = $_POST['inputSenhaLog'];
      header('Location:../Usuario.php');
  }
  
  if(!empty($_POST['editar'])){
      
      if($_SESSION['codigo'] == $_POST['produto']){

         $listaProduto = retornarProduto();
         $encontrado = false;
         while($produto = mysqli_fetch_assoc($listaProduto)){
            if($_POST['produto'] == $produto["cod"]){
            
               $id = $produto['id'];
               $cod = $produto['cod'] ;
               $nome =(!empty($_POST['Nome'])) ? $_POST['Nome']: $produto['nome'] ;
               $marca =(!empty($_POST['Marca'])) ? $_POST['Marca']: $produto['marca'] ;
               $modelo =(!empty($_POST['Modelo'])) ? $_POST['Modelo']: $produto['modelo'] ;
               $dataFabr =(!empty($_POST['DataFabr'])) ? $_POST['DataFabr']: $produto['dataFabr'] ;
               $descricao =(!empty($_POST['Descricao'])) ? $_POST['Descricao']: $produto['descricao'] ;
               $valor =(!empty($_POST['Valor'])) ? $_POST['Valor']: $produto['valor'] ;
               $foto =(!empty($_FILES['imagem'])) ? "img/Usu".$id."_".$_FILES['imagem']['name']: $produto['foto'] ;
               move_uploaded_file($_FILES['imagem']['tmp_name'],$foto);
               editarProduto($cod, $nome, $marca, $modelo, $dataFabr, $descricao, $valor, $foto);
               header('Location:../Usuario.php');

            
               
            }
         }
         $_SESSION['codigo'] =0;
      }else{
         
         $_SESSION['codigo'] = $_POST['produto'];
         echo $_SESSION['codigo'];
         header('Location:../Usuario.php');  
      }
      
      

   }
   if(!empty($_POST['excluir'])){
      excluirProduto($_POST['produto']);
      header('Location:../Usuario.php'); 

   }
   
  

?>
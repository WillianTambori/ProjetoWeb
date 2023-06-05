<?php
ini_set("display_errors","On");
session_start();
require "funcoesBD.php";

//Cadastro de usuario
if(!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
   !empty($_POST['inputCPF']) && !empty($_POST['inputDataNasc']) && 
   !empty($_POST['inputTelefone']) && !empty($_POST['inputEndereco']) && !empty($_POST['inputEndNumero']) && !empty($_POST['inputCep']) && !empty($_POST['inputBairro']) && !empty($_POST['inputCidade']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputSenha'])){


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

      echo "nome";

      inserirCliente($nome, $sobrenome, $dataNasc, $cpf, $telefone, $endereco, $numero, $cep, $bairro, $cidade, $email, $senha);
      header('Location:../Login.php');
      die();
   }
   if( !empty($_POST['inputNome']) && !empty($_POST['inputMarca']) && 
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
      $nome_foto = $_FILES['imagem']['name'];
      move_uploaded_file($_FILES['imagem']['tmp_name'],$foto);
      if($id > 0)
         inserirProduto($id, $produto, $marca, $modelo, $dataFabr, $descricao, $valor, $foto);
      header('Location:../Usuario.php');
      

      
   }
   if(!empty($_POST['inputcpfLog']) && !empty($_POST['inputSenhaLog'])){
      $_SESSION['login'] = $_POST['inputcpfLog'];
      $_SESSION['Senha'] = $_POST['inputSenhaLog'];
      header('Location:../Usuario.php');
  }


?>
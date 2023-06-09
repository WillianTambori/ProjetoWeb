<?php
ini_set("display_errors","On");
function conectarBD(){
    $conexao = mysqli_connect("localhost","root","","ulx");
    return($conexao);
}
function inserirCliente($nome, $sobrenome, $dataNasc, $cpf, $telefone, $endereco, $numero, $cep, $bairro, $cidade, $email, $senha,$foto){
    
    $conexao = conectarBD();
    $consulta = "INSERT INTO usuario (nome, sobrenome, dataNasc, cpf, telefone,endereco, numero, cep, bairro, cidade, email, senha, foto)
    VALUES ('$nome','$sobrenome','$dataNasc', '$cpf','$telefone', '$endereco', '$numero', '$cep', '$bairro','$cidade','$email','$senha','$foto')";
    mysqli_query($conexao,$consulta);
}
function retornarClientes(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM usuario";
    $listaClientes = mysqli_query($conexao,$consulta);
    return $listaClientes;
}
function inserirProduto($id, $produto, $marca, $modelo, $dataFabr, $descricao, $valor, $foto){
    $conexao = conectarBD();
    $consulta = "INSERT INTO produto (id, nome, marca, modelo, dataFabr, descricao, valor, foto)
    VALUES ('$id', '$produto', '$marca', '$modelo', '$dataFabr', '$descricao', '$valor', '$foto')";
    mysqli_query($conexao,$consulta);
}
function retornarProduto(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM produto";
    $listaProduto = mysqli_query($conexao,$consulta);
    return $listaProduto;
}
function editarProduto($cod, $nome, $marca, $modelo, $dataFabr, $descricao, $valor, $foto){
    $conexao = conectarBD();
    $consulta = "UPDATE produto
    SET nome = '$nome', marca = '$marca', modelo = '$modelo', dataFabr = '$dataFabr', descricao = '$descricao', valor = '$valor', foto = '$foto' WHERE cod = $cod";
    mysqli_query($conexao,$consulta);
}
function login(){
    $listaCliente = retornarClientes();
    while($cliente = mysqli_fetch_assoc($listaCliente)){
        if($_SESSION['login'] == $cliente['cpf'] && $_SESSION['Senha'] == $cliente['senha']){
            return $cliente["id"];
        }
    }
    return 0;

}
function excluirProduto($cod){

    $conexao = conectarBD();
    $consulta = "DELETE FROM produto where cod = $cod";
    mysqli_query($conexao,$consulta);
    
}





?>
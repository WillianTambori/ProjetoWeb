<?php
require "funcoesBD.php";
    $conexao = conectarBD();
    $pesquisar = $_POST['pesquisar'];
    $consulta = "select * FROM produto where produto LIKE '%$pesquisar%' LIMIT 20";
    $resultBusca = mysqli_query($conexao, $consulta);
    
    while($rows_produto = mysqli_fetch_array($resultBusca)){
        echo "Busca pelo produto: " .$rows_produto;
    }

?>
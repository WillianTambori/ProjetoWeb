<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecPegue / TecPague - Cadastro usuário</title>
    <?php include "incHead.php" ?>
    
</head>
<body>
<?php include "incMenuSup.php" ?>
    <section class="formulario conteudo-form">
        <section class="formularioCliente">
            
            <form method="POST" action="processamento/processamento.php" enctype="multipart/form-data">
            <h1>CADASTRO DE CLIENTE</h1>    
                
                <label for="inputNome">Nome: </label><input type="text" id="inputNome" placeholder="Nome" name="inputNome">
                
                <label for="inputSobrenome">Sobrenome: </label><input type="text" id="inputSobrenome" placeholder="Sobrenome" name="inputSobrenome">
                
                <label for="inputCPF">CPF: </label><input type="text" id="inputCPF" placeholder="CPF" name="inputCPF">
                
                <label for="inputDataNasc">Data Nascimento: </label><input type="date" id="" placeholder="Data Nascimento" name="inputDataNasc">
                
                <label for="inputTelefone">Telefone: </label><input type="text" id="inputTelefone" placeholder="Telefone" name="inputTelefone">

                <label for="inputEndereco">Endereco: </label><input type="text" id="inputEndereco" placeholder="Endereco" name="inputEndereco">

                <label for="inputEndNumero">Numero: </label><input type="text" id="inputEndNumero" placeholder="Numero" name="inputEndNumero">
                
                <label for="inputCep">Cep: </label><input type="text" id="inputCep" placeholder="Cep" name="inputCep">

                <label for="inputBairro">Bairro: </label><input type="text" id="inputBairro" placeholder="Bairro" name="inputBairro">   
                <label for="inputCidade">Cidade: </label><input type="text" id="inputCidade" placeholder="Cidade" name="inputCidade">
                <label for="inputEmail">E-mail: </label><input type="text" id="inputEmail" placeholder="Email" name="inputEmail">    
                <label for="inputSenha">Senha: </label><input type="password" id="inputSenha" placeholder="Senha" name="inputSenha">

                <label>Foto</label>
                <input type="file" name="perfil" ><br>

                <input name="enviar" type="submit" value="cadastrar" class="butom">
                
                
            </form>
        </section>
    </section>
    <?php include "incFooter.php" ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            background-color:gray;
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
    <section class="formulario">
        <section class="formularioCliente">
            <form method="POST" action="processamento/processamento.php">
                <label>Cadastrar Cliente</label>
                
                <input type="text" 
                placeholder="Nome" name="inputNome">
                
                <input type="text" 
                placeholder="Sobrenome" name="inputSobrenome">
                
                <input type="text" placeholder="CPF" 
                name="inputCPF">
                
                <input type="date" placeholder="Data Nascimento" name="inputDataNasc">
                
                <input type="text" placeholder="Telefone" name="inputTelefone">

                <input type="text" 
                placeholder="Endereco" name="inputEndereco">

                <input type="text" 
                placeholder="inputEndNumero" name="inputEndNumero">
                
                <input type="text" 
                placeholder="Cep" name="inputCep">

                <input type="text" 
                placeholder="Bairro" name="inputBairro">   
                
                
                <input type="text" 
                placeholder="Cidade" name="inputCidade">


                
                <input type="text" placeholder="Email" name="inputEmail">
                
                <input type="password" placeholder="Senha" name="inputSenha">

                <label>Escolha uma opção</label>
                <select>
                    <option value="Vendedor">Vendedor</option>
                    <option value="Comprador">Comprador</option>

                </select>
                
                <input id="botao" type="submit" value="Cadastrar">
            </form>
        </section>
    </section>
</body>
</html>
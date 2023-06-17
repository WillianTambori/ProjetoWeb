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
            background-color:white;
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
            color: white;
            background-color:gray;
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
                <label>TecPegue / TecPague - Cadastrar Produto</label>
                
                <input type="text" placeholder="Nome" name="inputNome">
                
                <input type="text" placeholder="Marca" name="inputMarca">
                
                <input type="text" placeholder="Modelo" name="inputModelo">
                
                <input type="date" placeholder="Data de Fabricação" name="inputDataFabr">
                
                <input type="text" placeholder="Descrição" name="inputDescricao">

                <div class="arquivo">   
                <label>
                    <input type="file" required/>
                    <span>Escolher arquivo</span>
                </label>
                <p>Nenhum Arquivo escolhido </p>
            </div>
            
            <button>Cadastrar</button>
        </form>
        </section>
    </section>
</body>
</html>
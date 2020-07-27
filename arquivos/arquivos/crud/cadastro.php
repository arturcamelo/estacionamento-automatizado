<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Roboto:ital,wght@0,400;1,500&display=swap" rel="stylesheet">    
    <style>
        *{
            margin:0;
            padding:0;
            font-family:Georgia;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        body, html{
            height: 100%;
        }
        body {
           background-color: #aaa;
           display: flex;
           justify-content: center;
           align-items: center;
        }
        .centro{
            display:flex;
            flex-direction: column;
            background-color: white;
            width: 390px;
            height: 450px;
            border-radius:10px;
        }
        .divs{
            flex:1;
        }
       
        /*imagem do form*/
        .div1{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .foto{
            background-image:url("ruby2.png");
            background-repeat: no-repeat;
            background-size: 80px 80px;
            width: 80px;
            height: 80px;    
            margin-top: 30px;
            margin-bottom: 21px;
        }

        /*inputs do form*/
        .div2{
            flex:9;
        }
        form{
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .separar{
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            height: inherit;
            width: 70%; 
        }
        .inputuser{ 
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .inputsenha{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .inputs{
            background-color:transparent;
            border:none;
            border-bottom:1px solid dimgrey;
            color:dimgrey;
            width: 100%;
            font-size:15px;
            padding:10px;
        }
        .iconeuser{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            color:black;
            margin-right: 5px;
            margin-bottom: -5px;
        }
        .iconesenha{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            color:black;
            text-align: center;
            margin-right: 5px;
            margin-bottom: -5px;
        }
        ::placeholder { 
            color: dimgrey;
        }
        .inputs:focus {
            box-shadow: none;
            border:none;
            outline: none;
            border-bottom:1px solid dimgrey;
            color:dimgray;
            background-color:transparent;
        } 
        .inputbotao{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .botao{
            width:100%;
            height: inherit;
            padding:7px;
            border:none;
            border-radius:3px;
            color:white;
            background-color:#c20114;
            font-size:15px;
            margin-bottom: -15px;
        }
        .botao:focus{
            box-shadow: none;
            border:none;
            outline: none;
        }
        .adicionar{
            margin-left: 5px;
        }
        a{
            text-decoration: none;
            color:white;
        }
        .linklistar{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
        .linklistagem{
            width:100%;
            padding:7px;
            border-radius:3px;
            background-color:#c20114;
            font-size:15px;
            text-align:center;
            margin-top:-20px;
            color:white;
            text-decoration:none;
            border:none;
        }
        /*referencias*/
        .div3{
            display: flex;
            align-items: center;
            justify-content: center;
            color: dimgray;
        }
        .senha{
            margin-left:5px;
            color: black;
        }
        .rodape{
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="centro">
        <div class="divs div1">
            <div class="foto"></div>
        </div>

        <div class="div2">       
                <form action="sucesso.php" method="POST">
                    <div class="separar">
                        <div class="inputuser">
                            <i class="fa fa-user iconeuser"></i><input class="inputs" type="text" name="nome" placeholder="Usuário">
                        </div>
                        <div class="inputsenha">
                        <i class="fa fa-key iconesenha"></i><input class="inputs" type="password" name="senha" placeholder="Senha" maxlength="5">
                        </div>
                        <div class="inputbotao">
                            <input class="botao" type="submit" value="Cadastrar">
                        </div>
                        <div class="linklistar">
                            <a class="linklistagem" href="listando.php">Listar</a>
                        </div>
                    </div>
                </form>
        </div>

        <div class="divs div3">
            <p class="rodape"></p>
        </div>
    </div>
</body>
</html>

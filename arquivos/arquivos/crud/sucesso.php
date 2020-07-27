<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Roboto:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
    <style>
        *{margin:0; padding:0;
         font-family: 'Montserrat', sans-serif;
        }
        body {
           background-color: lightgrey;
        }
        .linklistagem{
            display:flex;
            align-items:center;
            justify-content:center;
            text-decoration:none;
            width:200px;
            height:30px;
            background-color:transparent;
            border: 2px solid #c20114;
            color:black;
        }
        .linklistagem:hover{
            background-color:#c20114;
            color:white;
        }
        .central{
            margin: 0 auto;
            display: flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
        }
    </style>
</head>
<body>
<div class="central">
    <?php   
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];  
            //cadastrando
        try{
            $banco = new PDO('mysql:host=localhost;dbname=arduino','root','root');
        } catch(PDOException $e){
            echo $e;
        }
        $resultado = $banco->exec("insert into pessoas(nome, senha) values ('$nome', '$senha');"); 
        if($resultado){
            echo "Cadastrado com sucesso!";
        }else{
            echo "Usuário não cadastrado!!!";
        }
        
    ?>
    <br><br>
    <a class="linklistagem" href="cadastro.php">Inicio</a>
    <br>
    <a class="linklistagem" href="listando.php">Listar</a>
</div>
</body>
</html>

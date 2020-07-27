<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Roboto:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;}
        body{
            background-color:#aaa;
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
            border-radius: 3px;
            margin-bottom: 10px;
        }
        .linklistagem:hover{
            background-color:#c20114;
            color:white;
        }
        .lista{
            width: 600px;
            margin: 0 auto;
            background-color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            color: black;
            border-radius: 3px;
        }
    </style>
</head>
<body>
<div class="lista">
    <div>
    <?php
    //Listando usuários
        $dsn = "mysql:dbname=arduino;host=127.0.0.1";
        $dbuser = "root";
        $dbpass = "root";

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);

        $sql = "SELECT * FROM pessoas";
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $usuario){
                echo "ID: ".$usuario["id"].'<br>'."Usuário: ".$usuario["nome"].'<br>'."Senha: ".$usuario['senha'].'<br><br>';
            }
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    ?>
    </div>
<br><br>
    <a class="linklistagem" href="cadastro.php">Inicio</a>
</div>
</body>
</html>


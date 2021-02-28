<?php
//recebendo dados do formulário e guardando em variáveis
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$saladoevento = $_POST['saladoevento'];
$lotacao = $_POST['lotacao'];
$salacafe = $_POST['salacafe'];
$lotacaocafe = $_POST['lotacaocafe'];
//testando dados no formulário
// conexão com o banco de dados
$host = 'localhost'; // variável com nome do servidor
$user = 'root'; //variável com o nome do usuário do banco
$pass = ''; // variável com a senha do banco
$banco = 'dados'; //variável com o nome do banco
$obj_mysqli = new mysqli("127.0.0.1", "root", "", "dados");
if ($obj_mysqli->connect_errno) {
    echo "Ocorreu um erro na conexão com o banco de dados.";
}
$conexao = mysqli_connect("127.0.0.1", "root", "", "dados");
if (!$conexao) {
    die("Ocorreu um erro na conexão com o banco de dados.");
}

// inserção dos dados no banco de dados

mysqli_query($conexao, "INSERT INTO dadoscad (nome,sobrenome,saladoevento,lotacao,salacafe,lotacaocafe)values ('$nome','$sobrenome','$saladoevento','$lotacao','$salacafe','$lotacaocafe')");


mysqli_close($conexao);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortout icon" href="favicon.ico.png"/>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="shortout icon" href="#"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">        
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <div id="mensagemcad"
             <p>Cadastro Realizado!</p>
        </div>
           
    </body>
</html>
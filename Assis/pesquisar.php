<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortout icon" href="favicon.ico.png"/>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="shortout icon" href="#"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">    
        <?php
        include_once './head.php';
        ?>
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
    
    
        <?php 
        include_once './pesquisar.php';
        ?>
    </body>
    
<div id="consulta">
<?php
      
    
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "dados";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
        
    
    /*Pesquisar pelo nome da pessoa */
    $pesquisar = $_POST['pesquisar'];
    $result_pesquisa = "SELECT * FROM dadoscad WHERE nome LIKE '%$pesquisar%' LIMIT 2";
       
    
        
    $resultado_pesquisa = mysqli_query($conn, $result_pesquisa);
    while($rows_dadoscad = mysqli_fetch_array($resultado_pesquisa)){
        echo "Nome:  ".$rows_dadoscad['nome']."<br>";
        echo "Sobrenome:  ".$rows_dadoscad['sobrenome']."<br>";
        echo "Sala do Evento:  ".$rows_dadoscad['saladoevento']."<br>";
        echo "Lotação:  ".$rows_dadoscad['lotacao']."<br>";
        echo "Sala de Café:  ".$rows_dadoscad['salacafe']."<br>";
        echo "Lotação Café:  ".$rows_dadoscad['lotacaocafe']."<br>";
        
    }
    
    /*Pesquisar pelo sobrenome */
    $pesquisar = $_POST['pesquisar'];
    $result_pesquisa = "SELECT * FROM dadoscad WHERE sobrenome LIKE '%$pesquisar%' LIMIT 2";
        
    $resultado_pesquisa = mysqli_query($conn, $result_pesquisa);
    while($rows_dadoscad = mysqli_fetch_array($resultado_pesquisa)){
        echo "Nome:  ".$rows_dadoscad['nome']."<br>";
        echo "Sobrenome:  ".$rows_dadoscad['sobrenome']."<br>";
        echo "Sala do Evento:  ".$rows_dadoscad['saladoevento']."<br>";
        echo "Lotação:  ".$rows_dadoscad['lotacao']."<br>";
        echo "Sala de Café:  ".$rows_dadoscad['salacafe']."<br>";
        echo "Lotação Café:  ".$rows_dadoscad['lotacaocafe']."<br>";
    }
    
    /*Pesquisar pelo nome da Sala do Evento */
    $pesquisar = $_POST['pesquisar'];
    $result_pesquisa = "SELECT * FROM dadoscad WHERE saladoevento LIKE '%$pesquisar%' LIMIT 2";
        
    $resultado_pesquisa = mysqli_query($conn, $result_pesquisa);
    while($rows_dadoscad = mysqli_fetch_array($resultado_pesquisa)){
        echo "Nome:  ".$rows_dadoscad['nome']."<br>";
        echo "Sobrenome:  ".$rows_dadoscad['sobrenome']."<br>";
        echo "Sala do Evento:  ".$rows_dadoscad['saladoevento']."<br>";
        echo "Lotação:  ".$rows_dadoscad['lotacao']."<br>";
        echo "Sala de Café:  ".$rows_dadoscad['salacafe']."<br>";
        echo "Lotação Café:  ".$rows_dadoscad['lotacaocafe']."<br>";
    }
    
    /*Pesquisar pelo nome do espaço de café */
    $pesquisar = $_POST['pesquisar'];
    $result_pesquisa = "SELECT * FROM dadoscad WHERE salacafe LIKE '%$pesquisar%' LIMIT 2";
        
    $resultado_pesquisa = mysqli_query($conn, $result_pesquisa);
    while($rows_dadoscad = mysqli_fetch_array($resultado_pesquisa)){
        echo "Nome:  ".$rows_dadoscad['nome']."<br>";
        echo "Sobrenome:  ".$rows_dadoscad['sobrenome']."<br>";
        echo "Sala do Evento:  ".$rows_dadoscad['saladoevento']."<br>";
        echo "Lotação:  ".$rows_dadoscad['lotacao']."<br>";
        echo "Sala de Café:  ".$rows_dadoscad['salacafe']."<br>";
        echo "Lotação Café:  ".$rows_dadoscad['lotacaocafe']."<br>";        
     }
   

?>
</div>
</html>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once './head.php';
        ?>
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        
        <div id="botaopesquisa" >
        <form method="POST" action="pesquisar.php">
            <input type="text" name="pesquisar" placeholder="PESQUISAR">
            <input type="submit" value="Pesquisar">
        </form>
        </div>                      
    
   
</body>
</html>


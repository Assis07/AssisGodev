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
        <form name='dados' method='post' action='dados.php'>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" style="width: 320px;"/>
                </div>
                <div class="campo">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" id="sobrenome" name="sobrenome" style="width: 320px;"/>
                </div>
                <div class="campo">
                    <label for="saladoevento">Sala do Evento</label>
                    <input type="text" id="saladoevento" name="saladoevento" style="width: 320px;"/>
                </div>
                <div class="campo">
                    <label for="lotacao">Lotação</label>
                    <input type="number" id="lotacao" name="lotacao" style="width: 50px;"/>
                </div>
                <div class="campo">
                    <label for="salacafe">Espaço de Café</label>
                    <input type="text" id="salacafe" name="salacafe" style="width: 320px;"/>
                </div>
                <div class="campo">
                    <label for="lotacaocafe">Lotação</label>
                    <input type="number" id="lotacaocafe" name="lotacaocafe" style="width: 50px;"/>
                </div>
                
            </fieldset>
            
           <button class="botao" type="submit" name="submit">Enviar</button>
                               
                                
                                                                    
    </form>
   
</body>
</html>


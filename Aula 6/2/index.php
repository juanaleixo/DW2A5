<?php

$setted=false;

if(isset($_POST['num'])){
    $num = $_POST['num'];
    $setted=true;
}

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!------------------------>
    <title>Contador</title>
  </head>
  <body>
      <br><br>
      <div class="container">
    <form action="destino-contador.php" method="POST">
        
        <h1>Contador</h1>
        <h3>Insira os valores</h3>
        <div class="form-group">

        <div class="form-group row">
            <div class="col">
            <input type="number" required class="form-control" name="inicio" step=".1" id="inputTitle" placeholder="Início">
            </div>

            <div class="col">
            <input type="number" required class="form-control" name="final" step=".1" id="inputTitle" placeholder="Final">
            </div>

            <div class="col">
            <input type="number" required class="form-control" name="incremento" step=".1" id="inputTitle" placeholder="Incremento">
            </div>
        </div>
       <br>
        
        <button class="btn btn-primary" type="submit">Enviar</button>
        <button class="btn btn-primary" type="reset">Limpar</button>
    
       
        <br><br>
        
        
    </form>
    
    <?php
    if($setted==true){
        echo "<h2>Contador do $num</h2>";
        for ($i=1; $i < 11; $i++) { 
            $result = $num*$i;
            echo "<p>$num x $i = $result</p>";
        }
    }
    ?>

    </div>
    
    <!--------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
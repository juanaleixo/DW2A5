<?php

if(isset($_POST['inicio']) &&
   isset($_POST['final']) && 
   isset($_POST['incremento'])){
    $inicio = $_POST['inicio'];
    $final = $_POST['final'];
    $incremento = $_POST['incremento'];
} else{
    echo 'Não há dados!';
    die();
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
    <title>Resultado</title>
  </head>
  <body>
      <br><br>
      <div class="container">
   

      <h1>Resultado</h1>
      <hr>
      <h2>Parâmetros informados</h2>
            
        <h5>Início: <?=$inicio?></h5>
        <h5>Final: <?=$final?></h5>
        <h5>Incremento: <?=$incremento?></h5>
        

      <?php
      echo "<br>";
      for ($i=$inicio; $i < $final+1; $i=$i+$incremento) { 
        echo "$i ";
      }
      
      
      
      ?>
        
        <br><br>
        
        
    </form>
    </div>
    
    <!--------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
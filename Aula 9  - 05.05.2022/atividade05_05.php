<?php

use Claudsonm\CepPromise\CepPromise;

require 'vendor/autoload.php';

$address = CepPromise::fetch(49040610);

$cep=filter_input(INPUT_POST,"cep",FILTER_SANITIZE_SPECIAL_CHARS);
    
if($cep){

  $address = CepPromise::fetch($cep);

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

    <title>Cadastro</title>
  </head>
  <body>
      <br><br>
      <div class="container">
    <form action="atividade05_05.php" method="POST">
        
        <h1>Cadastro de Pessoa Física</h1>
        <h3>Formulário</h3>
        <div class="form-group col-md-2">
            <label for="inputCEP">CEP</label>
            <input type="text" name="cep" class="form-control" id="inputCEP">
          </div>
        
        
    
        <br><br>
        
        <button class="btn btn-primary" type="submit">Enviar</button>
        <button class="btn btn-primary" type="reset">Limpar</button>
    
       
        <br><br>
        
        
    </form>


      <?php 
      

        if($cep){

          echo "<h3>CEP:$cep</h3>";
          echo "<p>CEP:$address->street</p>";
          echo "<p>CEP:$address->district</p>";
          echo "<p>CEP:$address->city</p>";
          echo "<p>CEP:$address->state</p>";
          
        }
      
      
      
      ?>



    </div>
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
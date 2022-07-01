<?php
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $soma = $nota1+$nota2+$nota3;
        $media = round($soma/3, 1) ;

    ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Notas</title>
  </head>
  <body>
      <br><br>
      <div class="container">
    <form action="destino_get.php" method="POST">
        
        <h1>Média Notas</h1>
        <h3>Resultado</h3>
        
        <hr>

        <h6>Notas: "<?=$nota1?>" - "<?=$nota2?>" - "<?=$nota3?>"
        </h6>

            <?php 

            if($media<4){
                echo "<h5>Você está reprovado com a média: $media</h5>";
            }else if($media>=4&&$media<6){
                echo "<h5>Você está de recuperação com a média: $media</h5>";
            } else {
                echo "<h5>Você está aprovado com a média: $media</h5>";
            }

            ?>


    </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
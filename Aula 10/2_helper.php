<?php

$url = $_POST['url'];
$position = $_POST['position'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagem</title>


<style>
    <?php
    if($position=="Backgroud"){
      echo  "body { background-image: url('$url'); }";
      } else{
    ?>

</style>


</head>
<body>
    
    <?php
        echo "<img src=\"$url\">";
    }
    ?>


</body>
</html>



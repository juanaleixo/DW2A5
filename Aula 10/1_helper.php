<?php
$Title = $_POST['Title'];
$Text = $_POST['Text'];

$Qtd = $_POST['Qtd'];
$colorText = $_POST['colorText'];
$colorBackground = $_POST['colorBackground'];
$Source = $_POST['Source'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $Title ?></title>
    <style>body{color:<?php echo $colorText ?>;
                font-family: arial;
            background-color: <?php echo $colorBackground ?>}

    </style>

</head>
<body>
    
</body>
</html>


<?php

echo "<h1>$Title</h1>";

echo "<hr></hr>";


if(is_numeric($Qtd)){
    for($i = 1; $Qtd>=$i; $i++){
        echo "<p>$Text</p>";
    }
    } else {
    echo "<p>$Text</p>";

}

    echo "<a href=\"$Source\">$Source</a>";




?>
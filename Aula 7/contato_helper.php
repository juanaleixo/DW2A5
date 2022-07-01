<?php

if(isset($_POST['nome']) &&
   isset($_POST['email']) && 
   isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];


    $time=date('d.m.y-H.i.s');

    $content = "Nome: $nome\nEmail: $email\nMensagem: $msg";
    $fp = fopen( "./contacts/" . "$time.txt","wb");
    if( $fp == false ){
        //do debugging or logging here
    }else{
        fwrite($fp,$content);
        fclose($fp);
}

} else{
    echo 'Não há dados!';
    die();
}

?>

<?php
require 'header.php'
?>
<div class="container">

    <h1>Dados enviados com sucesso!</h1>
    
    <hr>

    <p><b>Nome:</b> <?=$nome?></p>
    <p><b>E-Mail:</b> <?=$email?></p>
    <p style="word-break:break-all;"><b>Mensagem:</b> <?=$msg?></p>


</div>

<?php
require 'footer.php'
?>
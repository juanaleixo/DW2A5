<?php
require 'header.php'
?>


<div class="container">
<h1>Contato</h1>
<h3>Insira os dados</h3>
<form action="contato_helper.php" method="POST">
<div class="form-group">
            
            <div class="form-group row">
            <div class="col">
            <input type="text" required class="form-control" name="nome" id="inputTitle" placeholder="Nome">
            </div>

            <div class="col">
            <input type="text" required class="form-control" name="email" id="inputTitle" placeholder="E-mail">
            </div>
      
        </div>
        <p></p>
            
            <div class="col">
            <textarea class="form-control" required id="exampleFormControlTextarea1" name="msg" rows="3"placeholder="Mensagem"></textarea>
            </div>

        <br>

        <button class="btn btn-primary" type="submit">Enviar</button>
        <button class="btn btn-primary" type="reset">Limpar</button>

        </div>
    </form>
</div>

<?php
require 'footer.php'
?>
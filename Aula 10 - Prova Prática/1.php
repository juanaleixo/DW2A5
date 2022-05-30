<?php 

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
    <form action="1_helper.php" method="POST">
        
        <h1>Criar Página</h1>
        <h3>Formulário</h3>
        <div class="form-group">
    
            <input type="text" class="form-control" name="Title" id="inputTitle" placeholder="Título da Página">
            <textarea class="form-control" id="exampleFormControlTextarea1" name="Text" rows="3"placeholder="Corpo"></textarea>
            <select id="inputQtd" name="Qtd" class="form-control">
                <option selected>Não repetir o Corpo</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            <div class="form-group row">
                <div class="col">
                <label for="color1" class="col-sm-2 col-form-label">Cor Texto:</label>
                <input type="color" name="colorText" id="color1">
                </div>
                <div class="col">
                <label for="color2" class="col-sm-2 col-form-label">Cor Fundo:</label>
                <input type="color" name="colorBackground" id="color2">
                </div>
            </div>
            <br>
            <input type="text" class="form-control" name="Source" id="inputSource" placeholder="Fonte do Texto">
        </div>
        
        
    
        <br><br>
        
        <button class="btn btn-primary" type="submit">Enviar</button>
        <button class="btn btn-primary" type="reset">Limpar</button>
    
       
        <br><br>
        
        
    </form>



    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
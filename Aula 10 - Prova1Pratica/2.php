<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Imagem</title>
  </head>
  <body>
      <br><br>
      <div class="container">
    <form action="2_helper.php" method="POST">
        
        <h1>Criar Página</h1>
        <h3>Formulário</h3>
        <div class="form-group">
    
            <div class="form-group row">
                <div class="col">
                <label for="inputUrl" class="col-sm-2 col-form-label">Imagem:</label>
                <input type="text" class="form-control" name="url" id="inputUrl" placeholder="URL">
                </div>
                <div class="col">
                <label for="inputSelect" class="col-sm-2 col-form-label">Posição:</label>
                <select id="inputSelect" name="position" class="form-control">
                <option selected>Inline</option>
                <option>Backgroud</option>
            </select>
                </div>
            </div>
            <br>
        </div>
        
        
    
        
        <button class="btn btn-primary" type="submit">Enviar</button>
        <button class="btn btn-primary" type="reset">Limpar</button>
    
       
        <br><br>
        
        
    </form>



    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
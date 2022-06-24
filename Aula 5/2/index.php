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
        <h3>Insira as notas</h3>
        <div class="form-group">

        <div class="form-group row">
            <div class="col">
            <input type="number" required class="form-control" name="nota1" step=".1" id="inputTitle" placeholder="Nota 1">
            </div>
            <div class="col">
            <input type="number" required class="form-control" name="nota2" step=".1" id="inputTitle" placeholder="Nota 2">
            </div>
            <div class="col">
            <input type="number" required class="form-control" name="nota3" step=".1" id="inputTitle" placeholder="Nota 3">
            </div>
      
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
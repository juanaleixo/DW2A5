<?php
$id = $nome = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!---------->
    <title>Dogs</title>
  </head>
  <body>
      <br><br>
    <div class="container">
        
        <h1>Dogs</h1>
        <h3>Raças de Cachorro</h3>
        <hr>


        <?php
        switch ($id){
            case 1:
                echo "<h5>Você selecionou <b>Border Collie</b></h5>";
                echo "<h6>Cães pastores fazem parte da história do planeta e ao longo de centenas de anos a criação desses cachorros tinha como objetivo principal desenvolver uma raça que exercesse esta função da forma mais eficiente possível. O olhar do border collie também se destacava, uma vez que muitos donos de rebanho dizem até hoje que exemplares desta raça conseguem \"hipnotizar\" os outros animais, mostrando o que desejam apenas os olhando de forma fixa e focada.</h6>";
                echo "<img class=\"img-thumbnail\" src=\"https://cdn.shopify.com/s/files/1/0314/3889/7196/products/CapturadeTela2021-05-18as14.47.17_1024x.png?v=1621360988\">";
            break;

            case 2:
                echo "<h5>Você selecionou <b>Shitzu</b></h5>";
                echo "<h6>Focinho achatado, olhos amendoados um pouco saltados e personalidade marcante: este é o Shih Tzu! Conhecidos por serem muito companheiros, os Shih Tzus não são cães de caça ou esportistas, o propósito de suas vidas é amar e ser amado pelos seus pais humanos, servindo como um incrível cão de companhia.</h6>";
                echo "<img class=\"img-thumbnail\" src=\"http://177.84.63.83/hd/zorro.jpg\">";
            break;

            case 3:
                echo "<h5>Você selecionou <b>Rottweiler</b></h5>";
                echo "<h6>Eles são grandes, fortes e apesar da cara de mau são cães muito amorosos e extremamente apegados aos seus humanos. Trata-se de uma raça muito antiga, afinal os antecessores dos Rottweilers acompanhavam as legiões romanas pelos longos caminhos que percorriam.</h6>";
                echo "<img class=\"img-thumbnail\" src=\"https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia10350/rotweiller-cursos-cpt.jpg\">";
            break;

            case 4:
                echo "<h5>Você selecionou <b>Border Collie</b></h5>";
                echo "<h6>O cachorro Cocker Spaniel Inglês possui pelo longo, principalmente nas orelhas e parte embaixo da barriga, onde pela tosa da raça é deixada uma espécie de \"saia\". Um dos principais pontos do cachorro Cocker Inglês é a energia! Eles adoram correr, brincar e se divertir. Brincar com um Cocker é ficar cansado antes deles. Além disso, amam ficar com a família. Cockers podem ser cães bem destruidores, por isso fazer atividades físicas e mentais diariamente é essencial para eles.</h6>";
                echo "<img class=\"img-thumbnail\" src=\"https://www.azpetshop.com.br/blog/wp-content/uploads/2020/10/Cocker-Spaniel-Americano-2-495x452.jpg\">";
            break;
        }
        ?>
    <br>      
    <a href="./">Voltar</a>
    </div>

    
    
   <!---------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


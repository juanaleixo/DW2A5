<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!--- Fonte Google --->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS BootStrap --->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- CSS da Aplicação -->
        <link rel='stylesheet' href='/css/styles.css'>
        <script src='/js/script.js'></script>

    </head>


<body>
    <header>
      <nav class='navbar navbar-expand-lg navbar-light'>
        <div class='collapse navbar-collapse' id='navbar'>
          <a href='/' class='navbar-brand'>
            <img src="https://cdn.cdnlogo.com/logos/c/21/cincinnati-bengals.svg" alt="Juan">
          </a>
          <ul class='navbar-nav'>
            <li class='nav-item'>
              <a href='/' class='nav-link'>Eventos</a>
            </li>
            <li class='nav-item'>
              <a href='/events/create' class='nav-link'>Criar Eventos</a>
            </li>
            <li class='nav-item'>
              <a href='/products' class='nav-link'>Produtos</a>
            </li>
            <li class='nav-item'>
              <a href='/contact' class='nav-link'>Contato</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    @yield('content')
    <footer>
        <p>Juan &copy; 2022</p>
    </footer>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>

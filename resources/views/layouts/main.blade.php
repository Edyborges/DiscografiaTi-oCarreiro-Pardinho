

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonte do Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS do bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/script.js"></script>



</head>

<body class="antialiased">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light" id="teste">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo.png" class="sizeLogo" alt="">

                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Album</a>
                    </li>
                    <li class="nav-item">
                        <a href="/album/create" class="nav-link">Criar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/album/update" class="nav-link">Atualizar</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <br>
   
    @yield('content')
    <footer>Discografia Tião Carreiro e Pardinho &copy; 2021</footer>

</body>


</html>
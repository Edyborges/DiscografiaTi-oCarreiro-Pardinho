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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="/js/script.js"></script>

</head>


<div class="col col-md-12">


    <header>
        <nav class="navbar navbar-expand-lg navbar-light header-color">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo.png" class="sizeLogo" alt="">

                </a>

                <ul class="menu">
                    <li><a href="/">Home</a></li>

                    <li><a href="/album/albuns" class="nav-link">Albuns</a></li>

                    @if($albuns->count() == null )
                    <li><a onclick="mostrarNotificacao('Mensagem:','{{$msg}}')">Faixas</a>

                    </li>

                    @endif
                    @if($albuns->count() != null )
                    <li><a href="/faixa/faixas" class="nav-link">Faixas</a></li>

                    </li>
                    @endif




                
                </ul>
            </div>
        </nav>
    </header>
</div>

<body class="antialiased">



    <main>

      
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
                @endif
                @yield('content')

            </div>


        </div>
    </main>
    <br>
    <footer class="float-footer">Discografia Tião Carreiro e Pardinho &copy; 2021</footer>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>

</html>
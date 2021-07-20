<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Font do google-->
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap" rel="stylesheet">
        
        <!-- css bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <!-- css ds aplicação -->
        <link rel="stylesheet" href="/css/home.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/imgs/logo_ic.png" alt="MrBook" >
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/livros/mostrar_livros')}}" class="nav-link">EXPLORAR</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/avaliar')}}" class="nav-link">AVALIAR</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/perfil') }}" class="nav-link">MEUS LIVROS</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="home0">
            <br>
        <h4>Compartilhe as suas avaliações sobre livros e busque por novos!</h4>
        <br>
        <h5>uma rede ESPECIAL para VOCÊ, amante de livros. </h5><br>
        
        <form action="{{ route('livros.search')}}" method="post">
        @csrf
            <!--<input type="text" name="search" >
            <label>buscar<label>
            <button type="submit">Filtrar</button>-->

            <div class="input">
        <input type="text" required>
        <label>Buscar:</label>
        <div class="bar"></div>
        <div class="highlight"></div>
     </div>
     <button type="submit">Filtrar</button>
   

        </form>


        
       </div>

        <div class="home1" ><br>
        <br>
        <div class="texthome">
        <h6>De.... Machado de Assis
            <!--<a href="{{ url('/explorar')}}" style="color: #5a5a5e" class="texthome">Machado de Assis</a>-->
        </h6>
</div>

        <br>
      <!--      <br>
        <h4>Compartilhe as suas avaliações sobre livros e busque por novos!</h4>
        <br><br>
        <h5>uma rede ESPECIAL para VOCÊ, amante de livros. </h5><br><br><br>-->

      <!--  <div class="livros">-->
            <div class="img_home">
            
                <div class="img_menor">
                    <img src="imgs/home/oalienista.jpg"><br>
                    <img src="imgs/home/rating1.png">
                </div>
                
                <div class="img_menor">
                    <img src="imgs/home/memorias.jpg">
                </div>

                <div class="img_menor">
                    <img src="imgs/home/dom.jpg">
                </div>
            
           </div>
       

        

        </div>

        <div class="home2">
            <br>
        <h5>Cadastre-se já na Mr. Book.<h5>


                <a href="{{ url('/register')}}"><button class="btn-cad">Cadastrar</button></a><br>
                <a href="{{ url('/login')}}"><button class="btn-cad">Login</button></a>

               
        </div>



    @yield('content')
    <footer>
        <p>MR. BOOK &copy; 2021</p>
    </footer>
    <script  src = "https://unpkg.com/ionicons@5.4.0/dist/ionicons.js" > </script>
    </body>
</html>
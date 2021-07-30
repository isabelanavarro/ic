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
        <style>  
            h1{
            text-align: center;
            font-weight: 100;
            margin: 15% auto 5%;
            }
            h1 span {
            display:block;
            font-size:0.7em;
            color:gray;
            margin-top:1%;
            }
            .input{
                margin: 0% 10%;
                position: relative;
                width: fit-content;
            }
            input{
                padding: 10px 10px 10px 5px;
                font-size: 15px;
                width: 280px;
                border:  1px solid ;
                color: #f7f7f7;
                align-content: center;
                border-color: transparent transparent gray;
                background-color: transparent; 
                margin-left: 265px;
            }
            input:focus{outline: none;}
            /*Label */
            label{
                position: absolute;
                margin-left: 265px;
                top: 30%;
                font-size: 18px;
                color: rgb(165, 165, 165);
                left: 50%;
                z-index: -1;
                pointer-events: none;
                transition: all 0.3s  ;
                -webkit-transition: all 0.3s  ;
                -moz-transition: all 0.3s  ;
                -ms-transition: all 0.3s  ;
                -o-transition: all 0.3s  ;
            }
            /* Activate State */
            input:focus +label , input:valid + label {
                font-size: 12px;
                color: rgb(148, 98, 255);
                top: -1%;
                transition: all 0.3s;
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                -ms-transition: all 0.3s;
                -o-transition: all 0.3s;
            }
            /*End Label */
            /*Bar*/
            .bar{
                width: 50%;
                height: 2px;
                position: absolute;
                background-color:  #f2a340;
                
                top: calc(150% - 25px);
                left: 270px;
                transform: scaleX(0.0);
                -webkit-transform: scaleX(0.0);
                -moz-transform: scaleX(0.0);
                -ms-transform: scaleX(0.0);
                -o-transform: scaleX(0.0);  
            }
            /*Activate State */
            input:focus ~ .bar ,input:valid ~ .bar  {
                transform: scaleX(1.0);
                -webkit-transform: scaleX(1.0);
                -moz-transform: scaleX(1.0);
                -ms-transform: scaleX(1.0);
                -o-transform: scaleX(1.0);
                transition: transform 0.3s ;
                -webkit-transition: transform 0.3s ;
                -moz-transition: transform 0.3s ;
                -ms-transition: transform 0.3s ;
                -o-transition: transform 0.3s ;
            }
            /*End Bar */
            /*Highlight */
            .highlight{
                width: 100%;
                height: 85%;
                position: absolute;
                background-color:  #f2a340;
                top: 15%;
                left: 0;
                visibility: hidden;
                z-index: -1; 
            }
            input:focus ~ .highlight{
                width: 0;
                visibility: visible;
                transition: all 0.09s linear;
                -webkit-transition: all 0.09s linear;
                -moz-transition: all 0.09s linear;
                -ms-transition: all 0.09s linear;
                -o-transition: all 0.09s linear;
            }
    
        </style>
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
        <h5>uma rede ESPECIAL para VOCÊ, amante de livros. </h5>
        
        <form action="{{ route('livros.pesquisa')}}" method="post">
        @csrf
            <!--<input type="text" name="search" >
            <label>buscar<label>
            <button type="submit">Filtrar</button>-->

            <div class="input">
        <input type="text" required>
        <label>Buscar:</label>
        <div class="bar"></div>
        <div class="highlight"></div>
     </div><br>
     <button type="submit" class="btn-primaryab">BUSCAR</button>
   

        </form>


        
       </div>

        <div class="home1" ><br>
       &nbsp; &nbsp; &nbsp; &nbsp; Machado de Assis na Mr. Book:
        <br>
        <img src="imgs/home/memorias.jpg"> &nbsp; &nbsp;&nbsp;&nbsp;
        <img src="imgs/home/oalienista.jpg">&nbsp; &nbsp;&nbsp;
        <img src="imgs/home/dom.jpg"><br><br><br><br>

       

        

        </div>

        <div class="home2">
            <br>
        <h5>Cadastre-se já na Mr. Book para conhecer outros leitores.<h5>
        <h6></h6>

                <a href="{{ url('/register')}}"><button class="btn-cad">CADASTRAR</button></a><br>
                <a href="{{ url('/login')}}"><button class="btn-cad">LOGIN</button></a>

               
        </div>



    @yield('content')
    <footer>
        <p>MR. BOOK &copy; 2021</p>
    </footer>
    <script  src = "https://unpkg.com/ionicons@5.4.0/dist/ionicons.js" > </script>
    </body>
</html>
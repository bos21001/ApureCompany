<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Apure Company</title>
    <link rel="icon" href="imagens/favicon.png">

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo-loja.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
        <div class="container">
            <!--header-->
            <div class="navbar-header">

                <!--botão toggle-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-targent="#barra-navegacao">
                    <span class="sr-only">alternar navegaçao</span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                </button>

                <a href="index.html" class="navbar-brand">
                    <span class="img-logo">Spotify</span>
                </a>

            </div>

            <!--navbar-->
            <div class="collapse navbar-collapse" id="barra-navegacao">
                <ul class="nav navbar-nav navbar-right">
                    <li class="divisor" role="separator"></li>
                    <li><a href="{{ route('loja') }}">Loja</a></li>
                </ul>


            </div>
        </div>
        <!--/container-->
    </nav>
    <!--/nav-->

    <div class="capa">
        <div class="texto-capa">
            <h1>Coming soon news</h1>
            <a href="" class="btn btn-custom btn-roxo btn-lg">IR PARA LOJA</a>
            {{-- <a href="" class="btn btn-custom btn-branco btn-lg">Obter Spotify Free</a> --}}
        </div>
    </div>

    <!--Conteudos-->
    <section id="servicos">
        <div class="container">
            <div class="row">

                <!-- albuns 1-->
                <div class="col-md-6">

                    <div class="row albuns">

                        <div class="col-md-6">
                            <img src="imagens/apure1.png" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <img src="imagens/apure2.jpg" class="img-responsive">
                        </div>


                    </div>
                    <!--/row-->

                    <div class="row albuns">

                        <div class="col-md-6">
                            <img src="imagens/apure3.jpg" class="img-responsive">
                        </div>
                        <br>
                        <div class="col-md-6">
                            <img src="imagens/apure4.jpg" class="img-responsive">
                        </div>


                    </div>
                    <!--/row-->

                </div>

                <!-- albuns 2-->
                <div class="col-md-6">
                    <div class="row albuns">

                        <div class="col-md-6">
                            <img src="imagens/apure5.jpg" class="img-responsive">
                        </div>
                        <br>
                        <div class="col-md-6">
                            <img src="imagens/apure6.jpeg" class="img-responsive">
                        </div>


                    </div>
                    <!--/row-->

                    <div class="row albuns">

                        <div class="col-md-6">
                            <img src="imagens/apure7.jpeg" class="img-responsive">
                        </div>
                        <br>
                        <div class="col-md-6">
                            <img src="imagens/apure8.jpg" class="img-responsive">
                        </div>


                    </div>
                    <!--/row-->
                </div>

            </div>
        </div>
    </section>

    <section id="recursos">
        <div class="container">
            <div class="row">

                <!--recursos-->
                <div class="col-md-4">
                    <h2>Quem Somos</h2>

                    <h3># SomosApure</h3>
                    <p>Fruto do sonho e das ideis de amigos de infancia, a APURE chega com a missão de aliviar o peso
                        que vem da correia da cidade grande, do busão lotado e do trãnsito parado! Com peças style e de
                        simples cuidado, chegamos para facilitar e agilizar sua rotina.</p>
                    <p> Em breve teremos novidades disponiveis para vocẽ e sua galera, continue nos acompanhando em
                        nossas Midias Socias!</p>

                </div>


                <!--img recursos-->
                <div class="col-md-8">

                    <div class="row rotacionar">
                        {{-- Futura foto --}}
                        {{-- <div class="col-md-6">
                            <img src="imagens/iphone1.png" class="img-responsive">
                        </div>

                        <div class="col-md-6">
                            <img src="imagens/iphone2.png" class="img-responsive">
                        </div> --}}


                    </div>
                    <!--/row-->
                </div>

            </div>
        </div>

    </section>


    <!--Rodapé-->
    <footer id="rodape">



        <img class="center" src="{{ asset('imagens/apure_logo.png') }}" alt="" style="height: 40px;
        width: 132px;">

        <h4 style="text-align: center">Site desenvolvido por Christopher e Victor</h4>

        <div class="wrapper">
            <ul class="nav">
                <li class="item-rede-social"><a href="#"><img src="imagens/facebook.png"></a></li>
                <li class="item-rede-social"><a href="#"><img src="imagens/instagram.png"></a></li>
                <li class="item-rede-social"><a href="#"><img src="imagens/twitter.png"></a></li>
            </ul>
        </div>


    </footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" media="screen" href="css/welcome.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Colinas Jobs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <!-- MENU -->
        <div class="flex-center position-ref full-height menuPrincipal">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Cadastrar</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <!--X MENU X-->
        <!-- CONTEUDO -->
        <div>

            <div class="card">
                <div id="Sou_Candidato"  style="display: block">
                    <p class="texto_sou_candidato">Queremos ver você de emprego novo.</p>
                    <div class="campos_candidato" style="background-color: white; height: 100%; width: 100%">
                        <div class="campo_texto1">
                        <a> Nome empresa </a> <br>
                          @if(!is_null($nome_empresa))
                            @foreach($nome_empresa as $key)
                                {{$key->nome_empresa}}-Vagas: {{$key->vaga}} <br>
                            @endforeach
                          @endif
                        </div>
                        <a> Nome vaga </a> <br>

                        @if(!is_null($nome_vaga))
                            @foreach($nome_vaga as $key)
                                {{$key->nome_empresa}} <br>
                            @endforeach
                        @endif
                        <a> Nome cidade </a> <br>

                        @if(!is_null($cidade))
                        @foreach($cidade as $key)
                            {{$key->nome_vaga}} <br>
                        @endforeach
                        @endif


                    </div>
                </div>

            </div>

        </div>
        <!--X CONTEUDO X-->
        <img src="{{asset('img_home/trabalhador1.jpg')}}" height: "100%" width="100%">
        <!-- RODAPE -->
        <!--X RODAPE X-->

    </body>
</html>

@extends('layouts.layoutRodape')
<!DOCTYPE html>
<html>
<head>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/select2-bootstrap.min.css') }}" rel="stylesheet">
  <link type="text/css" rel="stylesheet" media="screen" href="css/layoutRodape.css"/>

</head>
<body>
    @section('content')
    <div class='rodape'>
    <div class="container_backgound_color"> <!--cor do fundo: cinza-->
      <div class="container">
        <div id="logo_rodape">
          <a id="text_logo">Colinas Jobs</a>
        </div>
        <div id="institucional">
          <p>Institucional</p>
          <a>Quem somos?</a> <br>
          <a>Por que usar Colinas Jobs?</a> <br>
          <a>Aviso legal</a> <br>
          <a>Politica de privacidade</a> <br>
        </div>
        <div id="candidato">
          <p>Candidato</p>
          <a>Ajuda para candidato</a> <br>
          <a>Busca de emprego</a> <br>
          <a>Cargos</a> <br>
        </div>
        <div id="empresa">
          <p>Empresa</p>
          <a>Ajuda para empresas</a> <br>
          <a>Anunciar vagas de emprego</a> <br>
          <a>Busque candidatos</a> <br>
        </div>
    </div>
    </div>
    <div class="container_rodape_credito">
      <p class="texto_rodape_credito"> Copyright © 2019 - colinasjobs. Todos os direitos reservados.</p>
    </div>
    </div>
    @endsection
</body>
</html>

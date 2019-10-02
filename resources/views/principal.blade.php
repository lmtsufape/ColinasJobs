@extends('layouts.layoutRodape') <!-- Rodape -->
@section('title', 'Colinas Jobs') <!-- Titulo -->

<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" media="screen" href="css/layoutPrincipal.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
<!--menu-->
    <div class='header'>
      <div class="container">
        <p class="logo">Colinas Jobs</p>
      </div>
      <div class="position_button">
        <div class="dropdown">
          <button class="button_entrar" type="button" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Entrar
          </button>
          <div class="dropdown-menu" id="form">
            <form class="px-4 py-3" >
              <div class="form-group">
                <label style="font-size: 16px" for="exampleDropdownFormEmail1" class="text">Endereço de email</label>
                <input style="font-size: 16px" type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@exemplo.com">
              </div>
              <div class="form-group">
                <label style="font-size: 16px" for="exampleDropdownFormPassword1" class="text">Senha</label>
                <input style="font-size: 16px" type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Senha">
              </div>
              <div class="form-check" id="form_check">
                <input style="font-size: 16px; margin-left: -20px; top:-3px;" type="checkbox" class="form-check-input" id="dropdownCheck">
                <label style="font-size: 13px;" class="form-check-label" for="dropdownCheck">
                  Lembrar de mim
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
            <div class="dropdown-divider"></div>
            <a style="font-size: 13px;" class="dropdown-item" href="#">Novo, por aqui? Regitre-se.</a>
            <a style="font-size: 13px;" class="dropdown-item" href="#">Esqueceu a senha?</a>
          </div>
        </div>
      </div>
    </div>
<!--conteudo-->
    <div>
        <div class="tab">
          <button class="tablinks active" class="tabcontent" style="height:100%; background-color: rgba(80,109,125,0.9); color:white;" class="tabcontent"  onclick="openConteudo(event, 'Sou_Candidato')">Sou Candidato</button>
          <button class="tablinks" style="height:100%; background-color: rgba(223,191,151,0.7); color:black;" onclick="openConteudo(event, 'Sou_Empresa')">Sou Empresa</button>
        </div>
        <div class="area_selecao">
          <div id="Sou_Candidato" class="tabcontent" style="height:100%; display: block; background-color: rgba(80,109,125,0.9);">
            <p style="font-size: 35px;margin-left:10%;margin-top:40px; color:white;">Queremos ver você de emprego novo.</p>
            <div class="divs_campo_textos_candidato">
              <div class="campo_texto">
                <input type="text" value="" placeholder="Gerente, Motorista, Estágio"><br>
              </div>
              <div class="campo_texto">
                <input type="text" value="" placeholder="São Paulo, Rio de Janeiro"><br>
              </div>
          </div>
          <button style="font-size: 16px; height:37px; width:168px; background-color:white; margin-left:67%; margin-top:20px; " type="button" onclick="alert('BUSCA_VISAO_DO_CANDIDATO!')">Buscar</button>
          </div>
          <div id="Sou_Empresa" class="tabcontent" style="height:100%; background-color:rgba(223,191,151,0.7);">
            <p style="font-size: 35px;margin-left:20%;margin-top:40px;">Encontre o candidato ideal.</p>
            <div class="campo_textos_empresa">
              <div class="campo_texto">
                <input style="width:526px";type="text" value="" placeholder="Gerente, Motorista, Estágio"><br>
              </div>
              <button style="font-size: 16px; height:37px; width:168px; background-color:white; margin-left:71.4%; margin-top:26px;" type="button" onclick="alert('BUSCA_VISAO_DO_EMPREGADOR!')">Buscar</button>
            </div>
          </div>
        </div>
      <img src="{{asset('img_home/trabalhador1.jpg')}}" height: "100%" width="100%">
    </div>
<!-- script button Sou_Candidato e Sou_Empresa-->
    <script>
      function openConteudo(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";

        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }

    </script>
  </body>
</html>

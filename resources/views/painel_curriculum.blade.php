@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="position: absolute; padding-top: 3.0rem;">
            <div class="row justify-content-center" style="padding-top: 3.0rem;">
            <div class="card" >
                <div class="card-header"><p style="text-align:center; margin-bottom: 2rem; margin-top:3px; height:4px; font-size:25px;">Meu Currículo</p></div>
                <div class="card-body" style="padding:2rem; margin-bottom:100px; margin-top:45px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="btn-group">
                        <div>

                                <form action="{{route('editarMiniCurriculo')}}">
                                <div style="margin-left:70px;"><img src="icon/paper.png" alt="paper" width="80px" height="86px"></div>
                                {{-- <p style="margin-left:65px;font-size:15px; margin-top:10px">Mini Currículo</p> --}}
                                    <div class="btn-group" >
                                        <button style="margin-top:39px; background-color:#4173c9;
                                        border: none;
                                        color: white;
                                        padding: 15px 20px;
                                        text-align: center;
                                        text-decoration: none;
                                        font-size: 19px;" type="submit">Editar Mini Curriculo</button>
                                    </div>
                                </form>

                        </div>
                        <div style="margin-left:10px;">
                                <form action="{{route('editarEscolaridade')}}">
                                        <div style="margin-left:70px;"><img src="icon/graduation.png" alt="graduation" width="84px" height="90  px"></div>
                                        <div class="btn-group">
                                            <button style="margin-top:35px; background-color:#4173c9;
                                            border: none;
                                            color: white;
                                            padding: 15px 20px;
                                            text-align: center;
                                            text-decoration: none;
                                            font-size: 19px;" type="submit">Editar Escolaridade</button>
                                        </div>
                                    </form>

                        </div>
                        <div style="margin-left:10px;">
                                <form action="{{route('editarEndereco')}}">
                                        <div style="margin-left:55px;"><img src="icon/address.png" alt="address" width="60px" height="80  px"></div>
                                        <div class="btn-group">
                                            <button style="margin-top:45px;
                                                background-color:#4173c9;
                                                border: none;
                                                color: white;
                                                padding: 15px 20px;
                                                text-align: center;
                                                text-decoration: none;
                                                font-size: 19px;"
                                            type="submit">Editar Endereço</button>
                                        </div>
                                    </form>
                        </div>
                        <div style="margin-left:10px;">
                                <form action="{{route('editarExperiencia')}}">
                                        <div style="margin-left:60px;"><img src="icon/experience.png" alt="experience" width="70px" height="70px"></div>
                                        <div class="btn-group">
                                            <button style="margin-top:55px;
                                                background-color:#4173c9;
                                                border: none;
                                                color: white;
                                                padding: 15px 20px;
                                                text-align: center;
                                                text-decoration: none;
                                                font-size: 19px;"
                                            type="submit">Editar Experiência</button>
                                        </div>
                                    </form>
                        </div>
                    </div>




                    {{-- <p style="text-align: center; font-size:20px; font-family: open sans,arial,sans-serif;
                    font-weight: 300; line-height: 1.29;">Sou candidato e desejo colocar o</br>
                    meu currículo no Colinas Jobs.</p>
                    <form action="{{route('editarMiniCurriculo')}}">
                      <div class="btn-group" style="left:62px;">
                        <button style="margin-top:35px; background-color:#4173c9;
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        font-size: 19px;" type="submit">Editar Mini Curriculo</button>
                      </div>
                    </form>
                    <form action="{{route('editarEscolaridade')}}">
                        <div class="btn-group" style="left:62px;">
                            <button style="margin-top:35px; background-color:#4173c9;
                            border: none;
                            color: white;
                            padding: 15px 32px;
                            text-align: center;
                            text-decoration: none;
                            font-size: 19px;" type="submit">Editar Escolaridade</button>
                        </div>
                    </form> --}}
                </div>
                <div>
                    <form action="{{route('home')}}">
                        <div style="padding:10px; float:right;">
                            <button type="submit">Sair</button>
                        </div>
                    </form>
                </div>
            </div>
                {{-- <div class="card" style="float:right;">
                    <div class="card-header"><p style="text-align:center; margin-bottom: 2rem; margin-top:3px; height:4px; font-size:25px;">Endereço</p></div>
                    <div class="card-body" style="padding:2rem;">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p style="text-align: center; font-size:20px; font-family: open sans,arial,sans-serif;
                        font-weight: 300; line-height: 1.29;">O endereço é uma das partes essenciais<br> na hora de avaliar um candidato</p>
                            <form action="{{route('editarEndereco')}}">
                                <div class="btn-group" style="left:64px;">
                                    <button style="margin-top:35px;
                                        background-color:#4173c9;
                                        border: none;
                                        color: white;
                                        padding: 15px 32px;
                                        text-align: center;
                                        text-decoration: none;
                                        font-size: 19px;"
                                    type="submit">Editar Endereço</button>
                                </div>
                            </form>
                    </div>
                </div> --}}
        </div>
    </div>
</div>
</div>
@endsection

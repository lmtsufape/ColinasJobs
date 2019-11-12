@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="position: absolute; padding-top: 3.0rem;">
            <div class="row justify-content-center" style="padding-top: 3.0rem;">
            <div class="card" style="float:left;">
                <div class="card-header"><p style="text-align:center; margin-bottom: 2rem; margin-top:3px; height:4px; font-size:25px;">Candidato</p></div>

                <div class="card-body" style="padding:2rem;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p style="text-align: center; font-size:20px; font-family: open sans,arial,sans-serif;
                    font-weight: 300; line-height: 1.29;">Sou candidato e desejo colocar o</br>
                    meu currículo no Colinas Jobs.</p>
                    <form action="{{route('curriculum')}}">
                      <div class="btn-group" style="left:62px;">
                        <button style="margin-top:35px; background-color:#4173c9;
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        font-size: 19px;" type="submit">Sou candidato</button>
                      </div>
                    </form>
                </div>
            </div>
            <div class="card" style="float:right;">
                    <div class="card-header"><p style="text-align:center; margin-bottom: 2rem; margin-top:3px; height:4px; font-size:25px;">Empresa</p></div>

                    <div class="card-body" style="padding:2rem;">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p style="text-align: center; font-size:20px; font-family: open sans,arial,sans-serif;
                        font-weight: 300; line-height: 1.29;">Sou empresa e desejo ofertar uma </br>oportunidade de trabalho.</p>
                        <form action="{{route('oportunidade')}}">
                                <div class="btn-group" style="left:64px;">
                            <button style="margin-top:35px;
                                background-color:#4173c9;
                                border: none;
                                color: white;
                                padding: 15px 32px;
                                text-align: center;
                                text-decoration: none;
                                font-size: 19px;"
                             type="submit">Sou empresa</button>
                          </div>
                        </form>
                    </div>
            </div>
            <div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="position: absolute; padding-top: 7.0rem;">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('buscarCandidato')}}" method="GET">
                        <input type="text" name="busca">
                        <button type="submit"> Procurar</button>
                    </form>
                    Lista de candidatos
                    <div style="height: 5rem; overflow: auto">
                        <ul>
                            @foreach ($candidatos as $candidato)
                                <li>{{$candidato->nome_completo}}</li>
                            @endforeach
                        </ul>
                    </div>
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
                         type="submit">Nova Vaga</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

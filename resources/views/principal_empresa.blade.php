@extends('layouts.app')

<a>PAGINA PRINCIPAL DA EMPRESA</a>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Lista de candidatos
                    <div style="height: 5rem; overflow: auto">
                        <ul>
                            @foreach ($candidatos as $candidato)
                                <li>{{$candidato->nome_completo}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

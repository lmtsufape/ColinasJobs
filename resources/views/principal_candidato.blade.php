@extends('layouts.app')
<a>PAGINA PRINCIPAL DO CANDIDADO</a>

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
                    <form action="{{route('buscarOportunidade')}}" method="GET">
                        <input type="text" name="busca">
                        <button type="submit"> Procurar</button>
                    </form>
                    Lista de oportunidades
                    <div style="height: 5rem; overflow: auto">
                        <ul>
                            @foreach ($empresas as $empresa)
                                <li>{{$empresa->nome_empresa}}</li>
                            @endforeach
                        </ul>
                    </div>
                    {{$empresas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

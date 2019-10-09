@extends('layouts.app')

<a>PREENCHA O SEU CURRICULO</a>

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

                    You are logged in!
                    <div>
                      <form action="{{route('adicionar')}}">
                          Nome completo <input type="text" name="nome_completo" placeholder="ex. Maria José da Silva"><br>
                          Descricao <input type="text" name="descricao" placeholder="ex. já trabalhei com vendas.."><br>
                          <button type="submit">Salvar curriculo</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

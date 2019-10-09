@extends('layouts.app')

<a>PREENCHA A SUA OPORTUNIDADE</a>

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
                      <form action="{{route('adicionarOportunidade')}}" method="POST">
                        @csrf
                          Nome da empresa <input type="text" name="nome_empresa" placeholder="ex. Nargem, Bompreço"><br>
                          Descricao <input type="text" name="descricao" placeholder="ex. Nossa empresa trabalha no ramo..."><br>
                          <button type="submit">Salvar vaga</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                          Nome Completo <input type="text" name="nome_completo" placeholder="ex. Maria José da Silva"><br>
                          CPF <input type="text" name="cpf" placeholder="xxx.xxx.xxx-xx"><br>
                          E-mail <input type="text" name="email" placeholder="exemplo@email.com"><br>
                          Data de Nascimento <input type="date" name="data_de_nascimento" placeholder="dd/mm/aaaa   "><br>
                          <button type="submit">Salvar curriculo</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

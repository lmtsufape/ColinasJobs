@extends('layouts.app')

<a>PREENCHA A SUA OPORTUNIDADE</a>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Criando uma oportunidade</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                      <form action="{{route('adicionarOportunidade')}}" method="POST">
                        @csrf
                          Nome da Empresa e/ou Contratante <input type="text" name="nome_empresa" placeholder="ex. Nargem, Bompreço"><br>
                          CNPJ <input type="string" name="cnpj" placeholder="ex. xx.xxx.xxx/xxxx-xx"><br>
                          Telefone <input type="tel" name="telefone" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" placeholder="ex. (xx)x-xxxx-xxxx" required="required"><br>
                          Email <input type="email" name="email" placeholder="exemplo@email.com"><br>
                          <button type="submit">Salvar vaga</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

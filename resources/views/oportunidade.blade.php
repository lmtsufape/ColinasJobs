@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8" style="position: absolute; width:610px; padding-top: 7.0rem; padding-bottom:7.0rem;">
            <div class="card">
                <div class="card-header"> Empresa</div>
                <div class="card-body" style="padding-bottom:110px;">
                        <div id="cadastrarEmpresa"></div>
                        <center style="background-color: rgba(0,0,0,.03); font-size:20px; 'width':100%; height:30px; color:black;">Cadastre sua Empresa</center><br>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                      <!--<form action="{{route('adicionarOportunidade')}}" method="POST">-->
                            <form action="{{route('adicionarEmpresa')}}" method="POST">
                        @csrf
                        <div class="btn-group">
                            <div class="form-group">
                                <label for="nome_completo">Nome da Empresa<a style="color:red"> *</a></label>
                                <input type="text" name="nome_empresa" class="@error('nome_empresa') is-invalid @enderror form-control" id="nome_empresa" value="{{ old('nome_empresa') }}" id="nome_da_Empresa" style="width:250px;" placeholder="ex. Nagem, Bompreço">
                                <small id="nome_empresa" class="form-text text-muted">ex.: Nagem, WallMart, TodoDia</small>
                                @error('nome_empresa')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>
                            <div style=" margin-left:10px;">
                                <label for="entradaEmail">Email<a style="color:red"> *</a></label>
                                <input type="text" name="email" class="@error('email') is-invalid @enderror form-control" id="entradaEmail" value="{{ old('email') }}" id="entrada_email" aria-describedby="emailHelp" style="width:250px;" placeholder="ex.: exemplo@email.com">
                                <small id="entradaEmail" class="form-text text-muted">ex.: exemplo@email.com</small>
                                @error('email')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="btn-group" style="margin-bottom:70px;">
                            <div>
                                <label for="entradaCnpj">CNPJ<a style="color:red"> *</a></label>
                                <input type="text" name="cnpj" class="@error('cnpj') is-invalid @enderror form-control" id="entrada_CNPJ" value="{{ old('cnpj') }}" id="entrada_CNPJ" aria-describedby="emailHelp" style="width:250px;" placeholder="ex.: XXXXXXXXXXXXXX">
                                <small id="entrada_CNPJ" class="form-text text-muted">ex.: XXXXXXXXXXXXXX</small>
                                @error('cnpj')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>
                            <div style=" margin-left:10px;">
                                <label for="entradaTelefone">Telefone<a style="color:red"> *</a></label>
                                <input type="text" name="telefone" class="@error('telefone') is-invalid @enderror form-control" id="nome_completo" value="{{ old('telefone') }}" id="entrada_telefone" aria-describedby="emailHelp" style="width:250px;" placeholder="ex.: XXXXXXXXXXXXXX">
                                <small id="entradaTelefone" class="form-text text-muted">ex.: XXXXXXXXXXXXXX</small>
                                @error('telefone')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>
                            <div style="position:absolute; left:450px; margin-top:120px;">
                                <button
                                    style="background-color:#4285f4;
                                    border: none;
                                    border-radius: 8px;
                                    color: white;
                                    padding: 9px 20px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 13px;
                                    margin: 0px 2px;
                                    cursor: pointer;">Salvar
                                </button>
                            </div>
                        </div>


                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

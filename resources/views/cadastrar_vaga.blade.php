@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8" style="position: absolute; width:610px; padding-top: 7.0rem; padding-bottom:7.0rem;">
            <div class="card">
                <div class="card-header"> Empresa</div>
                <div class="card-body" style="padding-bottom:110px;">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>

                            <form action="{{route('adicionarVaga')}}" method="POST">
                        @csrf
                        <center style="background-color: rgba(0,0,0,.03); font-size:20px; 'width':100%; height:30px; color:black;">Cadastrar Vaga</center><br>
                        <div class="btn-group">
                            <div>
                                <label for="entradaVaga">Nome da Vaga<a style="color:red"> *</a></label>
                                <input type="text" name="nome_vaga" class="@error('nome_vaga') is-invalid @enderror form-control" style="width:400px;" value="{{ old('nome_vaga') }}" id="entrada_vaga" aria-describedby="emailHelp" placeholder="ex.: Design de Sobrancelhas, Vigilante, Porteiro">
                                <small id="entradaVaga" class="form-text text-muted">ex.: Design de Sobrancelhas, Vigilante, Porteiro</small>
                                @error('nome_vaga')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>


                            <div style="margin-left:10px;">
                                <label for="entradaTipoDeVaga">Tipo de Vaga<a style="color:red"> *</a></label>
                                <select name="tipo_de_vaga" class="@error('tipo_de_vaga') is-invalid @enderror form-control" id="tipo_de_vaga" value="{{ old('tipo_de_vaga') }}">
                                        <option>Aprendiz</option>
                                        <option>Autônomo</option>
                                        <option>Comissionado</option>
                                        <option>Concurso</option>
                                        <option>Efetivo/CLT</option>
                                        <option>Estágio</option>
                                        <option>Freelancer/MEI</option>
                                        <option>Temporário</option>
                                        <option>Trainne</option>
                                        <option>Voluntário</option>
                                </select>
                                @error('tipo_de_vaga')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <hr/>
                        <div class="btn-group">
                            <div >
                                <label for="entradaUF">UF<a style="color:red"> *</a></label>
                                <select  class="@error('uf') is-invalid @enderror form-control" id="nome_completo" value="{{ old('uf') }}" name="uf">
                                        <option>PE</option>
                                        <option>PB</option>
                                        <option>PA</option>
                                </select>
                                @error('uf')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>

                            <div style="margin-left:15px;">
                                <label for="entradaCidade">Cidade<a style="color:red"> *</a></label>
                                <select class="@error('cidade') is-invalid @enderror form-control" style="width:200px;" id="nome_completo" value="{{ old('cidade') }}" name="cidade">
                                        <option>Recife</option>
                                        <option>Olinda</option>
                                        <option>Garanhuns</option>
                                </select>
                                @error('cidade')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>
                            <div  style="margin-left:10px;">
                                <label for="entradaRua">Rua<a style="color:red"> *</a></label>
                                <input type="text" name="rua" class="@error('rua') is-invalid @enderror form-control" id="nome_completo" style="width:250px;" value="{{ old('rua') }}" id="entrada_rua" aria-describedby="emailHelp" placeholder="ex.: Nome da Rua">
                                <small id="entradaRua" class="form-text text-muted">ex.: aaaaaa</small>
                                @error('rua')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="btn-group">
                            <div>
                                <label for="entradaBairro">Bairro<a style="color:red"> *</a></label>
                                <input type="text" name="bairro" class="@error('bairro') is-invalid @enderror form-control" id="nome_completo" style="width:400px;" value="{{ old('bairro') }}" id="entrada_bairro" aria-describedby="emailHelp" placeholder="ex.: Nome do Bairro">
                                <small id="entradaBairro" class="form-text text-muted">ex.: aaaaaa</small>
                                @error('bairro')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>
                            <div style="margin-left:10px;">
                                <label for="entradaNumero">Número<a style="color:red"> *</a></label>
                                <input type="text" name="numero" class="@error('numero') is-invalid @enderror form-control" id="nome_completo" style="width:130px;" value="{{ old('numero') }}" id="entrada_numero" placeholder="ex.: Número">
                                <small id="entradaNumero" class="form-text text-muted">ex.: aaaaaa</small>
                                @error('numero')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div style="margin-top:10px;">
                            <label for="entradaComplemento">Complemento<a style="color:red"> *</a></label>
                            <input type="text" name="complemento" class="@error('complemento') is-invalid @enderror form-control" id="complemento" style="width:100%;" value="{{ old('complemento') }}" id="complemento" placeholder="ex.: Complemento">
                            <small id="entradaComplemento" class="form-text text-muted">ex.: Perto da Praça, Próximo ao Mercado</small>
                            @error('complemento')
                                <div >
                                    <a style="color:red;">{{ $message }}</a>
                                </div>
                            @enderror
                        </div>
                        <hr/>
                        <div class="form-group">
                            <p>Descrição<a style="color:red"> *</a></p>
                            <textarea name="descricao" class="@error('descricao') is-invalid @enderror form-control" id="nome_completo" value="{{ old('descricao') }}" rows="5" cols="50" placeholder="Digite aqui a descrição da vaga"></textarea>
                            @error('descricao')
                            <div >
                                <a style="color:red;">{{ $message }}</a>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <p>Habilidades Necessárias<a style="color:red"> *</a></p>
                            <textarea name="experiencia" class="@error('experiencia') is-invalid @enderror form-control" id="nome_completo" value="{{ old('experiencia') }}" rows="5" cols="50" placeholder="Digite aqui as hablidades necessárias que o seu candidato deve ter"></textarea>
                            @error('experiencia')
                            <div >
                                <a style="color:red;">{{ $message }}</a>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <p>Atribuições<a style="color:red"> *</a></p>
                            <textarea name="atribuicoes" class="@error('atribuicoes') is-invalid @enderror form-control" id="nome_completo" value="{{ old('atribuicoes') }}" rows="5" cols="50" placeholder="Digite aqui a atribuição que seu candidato deve ter"></textarea>
                            @error('atribuicoes')
                                <div >
                                    <a style="color:red;">{{ $message }}</a>
                                </div>
                            @enderror
                        </div>
                        <hr/>
                        <div class="btn-group">
                            <div>
                                <label for="entradaQuantidade">Quantidade de Vagas<a style="color:red"> *</a></label>
                                <input type="number" name="quantidade" class="@error('quantidade') is-invalid @enderror form-control" id="nome_completo" value="{{ old('quantidade') }}" id="entrada_quantidade" aria-describedby="emailHelp" placeholder="ex.: 1,20, 50">
                                <small id="entradaQuantidadeDeVagas" class="form-text text-muted">ex.: 1,20, 50</small>
                                @error('quantidade')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>
                            <div style="margin-left:15px;">
                                <label for="entradaPCD">Vaga para PCD<a style="color:red"> *</a></label>
                                <div >
                                    <input type="radio" id="simPCD" name="vaga_para_pcd" value=true checked>
                                    <label for="sim">Sim</label>
                                </div>
                                <div >
                                    <input type="radio" id="naoPCD" name="vaga_para_pcd" value=false checked>
                                    <label for="nao">Não</label>
                                </div>
                                <small id="entradaEmail" class="form-text text-muted">PDC - Pessoa com deficiênca.</small>
                            </div>
                        </div>
                        <hr/>
                        <div class="btn-group">
                            <div>
                                <label for="entradaSalario">Salario</label>
                                <input type="number" min="1" step="any" name="salario" class=" form-control" id="nome_completo" value="{{ old('salario') }}" id="entrada_salario" aria-describedby="emailHelp" placeholder="1.000,00 ">
                                <small id="entradaSalario" class="form-text text-muted">ex.: 1.000,00</small>

                            </div>

                            <div style="margin-left:15px;">
                                <label for="entradaTipoDeRemuneracao">Tipo de Remuneração<a style="color:red"> *</a></label>
                                <select class="@error('tipo_de_remuneracao') is-invalid @enderror form-control" id="nome_completo" value="{{ old('tipo_de_remuneracao') }}" name="tipo_de_remuneracao">
                                        <option>Por Mês</option>
                                        <option>Por Semana</option>
                                        <option>Por Dia</option>
                                        <option>Por Hora</option>
                                </select>
                                @error('tipo_de_remuneracao')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div style="position:absolute; left:430px; margin-top:30px;">
                            <button type="submit"
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
                                cursor: pointer;">Salvar Vaga
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

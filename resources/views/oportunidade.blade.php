@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="position: absolute; padding-top: 7.0rem;">
            <div class="card">
                <div class="card-header">Cadastrando uma Oportunidade</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                      <form action="{{route('adicionarOportunidade')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome_completo">Nome da Empresa</label>
                            <input type="text" name="nome_empresa" class="form-control" id="nome_da_Empresa"  placeholder="ex. Nagem, Bompreço">
                            <small id="nome_completo" class="form-text text-muted">ex.: Nagem, WallMart, TodoDia</small>
                        </div>
                        <div class="form-group">
                            <label for="entradaCnpj">CNPJ</label>
                            <input type="text" name="cnpj" class="form-control" id="entrada_CNPJ" aria-describedby="emailHelp" placeholder="ex.: XXXXXXXXXXXXXX">
                            <small id="entradaDataDeNascimento" class="form-text text-muted">ex.: XXXXXXXXXXXXXX</small>
                        </div>
                        <div class="form-group">
                            <label for="entradaTelefone">Telefone</label>
                            <input type="text" name="telefone" class="form-control" id="entrada_telefone" aria-describedby="emailHelp" placeholder="ex.: XXXXXXXXXXXXXX">
                            <small id="entradaDataDeNascimento" class="form-text text-muted">ex.: XXXXXXXXXXXXXX</small>
                        </div>
                        <div class="form-group">
                            <label for="entradaEmail">Email</label>
                            <input type="text" name="email" class="form-control" id="entrada_email" aria-describedby="emailHelp" placeholder="ex.: exemplo@email.com">
                            <small id="entradaEmail" class="form-text text-muted">ex.: exemplo@email.com</small>
                        </div>
                        <br>
                        <hr/>
                        <br>
                        <div class="form-group">
                            <label for="entradaVaga">Nome da Vaga</label>
                            <input type="text" name="nome_vaga" class="form-control" id="entrada_vaga" aria-describedby="emailHelp" placeholder="ex.: Design de Sobrancelhas, Vigilante, Porteiro">
                            <small id="entradaVaga" class="form-text text-muted">ex.: ex.: Design de Sobrancelhas, Vigilante, Porteiro</small>
                        </div>
                        <div class="form-group">
                                <label for="entradaTipoDeVaga">Tipo de Vaga</label>
                                <select class="form-control form-control" name="tipo_de_vaga">
                                        <option>Aprendiz</option>
                                        <option>Autônomo</option>
                                        <option>Comissionado</option>
                                        <option>Concurso</option>
                                        <option>Efetivo/CLT</option>
                                        <option>Estágio</option>
                                        <option>Freelance/MEI</option>
                                        <option>Temporário</option>
                                        <option>Trainne</option>
                                        <option>Voluntário</option>
                                </select>
                        </div>
                        <br>
                        <hr/>
                        <br>
                        <div class="form-group">
                                <label for="entradaUF">UF</label>
                                <select class="form-control form-control" name="uf">
                                        <option>PE</option>
                                        <option>PB</option>
                                        <option>PA</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="entradaCidade">Cidade</label>
                                <select class="form-control form-control" name="cidade">
                                        <option>Recife</option>
                                        <option>João Pessoa</option>
                                        <option>Belém</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="entradaBairro">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="entrada_bairro" aria-describedby="emailHelp" placeholder="ex.: aaaaaa">
                            <small id="entradaBairro" class="form-text text-muted">ex.: aaaaaa</small>
                        </div>
                        <div class="form-group">
                            <label for="entradaRua">Rua</label>
                            <input type="text" name="rua" class="form-control" id="entrada_rua" aria-describedby="emailHelp" placeholder="ex.: aaaaaa">
                            <small id="entradaRua" class="form-text text-muted">ex.: aaaaaa</small>
                        </div>
                        <div class="form-group">
                            <label for="entradaNumero">Número</label>
                            <input type="text" name="numero" class="form-control" id="entrada_numero" placeholder="ex.: aaaaaa">
                            <small id="entradaNumero" class="form-text text-muted">ex.: aaaaaa</small>
                        </div>
                        <br>
                        <hr/>
                        <br>
                        <div class="form-group">
                            <p>Atribuições</p>
                            <textarea name="atribuicoes" rows="5" cols="50" placeholder="Digite aqui a atribuição que seu candidato deve ter"></textarea>                        </div>
                        <div class="form-group">
                            <p>Descrição</p>
                            <textarea name="descricao" rows="5" cols="50" placeholder="Digite aqui a descrição da vaga"></textarea>
                        </div>
                        <div class="form-group">
                            <p>Experiência</p>
                            <textarea name="experiencia" rows="5" cols="50" placeholder="Digite aqui a experiência que seu candidato deve ter"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="entradaQuantidade">Quantidade de Vagas</label>
                            <input type="number" name="quantidade" class="form-control" id="entrada_quantidade" aria-describedby="emailHelp" placeholder="ex.: 1,20, 50">
                            <small id="entradaQuantidadeDeVagas" class="form-text text-muted">ex.: 1,20, 50</small>
                        </div>
                        <div class="form-group">
                            <label for="entradaSalario">Salario</label>
                            <input type="number" min="1" step="any" name="salario" id="entrada_salario" aria-describedby="emailHelp" placeholder="1.000,00 ">
                            <small id="entradaSalario" class="form-text text-muted">ex.: 1.000,00</small>
                        </div>
                        <div class="form-group">
                            <label for="entradaTipoDeRemuneracao">Tipo de Remuneração</label>
                            <select class="form-control form-control" name="tipo_de_remuneracao">
                                    <option>Por Mês</option>
                                    <option>Por Semana</option>
                                    <option>Por Dia</option>
                                    <option>Por Hora</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="entradaPCD">Vaga para PCD</label>
                            <div>
                                <input type="radio" id="simPCD" name="vaga_para_pcd" value=true checked>
                                <label for="sim">Sim</label>
                            </div>
                            <div>
                                <input type="radio" id="naoPCD" name="vaga_para_pcd" value=false checked>
                                <label for="nao">Não</label>
                            </div>
                            <small id="entradaEmail" class="form-text text-muted">PDC - Pessoa com deficiênca.</small>
                        </div>

                        <button type="submit" style="background-color:chartreuse;">Salvar vaga</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

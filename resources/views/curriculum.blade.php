@extends('layouts.app')

<a>PREENCHA O SEU CURRICULO</a>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Currículo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group">
                      <form action="{{route('adicionarCurriculum')}}" id="form1">
                            <div class="form-group">
                                <label for="nome_completo">Nome Completo</label>
                                <input type="text" name="nome_completo" class="form-control" id="nome_completo"  placeholder="Seu email">
                                <small id="nome_completo" class="form-text text-muted">ex.: Maria José da Silva</small>
                            </div>
                            <div class="form-group">
                                <label for="entradaDataDeNascimento">Data de Nascimento</label>
                                <input type="date" name="data_de_nascimento" class="form-control" id="entradaDataDeNascimento" aria-describedby="emailHelp" placeholder="DD/MM/AAAA">
                                <small id="entradaDataDeNascimento" class="form-text text-muted">ex.: DD/MM/AAAA</small>
                            </div>
                            <div class="form-group">
                                <label for="entradaEmail">Endereço de email</label>
                                <input type="email" name="email" class="form-control" id="entradaEmail" aria-describedby="emailHelp" placeholder="exemplo@email.com">
                                <small id="entradaEmail" class="form-text text-muted">E-mail para contato</small>
                            </div>
                            <div class="form-group">
                                <label for="entradaCPF">CPF</label>
                                <input type="text" name="cpf" class="form-control" id="entradaCPF" aria-describedby="emailHelp" placeholder="ex.: XXXXXXXXXXX">
                                <small id="entradaCPF" class="form-text text-muted">ex.: XXXXXXXXXXX</small>
                            </div>
                            <div class="form-group">
                                <label for="entradaTelefone">Telefone</label>
                                <input type="tel" name="telefone" class="form-control" id="entradaTelefone" aria-describedby="emailHelp" placeholder="ex.: (XX)XXXXXXXXX">
                                <small id="entradaTelefone" class="form-text text-muted">ex.: (XX)XXXXXXXXX</small>
                            </div>
                            <div class="form-group">
                                <label for="entradaCelular">Celular</label>
                                <input type="tel" name="celular" class="form-control" id="entradaCelular" aria-describedby="emailHelp" placeholder="ex.: (XX)XXXXXXXXX">
                                <small id="entradaCelular" class="form-text text-muted">ex.: (XX)XXXXXXXXX</small>
                            </div>
                            <div class="form-group">
                                <label for="entradaCelular">Nivel de Formação</label>
                                <select class="form-control form-control" name="nivel_de_formacao">
                                    <option>Ensino Fundamental Incompleto</option>
                                    <option>Ensino Fundamental Completo</option>
                                    <option>Ensino Médio Incompleto</option>
                                    <option>Ensino Médio Completo</option>
                                    <option>Técnico/Pós-Médio Incompleto</option>
                                    <option>Técnico/Pós-Médio Completo</option>
                                    <option>Tecnólogico Incompleto</option>
                                    <option>Superior Incompleto</option>
                                    <option>Tecnólogico Completo</option>
                                    <option>Superior Completo</option>
                                </select></br>
                            </div>
                            <div class="form-group">
                                <p>Você tem alguma defiência?</p>
                                <form>
                                    <input type="checkbox" name="sim" value="Sim">Sim<br>
                                    <input type="checkbox" name="tipo_de_deficiencia" value="Não" checked>Não<br>
                                </form>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="politica_de_privacidade">
                                <label class="form-check-label" for="politica_de_privacidade">Estou de acordo com a politica de privacidade</label>
                            </div>
                            <button form="form1" type="submit">Salvar curriculo</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

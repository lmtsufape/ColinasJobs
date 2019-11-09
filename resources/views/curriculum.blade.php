@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="position: absolute; padding-top: 7.0rem; padding: 90px;">
            <div class="card" style="-webkit-box-shadow: 0px -1px 13px 4px rgba(0,0,0,0.17);
            -moz-box-shadow: 0px -1px 13px 4px rgba(0,0,0,0.17);
            box-shadow: 0px -1px 13px 4px rgba(0,0,0,0.17);">
                <div class="card-body" style="padding:2rem;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group">
                    @if(isset($candidatos)) {{--Verifica se o objeto candidato existe--}}
                        @foreach ($candidatos as $item)
                        <form action="{{route('atualizarMiniCurriculo')}}" id="form1"> {{--Vou pra rota atualizaarMiniCuriculo se o objeto $candidato existir--}}
                            {{-- {!! method_field('PUT') !!} --}}
                        @endforeach
                    @else
                        <form action="{{route('adicionarMiniCurriculo')}}" id="form1"> {{--Vou pra rota adicionarMiniCurriculo se o objeto $candidato existir--}}
                    @endif
                        <div id="minicurriculo"><div>
                            <center style="font-family: Times New Roman, Times, serif; font-size:25px; 'width':100%; height:30px; color:black; margin-top:20px;">Mini Currículo</center><br>
                           <div class="btn-group">
                                <div>
                                    <p style="font-family: 'Courgette', cursive; font-size:19px; color:#f69552; margin-top:20px; width:200px;">Preenchendo o Mini Currículo você vai concorrer as vagas ofertadas no sistema.</p>
                                </div>
                                <div style="height: 185px;border-left: 1px solid;color:#d3d3d3; margin-top:25px;">
                                </div>
                                <div style="margin-left:20px; margin-top:25px;">
                                    <div>
                                        <label for="nome_completo">Nome Completo<a style="color:red"> *</a></label>
                                        @if(isset($candidatos)) {{--Verifica se o objeto candidato existe--}}
                                            @foreach ($candidatos as $item)
                                                <input style="width:100%;" type="text" name="nome_completo" class="@error('nome_completo') is-invalid @enderror form-control" id="nome_completo" value="{{$item->nome_completo}}" placeholder="Digite o seu nome completo">
                                            @endforeach
                                        @else
                                    <input style="width:400px;" type="text" name="nome_completo" class="@error('nome_completo') is-invalid @enderror form-control" id="nome_completo" value="{{Auth::user()->name}}" placeholder="Digite o seu nome completo">
                                        @endif
                                            <small id="nome_completo" class="form-text text-muted">ex.: Maria José da Silva</small>
                                            @error('nome_completo')
                                                <div>
                                                    <a style="color:red;">{{ $message }}</a>
                                                </div>
                                            @enderror
                                    </div>
                                    <div>
                                        <label for="entradaEmail">E-mail<a style="color:red"> *</a></label>

                                            <input disabled type="email" name="email" class="@error('email') is-invalid @enderror form-control" style="width:400px;" id="entradaEmail" aria-describedby="emailHelp" value="{{Auth::user()->email}}" placeholder="exemplo@email.com">

                                            <small id="entradaEmail" class="form-text text-muted">E-mail para contato</small>
                                        @error('email')
                                            <div >
                                                <a style="color:red;">{{ $message }}</a>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="btn-group" style="width:1020px; margin-top:25px;">
                                <div>
                                    <label for="entradaDataDeNascimento">Data de Nascimento<a style="color:red"> *</a></label>
                                    @if(isset($candidatos)) {{--Verifica se o objeto candidato existe--}}
                                        @foreach ($candidatos as $item)
                                            <input type="date" name="data_de_nascimento" class="@error('data_de_nascimento') is-invalid @enderror form-control" value="{{$item->data_de_nascimento}}" style="width:140px;" id="data_de_nascimento" aria-describedby="emailHelp" placeholder="DD/MM/AAAA">
                                        @endforeach
                                    @else
                                        <input type="date" name="data_de_nascimento" class="@error('data_de_nascimento') is-invalid @enderror form-control" value="{{ old('data_de_nascimento') }}" style="width:140px;" id="data_de_nascimento" aria-describedby="emailHelp" placeholder="DD/MM/AAAA">
                                    @endif
                                    <small id="data_de_nascimento" class="form-text text-muted">ex.: DD/MM/AAAA</small>
                                    @error('data_de_nascimento')
                                        <div >
                                            <a style="color:red;">{{ $message }}</a>
                                        </div>
                                    @enderror
                                </div>
                                <div class="btn-group" style="margin-left:30px;">
                                    <div class="btn-group">
                                            <div>
                                                <label for="cpf">CPF<a style="color:red"> *</a></label>
                                                @if(isset($candidatos)) {{--Verifica se o objeto candidato existe--}}
                                                    @foreach ($candidatos as $item)
                                                        <input type="text" name="cpf" class="@error('cpf') is-invalid @enderror form-control" value="{{$item->cpf}}" style="width:200px;" id="cpf" aria-describedby="emailHelp" placeholder="ex.: XXXXXXXXXXX">
                                                    @endforeach
                                                @else
                                                    <input type="text" name="cpf" class="@error('cpf') is-invalid @enderror form-control" value="{{ old('cpf') }}" style="width:200px;" id="cpf" aria-describedby="emailHelp" placeholder="ex.: XXXXXXXXXXX">
                                                @endif
                                                <small id="cpf" class="form-text text-muted">ex.: XXXXXXXXXXX</small>
                                                @error('cpf')
                                                    <div >
                                                        <a style="color:red;">{{ $message }}</a>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div style="margin-left:30px;">
                                                <p>Você tem alguma deficiência?<a style="color:red"> *</a></p>
                                                <div class="form-group">
                                                    Sim <input type="radio" onclick="javascript:yesnoCheck();" name="tipo_de_deficiencia" id="yesCheck" > Não <input type="radio" onclick="javascript:yesnoCheck();" name="tipo_de_deficiencia" id="noCheck" checked>
                                                    <div id="ifYes" style="visibility:hidden">
                                                        <textarea type='text' id='yes' name='tipo_de_deficiencia' rows="1" cols="20" style="margin-top:9px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="btn-group" style="margin-top:10px;">
                                        <div>
                                            <label for="nivel_de_formacao">Nível de Formação<a style="color:red"> *</a></label>
                                            <select class="form-control @error('nivel_de_formacao') is-invalid @enderror" style="width:300px;" name="nivel_de_formacao">
                                                @if(isset($candidatos)) {{--Verifica se o objeto candidato existe--}}
                                                    @foreach ($candidatos as $item)
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
                                                        selected
                                                        <option value="{{$item->nivel_de_formacao}}"
                                                        >{{$item->nivel_de_formacao}}</option>
                                                    @endforeach
                                                @else
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
                                                @endif
                                                </select>
                                                @if($errors->has("nivel_de_formacao"))
                                                    <span class="help-block">
                                                        <strong>{{$errors->first("nivel_de_formacao")}}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div style="margin-left:10px;">
                                            <div class="form-group" style="margin-left:10px;">
                                                <label for="entradaFuncao">Função ou Cargo Pretendido<a style="color:red"> *</a></label>
                                                @if(isset($candidatos)) {{--Verifica se o objeto candidato existe--}}
                                                    @foreach ($candidatos as $item)
                                                        <input type="text" name="funcao" class="@error('funcao') is-invalid @enderror form-control" style="width:310px;" id="entradaFuncao" value="{{$item->funcao}}" placeholder="ex. mecânico, pintor, segurança">
                                                    @endforeach
                                                @else
                                                    <input type="text" name="funcao" class="@error('funcao') is-invalid @enderror form-control" style="width:310px;" id="entradaFuncao" value="{{ old('funcao') }}" placeholder="ex. mecânico, pintor, segurança">
                                                @endif
                                                <p style="color:blue;"><small>(Separe as Funções ou Cargos Pretendidos por vírgula)</small></p>
                                                @error('funcao')
                                                    <div>
                                                        <a style="color:red;">{{ $message }}</a>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                </div><br>
                                <div style="float:right;">
                                </div>
                                    {{-- <div>
                                        <label for="entradaFuncao">Função<a style="color:red"> *</a></label>
                                        <input id="selecaoFuncao" type="text" name="funcao" class="@error('funcao') is-invalid @enderror form-control" style="width:300px;" id="entradaFuncao" value="{{ old('funcao') }}" placeholder="Digite aqui a sua função">
                                        <small id="entradaFuncao" class="form-text text-muted">ex.: Pintor, Manobrista</small>
                                        @error('funcao')
                                            <div >
                                                <a style="color:red;">{{ $message }}</a>
                                            </div>
                                        @enderror
                                        <input type="button" name="botao" value="Adicionar" onclick='teste(selecaoFuncao)'>
                                        <p style="font-family: 'Courgette', cursive; font-size:19px; color:#f69552; margin-top:20px; width:280px;">O campo função vai servir de elo de ligação entre você e as oportunidades.</p>
                                    </div>
                                </div>
                                <div style="float:left;">
                                    <textarea type='text' id='tags' name='funcao' rows="10" cols="29" style="margin-top:9px; resize: none;"></textarea>

                                </div> --}}
                                <div class="btn-group">
                                    <div>
                                        <label for="entradaCelular">Celular<a style="color:red"> *</a></label>
                                        @if(isset($candidatos)) {{--Verifica se o objeto candidato existe--}}
                                            @foreach ($candidatos as $item)
                                                <input type="tel" name="celular" class="@error('celular') is-invalid @enderror form-control" value="{{$item->celular}}" style="width:200px;" id="entradaCelular" aria-describedby="emailHelp" placeholder="ex.: XXXXXXXXXXX">
                                            @endforeach
                                        @else
                                            <input type="tel" name="celular" class="@error('celular') is-invalid @enderror form-control" value="{{ old('celular') }}" style="width:200px;" id="entradaCelular" aria-describedby="emailHelp" placeholder="ex.: XXXXXXXXXXX">
                                        @endif
                                        <small id="entradaCelular" class="form-text text-muted">ex.: XXXXXXXXXXX</small>
                                        @error('celular')
                                            <div >
                                                <a style="color:red;">{{ $message }}</a>
                                            </div>
                                        @enderror
                                    </div>
                                    <div style="margin-left:20px;">
                                        <label for="entradaTelefone">Telefone </label>
                                        @if(isset($candidatos)) {{--Verifica se o objeto candidato existe--}}
                                            @foreach ($candidatos as $item)
                                                <input type="tel" name="telefone" class="@error('telefone') is-invalid @enderror form-control" value="{{$item->telefone}}" style="width:200px;" id="entradaTelefone" aria-describedby="emailHelp" placeholder="ex.: XXXXXXXXXXX">
                                            @endforeach
                                        @else
                                            <input type="tel" name="telefone" class="@error('telefone') is-invalid @enderror form-control" value="{{ old('telefone') }}" style="width:200px;" id="entradaTelefone" aria-describedby="emailHelp" placeholder="ex.: XXXXXXXXXXX">
                                        @endif
                                        <small id="entradaTelefone" class="form-text text-muted">ex.: XXXXXXXXXXX</small>
                                        @error('telefone')
                                            <div >
                                                <a style="color:red;">{{ $message }}</a>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div style="margin-top:20px;">
                                        <div style=" position: absolute; margin-top:-5px;">
                                            <input id="tdc" type="checkbox" name="tdc" onclick="termoDeCompromisso();"  class="@error('termo_de_compromisso') is-invalid @enderror form-control" value="{{ old('termo_de_compromisso') }}">

                                        </div>
                                        <label class="form-check-label" style="margin-left:20px;" for="politica_de_privacidade"> Concordo com a</label><a href=""> politica de privacidade</a>
                                        @error('termo_de_compromisso')
                                            <div >
                                                <a style="color:red;">{{ $message }}</a>
                                            </div>
                                        @enderror
                                </div>
                                <div style="margin-top:90px;">
                                    <div style="position:absolute; left:490px; margin-top:-35px;">
                                        @if(isset($candidatos)) {{--Verifica se o objeto candidato existe--}}
                                            <button type="submit"
                                                style="
                                                border: none;
                                                border-radius: 8px;
                                                color: white;
                                                padding: 8px 11px;
                                                text-align: center;
                                                text-decoration: none;
                                                display: inline-block;
                                                font-size: 13px;
                                                margin: 0px 2px;
                                                cursor: pointer;" disabled id="salvarMiniCurriculo">Atualizar Mini Currículo
                                            </button>
                                        @else
                                            <button type="submit"
                                                style="background-color:gray
                                                border: none;
                                                border-radius: 8px;
                                                color: white;
                                                padding: 8px 11px;
                                                text-align: center;
                                                text-decoration: none;
                                                display: inline-block;
                                                font-size: 13px;
                                                margin: 0px 2px;
                                                cursor: pointer;" disabled id="salvarMiniCurriculo">Salvar Mini Currículo e Sair
                                            </button>
                                        @endif
                                     </div>
                                    </div>
                                    <br>
                                    <br>
                                <hr/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';
    clearTextArea();
}

var teste = function(obj)
{

alert(obj.value);

}

function termoDeCompromisso(){
    if(document.getElementById('tdc').checked == true){
        document.getElementById('salvarMiniCurriculo').disabled = false;
        document.getElementById('salvarMiniCurriculo').style.backgroundColor = "#4285f4";

    }if(document.getElementById('tdc').checked == false){
        document.getElementById('salvarMiniCurriculo').style.backgroundColor = "gray";
        document.getElementById('salvarMiniCurriculo').disabled = true;
    }
}

function clearTextArea() {
    document.getElementById('yes').value = " ";
}

</script>
@endsection

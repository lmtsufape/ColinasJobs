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
                    <?php if(!is_null($enderecos)){ ?>
                        @if(count($enderecos)==0)
                            <form action="{{route('adicionarEndereco')}}" id="form2"> {{--Vou pra rota adicionarMiniCuriculo se o objeto $candidato existir--}}
                        @endif
                            <form action="{{route('atualizarEndereco')}}" id="form2"> {{--Vou pra rota atualizarMiniCuriculo se o objeto $candidato existir--}}

                    <?php } ?>
                            <center style="font-family: Times New Roman, Times, serif; font-size:25px; 'width':100%; height:30px; color:black; margin-top:20px;">Endereço</center><br>
                            <div class="btn-group">
                                <div>
                                    <p style="font-family: 'Courgette', cursive; font-size:19px; color:#f69552; margin-top:20px; width:200px;">O endereço é uma das partes essenciais na hora de avaliar um candidato.</p>
                                </div>
                                <div style="height: 185px;border-left: 1px solid;color:#d3d3d3; margin-top:5px;">
                                </div>
                                <div class="form-group" style="margin-left:20px; margin-top:15px;">
                                    <div >
                                        <label for="entradaUf">UF<a style="color:red"> *</a></label>
                                        <select class="form-control form-control" style="width:70px;" name="uf">
                                            @if(isset($enderecos)) {{--Verifica se o objeto endereco existe--}}
                                                    <option>PE</option>
                                            @else
                                                <option>PE</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div style="margin-top:20px;">
                                        <label for="entradaCidade">Cidade<a style="color:red"> *</a></label>
                                        <select class="form-control form-control" style="width:200px;" name="cidade">
                                            @if(isset($enderecos)) {{--Verifica se o objeto candidato existe--}}
                                                @foreach ($enderecos as $item)
                                                selected
                                                    <option value="{{$item->cidade}}"
                                                    >{{$item->cidade}}</option>
                                                    <option>Recife</option>
                                                    <option>Garanhuns</option>
                                                    <option>Caruaru</option>
                                                    <option>Olinda</option>

                                                @endforeach
                                            @endif
                                                <option>Recife</option>
                                                <option>Garanhuns</option>
                                                <option>Caruaru</option>
                                                <option>Olinda</option>

                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="btn-group" style="width:1020px; margin-top:25px;">
                                <div>
                                    <label for="entradaBairro">Bairro</label>
                                    <?php if(!is_null($enderecos)){ ?> {{--Verifica se o objeto candidato existe--}}
                                        @if(count($enderecos)==0)
                                                <input type="text" name="bairro" class="@error('bairro') is-invalid @enderror form-control" value="{{ old('bairro') }}" style="width:200px;" id="rua" aria-describedby="emailHelp" placeholder="Digite o nome do bairro">
                                        @endif
                                        @foreach ($enderecos as $item)
                                            <input type="text" name="bairro" class="@error('bairro') is-invalid @enderror form-control" value="{{ $item->bairro}}" style="width:200px;" id="rua" aria-describedby="emailHelp" placeholder="Digite o nome do bairro">
                                        @endforeach
                                    <?php } ?>
                                    <small id="bairro" class="form-text text-muted">ex.: Piedade, Candeias</small>
                                    @error('bairro')
                                        <div >
                                            <a style="color:red;">{{ $message }}</a>
                                        </div>
                                    @enderror
                                </div>
                                <div class="btn-group" style="margin-left:30px;">
                                    <div class="btn-group">
                                            <div>
                                                <label for="rua">Rua</label>
                                                <?php if(!is_null($enderecos)){ ?> {{--Verifica se o objeto candidato existe--}}
                                                @if(count($enderecos)==0)
                                                    <input type="text" name="rua" class="@error('rua') is-invalid @enderror form-control" value="{{ old('rua') }}" style="width:200px;" id="rua" aria-describedby="emailHelp" placeholder="Digite o nome da rua">
                                                @endif
                                                @foreach ($enderecos as $item)
                                                    <input type="text" name="rua" class="@error('rua') is-invalid @enderror form-control" value="{{$item->rua}}" style="width:200px;" id="rua" aria-describedby="emailHelp" placeholder="Digite o nome da rua">
                                                @endforeach
                                                <?php } ?>
                                                <small id="rua" class="form-text text-muted">ex.: Prosperidade</small>
                                                @error('rua')
                                                    <div >
                                                        <a style="color:red;">{{ $message }}</a>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div style="margin-left:30px;">
                                                <div class="form-group">
                                                    <label for="numero">Número</label>
                                                    <?php if(!is_null($enderecos)){ ?> {{--Verifica se o objeto candidato existe--}}
                                                    @if(count($enderecos)==0)
                                                        <input type="text" name="numero" class="@error('numero') is-invalid @enderror form-control" value="{{ old('numero') }}" style="width:150px;" id="numero" aria-describedby="emailHelp" placeholder="Nº da residência">
                                                    @endif
                                                    @foreach ($enderecos as $item)
                                                        <input type="text" name="numero" class="@error('numero') is-invalid @enderror form-control" value="{{$item->numero}}" style="width:150px;" id="numero" aria-describedby="emailHelp" placeholder="Nº da residência">
                                                    @endforeach
                                                    <?php } ?>
                                                    <small id="numero" class="form-text text-muted">ex.: 42A</small>
                                                    @error('numero')
                                                        <div >
                                                            <a style="color:red;">{{ $message }}</a>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                                <div style="margin-top:90px; margin-left:100px; margin-top:50px;">
                                    {{-- <div style="position:absolute; left:30px; margin-top:-35px;">
                                        <a href="#endereco"
                                            style="background-color:#4285f4;
                                            border: none;
                                            border-radius: 8px;
                                            color: white;
                                            padding: 8px 11px;
                                            text-align: center;
                                            text-decoration: none;
                                            display: inline-block;
                                            font-size: 13px;
                                            margin: 0px 2px;
                                            cursor: pointer;">Voltar
                                        </a>
                                    </div> --}}
                                    <div style="position:absolute; left:490px; margin-top:-35px;">

                                        <?php if(!is_null($enderecos)){ ?>
                                            @if(count($enderecos)==0) {{--Verifica se o objeto candidato existe--}}
                                            <button type="submit"
                                                style="background-color:#4285f4;
                                                border: none;
                                                border-radius: 8px;
                                                color: white;
                                                padding: 8px 11px;
                                                text-align: center;
                                                text-decoration: none;
                                                display: inline-block;
                                                font-size: 13px;
                                                margin: 0px 2px;
                                                cursor: pointer;">Salvar Endereço e Sair
                                            </button>
                                        @else
                                            <button type="submit"
                                                style="background-color:green;
                                                border: none;
                                                border-radius: 8px;
                                                color: white;
                                                padding: 8px 11px;
                                                text-align: center;
                                                text-decoration: none;
                                                display: inline-block;
                                                font-size: 13px;
                                                margin: 0px 2px;
                                                cursor: pointer;">Atualizar Endereço e Sair
                                            </button>
                                        @endif
                                        <?php } ?>
                                     </div>
                                </div>
                        </form>
                    </div>
                </div>
                <div>
                    <form action="{{route('abrir_painel_curriculum')}}">
                        <div style="padding:10px; float:right;">
                            <button type="submit">Voltar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';
}

var teste = function(obj)
{

alert(obj.value);

}
</script>
@endsection

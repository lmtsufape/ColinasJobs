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
                        <?php if(!is_null($escolaridades)){ ?>
                            @if(count($escolaridades)==0)
                                <form action="{{route('adicionarEscolaridade')}}" id="form2"> {{--Vou pra rota atualizaarMiniCuriculo se o objeto $candidato existir--}}
                            @endif
                                <form action="{{route('atualizarEscolaridade')}}" id="form2"> {{--Vou pra rota atualizaarMiniCuriculo se o objeto $candidato existir--}}
                        <?php } ?>
                            <center style="font-family: Times New Roman, Times, serif; font-size:25px; 'width':100%; height:30px; color:black; margin-top:20px;">Escolaridade</center><br>
                            <div class="btn-group">
                                <div>
                                    <p style="font-family: 'Courgette', cursive; font-size:19px; color:#f69552; margin-top:20px; width:200px;">A Escolaridade é uma parte essencial na hora de avaliar um candidato.</p>
                                </div>
                                <div style="height: 185px;border-left: 1px solid;color:#d3d3d3; margin-top:5px;">
                                </div>
                                <div class="form-group" style="margin-left:20px; margin-top:15px;">
                                    <div >
                                        <label for="entradaInstituicao">Instituição<a style="color:red"> *</a></label>

                                            <?php if(!is_null($escolaridades)){ ?>
                                                @if(count($escolaridades)==0)
                                                    <input type="text" name="instituicao" class="@error('instituicao') is-invalid @enderror form-control" value="{{ old('instituicao') }}" style="width:400px;" id="instituicao" aria-describedby="emailHelp" placeholder="Digite o nome do bairro">
                                                @endif
                                                @foreach ($escolaridades as $item)
                                                    <input type="text" name="instituicao" class="@error('instituicao') is-invalid @enderror form-control" value="{{ $item->instituicao }}" style="width:400px;" id="instituicao" aria-describedby="emailHelp" placeholder="Digite o nome do bairro">
                                                @endforeach

                                            <?php } ?>

                                        <small id="instituicao" class="form-text text-muted">ex.: Universidade Federal Rural de Pernambuco</small>
                                        @error('instituicao')
                                            <div >
                                                <a style="color:red;">{{ $message }}</a>
                                            </div>
                                        @enderror
                                    </div>
                                    <div style="margin-top:20px;">
                                            <label for="entradaCurso">Curso<a style="color:red"> *</a></label>

                                            <?php if(!is_null($escolaridades)){ ?>
                                                @if(count($escolaridades)==0)
                                                    <input type="text" name="curso" class="@error('curso') is-invalid @enderror form-control" value="{{ old('curso') }}" style="width:400px;" id="curso" aria-describedby="emailHelp" placeholder="Digite o nome do curso">
                                                @endif
                                                @foreach ($escolaridades as $item)
                                                    <input type="text" name="curso" class="@error('curso') is-invalid @enderror form-control" value="{{ $item->curso }}" style="width:400px;" id="curso" aria-describedby="emailHelp" placeholder="Digite o nome do curso">
                                                @endforeach

                                            <?php } ?>

                                        <small id="instituicao" class="form-text text-muted">ex.: Universidade Federal Rural de Pernambuco</small>
                                        @error('instituicao')
                                            <div >
                                                <a style="color:red;">{{ $message }}</a>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" style="width:1020px; margin-top:20px;">
                                <div style="margin-left:220px">
                                    <label for="entradaDataInicio">Data de Entrada<a style="color:red"> *</a></label>

                                    <?php if(!is_null($escolaridades)){ ?>
                                        @if(count($escolaridades)==0)
                                            <input type="date" name="data_inicio" class="@error('data_inicio') is-invalid @enderror form-control" value="{{ old('data_inicio') }}" style="width:150px;" id="curso" aria-describedby="emailHelp" placeholder=" ">
                                        @endif
                                        @foreach ($escolaridades as $item)
                                            <input type="date" name="data_inicio" class="@error('data_inicio') is-invalid @enderror form-control" value="{{ $item->data_inicio }}" style="width:150px;" id="curso" aria-describedby="emailHelp" placeholder=" ">
                                        @endforeach

                                    <?php } ?>

                                    <small id="data_inicio" class="form-text text-muted">ex.: dd/mm/aaaa</small>
                                    @error('data_inicio')
                                        <div >
                                            <a style="color:red;">{{ $message }}</a>
                                        </div>
                                    @enderror
                                </div>
                                <div style="margin-left:20px;">
                                        <label for="entradaDataConclusao">Data de Conclusão<a style="color:red"> *</a></label>

                                        <?php if(!is_null($escolaridades)){ ?>
                                            @if(count($escolaridades)==0)
                                                <input type="date" name="data_conclusao" class="@error('data_conclusao') is-invalid @enderror form-control" value="{{ old('data_conclusao') }}" style="width:150px;" id="curso" aria-describedby="emailHelp" placeholder=" ">
                                            @endif
                                            @foreach ($escolaridades as $item)
                                                <input type="date" name="data_conclusao" class="@error('data_conclusao') is-invalid @enderror form-control" value="{{ $item->data_conclusao }}" style="width:150px;" id="curso" aria-describedby="emailHelp" placeholder=" ">
                                            @endforeach

                                        <?php } ?>

                                        <small id="data_conclusao" class="form-text text-muted">ex.: dd/mm/aaaa</small>
                                        @error('data_conclusao')
                                            <div >
                                                <a style="color:red;">{{ $message }}</a>
                                            </div>
                                        @enderror
                                    </div>
                            </div>
                                <div style="margin-top:90px; margin-left:100px; margin-top:50px;">

                                    <div style="position:absolute; left:510px; margin-top:-35px;">

                                            <?php if(!is_null($escolaridades)){ ?>
                                                @if(count($escolaridades)==0) {{--Verifica se o objeto candidato existe--}}
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
                                                        cursor: pointer;">Salvar Escolaridade
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
                                                        cursor: pointer;">Atualizar Escolaridade e Sair
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

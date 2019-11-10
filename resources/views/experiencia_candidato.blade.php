@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="position: absolute; padding-top: 7.0rem; padding: 90px;">
            <div class="card" style="-webkit-box-shadow: 0px -1px 13px 4px rgba(0,0,0,0.17);
            -moz-box-shadow: 0px -1px 13px 4px rgba(0,0,0,0.17);
            box-shadow: 0px -1px 13px 4px rgba(0,0,0,0.17);">
                <div class="card-body" style="padding:2rem; height:650px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <?php if(!is_null($experiencias)){ ?>
                            @if(count($experiencias)==0)
                                <form action="{{route('adicionarExperiencias')}}" id="form2">
                            @endif
                                <form action="{{route('atualizarExperiencia')}}" id="form2">
                        <?php } ?>
                            <center style="font-family: Times New Roman, Times, serif; font-size:25px; 'width':100%; height:30px; color:black; margin-top:20px;">Experiência</center><br>
                            <div class="btn-group">
                                <div>
                                    <p style="font-family: 'Courgette', cursive; font-size:19px; color:#f69552; margin-top:20px; width:200px;">A Experiência é um dos pontos essenciais na hora de avaliar um candidato.</p>
                                </div>
                                <div style="height: 185px;border-left: 1px solid;color:#d3d3d3; margin-top:5px;">
                                </div>
                                <div class="form-group" style="margin-left:20px; margin-top:15px;">
                                    <div >
                                        <label for="entradaInstituicao">Nome da Empresa<a style="color:red"> *</a></label>

                                            <?php if(!is_null($experiencias)){ ?>
                                                @if(count($experiencias)==0)
                                                    <input type="text" name="nome_empresa" class="@error('nome_empresa') is-invalid @enderror form-control" value="{{ old('nome_empresa') }}" style="width:400px;" id="nome_empresa" aria-describedby="emailHelp" placeholder="Digite o nome da empresa">
                                                @endif
                                                @foreach ($experiencias as $item)
                                                    <input type="text" name="nome_empresa" class="@error('nome_empresa') is-invalid @enderror form-control" value="{{ $item->nome_empresa }}" style="width:400px;" id="nome_empresa" aria-describedby="emailHelp" placeholder="Digite o nome da empresa">
                                                @endforeach

                                            <?php } ?>

                                        <small id="nome_empresa" class="form-text text-muted">ex.: nagem, Bompreço</small>
                                        @error('nome_empresa')
                                            <div >
                                                <a style="color:red;">{{ $message }}</a>
                                            </div>
                                        @enderror
                                    </div>
                                    <div >
                                            <label for="entradaInstituicao">Atribuição<a style="color:red"> *</a></label>

                                                <?php if(!is_null($experiencias)){ ?>
                                                    @if(count($experiencias)==0)
                                                        <input type="text" name="atribuicao" class="@error('atribuicao') is-invalid @enderror form-control" value="{{ old('atribuicao') }}" style="width:400px;" id="atribuicao" aria-describedby="emailHelp" placeholder="Digite a sua atribuição na empresa">
                                                    @endif
                                                    @foreach ($experiencias as $item)
                                                        <input type="text" name="atribuicao" class="@error('atribuicao') is-invalid @enderror form-control" value="{{ $item->atribuicao }}" style="width:400px;" id="atribuicao" aria-describedby="emailHelp" placeholder="Digite a sua atribuição na empresa">
                                                    @endforeach

                                                <?php } ?>

                                            <small id="atribuicao" class="form-text text-muted">ex.: vendedor</small>
                                            @error('atribuicao')
                                                <div >
                                                    <a style="color:red;">{{ $message }}</a>
                                                </div>
                                            @enderror
                                        </div>
                                </div>
                            </div>
                            <div style="margin-left:220px;">
                                <label for="entradaInstituicao">Cargo<a style="color:red"> *</a></label>

                                <?php if(!is_null($experiencias)){ ?>
                                    @if(count($experiencias)==0)
                                        <input type="text" name="nome_cargo" class="@error('nome_cargo') is-invalid @enderror form-control" value="{{ old('nome_cargo') }}" style="width:400px;" id="atribuicao" aria-describedby="emailHelp" placeholder="Digite o seu cargo na empresa">
                                    @endif
                                    @foreach ($experiencias as $item)
                                        <input type="text" name="nome_cargo" class="@error('nome_cargo') is-invalid @enderror form-control" value="{{ $item->nome_cargo }}" style="width:400px;" id="atribuicao" aria-describedby="emailHelp" placeholder="Digite o seu cargo na empresa">
                                    @endforeach

                                <?php } ?>

                                <small id="nome_cargo" class="form-text text-muted">ex.: vendedor</small>
                                @error('nome_cargo')
                                    <div >
                                        <a style="color:red;">{{ $message }}</a>
                                    </div>
                                @enderror
                            </div>
                                <div class="btn-group" style="margin-top:15px; margin-left:220px">
                                        <div>
                                            <label for="entradaDataInicio">Entrada<a style="color:red"> *</a></label>

                                            <?php if(!is_null($experiencias)){ ?>
                                                @if(count($experiencias)==0)
                                                    <input type="date" name="data_inicio" class="@error('data_inicio') is-invalid @enderror form-control" value="{{ old('data_inicio') }}" style="width:150px;" id="curso" aria-describedby="emailHelp" placeholder=" ">
                                                @endif
                                                @foreach ($experiencias as $item)
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
                                                <label for="entradaDataFim">Saída<a style="color:red"> *</a></label>

                                                <?php if(!is_null($experiencias)){ ?>
                                                    @if(count($experiencias)==0)
                                                        <input type="date" name="data_fim" class="@error('data_inicio') is-invalid @enderror form-control" value="{{ old('data_fim') }}" style="width:150px;" id="curso" aria-describedby="emailHelp" placeholder=" ">
                                                    @endif
                                                    @foreach ($experiencias as $item)
                                                        <input type="date" name="data_fim" class="@error('data_inicio') is-invalid @enderror form-control" value="{{ $item->data_fim }}" style="width:150px;" id="curso" aria-describedby="emailHelp" placeholder=" ">
                                                    @endforeach

                                                <?php } ?>

                                                <small id="data_fim" class="form-text text-muted">ex.: dd/mm/aaaa</small>
                                                @error('data_fim')
                                                    <div >
                                                        <a style="color:red;">{{ $message }}</a>
                                                    </div>
                                                @enderror
                                        </div>
                                    </div>




                            <div style="position:absolute; left:470px; margin-top:25px;">

                                    <?php if(!is_null($experiencias)){ ?>
                                    @if(count($experiencias)==0) {{--Verifica se o objeto candidato existe--}}
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
                                            cursor: pointer;">Salvar Experiência e Sair
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
                                            cursor: pointer;">Atualizar Experiência e Sair
                                        </button>
                                    @endif
                                    <?php } ?>
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

@endsection

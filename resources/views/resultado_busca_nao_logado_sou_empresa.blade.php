@extends('layouts.app')
@section('content')


<?php
$arrayTemp = [];
$idTemp = 0;
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="position: absolute; padding-top: 7.0rem; padding-bottom:200px;">
                <div class="card" style="height: 100%; width:19rem; float:left;">
                <div class="card-header">Candidatos</div>
                <div class="card-body" style="height:800px; width:300px;">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--
                    <form action="{{route('buscarOportunidade')}}" method="GET">
                        <input type="text" name="busca" style="width:180px;" placeholder="Nome da empresa">
                        <button type="submit" style="background-color:#4285f4;  border: none;
                        border-radius: 8px;
                        color: white;
                        padding: 4px 11px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 13px;
                        margin: 4px 2px;
                        cursor: pointer;"> Procurar</button>
                        <small id="entradaFunção" class="form-text text-muted">ex.: nagem, todo dia</small>

                    </form>
                    -->

                    <div style="height: 37rem; margin-left:1px; overflow: auto; margin-top:20px; border: 1px solid #000; border-color:#e9e9e9; border-radius: 8px;">
                        <?php $i = 0; ?>
                        <ul style="height: 5rem;margin-top:20px; ">
                            <div style="margin-left:-33px;">
                                    <?php $idTemp=0; ?>
                            @foreach ($candidatos as $item)
                                <table id="tabelaOportunidades">
                                        <?php $idTemp++; ?>
                                    <button onclick="mostrarVaga({{$idTemp}})" class="button buttonCampo1">
                                        <div style="margin-left:-5px; margin-bottom:50px; width:200px; height:20px; text-align: left;">
                                            <p style="margin-bottom: -5px;">{{$item->nome_completo}}</p>
                                            {{-- <p style="margin-bottom: -5px;">{{$item->nivel_de_formacao}}</p> --}}
                                            <p style="margin-bottom: -5px;">{{$item->funcao}}</p>
                                            </div>
                                    </button>
                                </table>
                            @endforeach
                            </div>
                            @if(!is_null($candidatos))

                            @endif
                        </ul>
                    </div>

                    <input id="aux" type="hidden" value="1">


                </div>
            </div>

            <div class="card" style="float:left">
                    <div class="card-header">Currículo</div>
                    <div class="card-body"  style="height:800px; width:535px; ">

                                <?php $idTemp =0; ?>
                                @if(!is_null($candidatos))
                                    @foreach($candidatos as $id)
                                        <?php $idTemp++; ?>
                                        <div style="display: none" id="{{$idTemp}}">

                                            <a style="font-size:25px;"> {{$id->nome_completo}}</a> <br>
                                            <a> {{$id->cidade}}{{"/"}}{{$id->uf}}</a> <br>
                                            <hr style="margin-top:2px;">

                                            <div class="btn-group">
                                                <p>Data de Nascimento:  </p>
                                                <a style="margin-left:5px;"> {{$id->data_de_nascimento}}</a>
                                            </div><br>

                                            <div class="btn-group" style="margin-top:-19px;">
                                                <p>Email:  </p>
                                                <a style="margin-left:5px;"> {{$id->email}}</a>
                                            </div><br>
                                            <div class="btn-group" style="margin-top:-19px;">
                                                <div>
                                                    <p >Telefone: (XX)XXXXXXXX</p>
                                                </div>
                                                <div>
                                                    <p style="margin-left:10px;">Celular: (XX)XXXXXXXX</p>
                                                </div>
                                            </div><br>
                                            <div  style="margin-top:-19px;">
                                                {{-- <div>
                                                    <a> {{"Nível Educacional: "}}{{$id->nivel_de_formacao}}</a> <br>
                                                    <a> {{"Função: "}}{{$id->funcao}}</a> <br>
                                                </div> --}}
                                                <a> {{"Deficiência: "}}{{$id->tipo_de_deficiencia}}</a> <br>
                                            </div>
                                            <hr style="margin-top:2px;">
                                            <p style="margin-top:-10px; font-size:19px;">Escolaridade</p>
                                            <div style="margin-top:-10px;">
                                                <a> {{"Instituição: "}}{{$id->instituicao}}</a> <br>
                                                <a> {{"Curso: "}}{{$id->curso}}</a> <br>
                                                <div>
                                                    <a> {{"Data Entrada: "}}</a>{{--{{$id->data_inicio}}</a>--}}
                                                    <a style="margin-left:10px;"> {{"Data Saída: "}}</a> {{--{{$id->data_conclusao}}</a>--}}
                                                </div>
                                            </div><br>
                                            <hr style="margin-top:2px;">
                                            <p style="margin-top:-10px; font-size:19px;">Experiência</p>
                                            <div style="margin-top:-10px;">
                                                <a> {{"Empresa: "}}{{$id->nome_empresa}}</a> <br>
                                                <a> {{"Atribuição: "}}{{$id->atribuicao}}</a> <br>
                                                <a> {{"Cargo: "}}{{$id->nome_cargo}}</a> <br>
                                                <div>
                                                    <a> {{"Data Saída: "}}</a>{{$id->data_fim}}</a>
                                                </div>
                                            </div><br>
                                            <hr/>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                    </div>
                </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function mostrarVaga(x){
        var aux = document.getElementById("aux").value;
        document.getElementById(aux).style.display = "none";
        document.getElementById(x).style.display = "block";
        document.getElementById("aux").value = x;
    }
</script>
@endsection







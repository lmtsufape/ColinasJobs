@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
            <div class="col-md-8" style="position: absolute; padding-top: 7.0rem; padding-bottom:200px;">
                    <div class="card" style="height: 100%; width:19rem; float:left;">
                    <div class="card-header">Oportunidades</div>
                    <div class="card-body" style="height:900px; width:300px;">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- <div class="btn-group" style="margin-left:100px;">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filtro
                            </button>
                            <div class="dropdown-menu" style="margin-left:-120px;">
                                <a class="dropdown-item" href="#">Criar Vaga</a>
                                <a class="dropdown-item" href="#">Ordem Alfabética</a>
                            </div>
                        </div> --}}

                        <div style="height: 37rem; margin-left:1px; overflow: auto; margin-top:20px; border: 1px solid #000; border-color:#e9e9e9; border-radius: 8px;">
                            <?php $i = 0; ?>
                            <ul style="height: 5rem;margin-top:20px; ">
                                <div style="margin-left:-33px;">
                                        <?php $idTemp=0; ?>
                                @foreach ($empresas as $item)
                                    @for($i = 0; $i < sizeof($item->vaga); $i++)
                                        <table id="tabelaOportunidades">
                                                <?php $idTemp++; ?>
                                            <button onclick="mostrarVaga({{$idTemp}})" class="button buttonCampo1">
                                                <div style="margin-left:-5px; margin-bottom:50px; width:200px; height:20px; text-align: left;">
                                                    <p style="margin-bottom: -5px;">{{$item->vaga[$i]->nome_vaga}}</p>
                                                    <p style="margin-bottom: -5px;">{{$item->nome_empresa}}</p>
                                                    <p style="margin-bottom: -5px;">{{$item->endereco->cidade . "/". $item->endereco->uf}}</p>
                                                    {{-- <p style="margin-bottom: -5px;">{{$item->vaga[$i]->data_publicacao}}</p> --}}
                                                    <p style="margin-bottom: -5px;">{{$item->vaga[$i]->match->count()}}</p>
                                                    @foreach ($vagas as $item2)
                                                        <p style="margin-bottom: -5px;">{{$item2->candidato_id}}</p>
                                                    @endforeach

                                                </div>
                                            </button>
                                        </table>
                                    @endfor
                                @endforeach
                                </div>
                                @if(!is_null($empresas))

                                @endif
                            </ul>
                        </div>

                        <input id="aux" type="hidden" value="1">


                    </div>
                </div>

                <div class="card" style="float:left">
                        <div class="card-header">Detalhes</div>
                        <div class="card-body"  style="height:900px; width:535px; ">
                                <div>
                                    <?php $idTemp =0; ?>
                                    @if(!is_null($empresas))
                                        @foreach($empresas as $id)
                                            @for($i = 0; $i < sizeof($item->vaga); $i++)
                                                <?php $idTemp++; ?>
                                                <div style="display: none" id="{{$idTemp}}">
                                                    <a style="font-size:25px;"> {{$item->vaga[$i]->nome_vaga}}</a> <br>
                                                    <a style="font-size:19px;"> {{$id->nome_empresa}}</a> <br>
                                                    <a> {{$item->endereco->cidade . "/". $item->endereco->uf}}</a> <br>
                                                    <a> <b>{{'Data de Publicação: '}}</b>{{$item->vaga[$i]->data_publicacao}}</a> <br>
                                                    <div class="btn-group">
                                                        <a> <b>{{'Número de Vagas: '}}</b>{{$item->vaga[$i]->quantidade}}</a>
                                                        <a style="margin-left:5px;"> <b>{{'Vagas para PCD: '}}</b>{{$item->vaga[$i]->vaga_para_pcd}}</a>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a> <b>{{'Salário: '}}</b>{{'R$'}}{{$item->vaga[$i]->salario}}</a>
                                                        <a style="margin-left:5px;"> <b>{{'Tipo de vaga: '}}</b>{{$item->vaga[$i]->tipo_de_vaga}}</a>
                                                        <a style="margin-left:5px;"> <b>{{'Remuneração: '}}</b>{{$item->vaga[$i]->tipo_de_remuneracao}}</a>
                                                    </div>

                                                    <hr style="margin-top:2px;">

                                                    <div style="margin-left:5px; width:490px; height:170px;">
                                                        <p style="font-size:20px;">Atribuições  </p><br>
                                                        <div style="margin-top:-45px; margin-left:-2px;width:490px;height:140px;">
                                                            <a style="margin-left:5px;">{{$item->vaga[$i]->atribuicoes}}</a>
                                                        </div>
                                                    </div><br>

                                                    <hr style="margin-top:2px;">

                                                    <div style="margin-left:5px; width:490px; height:170px;">
                                                        <p style="font-size:20px;">Experiência  </p><br>
                                                        <div style="margin-top:-45px; margin-left:-2px;width:490px;height:140px;">
                                                            <a style="margin-left:5px;">{{$item->vaga[$i]->experiencia}}</a>
                                                        </div>
                                                    </div><br>

                                                    <hr style="margin-top:2px;">

                                                    <div style="margin-left:5px; width:490px; height:170px;">
                                                        <p style="font-size:20px;">Descrição  </p><br>
                                                        <div style="margin-top:-45px; margin-left:-2px;width:490px;height:140px;">
                                                            <a style="margin-left:5px;">{{$item->vaga[$i]->descricao}}</a>
                                                        </div>
                                                    </div><br>
                                                </div>
                                            @endfor
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


@extends('layouts.app')

<a>TIPO DE USUARIO</a>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <form action="{{route('curriculum')}}">
                      <div class="btn-group">
                        <button type="submit">Sou candidato</button>
                      </div>
                    </form>
                    <form action="{{route('oportunidade')}}">
                      <div class="btn-group">
                        <button type="submit">Sou empresa</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

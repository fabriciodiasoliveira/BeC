@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{ route('loja.create') }}">Nova Loja</a>
    </div>
</div>
<div class="col-md-12 d-flex justify-content-center">
    <div class="card" style="width: 50%;">
        <!--<img class="card-img-top" src="..." alt="Card image cap">-->
        <div class="card-body">
            <h5 class="card-title">Nossas lojas</h5>
            <p class="card-text">Lista de lojas.</p>
            <div class="row">
                <div class="col-md-8">
                    <h5>Nome</h5>
                </div>
                <div class="col-md-1">
                    <h5>Latitude</h5>
                </div>
                <div class="col-md-1">
                    <h5>Longitude</h5>
                </div>
            </div>
            @foreach( $lojas as $loja)
            <div class="row">
                <div class="col-md-8">
                    {{ $loja->nome }}
                </div>
                <div class="col-md-1">
                    {{ $loja->lat }}
                </div>
                <div class="col-md-1">
                    {{ $loja->longt }}
                </div>
                <div class="col-md-1">
                    <a class="btn btn-primary" href="#">Editar</a>
                </div>
                <div class="col-md-1">
                    <a class="btn btn-danger" href="#">X</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card" style="width: 100%;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h1>{{ $loja->nome }}</h1>
                    <h5 class="card-title">Inserir produto para {{ $departamento->nome }}</h5>
                    <p class="card-text">Insira um novo produto.</p>
                    @component('components.produto.produto', compact('loja', 'departamento'))@endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


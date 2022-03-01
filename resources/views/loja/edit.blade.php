@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card" style="width: 100%;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Alterar produto</h5>
                    <p class="card-text">Faça uma alteração no produto.</p>
                    @component('components.mercadoria.upload', compact('mercadoria'))@endcomponent
                    <form class="form-horizontal" method="POST" action="{{ route('mercadoria.update', $mercadoria->id) }}">
                        {{ csrf_field() }}
                        @component('components.mercadoria.mercadoria', compact('mercadoria', 'fornecedores', 'mercadoria_detalhes'))@endcomponent
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
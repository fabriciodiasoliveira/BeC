@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card" style="width: 100%;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Alterar departamento</h5>
                    <p class="card-text">Modifique os dados da departamento.</p>
                    @component('components.departamento.departamento', compact('departamento'))@endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

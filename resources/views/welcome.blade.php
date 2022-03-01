@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{ config('app.name', 'Laravel') }}
        </div>
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ route('lojas')}}">Cadastro de Lojas</a>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{ config('app.name', 'Laravel') }}
        </div>
        <div class="col-md-12">
            <a href="{{ route('lojas')}}">JSON Lojas</a>
        </div>
    </div>
</div>
@endsection
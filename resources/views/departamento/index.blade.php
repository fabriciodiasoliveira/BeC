@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>{{ $loja->nome }}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{ route('departamento.create', $loja->loja_id) }}">Novo departamento</a>
    </div>
</div>
<div class="col-md-12 d-flex justify-content-center">
    <div class="card" style="width: 70%;">
        <!--<img class="card-img-top" src="..." alt="Card image cap">-->
        <div class="card-body">
            <h5 class="card-title">Departamentos de {{ $loja->nome }}</h5>
            <p class="card-text">Lista de departamentos.</p>
            <div class="row">
                <div class="col-md-12">
                    Use o link "http://{{ $_SERVER['HTTP_HOST'] }}/departamento/id" para retornar um json do departamento.
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <b>ID</b>
                </div>
                <div class="col-md-6">
                    <b>Nome</b>
                </div>
                <div class="col-md-1">
                    <b>JSON</b>
                </div>
                <div class="col-md-2">
                    <b>Loja</b>
                </div>
            </div>
            @foreach( $departamentos as $departamento)
            <div class="row">
                <div class="col-md-1">
                    {{ $departamento->departamento_id }}
                </div>
                <div class="col-md-6">
                    <a href="{{ route('produtos', $departamento->departamento_id) }}">{{ $departamento->nome }}</a>
                </div>
                <div class="col-md-1">
                    <a class="btn btn-primary" href="http://{{ $_SERVER['HTTP_HOST'] }}/departamento/{{ $departamento->departamento_id }}">JSON</a>
                </div>
                <div class="col-md-2">
                    {{ $loja->nome }}
                </div>
                <div class="col-md-1">
                    <a class="btn btn-primary" href="{{ route('departamento.edit', $departamento->departamento_id) }}">Editar</a>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{ $departamento->departamento_id  }}">
                        Excluir
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-{{ $departamento->departamento_id  }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <b class="modal-title" id="exampleModalLabel">Excluir</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Excluir {{ $departamento->nome }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-danger" onclick='$("#{{ $departamento->departamento_id  }}").submit();'>Deletar</button>
                                </div>
                            </div>
                            <form id="{{ $departamento->departamento_id  }}" action="{{ route ('departamento.destroy', $departamento->departamento_id ) }}" method="post">
                                {{ csrf_field() }}
                                <input type='hidden' name='_method' value='DELETE' />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
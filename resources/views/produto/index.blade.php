@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>{{ $loja->nome }}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>{{ $departamento->nome }}</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{ route('produto.create', $departamento->departamento_id) }}">Novo produto</a>
    </div>
</div>
<div class="col-md-12 d-flex justify-content-center">
    <div class="card" style="width: 70%;">
        <!--<img class="card-img-top" src="..." alt="Card image cap">-->
        <div class="card-body">
            <h5 class="card-title">Departamentos de {{ $loja->nome }}</h5>
            <p class="card-text">Lista de produtos.</p>
            <div class="row">
                <div class="col-md-12">
                    Use o link "http://{{ $_SERVER['HTTP_HOST'] }}/produto/id" para retornar um json do produto.
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <b>ID</b>
                </div>
                <div class="col-md-5">
                    <b>Nome</b>
                </div>
            </div>
            @foreach( $produtos as $produto)
            <div class="row">
                <div class="col-md-5">
                    {{ $produto->produto_id }}
                </div>
                <div class="col-md-5">
                    {{ $produto->nome }}
                </div>
                <div class="col-md-1">
                    <a class="btn btn-primary" href="{{ route('produto.edit', $produto->produto_id) }}">Editar</a>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{ $produto->produto_id  }}">
                        Excluir
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-{{ $produto->produto_id  }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <b class="modal-title" id="exampleModalLabel">Excluir</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Excluir {{ $produto->nome }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-danger" onclick='$("#{{ $produto->produto_id  }}").submit();'>Deletar</button>
                                </div>
                            </div>
                            <form id="{{ $produto->produto_id  }}" action="{{ route ('produto.destroy', $produto->produto_id ) }}" method="post">
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
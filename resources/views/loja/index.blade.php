@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{ route('loja.create') }}">Nova Loja</a>
    </div>
</div>
<div class="col-md-12 d-flex justify-content-center">
    <div class="card" style="width: 70%;">
        <!--<img class="card-img-top" src="..." alt="Card image cap">-->
        <div class="card-body">
            <h5 class="card-title">Nossas lojas</h5>
            <p class="card-text">Lista de lojas.</p>
            <div class="row">
                <div class="col-md-1">
                    <b>ID</b>
                </div>
                <div class="col-md-6">
                    <b>Nome</b>
                </div>
                    <b>JSON</b>
                </div>
                <div class="col-md-1">
                    <b>Latitude</b>
                </div>
                <div class="col-md-1">
                    <b>Longitude</b>
                </div>
            </div>
            @foreach( $lojas as $loja)
            <div class="row">
                <div class="col-md-1">
                    {{ $loja->loja_id }}
                </div>
                <div class="col-md-6">
                    <a class="btn btn-primary" href="{{ route('departamentos', $loja->loja_id) }}">Detalhes</a>{{ $loja->nome }}
                </div>
                <div class="col-md-1">
                    <a class="btn btn-primary" href="http://{{ $_SERVER['HTTP_HOST'] }}/produto/loja/{{ $loja->loja_id }}">JSON</a>
                </div>
                <div class="col-md-1">
                    {{ $loja->lat }}
                </div>
                <div class="col-md-1">
                    {{ $loja->longt }}
                </div>
                <div class="col-md-1">
                    <a class="btn btn-primary" href="{{ route('loja.edit', $loja->loja_id) }}">Editar</a>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{ $loja->loja_id  }}">
                        Excluir
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-{{ $loja->loja_id  }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <b class="modal-title" id="exampleModalLabel">Excluir</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Excluir {{ $loja->nome }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-danger" onclick='$("#{{ $loja->loja_id  }}").submit();'>Deletar</button>
                                </div>
                            </div>
                            <form id="{{ $loja->loja_id  }}" action="{{ route ('loja.destroy', $loja->loja_id ) }}" method="post">
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
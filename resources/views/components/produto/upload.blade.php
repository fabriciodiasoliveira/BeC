<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('produto.upload', $produto->produto_id) }} ">
    <input type="hidden" name="loja_id" value="{{ $produto->produto_id }}"/>
    {{ csrf_field() }}
    <div class="row mb-3">
        <label for="imagem" class="col-md-4 col-form-label text-md-end">{{ __('Imagem') }} de {{ $produto->nome }}</label>

        <div class="col-md-6">
            <input id="imagem" type="file" class="form-control @error('imagem') is-invalid @enderror" name="imagem" value="{{ old('imagem') }}" required autocomplete="imagem" autofocus>

            @error('imagem')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <input type="hidden" name="produto_id" value="{{ $produto->produto_id }}"/>
    <input type="hidden" name="nome" value="{{ $produto->nome }}"/>
    <input type="hidden" name="preco" value="{{ $produto->preco }}"/>
    <input type="hidden" name="departamento_id" value="{{ $produto->departamento_id }}"/>
    <input type="hidden" name="loja_id" value="{{ $produto->loja_id }}"/>
    <div class="row mb-3">
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Submeter
                </button>
            </div>
        </div>
    </div>
</form>
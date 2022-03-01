@if(strpos(url()->current(), 'create'))
<form class="form-horizontal" method="POST" action="{{ route('produto.store') }} ">
    <input type="hidden" name="departamento_id" value="{{ $departamento->departamento_id }}"/>
    <input type="hidden" name="loja_id" value="{{ $loja->loja_id }}"/>
    {{ csrf_field() }}
    <div class="row mb-3">
        <label for="nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Produto') }}</label>

        <div class="col-md-6">
            <input id="nome" type="nome" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

            @error('nome')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="preco" class="col-md-4 col-form-label text-md-end">{{ __('Preço em reais') }}</label>

        <div class="col-md-6">
            <input id="preco" type="preco" class="form-control @error('preco') is-invalid @enderror" name="preco" value="{{ old('preco') }}" required autocomplete="preco" autofocus>

            @error('preco')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
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
@else
<form class="form-horizontal" method="POST" action="{{ route('produto.update', $produto->produto_id) }} ">
    <input type="hidden" name="departamento_id" value="{{ $departamento->departamento_id }}"/>
    <input type="hidden" name="produto_id" value="{{ $produto->produto_id }}"/>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <div class="row mb-3">
        <label for="nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Produto') }}</label>

        <div class="col-md-6">
            <input id="nome" type="nome" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ $produto->nome }}" required autocomplete="nome" autofocus>

            @error('nome')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="preco" class="col-md-4 col-form-label text-md-end">{{ __('Preço em reais') }}</label>

        <div class="col-md-6">
            <input id="preco" type="preco" class="form-control @error('preco') is-invalid @enderror" name="preco" value="{{ $produto->preco }}" required autocomplete="preco" autofocus>

            @error('preco')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
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
@endif
@if(strpos(url()->current(), 'create'))
<form class="form-horizontal" method="POST" action="{{ route('departamento.store') }} ">
    {{ csrf_field() }}
    <input type="hidden" name="loja_id" value="{{ $loja->loja_id }}" />
    <div class="row mb-3">
        <label for="nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Departamento') }}</label>

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
<form class="form-horizontal" method="POST" action="{{ route('departamento.update', $departamento->departamento_id) }} ">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <input type="hidden" name="loja_id" value="{{ $loja->loja_id }}" />
    <div class="row mb-3">
        <label for="nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Departamento') }}</label>

        <div class="col-md-6">
            <input id="nome" type="nome" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ $departamento->nome }}" required autocomplete="nome" autofocus>

            @error('nome')
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
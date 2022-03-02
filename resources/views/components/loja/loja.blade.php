@if(strpos(url()->current(), 'create'))
<form class="form-horizontal" method="POST" action="{{ route('loja.store') }} ">
    {{ csrf_field() }}
    <div class="row mb-3">
        <label for="nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome da Loja') }}</label>

        <div class="col-md-6">
            <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

            @error('nome')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="lat" class="col-md-4 col-form-label text-md-end">{{ __('Latitude') }}</label>

        <div class="col-md-6">
            <input id="lat" type="text" class="form-control @error('lat') is-invalid @enderror" name="lat" value="{{ old('lat') }}" required autocomplete="lat" autofocus>

            @error('lat')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="longt" class="col-md-4 col-form-label text-md-end">{{ __('Longitude') }}</label>

        <div class="col-md-6">
            <input id="longt" type="text" class="form-control @error('longt') is-invalid @enderror" name="longt" value="{{ old('longt') }}" required autocomplete="longt" autofocus>

            @error('longt')
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
<form class="form-horizontal" method="POST" action="{{ route('loja.update', $loja->loja_id) }} ">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <div class="row mb-3">
        <label for="nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome da Loja') }}</label>

        <div class="col-md-6">
            <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ $loja->nome }}" required autocomplete="nome" autofocus>

            @error('nome')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="lat" class="col-md-4 col-form-label text-md-end">{{ __('Latitude') }}</label>

        <div class="col-md-6">
            <input id="lat" type="text" class="form-control @error('lat') is-invalid @enderror" name="lat" value="{{ $loja->lat }}" required autocomplete="lat" autofocus>

            @error('lat')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="longt" class="col-md-4 col-form-label text-md-end">{{ __('Longitude') }}</label>

        <div class="col-md-6">
            <input id="longt" type="text" class="form-control @error('longt') is-invalid @enderror" name="longt" value="{{ $loja->longt }}" required autocomplete="longt" autofocus>

            @error('longt')
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
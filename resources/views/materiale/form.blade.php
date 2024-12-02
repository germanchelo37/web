<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $materiale?->titulo) }}" id="titulo" placeholder="Titulo">
            {!! $errors->first('titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="subtitulo" class="form-label">{{ __('Subtitulo') }}</label>
            <input type="text" name="subtitulo" class="form-control @error('subtitulo') is-invalid @enderror" value="{{ old('subtitulo', $materiale?->subtitulo) }}" id="subtitulo" placeholder="Subtitulo">
            {!! $errors->first('subtitulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="isbn" class="form-label">{{ __('Isbn') }}</label>
            <input type="text" name="isbn" class="form-control @error('isbn') is-invalid @enderror" value="{{ old('isbn', $materiale?->isbn) }}" id="isbn" placeholder="Isbn">
            {!! $errors->first('isbn', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="año_publicacion" class="form-label">{{ __('Año Publicacion') }}</label>
            <input type="text" name="año_publicacion" class="form-control @error('año_publicacion') is-invalid @enderror" value="{{ old('año_publicacion', $materiale?->año_publicacion) }}" id="año_publicacion" placeholder="Año Publicacion">
            {!! $errors->first('año_publicacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $materiale?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
            <input type="text" name="tipo" class="form-control @error('tipo') is-invalid @enderror" value="{{ old('tipo', $materiale?->tipo) }}" id="tipo" placeholder="Tipo">
            {!! $errors->first('tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="numero_paginas" class="form-label">{{ __('Numero Paginas') }}</label>
            <input type="text" name="numero_paginas" class="form-control @error('numero_paginas') is-invalid @enderror" value="{{ old('numero_paginas', $materiale?->numero_paginas) }}" id="numero_paginas" placeholder="Numero Paginas">
            {!! $errors->first('numero_paginas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="autor_id" class="form-label">{{ __('Autor Id') }}</label>
            <input type="text" name="autor_id" class="form-control @error('autor_id') is-invalid @enderror" value="{{ old('autor_id', $materiale?->autor_id) }}" id="autor_id" placeholder="Autor Id">
            {!! $errors->first('autor_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="editorial_id" class="form-label">{{ __('Editorial Id') }}</label>
            <input type="text" name="editorial_id" class="form-control @error('editorial_id') is-invalid @enderror" value="{{ old('editorial_id', $materiale?->editorial_id) }}" id="editorial_id" placeholder="Editorial Id">
            {!! $errors->first('editorial_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="categoria_id" class="form-label">{{ __('Categoria Id') }}</label>
            <input type="text" name="categoria_id" class="form-control @error('categoria_id') is-invalid @enderror" value="{{ old('categoria_id', $materiale?->categoria_id) }}" id="categoria_id" placeholder="Categoria Id">
            {!! $errors->first('categoria_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
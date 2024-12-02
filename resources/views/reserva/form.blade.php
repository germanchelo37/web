<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_usuario" class="form-label">{{ __('Nombre Usuario') }}</label>
            <input type="text" name="nombre_usuario" class="form-control @error('nombre_usuario') is-invalid @enderror" value="{{ old('nombre_usuario', $reserva?->nombre_usuario) }}" id="nombre_usuario" placeholder="Nombre Usuario">
            {!! $errors->first('nombre_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="material_id" class="form-label">{{ __('Material Id') }}</label>
            <input type="text" name="material_id" class="form-control @error('material_id') is-invalid @enderror" value="{{ old('material_id', $reserva?->material_id) }}" id="material_id" placeholder="Material Id">
            {!! $errors->first('material_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_reserva" class="form-label">{{ __('Fecha Reserva') }}</label>
            <input type="text" name="fecha_reserva" class="form-control @error('fecha_reserva') is-invalid @enderror" value="{{ old('fecha_reserva', $reserva?->fecha_reserva) }}" id="fecha_reserva" placeholder="Fecha Reserva">
            {!! $errors->first('fecha_reserva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_caducidad" class="form-label">{{ __('Fecha Caducidad') }}</label>
            <input type="text" name="fecha_caducidad" class="form-control @error('fecha_caducidad') is-invalid @enderror" value="{{ old('fecha_caducidad', $reserva?->fecha_caducidad) }}" id="fecha_caducidad" placeholder="Fecha Caducidad">
            {!! $errors->first('fecha_caducidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
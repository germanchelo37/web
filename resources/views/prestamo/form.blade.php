<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_usuario" class="form-label">{{ __('Nombre Usuario') }}</label>
            <input type="text" name="nombre_usuario" class="form-control @error('nombre_usuario') is-invalid @enderror" value="{{ old('nombre_usuario', $prestamo?->nombre_usuario) }}" id="nombre_usuario" placeholder="Nombre Usuario">
            {!! $errors->first('nombre_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="material_id" class="form-label">{{ __('Material Id') }}</label>
            <input type="text" name="material_id" class="form-control @error('material_id') is-invalid @enderror" value="{{ old('material_id', $prestamo?->material_id) }}" id="material_id" placeholder="Material Id">
            {!! $errors->first('material_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_prestamo" class="form-label">{{ __('Fecha Prestamo') }}</label>
            <input type="text" name="fecha_prestamo" class="form-control @error('fecha_prestamo') is-invalid @enderror" value="{{ old('fecha_prestamo', $prestamo?->fecha_prestamo) }}" id="fecha_prestamo" placeholder="Fecha Prestamo">
            {!! $errors->first('fecha_prestamo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_vencimiento" class="form-label">{{ __('Fecha Vencimiento') }}</label>
            <input type="text" name="fecha_vencimiento" class="form-control @error('fecha_vencimiento') is-invalid @enderror" value="{{ old('fecha_vencimiento', $prestamo?->fecha_vencimiento) }}" id="fecha_vencimiento" placeholder="Fecha Vencimiento">
            {!! $errors->first('fecha_vencimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_devolucion" class="form-label">{{ __('Fecha Devolucion') }}</label>
            <input type="text" name="fecha_devolucion" class="form-control @error('fecha_devolucion') is-invalid @enderror" value="{{ old('fecha_devolucion', $prestamo?->fecha_devolucion) }}" id="fecha_devolucion" placeholder="Fecha Devolucion">
            {!! $errors->first('fecha_devolucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
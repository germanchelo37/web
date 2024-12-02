@extends('layouts.app')

@section('template_title')
    {{ $materiale->name ?? __('Show') . " " . __('Materiale') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Materiale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('materiales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo:</strong>
                                    {{ $materiale->titulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Subtitulo:</strong>
                                    {{ $materiale->subtitulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Isbn:</strong>
                                    {{ $materiale->isbn }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Año Publicacion:</strong>
                                    {{ $materiale->año_publicacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $materiale->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $materiale->tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Numero Paginas:</strong>
                                    {{ $materiale->numero_paginas }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Autor Id:</strong>
                                    {{ $materiale->autor_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Editorial Id:</strong>
                                    {{ $materiale->editorial_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Categoria Id:</strong>
                                    {{ $materiale->categoria_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

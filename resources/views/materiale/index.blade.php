@extends('layouts.app')

@section('template_title')
    Materiales
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materiales') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materiales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Titulo</th>
									<th >Subtitulo</th>
									<th >Isbn</th>
									<th >Año Publicacion</th>
									<th >Estado</th>
									<th >Tipo</th>
									<th >Numero Paginas</th>
									<th >Autor Id</th>
									<th >Editorial Id</th>
									<th >Categoria Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materiales as $materiale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $materiale->titulo }}</td>
										<td >{{ $materiale->subtitulo }}</td>
										<td >{{ $materiale->isbn }}</td>
										<td >{{ $materiale->año_publicacion }}</td>
										<td >{{ $materiale->estado }}</td>
										<td >{{ $materiale->tipo }}</td>
										<td >{{ $materiale->numero_paginas }}</td>
										<td >{{ $materiale->autor_id }}</td>
										<td >{{ $materiale->editorial_id }}</td>
										<td >{{ $materiale->categoria_id }}</td>

                                            <td>
                                                <form action="{{ route('materiales.destroy', $materiale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('materiales.show', $materiale->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('materiales.edit', $materiale->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $materiales->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

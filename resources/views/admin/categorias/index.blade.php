@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		@if(session('mensaje'))
		<div class="alert alert-success">
			<p>{{ session('mensaje') }}</p>
		</div>
		@endif
		<a href="{{ route('categorias.create') }}" class="btn btn-success">Nueva Categoria</a>
		<table class="table table-bordered">
		  	<thead>
		  		<th>ID</th>
		  		<th>Nombre</th>
		  		<th>Descripcion</th>
		  		<th></th>
		  	</thead>
		  	<tbody>
				@foreach($categorias as $categoria)
		  		<tr>
		  			<td>{{ $categoria->id }}</td>
		  			<td>{{ $categoria->nombre }}</td>
		  			<td>{{ $categoria->descripcion }}</td>
		  			<td>
		  				<a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-warning btn-xs">Editar</a>
		  				<form action="{{ route('categorias.destroy', $categoria) }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="delete">
							<button class="btn btn-danger btn-xs">Eliminar</button>
						</form>
					</td>
		  		</tr>
				@endforeach
		  	</tbody>
		</table>
	</div>
</div>
@endsection
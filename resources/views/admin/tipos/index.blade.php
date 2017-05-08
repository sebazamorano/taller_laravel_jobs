@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		@if(session('mensaje'))
		<div class="alert alert-success">
			<p>{{ session('mensaje') }}</p>
		</div>
		@endif
		<a href="{{ route('tipos.create') }}" class="btn btn-success">Nuevo Tipo</a>
		<table class="table table-bordered">
		  	<thead>
		  		<th>ID</th>
		  		<th>Nombre</th>
		  		<th>Descripcion</th>
		  		<th></th>
		  	</thead>
		  	<tbody>
				@foreach($tipos as $tipo)
		  		<tr>
		  			<td>{{ $tipo->id }}</td>
		  			<td>{{ $tipo->nombre }}</td>
		  			<td>{{ $tipo->descripcion }}</td>
		  			<td>
		  				<a href="{{ route('tipos.edit', $tipo) }}" class="btn btn-warning btn-xs">Editar</a>
		  				<form action="{{ route('tipos.destroy', $tipo) }}" method="post">
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
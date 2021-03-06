@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		@if(session('mensaje'))
		<div class="alert alert-success">
			<p>{{ session('mensaje') }}</p>
		</div>
		@endif
		<a href="{{ route('niveles.create') }}" class="btn btn-success">Nuevo Nivel</a>
		<table class="table table-bordered">
		  	<thead>
		  		<th>ID</th>
		  		<th>Nombre</th>
		  		<th>Descripcion</th>
		  		<th></th>
		  	</thead>
		  	<tbody>
				@foreach($niveles as $nivel)
		  		<tr>
		  			<td>{{ $nivel->id }}</td>
		  			<td>{{ $nivel->nombre }}</td>
		  			<td>{{ $nivel->descripcion }}</td>
		  			<td>
		  				<a href="{{ route('niveles.edit', $nivel) }}" class="btn btn-warning btn-xs">Editar</a>
		  				<form action="{{ route('niveles.destroy', $nivel) }}" method="post">
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
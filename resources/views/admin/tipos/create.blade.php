@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		@if ($errors->has())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form class="form-horizontal" action="{{ route('tipos.store') }}" method="POST">
		  	{{ csrf_field() }}
			<div class="form-group">
			<label for="inputNombre3" class="col-sm-2 control-label">Nombre</label>
			<div class="col-sm-10">
			  <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control" id="inputNombre3" placeholder="nombre">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Descripción</label>
			<div class="col-sm-10">
				<textarea name="descripcion" id="descripcion" cols="30" rows="10">{{ old('descripcion') }}</textarea>
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Crear Categoria</button>
			</div>
		  </div>
		</form>
	</div>
</div>
@endsection
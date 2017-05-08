@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" action="{{ route('save.job') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                <label for="inputTitulo" class="col-sm-2 control-label">Titulo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{ old('titulo') }}" name="titulo" id="inputTitulo" placeholder="Titulo">
                    @if ($errors->has('titulo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('titulo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10">{{ old('descripcion') }}</textarea>
                    @if ($errors->has('descripcion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('beneficios') ? ' has-error' : '' }}">
                <label for="beneficios" class="col-sm-2 control-label">Beneficios</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" name="beneficios" id="beneficios" placeholder="Beneficios">{{ old('beneficios') }}</textarea>
                    @if ($errors->has('beneficios'))
                        <span class="help-block">
                            <strong>{{ $errors->first('beneficios') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('ambiente_trabajo') ? ' has-error' : '' }}">
                <label for="ambienteTrabajo" class="col-sm-2 control-label">Ambiente Trabajo</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" name="ambiente_trabajo" id="ambienteTrabajo" placeholder="">{{ old('ambiente_trabajo') }}</textarea>
                    @if ($errors->has('ambiente_trabajo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('ambiente_trabajo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('sueldo') ? ' has-error' : '' }}">
                <label for="sueldo" class="col-sm-2 control-label">Sueldo</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{ old('sueldo') }}" name="sueldo" id="sueldo" placeholder="Sueldo">
                    @if ($errors->has('sueldo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sueldo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="sueldo" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email" placeholder="email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                <label for="ciudad" class="col-sm-2 control-label">Ciudad</label>
                <div class="col-sm-10">
                    <input type="ciudad" class="form-control" value="{{ old('ciudad') }}" name="ciudad" id="ciudad" placeholder="ciudad">
                    @if ($errors->has('ciudad'))
                        <span class="help-block">
                            <strong>{{ $errors->first('ciudad') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
                <label for="pais" class="col-sm-2 control-label">Pais</label>
                <div class="col-sm-10">
                    <input type="pais" class="form-control" value="{{ old('pais') }}" name="pais" id="pais" placeholder="pais">
                    @if ($errors->has('pais'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pais') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('categorias') ? ' has-error' : '' }}">
                <label for="categorias" class="col-sm-2 control-label">Categorias</label>
                <div class="col-sm-10">
                    @foreach($categorias as $categoria)
                        <label class="checkbox-inline">
                            <input type="checkbox" id="categorias" name="categorias[]" value="{{ $categoria->id }}" @if(in_array($categoria->id, (array) old('categorias'))) checked @endif> {{ $categoria->nombre }}
                        </label>
                    @endforeach
                    @if ($errors->has('categorias'))
                        <span class="help-block">
                            <strong>{{ $errors->first('categorias') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('tipo_id') ? ' has-error' : '' }}">
                <label for="tipos" class="col-sm-2 control-label">Tipo</label>
                <div class="col-sm-10">
                    @foreach($tipos as $tipo)
                        <label class="radio-inline">
                            <input type="radio" id="tipos" name="tipo_id" value="{{ $tipo->id }}" @if(in_array($tipo->id, (array) old('tipo_id'))) checked @endif> {{ $tipo->nombre }}
                        </label>
                    @endforeach
                        @if ($errors->has('tipo_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tipo_id') }}</strong>
                        </span>
                        @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('level_id') ? ' has-error' : '' }}">
                <label for="niveles" class="col-sm-2 control-label">Nivel</label>
                <div class="col-sm-10">
                    @foreach($niveles as $nivel)
                        <label class="radio-inline">
                            <input type="radio" id="niveles" name="level_id" value="{{ $nivel->id }}" @if(in_array($nivel->id, (array) old('level_id'))) checked @endif> {{ $nivel->nombre }}
                        </label>
                    @endforeach
                    @if ($errors->has('level_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('level_id') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Crear Trabajo</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
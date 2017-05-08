@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Mis Trabajos</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>titulo</th>
                                        <th>descripcion</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($trabajos as $trabajo)
                                    <tr>
                                        <td>{{ $trabajo->id }}</td>
                                        <td><a href="">{{ $trabajo->titulo }}</a></td>
                                        <td>{{ $trabajo->descripcion }}</td>
                                        <td>
                                            <a href="#" class="btn btn-xs">Editar</a>
                                            <a href="#" class="btn btn-xs">Eliminar</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3">
                                            <a href="{{ route('new.job') }}" class="btn btn-block btn-success">Crea uno aquí</a>
                                        </td>
                                    </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                        </div>
                        {{ $trabajos->appends(['sort' => 'asc'])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>

</script>
@endsection
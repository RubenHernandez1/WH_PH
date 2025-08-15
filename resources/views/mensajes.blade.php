@extends('layouts.app')

@section('title', 'Mensajes')

@section('icon_title')
    <i class="fa fa-fw fa-user"></i>
@endsection


@section('content')
    <div class="container">
        <div class="table-responsive" >
            <table class="table table-bordered table-sm table-hover table-sprite">
                <thead>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                </thead>

                <tbody>
                    @forelse ($data as $mensaje)
                        <tr>
                            <td>{{ $mensaje['name'] }}</td>
                            <td>{{ $mensaje['email'] }}</td>
                            <td>{{ $mensaje['message'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No hay mensajes guardados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection


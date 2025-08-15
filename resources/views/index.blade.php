@extends('layouts.app')

@section('title', 'Index')


@section('content')
    <div class="container">
        <form id="formMessage">
            @csrf
            <div class="row">
                <div class="col-6 col-md-2">
                    <div class="form-group">
                        <label> Nombre</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div>

                <div class="col-6 col-md-2">
                    <div class="form-group">
                        <label> Email </label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>

                <div class="col-6 col-md-2">
                    <div class="form-group">
                        <label> Mensaje</label>
                        <input type="text" name="message" class="form-control" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#formMessage').on('submit', function(e){
                e.preventDefault();

                let datos = {};
                $(this).find('input[name]').each(function(){
                    let valor = $(this).val().trim();
                    if(valor !== '') { // solo si tiene valor
                        datos[$(this).attr('name')] = valor;
                    }
                });

                $.ajax({
                    url: '/guardar',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(respuesta) {
                        alert("Datos guardados con éxito")
                        $('#formMessage')[0].reset();
                    },
                    error: function(err) {
                        console.error("Error en la petición", err);
                    }
                });
            });
        });
    </script>
@endsection
<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div class="container text-center">
        <h1>Edición de clientes</h1>
        <form action="{{route('clientes.update', $cliente->cliente_id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="Identificacion"></label>
                <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="Identificacion" value={{$producto->cliente_id}}>
            </div>
            <div class="form-group">
                <label for="nombre"></label>
                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre" value={{$producto->nombre}}>
            </div>
            <div class="form-group">
                <label for="apellido"></label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellido" value={{$producto->apellido}}>
            </div>
            <div class="form-group">
                <label for="telefono"></label>
                <input type="text" class="form-control" name="telefonos" id="telefonos" placeholder="Telefono" value={{$producto->telefono}}>
            </div>
            <div class="form-group">
                <label for="direccion"></label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" value={{$producto->direccion}}>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Editar</button>
        </form>
        @if(isset($errors) && $errors->any())
            <div class="iq-card-header d-flex justify-content-between">
                <div class="alert alert-danger col-md-12 mt-2">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{!!$error!!}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
</body>
</html>
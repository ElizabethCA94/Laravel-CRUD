<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div class="container text-center">
        <h1>Creación de ventas</h1>
        <form action="{{route('ventas.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="cliente"></label>
                <input type="text" class="form-control" name="clientes" id="clientes" placeholder="Cliente">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Crear</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div class="container text-center">
        <h1>Creación de productos</h1>
        <form action="{{route('productos.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre"></label>
                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="descripcion"></label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion">
            </div>
            <div class="form-group">
                <label for="precio"></label>
                <input type="text" class="form-control" name="precios" id="precios" placeholder="Precio">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Crear</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <h1>Lista de productos</h1>

    <div class="container text-center">
        <a href="{{route('productos.create')}}">
            <button class="btn btn-sucess">
                Crear
            </button>
        </a>
        
        <table class="table table-striped nt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                        <a href="{{route('productos.edit',$producto->producto_id)}}">
                            <button class="btn btn-primary">
                                Editar
                            </button>
                        </a>
                        <form action="{{route('productos.destroy',$producto->producto_id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
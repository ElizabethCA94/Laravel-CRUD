<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <h1>Lista de ventas</h1>

    <div class="container text-center">
        <a href="{{route('ventas.create')}}">
            <button class="btn btn-sucess">
                Crear
            </button>
        </a>
        <table class="table table-striped nt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Producto</th>
                    <th>Cliente</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($ventas as $venta)
                <tr>
                    {{-- <td>{{$loop->iteration}}</td> --}}
                    <td>{{$venta->id }}</td>
                    {{-- <td>{{$venta->productos }}</td> --}}
                    {{-- <td>{{$venta->cliente}}</td> --}}
                    @foreach ($venta->productos as $producto)
                    <td>{{ $producto->nombre }}</td>
                    @endforeach
                    {{-- <td>
                        <a href="{{route('ventas.edit',$venta->id)}}">
                            <button class="btn btn-primary">
                                Editar
                            </button>
                        </a>
                        <form action="{{route('ventas.destroy',$venta->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
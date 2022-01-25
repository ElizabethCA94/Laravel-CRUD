<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <h1>Lista de clientes</h1>

    <div class="container text-center">

        <a href="{{route('clientes.create')}}">
            <button class="btn btn-sucess">
                Crear
            </button>
        </a>
        
        <table class="table table-striped nt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td>
                        <a href="{{route('clientes.edit',$cliente->id)}}">
                            <button class="btn btn-primary">
                                Editar
                            </button>
                        </a>
                        <form action="{{route('clientes.destroy',$cliente->id)}}" method="post">
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
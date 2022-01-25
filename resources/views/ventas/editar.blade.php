<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div class="container text-center">
        <h1>Edición de ventas</h1>
        <form action="{{route('ventas.update', $ventas->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nombre"></label>
                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre" value={{$ventas->nombre}}>
            </div>
            {{-- <div class="form-group">
                <label for="nombre"></label>
                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre" value={{$producto->nombre}}>
            </div> --}}
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
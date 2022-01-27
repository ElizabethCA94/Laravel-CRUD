<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div class="container text-center">
        <h1>Edición de ventas</h1>
        <form action="{{route('ventas.update', $venta->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="Identificacion"></label>
                <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="Identificacion" value={{$venta->id}}>
            </div>
            {{-- <div class="form-group">
                <label for="producto"></label>
                <input type="text" class="form-control" name="productos" id="productos" placeholder="Producto" value={{($venta->productos())}}>
            </div> --}}
            <div class="form-group">
                <label for="cliente"></label>
                <input type="text" class="form-control" name="cliente" id="clientes" placeholder="Cliente" value={{$venta->cliente}}>
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
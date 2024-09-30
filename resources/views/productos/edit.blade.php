@extends('layout')

@section('content')
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ $producto->nombre }}" required>
        </div>
        <div>
            <label>Precio</label>
            <input type="text" name="precio" value="{{ $producto->precio }}" required>
        </div>
        <div>
            <label>Cantidad</label>
            <input type="text" name="cantidad" value="{{ $producto->cantidad }}" required>
        </div>
        <div>
        <label>Categoría</label>
        <select name="categoria_id" required>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection

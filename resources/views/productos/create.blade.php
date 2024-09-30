@extends('layout')

@section('content')
    <h1>Crear Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div>
            <label>Nombre</label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label>Precio</label>
            <input type="text" name="precio" required>
        </div>
        <div>
            <label>Cantidad</label>
            <input type="text" name="cantidad" required>
        </div>
        <div>
        <label>Categoría</label>
        <select name="categoria_id" required>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
        </div>
        <button type="submit">Crear</button>
    </form>
@endsection

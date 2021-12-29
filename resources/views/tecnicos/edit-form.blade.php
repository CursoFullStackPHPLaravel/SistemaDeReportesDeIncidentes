@extends('themes.base')

<div class="container">
    <h1>Editar Técnico</h1>
</div>
<div class="container py-5 text-center">
    <form action="#" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre del técnico"
            value="{{ old('nombre') ?? @$tecnico->nombre }}">

            @error('nombre')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cuil" class="form-label">CUIL</label>
            <input type="number" name="cuil" class="form-control" placeholder="CUIL del técnico"
            value="{{ old('cuil') ?? @$tecnico->cuil }}">

            @error('cuil')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="mail" class="form-label">E-mail</label>
            <input type="text" name="mail" class="form-control" placeholder="Correo eléctronico" value="{{ old('mail') ?? @$tecnico->mail }}">

            @error('record')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="number" name="telefono" class="form-control" placeholder="Número telefónico" value="{{ old('telefono') ?? @$tecnico->telefono }}">
        </div>

    </form>
</div>

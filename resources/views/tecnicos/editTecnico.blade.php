@extends('themes.base')

<div class="container">
    <h1>Editar Técnico</h1>
</div>
<div class="container py-5 text-center">
    <form action="#" method="PUT">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="Nombre del técnico"
            value="{{ old('name') ?? @$tecnico->nombre }}">

            @error('name')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
    </form>
</div>

@extends('themes.base')

<div class="container mt-2">
    <h1>Agregar Técnico</h1>
</div>

<div class="container">
    <form action="{{ route('tecnicos.store') }}" method="POST">
        @csrf

        <div class="border round p-2">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre del técnico"
                value="{{ old('nombre')}}">

                @error('nombre')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cuil" class="form-label">CUIL</label>
                <input type="number" name="cuil" class="form-control" placeholder="CUIL del técnico"
                value="{{ old('cuil')}}">

                @error('cuil')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="mail" class="form-label">E-mail</label>
                <input type="text" name="mail" class="form-control" placeholder="Correo eléctronico"
                value="{{ old('mail') }}">

                @error('record')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" class="form-control" placeholder="Número telefónico"
                value="{{ old('telefono') }}">
            </div>
        </div>

        <h3 class="mt-2">Especialidades</h3>
        <div class="border mt-1 p-2 rounded">
            <table class="table table-striped task-table">
                <tbody>
                    <tr>
                        <td>
                            <p>Aún no hay especialidades cargadas</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Agregar Especialidad -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="#" class="btn btn-success">
                        <i class="bi bi-plus"></i>Agregar Especialidad
                    </button>
                </div>
            </div>
        </div>
        <!-- Guardar -->

        <div class="container text-center">
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </div>

    </form>
</div>

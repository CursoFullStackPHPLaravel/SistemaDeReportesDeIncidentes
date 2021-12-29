@extends('themes.base')

<div class="container">
    <h1>{{ $titulo }}</h1>
    <a href="#" class="btn btn-primary">Agregar Técnico</a>
</div>

<div class="container py-5 text-center">

    <table class="table">
        <thead>
            <th>Foto</th>
            <th>Nombre</th>
            <th>CUIL</th>
            <th>E-mail</th>
            <th>Teléfono</th>
            <th>Opciones</th>
        </thead>

        <tbody>
            @foreach ($tecnicos as $tecnico)
                <tr>
                    <td>{{ $tecnico->foto }}</td>
                    <td>{{ $tecnico->nombre }}</td>
                    <td>{{ $tecnico->cuil }}</td>
                    <td>{{ $tecnico->mail }}</td>
                    <td>{{ $tecnico->telefono }}</td>
                    <td>
                        <a href="#" class="btn btn-warning">Editar</a>
                        <form action="#" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('¿Esta seguro de eliminar este Técnico?')">
                            Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

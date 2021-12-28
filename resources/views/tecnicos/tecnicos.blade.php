@extends('themes.base')

<div class="container py-5 text-center">
    <h1>{{ $titulo }}</h1>
    <a href="#" class="btn btn-primary">Agregar Técnico</a>

    <table class="table">
        <thead>
            <th>Foto</th>
            <th>Nombre</th>
            <th>CUIL</th>
            <th>E-mail</th>
            <th>Teléfono</th>
        </thead>

        <tbody>
            @foreach ($tecnicos as $tecnico)
                <tr>
                    <td>{{ $tecnico->foto }}</td>
                    <td>{{ $tecnico->nombre }}</td>
                    <td>{{ $tecnico->cuil }}</td>
                    <td>{{ $tecnico->mail }}</td>
                    <td>{{ $tecnico->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

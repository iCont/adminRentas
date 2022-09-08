@extends('layouts.template')
@section('content')
    <div class="content_int">
        <div class="txt_cont">
            <h1>Administración de Departamentos</h1>
        </div>
        <div class="table_wrapper">
            <table class="">
                <thead>
                    <tr>
                        <th class="txt_enfasis">ID</th>
                        <th class="txt_enfasis">Nombre</th>
                        <th class="txt_enfasis">Depto</th>
                        <th class="txt_enfasis">Status</th>
                        <th class="txt_enfasis">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($renters as $renter)
                        <tr>
                            <td class="txt_enfasis">{{ $renter->id }}</td>
                            <td>{{ $renter->name }} {{ $renter->app }} {{ $renter->apm }}</td>
                            <td>{{ $renter->id_apartment }}</td>
                            <td>{{ $renter->id_status_renter }}</td>
                            <td>Eliminar</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.template')
@section('content')
    <div class="content_int">
        <div class="txt_cont">
            <h1 class="h1_text">Administración de Departamentos</h1>
            <button class="btn-primary"  id="new_renter_button">Nuevo Inquilino</button>
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
                            <td>{{ $renter->apartment->name }}</td>
                            <td>{{ $renter->status_renter->name }}</td>
                            <td>
                                <div class="buttons_container">
                                    <a class="btn btn_a" href="" ><i class="fas fa-edit icons"></i></a>
                                    <form action="{{route('renters.destroy',$renter)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit"><i
                                            class="fas fa-trash icons icon_trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

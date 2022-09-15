@extends('layouts.template')
@section('content')
    <div class="content_int">
        <div class="txt_cont">
            <h1 class="h1_text">Administración de Departamentos</h1>
            <button class="btn-primary"  id="new_renter_button">Nuevo Inquilino</button>
        </div>
        <div class="alert-success">
            <div class="alert-success_wrapper" id="alert_success_wrapper">
                La acción se realizó correctamente!!!
            </div>
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
                            <td>{{ $renter->apartments->name }}</td>
                            <td>{{ $renter->status_renter->name }}</td>
                            <td>
                                <div class="buttons_container">
                                    <button class="btn btn_a" id="edit_button" type="button"><i class="fas fa-edit icons"></i></button>
                                        <button class="btn icon_trash" type="button" onclick="delete_renter({{$renter->id}})"><i
                                            class="fas fa-trash icons"></i></button>
                                </div>
                            </td>
                            {{-- modal --}}
                            <div class="modal modal_no-visible modal_alert_windows_m" id="modal_alert_windows{{$renter->id}}">
                                <div class="modal-dialog">
                                    <header class="modal-header">
                                    <span class="modal-alert-header__txt">ALERTA</span>
                                    <button class="close-modal close_modalAlert">✕</button>
                                </header>
                                <section class="modal-content">
                                    <div class="modal-content_wrap ">
                                        <p>Esta acción no podrá revertirse, ¿estas segudo de eliminar el registro?</p>
                                        <div class="modal-buttons__content modal-footer">
                                            <form action="{{route('renters.destroy',$renter->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="text" id="id_renter" value="">
                                                <button class="btn_danger close_modalAlert2">Cancelar</button>
                                                <button class="btn_primary" id="button_delete"   data-url="{{ route('renters.destroy', $renter->id) }}" onclick="">Borrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </tr>
                        {{-- modal --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @if (Session::has('success'))
    <script>
        alert_success_wrapper.style.visibility="visible";
        setTimeout(function(){
          alert_success_wrapper.style.visibility="hidden";
        }, 5000);
    </script>
@else
@endif
    @if (Session::has('delete_renter'))
    <script>
        alert_success_wrapper.style.visibility="visible";
        setTimeout(function(){
          alert_success_wrapper.style.visibility="hidden";
        }, 5000);
    </script>
@else
@endif
@endsection

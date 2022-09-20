@extends('layouts.template')
@section('content')
    <div class="content_int">
        <div class="txt_cont">
            <h1 class="h1_text">Administración de Departamentos</h1>
            <button class="btn-primary" id="new_renter_button">Nuevo Inquilino</button>
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
                            <td><a class="rentersLink" href="{{ route('renters.show', $renter) }}">{{ $renter->name }}
                                    {{ $renter->app }} {{ $renter->apm }}</a></td>
                            <td>{{ $renter->apartments->name }}</td>
                            <td>{{ $renter->status_renter->name }}</td>
                            <td>
                                <div class="buttons_container">
                                    <button class="btn btn_a" id="edit_button" type="button"
                                        onclick="launchModal_edit({{ $renter->id }})"><i
                                            class="fas fa-edit icons"></i></button>
                                    <button class="btn icon_trash" type="button"
                                        onclick="delete_renter({{ $renter->id }})"><i
                                            class="fas fa-trash icons"></i></button>
                                </div>
                            </td>
                            {{-- modal --}}
                            <div class="modal modal_no-visible modal_alert_windows_m"
                                id="modal_alert_windows{{ $renter->id }}">
                                <div class="modal-dialog">
                                    <header class="modal-header">
                                        <span class="modal-alert-header__txt">ALERTA</span>
                                        <button class="close-modal close_modalAlert"
                                            onclick="closeModalAlert({{ $renter->id }})">✕</button>
                                    </header>
                                    <section class="modal-content">
                                        <div class="modal-content_wrap ">
                                            <p>Esta acción no podrá revertirse, ¿estas segudo de eliminar el registro?</p>
                                            <div class="modal-buttons__content modal-footer">
                                                <form action="{{ route('renters.destroy', $renter->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn_danger" type="button"
                                                        onclick="closeModalAlert({{ $renter->id }})">Cancelar</button>
                                                    <button class="btn_primary" id="button_delete"
                                                        data-url="{{ route('renters.destroy', $renter->id) }}">Borrar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </tr>
                        {{-- modal --}}
                        {{-- modal-edit --}}
                        <div class="modal_edit modal_no-visible" id="modal_windows_edit{{ $renter->id }}">
                            <div class="modal-dialog">
                                <header class="modal-header">
                                    <span class="modal-header__txt">EDITAR INQUILINO</span>
                                    <button class="close-modal" onclick="closeModal_edit({{ $renter->id }})">✕</button>
                                </header>
                                <section class="modal-content">
                                    <div class="modal-alerts">
                                        @if ($errors->any())
                                        <div class="modal-alert__wrapper">
                                                @foreach ($errors->all() as $error)
                                                    -{{ $error }}<br>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                    <div class="modal-content__form">
                                        <form class="form-content" action="{{ route('renters.update', $renter) }}"
                                            method="POST">
                                            @method('PUT')
                                            @csrf
                                            <input type="text" name="name" class=""
                                                value="{{ old('name', $renter->name) }}" placeholder="NOMBRE">
                                            <br />
                                            <input type="text" name="app" class=""
                                                value="{{ old('app', $renter->app) }}" placeholder="AP PATERNO">
                                            <br />
                                            <input type="text" name="apm" class=""
                                                value="{{ old('apm', $renter->apm) }}" placeholder="AP MATERNO">
                                            <br />
                                            <input type="tel" name="phone" class=""
                                                value="{{ old('phone', $renter->phone) }}" placeholder="TELÉFONO">
                                            <br />
                                            <input type="email" name="mail" class=""
                                                value="{{ old('mail', $renter->email) }}" placeholder="EMAIL">
                                            <br />
                                            <select name="id_apartment">
                                                @foreach ($apartments as $apartment)
                                                    @if ($renter->id_apartment == $apartment->id)
                                                        <option value="{{ $apartment->id }}" selected>
                                                            {{ $apartment->name }}</option>
                                                    @else
                                                        <option value="{{ $apartment->id }}">
                                                            {{ $apartment->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <br />
                                            <select name="id_status_renter">
                                                @foreach ($status_renters as $status_renter)
                                                    @if ($renter->id_status_renter == $status_renter->id)
                                                        <option value="{{ $status_renter->id }}" selected>
                                                            {{ $status_renter->name }}</option>
                                                    @else
                                                        <option value="{{ $status_renter->id }}">
                                                            {{ $status_renter->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <br />
                                            <label class="arrival_date_label" for="arrival_date">Fecha en que se ocupará el
                                                departamento</label>
                                            <input type="date" name="arrival_date" class="arrival_date_input"
                                                value="{{ old('arrival_date', $renter->arrival_date) }}">
                                    </div>
                                </section>
                                <footer class="modal-footer">
                                    <button type="button" class="btn_danger"
                                        onclick="closeModal_edit({{ $renter->id }})">Cancelar</button>
                                    <button type="submit" class="btn_primary">Guardar</button>
                                </footer>
                                </form>
                            </div>
                        </div>
                        {{-- modal-edit --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @if (Session::has('success'))
        <script>
            alert_success_wrapper.style.visibility = "visible";
            setTimeout(function() {
                alert_success_wrapper.style.visibility = "hidden";
            }, 5000);
        </script>
    @else
    @endif
    @if (Session::has('delete_renter'))
        <script>
            alert_success_wrapper.style.visibility = "visible";
            setTimeout(function() {
                alert_success_wrapper.style.visibility = "hidden";
            }, 5000);
        </script>
    @else
    @endif
@endsection

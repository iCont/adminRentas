<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,900;1,100&display=swap"
        rel="stylesheet">
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/ce4324abd4.js" crossorigin="anonymous"></script>
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <title>Sistema de Adimistración de Rentas</title>
</head>

<body>
    <div class="wrapper">
        <nav class="header">
            <img src="{{ URL::asset('img/rent_admn_logo.png') }}" id="logo" alt="">
        </nav>
        @yield('content')
        @include('layouts.footer')
    </div>
    <div class="modal modal_no-visible" id="modal_windows">
        <div class="modal-dialog">
            <header class="modal-header">
                <span class="modal-header__txt">NUEVO INQUILINO</span>
                <button class="close-modal" id="close_modal_id">✕</button>
            </header>
            <section class="modal-content">
                <div class="modal-alerts">
                    @if ($errors->all())
                        <div class="modal-alert__wrapper">
                            -{{$rror}}<br>
                        </div>
                    @endif
                </div>
                <div class="modal-content__form">
                    <form class="form-content" action="{{route('renters.store')}}" method="POST">
                        @csrf
                        <input type="text" name="name" class="" placeholder="NOMBRE">
                        <br/>
                        <input type="text" name="app" class="" placeholder="AP PATERNO">
                        <br/>
                        <input type="text" name="apm" class="" placeholder="AP MATERNO">
                        <br/>
                        <input type="email" name="mail" class="" placeholder="EMAIL">
                        <br/>
                        <select name="id_apartment">
                            <option value="">Selecciona un número de departamento</option>
                            {{-- {{$apartments}} --}}
                            @foreach ($apartments as $apartment)
                                <option value="{{$apartment->id}}"{{old('name')==$apartment->id ? "selected":""}}>{{$apartment->name}}</option>
                            @endforeach
                        </select>
                        <br/>
                        <select name="id_status_renters">
                            <option value="">Selecciona un estado de inquilino</option>
                            {{-- {{$apartments}} --}}
                            @foreach ($status_renters as $status_renter)
                                <option value="{{$status_renter->id}}"{{old('name')==$status_renter->id ? "selected":""}}>{{$status_renter->name}}</option>
                            @endforeach
                        </select>
                        <br/>
                        <label class="arrival_date_label" for="arrival_date">Fecha en que se ocupará el departamento</label>
                        <input type="date" name="arrival_date" class="arrival_date_input">
                    </div>
                </section>
                <footer class="modal-footer">
                    <button type="button" class="btn_danger close_modal" id="closeModalReg">Cancelar</button>
                    <button type="submit" class="btn_primary" >Guardar</button>
                </footer>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ URL::asset('js/rentas.js') }}"></script>
</body>
</html>

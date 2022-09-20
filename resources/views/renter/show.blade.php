@extends('layouts.templateInt')
@section('content')
    <div class="content_int">
        <div class="txt_cont">
            <h2 class="h1_text">Vista de Inquilino</h2>
        </div>
        <div class="txt_cont">
            <div class="container-data">
                <div class="bordeado container-data__txt">
                    <h2 class="h1_text">{{ $renter->name }} {{ $renter->app }} {{ $renter->apm }}</h2>
                </div>
                <div class="bordeado container-data__mail"><span>Correo:</span> {{ $renter->email }}</div>
                <div class="bordeado container-data__phone"><span>Teléfono:</span> <strong>nada aun</strong></div>
                <div class="bordeado container-data__apartment"><span>No. departamento:</span>
                    {{ $renter->apartments->name }}</div>
                <div class="bordeado container-data__status_renter"><span>Estado:</span> {{ $renter->status_renter->name }}
                </div>
                <div class="bordeado container-data__arrival_date"><span>Día de ocupación:</span>
                    {{ $renter->arrival_date }}</div>
                <div class="bordeado container-data__departure_date"><span>Día de salida:</span>
                    {{ $renter->departure_date }}</div>
                <div class="bordeado container-data__tb_title"><h2 class="h1_text">Historial de pagos</h2></div>
                <div class="bordeado container-data_tb_hist"></div>
            </div>
        </div>
    </div>
@endsection

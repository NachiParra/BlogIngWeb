@extends('theme.back.app')
@section('titulo')
    Sistema Menus
@endsection
@section("scripts")
<script src="{{asset("assets/back/js/pages/scripts/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Crear Menus
            </div>
            <form action="{{route("menu.guardar")}}" id="form-general" class="form-horizontal" method="post">
                @csrf
                <div class="border-top">
                    <div class="card-body">
                        <div class="card-body">
                            @include("theme.back.menu.form")
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

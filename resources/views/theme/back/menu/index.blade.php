@extends('theme.back.app')
@section("titulo")
Menu
@endsection

{{-- @section("styles")
<link rel="stylesheet" href="{{asset("assets/back/extra-libs/nestable/jquery.nestable.css")}}">
@endsection --}}

@section("scriptsPlugins")
<script src="{{asset("assets/back/extra-libs/nestable/jquery.nestable.js")}}"></script>
@endsection

@section("scripts")
<script src="{{asset("assets/back/js/pages/scripts/menu/index.js")}}"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @if ($mensaje = session("mensaje"))
            <x-alert tipo="success" :mensaje="$mensaje" />
        @endif
        <div class="card">
            <div class="card-header gb-info">
                <h5 class="text-white float-left">Menus</h5>
                <a href="{{route('menu.crear')}}" class="btn btn-outline-light btn-sm float-right">Crear Menu</a>
            </div>
            <div class="card-body">
                @csrf
                <div class="dd" id="nestable" >
                    <ol class="dd-list">
                        @foreach ($menus as $key => $item )
                            @if ($item["menus_id"] !== 0)
                                @break
                            @endif
                            @include("theme.back.menu.menu-item", ["item" => $item])
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirmar-eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirme esta accion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="ture">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Seguro que deseas eliminar este menu? Recuerde que si es padre tambien se eliminaran los menus hijos
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                <button type="button" id="accion-eliminar" class="btn btn-success">Si</button>
            </div>

        </div>
    </div>
</div>
@endsection


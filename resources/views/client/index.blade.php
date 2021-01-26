@extends('layouts.app')

<style>
    body {
        margin: 25%;
    }
    .my-container {
        border: 2em;
        flex-direction: column;
        justify-content: center;
    }
    .my-rowheader {
        margin-bottom: 1em;
        background-color: gray;
        color: whitesmoke;
        font-weight: bold;
    }
    .my-row {
        padding: .3%;
    }
    .my-row:nth-child(even){
        background: lightgray;
    }
    
</style>

@section('content')
<div>
    <div class="container my-container">
        <div class="card-header">
            <h2>Reservas activas <a href="{{Route('client.create')}}" class="btn btn-primary">Añadir una reserva</a>
                <a href="{{Route('room.index')}}" class="btn btn-secondary">Administrador de habitaciones</a>
            </h2>
            <div class="row my-rowheader">
                <div class="col-2">Habitación</div>
                <div class="col-2">Reservada por</div>
                <div class="col-1">Nº huéspedes</div>
                <div class="col-1">Mascota</div>
                <div class="col-1">Desayuno</div>
                <div class="col-1">Precio</div>
                <div class="col-1">Fecha de entrada</div>
                <div class="col-1">Fecha de salida</div>
                <div class="col-2">Acción</div>
            </div>   
                @foreach($clients as $client)
                <div class="row my-row">
                <div class="col-2">
                    {{$client->room_id}} 
                </div>
                <div class="col-2">
                    {{$client->first_name}} {{$client->last_name}}
                </div>
                <div class="col-1">
                    {{$client->guests}}
                </div>




                <div class="col-1">
                    <form action="{{route('client.update',$client->id)}}" method="POST">
                        @csrf
                        @method('update')
                        <a href="{{Route('client.edit',$client->id)}}" class="btn btn-xs btn-secondary">Edit</a>
                    </form>
                </div>
                <div class="col-1">
                    <form action="{{route('client.destroy',$client->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-xs btn-danger">
                    </form>
                </div>
            </div>
                @endforeach
            
        </div>
    </div>
</div>
@endsection
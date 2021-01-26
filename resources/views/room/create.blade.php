@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="card">
            <form action="{{Route('room.store')}}" method="POST">
                @csrf
                    <div class="card-header">
                    <strong>Escriba el nombre de la nueva habitación</strong><a
                        href="{{Route('room.create')}}"></a>
                    </div>
                    <div class="card-body form-group">                    
                        <label>Nombre</label>
                        <input type="text" name="room_name" class="form-control" />
                    </div>
                    <div class="card-header">
                        <strong>Escriba el precio de la nueva habitación</strong><a
                        href="{{Route('room.create')}}"></a>
                    </div>
                   
                    <div class="card-body form-group">
                        <label>Precio</label>
                        <input type="text" name="price" class="form-control" />
                    </div>
                    
                    <div class="card-footer">
                        <input type="submit" value="Create" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
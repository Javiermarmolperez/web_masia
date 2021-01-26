@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="card">
            <form action="{{Route('room.update',$room->id)}}" method="POST">
                @csrf
                @method('put')
                    <div class="card-header">
                        <strong>Escriba el nuevo nombre de la habitación</strong>
                    </div>
                    <div class="card-body form-group">
                        <label>Nuevo nombre</label>
                        <input type="text" name="room_name" class="form-control" value="{{$room->room_name}}" />
                    </div>
                    <div class="card-header">
                        <strong>Escriba el nuevo precio de la habitación</strong>
                    </div>
                    <div class="card-body form-group">
                        <label>Nuevo precio</label>
                        <input type="text" name="price" class="form-control" value="{{$room->price}}" />
                    </div>                    
                    
                    <div class="card-footer">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
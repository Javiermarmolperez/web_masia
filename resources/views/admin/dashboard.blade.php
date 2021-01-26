@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>¡Ha iniciado sesión correctamente!</strong> 
                    </div>
                    <div class="card-header">
                    <h2>Panel de administración</h2>
                </div>

                    <div class="card-body">
                        <a href="{{Route('booking.index')}}" class="btn btn-primary">Administrar reservas</a>
                        <a href="{{Route('room.index')}}" class="btn btn-secondary">Administrar habitaciones</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
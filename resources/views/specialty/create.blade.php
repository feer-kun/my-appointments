@extends('layouts.panel')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Ingresa los datos de la nueva Especialidad</h6>
                <a href="{{ route('specialties.create') }}"><button class="btn btn-primary" type="button"><i class="ni ni-fat-add"></i>Nueva Especialidad</button></a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.panel')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Gestor de Especialidades</h6>
                <a href="{{ route('specialties.create') }}"><button class="btn btn-primary" type="button">Nueva Especialidad</button></a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
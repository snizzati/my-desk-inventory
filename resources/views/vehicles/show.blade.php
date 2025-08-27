@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle Show') }}</div>

                <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$vehicle->name}}" class="form-control" id="name" name="name" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="model" class="form-label">Model;</label>
                            <input type="text" value="{{$vehicle->model}}" class="form-control" id="model" name="model" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="plat" class="form-label">Plat</label>
                            <input type="text" value="{{$vehicle->plat}}" class="form-control" id="plat" name="plat" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" value="{{$vehicle->color}}" class="form-control" id="color" name="color" readonly>
                        </div>

                       <a href="{{ route('vehicles.index',$vehicle) }}" class="btn btn-dark btn-sm">Back</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
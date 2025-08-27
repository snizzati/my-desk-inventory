@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$vehicle->name}}" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" value="{{$vehicle->model}}" class="form-control" id="model" name="model" required>
                        </div>

                        <div class="mb-3">
                            <label for="plat" class="form-label">Plat</label>
                            <input type="text" value="{{$vehicle->plat}}" class="form-control" id="plat" name="plat" required>
                        </div>

                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" value="{{$vehicle->color}}" class="form-control" id="color" name="color" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Vehicle</button>
                        <a href="{{ route('vehicles.index',$vehicle) }}" class="btn btn-dark btn-sm">Back</a>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inventory Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$inventory->name}}" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" value="{{$inventory->quantity}}" class="form-control" id="quantity" name="quantity" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" value="{{$inventory->price}}" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" value="{{$inventory->description}}" class="form-control" id="description" name="description" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Inventory</button>
                         <a href="{{ route('inventories.index',$inventory) }}" class="btn btn-dark btn-sm">Back</a>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
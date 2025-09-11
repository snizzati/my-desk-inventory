@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inventory Show') }}</div>

                <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$inventory->name}}" class="form-control" id="name" name="name" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" value="{{$inventory->quantity}}" class="form-control" id="quantity" name="quantity" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" value="{{$inventory->price}}" class="form-control" id="price" name="price" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" value="{{$inventory->description}}" class="form-control" id="description" name="description" readonly>
                        </div>

                        <a href="{{ route('inventories.index',$inventory) }}" class="btn btn-dark btn-sm">Back</a>

                       
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Audits') }}</div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Event</th>
                                <th>Old Values</th>
                                <th>New Values</th>
                                <th>Created At</th>

                            </tr>
                        </thead>
                        <tbody class="table table-responsive">
                            @foreach ($inventory->audits as $audit)
                                <tr>
                                    <td>{{ $audit->id }}</td>
                                    <td>{{ $audit->event }}</td>
                                    <td><pre>{{ print_r($audit->old_values, true) }}</pre></td>
                                    <td><pre>{{ print_r($audit->new_values, true) }}</pre></td>
                                    <td>{{ $audit->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Show') }}</div>

                <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$user->name}}" class="form-control" id="name" name="name" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" value="{{$user->email}}" class="form-control" id="email" name="email" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="nric" class="form-label">NRIC</label>
                            <input type="text" value="{{$user->nric}}" class="form-control" id="nric" name="nric" readonly>
                            </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" value="{{$user->password}}" class="form-control" id="password" name="password" readonly>
                        </div>


                        <a href="{{ route('users.index',$user) }}" class="btn btn-dark btn-sm">Back</a>

                       
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
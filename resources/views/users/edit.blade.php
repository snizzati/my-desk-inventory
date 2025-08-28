@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$user->name}}" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" value="{{$user->email}}" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="nric" class="form-label">NRIC</label>
                            <input type="text" value="{{$user->nric}}" class="form-control" id="nric" name="nric" required>
                            </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" value="{{$user->password}}" class="form-control" id="password" name="password" required>
                        </div>


                        <button type="submit" class="btn btn-primary">Edit User</button>
                         <a href="{{ route('users.index',$user) }}" class="btn btn-dark btn-sm">Back</a>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
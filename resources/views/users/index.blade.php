@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Index') }}</div>


                <div class="card-body">
                   <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>NRIC<th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td> 
                                    <td>{{ $user->nric }}</td>
                    
                                    <td>
                                        <a href="{{ route('users.show',$user) }}" class="btn btn-info btn-sm">Show</a>

                                        <a href="{{ route('users.edit',$user) }}" class="btn btn-success btn-sm">Edit</a>

                                         <a href="{{ route('users.destroy', $user) }}" 
                                            class="btn btn-danger btn-sm"
                                            onclick="confirm('Are you sure you want to delete this vehicle?') || event.preventDefault();">
                                            Delete</a>
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

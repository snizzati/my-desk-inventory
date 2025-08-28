<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
    {
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //query all users from table 'users' using model
        $users = User::latest()->get();

        //return to view with $users (resources/views/users/index.blade.php)
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        //store in the table 'inventories' using model

        //POPO - Plain Old PHP Object
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->nric = $request->nric;

        $user->save();


        //return to inventory index
        return redirect('/users');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        //update using model
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;#
        $user->nric = $request->nric;
        $user->save();

        //return to inventory index
      return redirect('/users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users');
    }

}

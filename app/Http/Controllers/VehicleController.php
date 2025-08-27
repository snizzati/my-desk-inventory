<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //query all vehicle from table 'vehicles' using model
        $vehicles = vehicle::latest()->get();

        //return to view with $vehicles (resources/views/vehicles/index.blade.php)
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        //store in the table 'vehicle' using model

        //POPO - Plain Old PHP Object
        $vehicle = new Vehicle();
        $vehicle->name = $request->name;
        $vehicle->model = $request->model;
        $vehicle->plat = $request->plat;
        $vehicle->color = $request->color;
        $vehicle->user_id = auth()->user()->id;
        $vehicle->save();


        //return to inventory index
        return redirect('/vehicles');
    }

    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        //update using model
        $vehicle->name = $request->name;
        $vehicle->model = $request->model;
        $vehicle->plat = $request->plat;
        $vehicle->color = $request->color;
        $vehicle->user_id = auth()->user()->id;
        $vehicle->save();

        //return to inventory index
      return redirect('/vehicles');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect('/vehicles');
    }
}

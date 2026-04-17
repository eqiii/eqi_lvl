<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
  public function index()
  {
    $sensors = Sensor::all();
    return view('sensor.index', compact('sensors'));
  }

  public function create()
  {
    return view('sensor.create');
  }

  public function store(Request $request)
  {
    Sensor::create($request->all());
    return redirect()->route('sensor.index');
  }

  public function edit(Sensor $sensor)
  {
    return view('sensor.edit', compact('sensor'));
  }

  public function update(Request $request, Sensor $sensor)
  {
    $sensor->update($request->all());
    return redirect()->route('sensor.index');
  }

  public function destroy(Sensor $sensor)
  {
    $sensor->delete();
    return redirect()->route('sensor.index');
  }
}

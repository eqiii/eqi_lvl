<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::latest()->get();
        return view('device.index', compact('devices'));
    }

    public function store(Request $request)
    {
        Device::create($request->all());
        return back();
    }

    public function destroy(Device $device)
    {
        $device->delete();
        return back();
    }

    public function update(Request $request, Device $device)
    {
        $device->update($request->all());
        return redirect()->route('device.index');
    }

    public function edit(Device $device)
    {
        return view('device.editdvc', compact('device'));
    }
}

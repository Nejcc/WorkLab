<?php

namespace App\Http\Controllers\DataCenter\Dcim;

use App\Http\Controllers\Controller;
use App\Models\DataCenter\Dcim\Rack;
use Illuminate\Http\Request;

class RackController extends Controller
{
    public function index()
    {
        $racks = Rack::all();
        return view('data-center.dcim.rack.index', compact('racks'));
    }

    public function create()
    {
        return view('racks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules for the input fields here
        ]);

        Rack::create($request->all());

        return redirect()->route('racks.index')->with('success', 'Rack created successfully.');
    }

    public function show(Rack $rack)
    {
        return view('data-center.dcim.rack.show', compact('rack'));
    }

    public function edit($id)
    {
        $rack = Rack::findOrFail($id);
        return view('racks.edit', compact('rack'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Add validation rules for the input fields here
        ]);

        $rack = Rack::findOrFail($id);
        $rack->update($request->all());

        return redirect()->route('racks.index')->with('success', 'Rack updated successfully.');
    }

    public function destroy($id)
    {
        $rack = Rack::findOrFail($id);
        $rack->delete();

        return redirect()->route('racks.index')->with('success', 'Rack deleted successfully.');
    }
}
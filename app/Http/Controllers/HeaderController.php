<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeaderController extends Controller
{
    // Display a listing of the headers
    public function index()
    {
        $headers = Header::all();
        return view('admin.header.index', compact('headers'));
    }

    // Show the form for creating a new header
    public function create()
    {
        return view('admin.header.create');
    }

    // Store a newly created header in storage
    public function store(Request $request)
    {
        $request->validate([
            'value' => 'required|string',
        ]);

        // Create the header
        $header = Header::create($request->only('value'));

        // Custom script logic after creating a header
        // For example, logging the new header
        DB::table('header')->insert([
            'value' => 'Another Default Value', // You can change this to your specific logic
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('header.index')->with('success', 'Header created successfully.');
    }

    // Display the specified header
    public function show(Header $header)
    {
        return view('admin.header.show', compact('header'));
    }

    // Show the form for editing the specified header
    public function edit(Header $header)
    {
        return view('admin.header.edit', compact('header'));
    }

    // Update the specified header in storage
    public function update(Request $request, Header $header)
    {
        $request->validate([
            'value' => 'required|string',
        ]);

        $header->update($request->only('value'));

        return redirect()->route('header.index')->with('success', 'Header updated successfully.');
    }

    // Remove the specified header from storage
    public function destroy(Header $header)
    {
        $header->delete();

        return redirect()->route('header.index')->with('success', 'Header deleted successfully.');
    }
}

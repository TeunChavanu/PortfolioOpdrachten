<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoresitesRequest;
use Illuminate\Http\Request;
use App\Models\sites as Site;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = Site::all();
        return view('sites.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresitesRequest $request)
    {
        $data = $request->validated();

        Site::create($data);

        return redirect()->route('sites.index')->with('success', 'Site created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $site = Site::find($id);
        return view('sites.show', compact('site'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $site = Site::find($id);
        return view('sites.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'site_code' => 'required|unique:sites,site_code,'.$id,
            'name' => 'required',
            'city' => 'required',
            'country' => 'required|size:2'
        ]);

        $site = Site::find($id);
        $site->update($request->all());

        return redirect()->route('sites.index')->with('success', 'Site updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $site = Site::find($id);
        $site->delete();

        return redirect()->route('sites.index')->with('success', 'Site deleted successfully.');
    }
}

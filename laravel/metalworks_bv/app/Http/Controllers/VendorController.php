<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
     public function index()
    {
        $bedrijven = Vendor::all();
        return view('Bedrijf.index', compact('bedrijven'));
    }
    public function create()
    {
        return view('Bedrijf.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'bedrijfsnaam' => 'required',
            'contactpersoon' => 'required',
            'email' => 'required|email',
            'telefoonnummer' => 'required',
            'adres' => 'required',
            'postcode' => 'required',
            'plaats' => 'required',
            'land' => 'required',
            'kvk_nummer' => 'required',
            'btw_nummer' => 'required',
            'bankrekening' => 'required',
        ]);

        \App\Models\Vendor::create($request->all());
        return redirect()->route('Bedrijf.index')->with('success', 'Vendor created successfully.');
    }

    public function show($id)
    {
        $vendor = Vendor::findOrFail($id);
        return view('Bedrijf.show', compact('vendor'));
    }
}

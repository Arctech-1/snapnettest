<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Ward;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wards = Ward::all();
        return view('citizen', ['ward' => $wards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:225',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required|max:11|min:11',
            'ward' => 'required',
        ]);

        // Citizen::create($validated);
        Citizen::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'ward_id' => $request->ward,
        ]);

        return redirect()->route('citizen.index')->with('status', 'Citizen details added successfully');
    }

    // function to validate request

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function show(Citizen $citizen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function edit(Citizen $citizen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citizen $citizen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citizen $citizen)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plant::with('waterings:id,plant_id,created_at')
                  ->orderBy('species', 'asc')
                  ->get();
        return view('plants.index')->with('plants', $plants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // not sure what to do with the form since im
        // using ame partial for both create and edit
        return view('plants.create')->with('plant', new Plant);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'species'  => 'required|max:255',
            'name'     => 'nullable|max:255',
            'location' => 'nullable|max:255',
            'comment'  => 'nullable',
        ]);

        Plant::create($validatedData);

        return redirect()->route('plants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        return view('plants.show')->with('plant', $plant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        return view('plants.edit')->with('plant', $plant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        $validatedData = $request->validate([
            'species'  => 'required|max:255',
            'name'     => 'nullable|max:255',
            'location' => 'nullable|max:255',
            'comment'  => 'nullable',
        ]);

        $plant->species  = $request->species;
        $plant->name     = $request->name;
        $plant->location = $request->location;
        $plant->comment  = $request->comment;
        $plant->save();

        return redirect()->route('plants.show', $plant);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        //
    }
}

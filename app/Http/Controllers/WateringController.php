<?php

namespace App\Http\Controllers;

use App\Watering;
use Illuminate\Http\Request;

class WateringController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'plant_id' => 'required'
        ]);

        Watering::create($validatedData);

        return redirect()->route('plants.show', $request->plant_id);
    }

}

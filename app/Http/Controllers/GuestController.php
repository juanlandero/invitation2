<?php

namespace App\Http\Controllers;

use App\Models\GuestPhone;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:10 ',
        ]);

        $phone = GuestPhone::where('phone', $request->phone)->first();

        if (null === $phone) {
            return response()->json(['message' => 'El número de teléfono ingresado no esta registrado.']);
        }

        if ($phone->guest === true) {
            return response()->json(['message' => 'Ya se ha confirmado la asistencía anteriormente.']);
        }

        return $phone->guest->update(['is_confirmed' =>  true]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

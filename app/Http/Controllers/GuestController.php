<?php

namespace App\Http\Controllers;

use App\Models\GuestPhone;
use Exception;
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
            'phone' => 'required|string|max:10|min:10 ',
        ],
        [
            'required' => 'Debes ingresar un número de teléfono',
            'max' => 'Maxímo 10 dígitos',
            'min' => 'Minímo 10 dígitos',
        ]
    );

        $phone = GuestPhone::where('phone', $request->phone)->first();

        if (null === $phone) {
            return response()->json(['message' => '😖 El número de teléfono ingresado no esta registrado 📱'], 404);
        }

        if ((bool)$phone->guest->is_confirmed === true) {
            return response()->json(['message' => '🧐 Ya has confirmado la asistencía anteriormente. 🌸']);
        }

        try {
            $phone->guest->update(['is_confirmed' =>  true]);

            return response()->json([
                'message' => '🥳 ¡Qué alegría que puedas venir a mi fiesta de cumpleaños! 🎉 Estoy muy emocionada de que celebres conmigo. ¡Nos vemos pronto! 😊',
                'assitants' => $phone->guest->guest_quantity,
                'family' => $phone->guest->family,
            ]);
        } catch(\Exception $e) {
            return response()->json(['message' => '🤯 Ocurrio un error al validar su número de teléfono, informale a la cumpleañera... 👑']);
        }

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

<?php

namespace App\Http\Controllers;

use App\Models\Potencial;
use Illuminate\Http\Request;

class PotencialController extends Controller
{
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email:rfc,dns|max:255|unique:potencials,correo',
            'telefono' => [
                'required',
                'string',
                'max:20',
                'regex:/^[+\d()\- ]+$/',
                'unique:potencials,telefono'
            ],
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'correo.required' => 'El correo electrónico es obligatorio.',
            'correo.email' => 'Ingrese un correo electrónico válido.',
            'correo.unique' => 'Este correo ya está registrado.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'telefono.regex' => 'Ingrese un número de teléfono válido.',
            'telefono.unique' => 'Este teléfono ya está registrado.'
        ]);

        Potencial::create($validated);

        return redirect()->back()
            ->with('success', '¡Gracias por registrarte! Nos pondremos en contacto contigo pronto.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    private const REGLAS = [
        'nombre' => 'required|string|max:100',
        'especie' => 'required|string|max:100',
        'raza' => 'required|string|max:100',
        'edad' => 'required|integer|min:0|max:65535',
    ];

    public function index(): JsonResponse
    {
        return response()->json(Animal::orderBy('id')->get());
    }

    public function show(Animal $animal): JsonResponse
    {
        return response()->json($animal);
    }

    public function store(Request $request): JsonResponse
    {
        $animal = Animal::create($request->validate(self::REGLAS));

        return response()->json($animal, 201);
    }

    public function update(Request $request, Animal $animal): JsonResponse
    {
        $animal->update($request->validate(self::REGLAS));

        return response()->json($animal);
    }

    public function destroy(Animal $animal): JsonResponse
    {
        $animal->delete();

        return response()->json(['mensaje' => 'Animal eliminado correctamente.']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Fabricante;
use App\Http\Requests\StoreFabricanteRequest;
use App\Http\Requests\UpdateFabricanteRequest;
use App\Http\Resources\FabricanteResource;

class FabricanteController extends Controller
{
    public function index()
    {
        $lista = Fabricante::all();
        return FabricanteResource::collection($lista);
    }

    public function store(StoreFabricanteRequest $request)
    {
        $objeto = Fabricante::create($request->validated());

        return new FabricanteResource($objeto);
    }


    public function show(Fabricante $fabricante)
    {
        return new FabricanteResource($fabricante);
    }

    public function update(UpdateFabricanteRequest $request, Fabricante $fabricante)
    {
        $objeto = $fabricante->update($request->validated());

        return new FabricanteResource($objeto);
    }

    public function destroy(Fabricante $fabricante)
    {
        $fabricante->delete();
        return response(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Http\Requests\StoreServicoRequest;
use App\Http\Requests\UpdateServicoRequest;
use App\Http\Resources\ServicoResource;

class ServicoController extends Controller
{
    public function index()
    {
        $lista = Servico::all();
        return ServicoResource::collection($lista);
    }

    public function store(StoreServicoRequest $request)
    {
        $objeto = Servico::create($request->validated());

        return new ServicoResource($objeto);
    }

    public function show(Servico $servico)
    {
        return new ServicoResource($servico);
    }


    public function update(UpdateServicoRequest $request, Servico $servico)
    {
        $objeto = $servico->update($request->validated());

        return new ServicoResource($objeto);
    }

    public function destroy(Servico $servico)
    {
        $servico->delete();
        return response(null, 204);
    }
}

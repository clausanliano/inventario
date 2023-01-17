<?php

namespace App\Http\Controllers;

use App\Models\TipoServico;
use App\Http\Requests\StoreTipoServicoRequest;
use App\Http\Requests\UpdateTipoServicoRequest;
use App\Http\Resources\TipoServicoResource;

class TipoServicoController extends Controller
{
    public function index()
    {
        $lista = TipoServico::all();
        return TipoServicoResource::collection($lista);
    }

    public function store(StoreTipoServicoRequest $request)
    {
        $objeto = TipoServico::create($request->validated());

        return new TipoServicoResource($objeto);
    }


    public function show(TipoServico $tipoServico)
    {
        return new TipoServicoResource($tipoServico);
    }


    public function update(UpdateTipoServicoRequest $request, TipoServico $tipoServico)
    {
        $objeto = $tipoServico->update($request->validated());

        return new TipoServicoResource($objeto);
    }


    public function destroy(TipoServico $tipoServico)
    {
        $tipoServico->delete();
        return response(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Http\Requests\StoreFornecedorRequest;
use App\Http\Requests\UpdateFornecedorRequest;
use App\Http\Resources\FornecedorResource;

class FornecedorController extends Controller
{
    public function index()
    {
        $lista = Fornecedor::all();
        return FornecedorResource::collection($lista);
    }

    public function store(StoreFornecedorRequest $request)
    {
        $objeto = Fornecedor::create($request->validated());

        return new FornecedorResource($objeto);
    }


    public function show(Fornecedor $fornecedor)
    {
        return new FornecedorResource($fornecedor);
    }

    public function update(UpdateFornecedorRequest $request, Fornecedor $fornecedor)
    {
        $objeto = $fornecedor->update($request->validated());

        return new FornecedorResource($objeto);
    }

    public function destroy(Fornecedor $fornecedor)
    {
        $fornecedor->delete();
        return response(null, 204);
    }
}

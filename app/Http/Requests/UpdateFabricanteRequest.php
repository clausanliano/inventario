<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFabricanteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required', 'max:70', 'unique:fabricantes,nome,'.$this->route('fabrficante.id')],
        ];
    }
}

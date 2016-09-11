<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|unique:users|max:255',
            'v_numdni'=>'required|min:8',
            'v_coddep'=>'required|min:2',
            'v_codpro'=>'required|min:2',
            'v_coddis'=>'required|min:2',
        ];
    }
}

<?php

namespace App\Http\Requests\Servidor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ServidorAlterarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){

        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){

        return [
            'SERVIDOR_ID'=>['required', 'integer'],
            'SERVIDOR_NOME'=>['required'],
            'SERVIDOR_MATRICULA'=>['required'],
            'SERVIDOR_ORGAO'=>['required'],
            'SERVIDOR_DT_ADMISSAO'=>['required', 'date'],
            'SERVIDOR_CPF'=>['required'],
            
        ];
    }

    public function attributes() {
        return [
          
            "SERVIDOR_ID" => "<b>SERVIDOR ID</b>",
            "SERVIDOR_NOME" => "<b>SERVIDOR NOME</b>",
            "SERVIDOR_MATRICULA" => "<b>MATRICULA</b>",
            "SERVIDOR_ORGAO" => "<b>ORGAO</b>",
            "SERVIDOR_DT_ADMISSAO" => "<b>DATA DE ADMISSAO</b>",
            "SERVIDOR_CPF" => "<b>CPF</b>",
            
        ];
    }
}

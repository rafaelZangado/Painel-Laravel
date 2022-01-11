<?php

namespace App\Http\Requests\Listar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class crudRequest extends FormRequest {
    
    public function authorize(){
        return Auth::check();
    }

   
    public function rules() {
        return [
            'nome' => ['required'],
            'idade' => ['required', 'integer'],

        ];
    }
    public function attributes(){

        return [
            'nome' => '<b>Nome</b>',
            'idade' => '<b>Idade</b>',
        ];        
    }
}

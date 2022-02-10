<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class PostsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('comprobar_role');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required|max:50', 
            'extracto' => 'required|max:50',  
            'contenido' => 'required|max:50'
        ];
    }

    public function messages() 
    {
        return [
            'titulo.required' => __('traduccion.A title is required'), 
            'extracto.required' => __('traduccion.A extract is required'),  
            'contenido.required' => __('traduccion.A content is required'), 
        ];
    }
} 
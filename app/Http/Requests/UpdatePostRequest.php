<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:50',
            'cover_image' => 'image|max:250',
            'category_id' => 'required|exists:categories,id'

        ];
    }

    public function messages(){
        return [
            'title.required' => 'il titolo è obbligatorio',
            'title.max' => 'il titolo deve essere lungo al massimo :max caratteri',
            'cover_image.' => 'il  file deve essere di tipo: jpg, jpeg, png',
            'cover_image.max' => 'il nome del file deve essere lungo al massimo :max caratteri',
            'category_id.required' => 'Devi selezionare una categoria',
            'category_id.exists' => 'categoria selezionata non valida'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'name' => 'required|min:5|max:255|unique:comics',
            'type' => 'required|max:50',
            'sale_date' => 'required|max:30',
            'series' => 'required|max:30',
            'price'=>'required|max:30',
            'image' => 'url|nullable',
            'description' => 'nullable',
        ];
    }

    public  function messages(){
        return [
            'name.required'=>'Il campo è obbligatorio',
            'name.min'=>'Il titolo deve essere di almeno :min caratteri',
            'name.max'=>'Il titolo deve essere di :max caratteri',
            'type.required' => 'Il tipo è obbligatorio.',
            'type.max' => 'Il tipo non può superare i :max caratteri.',
            'sale_date' => 'La data è obbligatoria o non è una data.',
            'price.max' => 'Il prezzo non può superare i :max caratteri.',
            'series' => 'La serie è obbligatoria.',

        ];
    }
}

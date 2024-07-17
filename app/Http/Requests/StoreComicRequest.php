<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'title' => 'required|string|min:3|max:50|unique:comics',
            'description' => 'string|nullable',
            'price' => 'nullable|min:0',
            'series' => 'string|nullable',
        ];
    }

    // funzione per messaggi errore validazione personalizzati
    public function messages()
    {
        return [
            'title.min' => 'Il titolo è obbligatorio (almeno 3 caratteri)',
            'title.unique' => 'Questo titolo è già stato usato',
            'title.max' => 'Max 50 caratteri',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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

            'title' => 'required|string|min:3|max:255',
            'description' => 'string|nullable',
            'price' => 'nullable|numeric|min:0',
            'series' => 'string|nullable',
        ];
    }
    // funzione per messaggi errore validazione personalizzati
    public function messages()
    {
        return [
            'title' => 'Il titolo è obbligatorio (almeno tre caratteri)'
        ];
    }
}

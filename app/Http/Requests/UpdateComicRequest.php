<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            // con Rule possiamo modificare gli altri campi senza errore su title
            'title' => ['required', 'string', 'min:3', 'max:50', Rule::unique('comics')->ignore($this->comic)],
            'description' => 'string|nullable',
            'price' => 'nullable|min:0',
            'series' => 'string|nullable',
            // si può usare anche l'array per le condizioni oltre il pipe
            // 
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

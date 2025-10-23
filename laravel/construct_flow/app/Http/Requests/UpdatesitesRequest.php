<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatesitesRequest extends FormRequest
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
            'site_code' => 'required|unique:sites,site_code',
            'name' => 'required',
            'city' => 'required',
            'country' => 'required|size:2',
        ];
    }


    public function messages(): array
    {
        return [
            'site_code.required' => 'Een sitecode is verplicht.',
            'site_code.unique'   => 'Deze sitecode bestaat al.',
            'name.required'      => 'De sitenaam is verplicht.',
            'country.size'       => 'Land moet een geldige ISO 3166-1 alpha-2 code zijn.',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateprojectsRequest extends FormRequest
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
            'project_code' => 'required|unique:projects,project_code',
            'name' => 'required',
            'status' => 'required',
            'start_date' => 'required|date',
        ];
    }

     public function messages(): array
    {
        return [
            'project_code.required' => 'Een projectcode is verplicht.',
            'project_code.unique'   => 'Deze projectcode bestaat al.',
            'name.required'         => 'De projectnaam is verplicht.',
            'status.in'             => 'Status moet één van de volgende zijn: planned, active, completed of cancelled.',
        ];
    }
}

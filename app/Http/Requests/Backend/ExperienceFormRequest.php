<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceFormRequest extends FormRequest
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
            'company' => [
                'required',
                'max:255',
            ],
            'designation' => [
                'required',
                'max:255',
            ],
            'started_at' => [
                'nullable',
            ],
            'end_at' => [
                'nullable',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}

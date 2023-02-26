<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class AboutSectionFormRequest extends FormRequest
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
            'experience_year' => [
                'required',
                'max:255',
            ],
            'experience_title' => [
                'required',
                'max:255',
            ],
            'description' => [
                'required',
            ],
            'image' => [
                $this->about_section ? 'nullable' : 'required',
                'image',
                'max:2048',
            ],
            'total_client' => [
                'nullable',
                'max:255',
            ],
            'client_description' => [
                'nullable',
            ],
            'total_project' => [
                'required',
                'max:255',
            ],
            'project_description' => [
                'required',
            ],
        ];
    }

    public function persist()
    {
        $validated = $this->validated();

        if ($this->hasFile('image')) {
            $validated['image'] = upload($this->image, 'about_sections/', $this->about_section->image ?? null);
        }

        return $validated;
    }
}

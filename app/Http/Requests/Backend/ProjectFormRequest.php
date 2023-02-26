<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ProjectFormRequest extends FormRequest
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
            'category_id' => [
                'required',
            ],
            'title' => [
                'required',
                'max:255',
            ],
            'sub_title' => [
                'required',
                'max:255',
            ],
            'description' => [
                'nullable',
            ],
            'url' => [
                'nullable',
                'max:255'
            ],
            'image' => [
                'nullable',
                'image',
                'max:2048',
            ],
            'status' => [
                'required',
            ],
        ];
    }

    public function persist()
    {
        $validated = $this->validated();

        if ($this->hasFile('image')) {
            $validated['image'] = upload($this->image, 'projects/', $this->project->image ?? null);
        }

        return $validated;
    }
}

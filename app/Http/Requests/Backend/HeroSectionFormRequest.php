<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class HeroSectionFormRequest extends FormRequest
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
            'heading' => [
                'required',
                'max:255',
            ],
            'sub_heading' => [
                'required',
                'max:255',
            ],
            'skills' => [
                'required',
                'max:255',
            ],
            'video_url' => [
                'nullable',
                'max:255',
            ],
            'image' => [
                $this->hero_section ? 'nullable' : 'required',
                'image',
                'max:2048',
            ],
            'cv' => [
                'nullable',
                'file',
                'max:2048',
            ],
        ];
    }

    public function persist()
    {
        $validated = $this->validated();

        if ($this->hasFile('image')) {
            $validated['image'] = upload($this->image, 'hero_sections/', $this->hero_section->image ?? null);
        }

        if ($this->hasFile('cv')) {
            $validated['cv'] = upload($this->cv, 'hero_sections/', $this->hero_section->cv ?? null);
        }

        return $validated;
    }
}

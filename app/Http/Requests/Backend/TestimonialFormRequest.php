<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialFormRequest extends FormRequest
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
            'user_name' => [
                'required',
                'max:255',
            ],
            'user_image' => [
                $this->testimonial ? 'nullable' : 'required',
                'image',
                'max:2048',
            ],
            'user_designation' => [
                'required',
                'max:255',
            ],
            'description' => [
                'nullable',
            ],
            'status' => [
                'required',
            ],
        ];
    }

    public function persist()
    {
        $validated = $this->validated();

        if($this->hasFile('user_image')){
        $validated['user_image'] = upload($this->user_image, 'testimonials/', $this->testimonial->user_image ?? null);
        }

        return $validated;
    }
}

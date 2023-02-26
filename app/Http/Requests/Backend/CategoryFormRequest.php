<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Category;
use Illuminate\Validation\Rule;

class CategoryFormRequest extends FormRequest
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
            'name' => [
                'required',
                'max:255',
                Rule::unique(Category::class)->ignore($this->category->id ?? null),
            ],
            'status' => [
                'required',
            ],
        ];
    }

    public function persist()
    {
        $validated = $this->validated();

        $validated['slug'] = \Str::slug($validated['name']);

        return $validated;
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ProductImageDimension;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|dimensions:width=300,height=300',
            'price' => 'required',
            'color' => 'required',
            'category' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Product name Must Be Required',
            'category.required' => 'Product category Must Be Required',
            'color.required' => 'Product color Must Be Required',
            'price.required' => 'Product price Must Be Required',
            'description.required' => 'Product Description Must Be Required',
            'image.*.required' => 'Product image is required.',
            'image.*.image' => 'Product file must be an image (jpeg, png, jpg, gif, webp).',
            'image.*.mimes' => 'Product image must be of type: jpeg, png, jpg, gif, webp.',
            'image.*.dimensions' => 'Product image dimensions must be 300x300 pixels.',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            "name" => "required|min:3|max:150",
            "description" => "nullable|max:65535",
            "image" => "nullable|url|max:2500",
        ];
    }

    public function messages() {
        return [
            "name.required" => "Name of Project is REQUIRED",
            "description.max" => "Description is too long"
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
                'title' => 'required|min:2',
                'description' => 'required|min:10',
                'status' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Task title is required',
            'title.min' => 'Task title must be at least 2 characters',
            'description.min' => 'Task description must be at least 10 characters',
            'description.required' => 'Task description is required',
            'status.required' => 'Task status is required',
        ];
    }
}

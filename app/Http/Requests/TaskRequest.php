<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'description' => 'nullable',
//            'visibility' => 'nullable|in:private,public',
            'finished_at' => 'nullable|after:' . date('Y-m-d'),
        ];
    }
}

<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoalRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'visibility' => 'in:private,public',
            'finished_at' => 'nullable|after:' . date('Y-m-d'),
        ];
    }
}

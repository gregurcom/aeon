<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'max:255',
            'introduction' => 'max:255',
            'body' => 'min:5',
        ];
    }
}

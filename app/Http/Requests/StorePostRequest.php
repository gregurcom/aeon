<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'introduction' => 'required|max:255',
            'image' => 'nullable|image',
            'body' => 'required',
        ];
    }
}

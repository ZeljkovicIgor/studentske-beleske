<?php

namespace App\Http\Requests;

use App\Rules\MatchCurrentPasswordRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DeleteProfileRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'delete_password_confirm' => [
                'required',
                'string',
                new MatchCurrentPasswordRule(Auth::user())
            ]
        ];
    }
}

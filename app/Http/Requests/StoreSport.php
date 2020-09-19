<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSport extends FormRequest
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
            'title' => 'required',
            'coach' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'title.required' => 'タイトルを入力して下さい。',
            'coach.required' => 'コーチを入力して下さい。',
        ];
    }
}



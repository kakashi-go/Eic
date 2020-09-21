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
            'coach_request' => 'required',
            // 'author' => 'required',
        ];
    }
 
    public function messages()
    {
        return [
            'coach_request' => 'コーチへの要求を入力して下さい。',
            // 'author.required' => '著者を入力して下さい。',
        ];
    }
}
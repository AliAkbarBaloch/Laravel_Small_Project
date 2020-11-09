<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetCondition extends FormRequest
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
            //
            'job_title'=>'required',
            'min_salary'=>'required',
            'max_salary'=>'required'
        ];
    }
}

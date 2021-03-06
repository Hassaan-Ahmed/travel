<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminToursRequest extends FormRequest
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
            'name'=>'required',
            'location'=>'required',
            'continent_id'=>'required',
            'contact'=>'required',
            'description'=>'required',
            'service'=>'required',
            'photo_id' => 'required',

        ];
    }
}

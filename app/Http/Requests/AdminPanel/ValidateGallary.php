<?php

namespace App\Http\Requests\AdminPanel;

use Illuminate\Foundation\Http\FormRequest;

class ValidateGallary extends FormRequest
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
        if ( is_null(request('id')) ){
            return [
                'image_title'   => 'required|unique:gallary,image_title,NULL,id',
            ];
        } else {
            $id = dv(request('id'));
            return [
                'image_title'   => 'required|unique:gallary,image_title,NULL,id,image_title,'.$id,
            ];
        }
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromoRequest extends FormRequest
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
            'name' => 'required',
            'init_date' => 'required|date',
            'finish_date' => 'date',
            'discount_percentage' => 'numeric|digits_between:1,3',
            'is_active' => 'required|boolean',
            'false_product_id' => 'required',
            'company_id' => 'required'


        ];
    }
}

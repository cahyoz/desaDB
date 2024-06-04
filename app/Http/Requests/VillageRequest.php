<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VillageRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => 'required', 
            "code" => 'required',
            "district_code" => 'required|exists:indonesia_districts,code'
        ];
    }
    // protected function prepareForValidation() {
        
    //     $this->merge([
    //         'district_code' => $this->districtCode    
    //     ]);
    // }
}

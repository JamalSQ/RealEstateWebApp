<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrokerRequest extends FormRequest
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
            'b_email' => 'required|email',
            'b_pass' => 'required|string|min:8',
            'bc_name' => 'required|string|max:255',
            'b_name' => 'required|string|max:255',
            'b_sname' => 'required|string|max:255',
            'b_city' => 'required|string|max:255',
            'bc_number' => 'required|numeric|digits_between:1,15',
            'b_phoneno' => 'required|string|max:255',
            'is_member_of_fmi' => 'required|string|max:255',
            'b_working_area' => 'nullable|string|max:255',
            'b_customer_area' => 'nullable|string|max:255',
            'area_of_house' => 'required|string|max:255',
        ];
    }
}

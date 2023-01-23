<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
          'title'=>'required',
          'phone'=>'required',
          'email'=>'required|email',
          'city'=>'required',
          'address'=>'required',
          'count_of_hour_open'=>'required',
          'count_of_day_open'=>'required',
          'start_open'=>'required',
          'start_close'=>'required',
          'logo'=>'nullable|image|max:2048',

        ];
    }
}

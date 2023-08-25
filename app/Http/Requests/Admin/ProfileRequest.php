<?php

namespace App\Http\Requests\Admin;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::guard('admin')->check()?true:false;
    }
    public function prepareForValidation(){
        if(empty($this->password)){
            $this->merge([
            'password'=>Auth::guard('admin')->user()->password
            ]);
        }
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>"string",
            'email'=>["email",Rule::unique('admins')->ignore($this->id)],
            
            
        ];
    }
    public function messages(){
        return [
            "name.string"=>"يجب ان يكون اسم وليس رقم",
            'email.email'=>"يجب ان يكون ايميل",
            
            
        ];
    }
}

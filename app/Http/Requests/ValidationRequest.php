<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
            
                'photo' => 'required_without:id|mimes:jpg,jpeg,png',
                'name' => 'required|string|max:100',
                'username' => 'required|string|max:100',
                'mobile' =>'required|numeric', 
                'parent_mobile' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10', 
                    'email'  => 'required|email|unique:studentdata,email,'.$this -> id,
                'address'   => 'required|string|max:500',
                'password'   => 'required_without:id',
                'national_id' => 'required|exists:nationals,id',
                'country_id' => 'required|exists:countries,id',
                'birth_date' => 'required',
                'birth_place' => 'required',
                'national_number' => 'required|string|max:14',
                'certificate_id' => 'required|exists:cetificates,id',
                'certificate_date' => 'required',
                'classfication_id' => 'required|exists:classifications,id',
                'department_id' => 'required|exists:departments,id',
                'studyStatus_id' => 'required|exists:studystatuses,id',
                'religion' => 'required',
                'gander'=> 'required',
                'percentage'=> 'required',
                'grades'=> 'required',
                'military_area' => 'required_if:gander,male',
                'military_No' => 'required_if:gander,male',
                'decision_no' => 'required_if:gander,male',
                'decision_date' => 'required_if:gander,male',
                'expiry_date' => 'required_if:gander,male',
                'military_situation' => 'required_if:gander,male',
                'group_id'  => 'required|exists:groups,id',  //=> exists: table name , col
                'specialize_id'  => 'required|exists:specializes,id',
            ];
        
    }
    public function messages(){

        return [
            'required'  => 'هذا الحقل مطلوب ',
            'max'  => 'هذا الحقل طويل',
            'email.email' => ' البريد الالكتروني غير صحيح',
            'address.string' => 'العنوان لابد ان يكون حروف او حروف وارقام ',
            'name.string'  =>'الاسم لابد ان يكون حروف ',
            'username.string'  =>'الاسم لابد ان يكون حروف ',
            'photo.required_without'  => 'الصوره مطلوبة',
            'email.unique' => 'البريد الالكتروني مستخدم من قبل ',
            'national_number.string'  =>' الرقم التعريفي لابد ان يكون حروف او ارقام وحروف',
            'required_if' => 'هذا الحقل مطلوب ',
            'password.required_without:id' => 'هذا الحقل مطلوب',
            'group_id.exists'  => 'الفرقة غير موجود ',
            'country_id.exists'  => 'الدولة غير موجود ',
            'classfication_id.exists'  => 'التصنيف غير موجود ',
            'certificate_id.exists'  => 'الشهادة غير موجود ',
            'studyStatus_id.exists'  => 'التخصص غير موجود ',
            'department_id.exists'  => 'القسم غير موجود ',
            'national_id.exists'  => 'الجنسية غير موجود ',
            'specialize_id.exists'  => 'الجنسية غير موجود ',

        ];
    }
}

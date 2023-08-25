<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Book;
class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        
        $book=Book::find($this->id);
        $rules= [
           'name'=>["required","string",Rule::unique('books')->ignore($this->id)],
           'type'=>"string|in:ديني,علمي,رياضي,خيالي",
           'language'=>'string|in:عربي,انجلزي,ايطالي,فرنسي',
           'photo'=>['mimes:jpg,png,jpeg',Rule::requiredIf(function() use ($book) {
            return $book?false:true;
                
           })],
           'file'=>['mimes:pdf',Rule::requiredIf(function()use ($book){
            return $book?false:true;
           })],

        ];
        return $rules;
    }
    public function messages(){
        return [
            'name.required'=>"يجب ادخال اسم الكتاب",
            'type.required'=>'يجب ادخال نوع الكتاب',
            'language.required'=>'يجب ادخال لغه الكتاب',
            'photo.required'=>'يجب ادخال صوره الكتاب',
            'file.required'=>'يجب ادخال  الكتاب',
            'photo.mimes'=>"يجب ان يكون صوره الكتاب بامتداد ال(jpg,pngjpeg)",
            'file.mimes'=>"يجب ان يكون  الكتاب بامتداد ال(pdf,docx)",
            'name.unique'=>"اسم الكتاب موجود من قبل",
            
        ];
    }
}

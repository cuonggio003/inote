<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNoteRequest extends FormRequest
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
            'name' => 'required',
            'status' => 'required',
            'manager'=>'required',
            'note' => 'required',
        ];
        
    }

    public function massage()
    {
        return [
            'name.required' => 'khong duoc de trong',
            'status.required' => 'khong de trong',
            'manager.required' => 'khong duoc de trong',
            'note.required' => 'khong duoc de trong',
        ];
    }
}

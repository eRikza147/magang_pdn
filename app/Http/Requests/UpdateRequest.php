<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'email' =>'required|email',
            'telepon' =>'required:min:12',
            'foto' => 'required|mimes:jpg,png'
        ];
    }
    public function messages():array
    {
        return[
            'nama.required' => 'Data harus diisikan',
            'email.required' =>'Email tidak boleh kosong',
            'email.email' => 'pastikan email di inputkan',
            'telepon.required'=> 'telepon tidak boleh kosong',
            'foto.mimes'=>'Pastikan format file benar'
        ];
    }
}

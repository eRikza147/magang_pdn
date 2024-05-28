<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMapel extends FormRequest
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
            'nmapel'=>'required',
            'guru'=>'required',
            'jadwal'=>'required',
            'kelas'=>'required'

        ];
    }
    public function messages():array
    {
        return[
        'nmapel.required'=>'data belum dinput',
        'guru.required'=>'data belum dinput',
        'jadwal.required'=>'data belum dinput',
        'kelas.required'=>'data belum dinput'
       
        ];
    }
}

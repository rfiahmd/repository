<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FakultasRequest extends FormRequest
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
        $id = $this->route('fakultas');
        $id = is_object($id) ? $id->id : $id;

        return [
            'nama_fakultas' => 'required|string|max:100',
            'kode_fakultas' => [
                'required',
                'string',
                'max:5',
                Rule::unique('fakultas', 'kode_fakultas')->ignore($id),
            ],
            'deskripsi' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'nama_fakultas.required' => 'Nama fakultas harus diisi.',
            'nama_fakultas.string' => 'Nama fakultas harus berupa teks.',
            'nama_fakultas.max' => 'Nama fakultas maksimal 100 karakter.',

            'kode_fakultas.required' => 'Kode fakultas harus diisi.',
            'kode_fakultas.string' => 'Kode fakultas harus berupa teks.',
            'kode_fakultas.max' => 'Kode fakultas maksimal 5 karakter.',
            'kode_fakultas.unique' => 'Kode fakultas sudah digunakan.',

            'deskripsi.string' => 'Deskripsi harus berupa teks.',
        ];
    }

}

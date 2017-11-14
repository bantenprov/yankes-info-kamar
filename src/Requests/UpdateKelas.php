<?php

namespace Supriyanih\InfoKamar\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKelas extends FormRequest
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
            'kode_kelas' => 'required',
            'nama_kelas' => 'required',
        ];
    }

    public function messages()
    {
        $messages = [
            'kode_kelas.required' => 'Kode Kelas Rawat Inap Masih Kosong',
            'nama_kelas.required' => 'Nama Kelas Rawat Inap Tidak Boleh Kosong'
        ];

        if ('PATCH' === $this->method()){

            $messages = [
                'kode_kelas.required' => 'Kode Kelas Rawat Inap tidak boleh kosong',
                'nama_kelas.required' => 'Nama Kelas Rawat Inap Tidak Boleh Kosong'
            ];

        }

        return $messages;
    }
}

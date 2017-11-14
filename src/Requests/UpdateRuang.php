<?php

namespace Supriyanih\InfoKamar\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRuang extends FormRequest
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

            'kode_ruang' => 'required',
            'nama_ruang' => 'required',
            'kelas_id' => 'required',
        ];
    }

    public function messages()
    {
        $messages = [
          'kelas_id.required' => 'Kelas Rawah Inap belum di pilih',
            'kode_ruang.required' => 'Kode ruang Rawat Inap Masih Kosong',
            'nama_ruang.required' => 'Nama ruang Rawat Inap Tidak Boleh Kosong'
        ];

        if ('PATCH' === $this->method()){

            $messages = [
              'kelas_id.required' => 'Kelas Rawah Inap belum di pilih',
                'kode_ruang.required' => 'Kode ruang Rawat Inap tidak boleh kosong',
                'nama_ruang.required' => 'Nama ruang Rawat Inap Tidak Boleh Kosong'
            ];

        }

        return $messages;
    }
}

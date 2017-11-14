<?php

namespace Supriyanih\InfoKamar\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBed extends FormRequest
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


            'kode_bed' => 'required',
            'ruang_id' => 'required',
        ];
    }

    public function messages()
    {
        $messages = [
          'ruang_id.required' => 'Kelas Rawah Inap belum di pilih',
            'kode_bed.required' => 'Kode Tempat Tidur Masih Kosong'
        ];

        if ('PATCH' === $this->method()){

            $messages = [
              'ruang_id.required' => 'Nama Ruangan belum di pilih',
                'kode_bed.required' => 'Kode Tempat Tidur tidak boleh kosong'
            ];

        }

        return $messages;
    }
}

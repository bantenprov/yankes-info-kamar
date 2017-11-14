<?php namespace Supriyanih\InfoKamar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * The InfoKamarModel class.
 *
 * @package Supriyanih\InfoKamar
 * @author  supriyanih <supriyanih@gmail.com>
 */
class Kelasrawat extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    use SoftDeletes;
    protected $table = 'kelas_rawat_inap';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = ['kode_kelas','nama_kelas'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];

    protected static function boot()
        {
          parent::boot();

          static::deleting(function($kelas_rawat_inap) {
             foreach ($kelas_rawat_inap->kelas()->get() as $kls) {
                $kls->delete();
             }
          });
        }

     public function kelas()
    {
      return  $this->hasMany('Supriyanih\InfoKamar\Models\Ruangrawat','id');
    }
}

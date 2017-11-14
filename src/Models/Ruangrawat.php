<?php namespace Supriyanih\InfoKamar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * The InfoKamarModel class.
 *
 * @package Supriyanih\InfoKamar
 * @author  supriyanih <supriyanih@gmail.com>
 */
class Ruangrawat extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
      use SoftDeletes;
    protected $table = 'ruang_rawat_inap';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = ['kelas_id','kode_ruang','nama_ruang'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];

    protected static function boot()
        {
          parent::boot();

          static::deleting(function($ruang_rawat_inap) {
             foreach ($ruang_rawat_inap->ranjang()->get() as $bed) {
                $bed->delete();
             }
          });
        }

    public function kelas()
     {
        return  $this->belongsTo('Supriyanih\InfoKamar\Models\Kelasrawat','kelas_id');
     }


     public function ranjang()
    {
      return  $this->hasMany('Supriyanih\InfoKamar\Models\Tempattidur','ruang_id');
    }
}

<?php namespace Supriyanih\InfoKamar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * The InfoKamarModel class.
 *
 * @package Supriyanih\InfoKamar
 * @author  supriyanih <supriyanih@gmail.com>
 */
class Tempattidur extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    use SoftDeletes;
    protected $table = 'tempat_tidur';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = ['ruang_id','kode_bed','status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];


    public function ranjang()
     {
        return  $this->belongsTo('Supriyanih\InfoKamar\Models\Ruangrawat','ruang_id');
     }
}

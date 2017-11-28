<?php namespace Supriyanih\InfoKamar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Supriyanih\InfoKamar\Facades\InfoKamar;
use Supriyanih\InfoKamar\Models\Tempattidur;

/**
 * The InfoKamarController class.
 *
 * @package Supriyanih\InfoKamar
 * @author  supriyanih <supriyanih@gmail.com>
 */
class InfoKamarController extends Controller
{
    public function demo()
    {

      $bed = Tempattidur::with('ranjang.kelas')->whereNull('deleted_at')->paginate(5);;
        return view('info-kamar::view', compact('bed'));
    }
}

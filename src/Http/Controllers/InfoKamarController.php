<?php namespace Bantenprov\YankesInfoKamar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\YankesInfoKamar\Facades\InfoKamar;
use Bantenprov\YankesInfoKamarr\Models\Tempattidur;

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

      $bed = Tempattidur::with('ranjang.kelas')->whereNull('deleted_at')->get();
        return view('info-kamar::view', compact('bed'));
    }
}

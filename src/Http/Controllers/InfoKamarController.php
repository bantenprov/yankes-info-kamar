<?php namespace Bantenprov\YankesInfoKamar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\YankesInfoKamar\Facades\InfoKamar;
use Bantenprov\YankesInfoKamar\Models\Tempattidur;


class InfoKamarController extends Controller
{
    public function demo()
    {

      $bed = Tempattidur::with('ranjang.kelas')->whereNull('deleted_at')->paginate(5);;
        return view('info-kamar::view', compact('bed'));
    }
}

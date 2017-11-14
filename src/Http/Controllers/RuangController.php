<?php namespace Supriyanih\InfoKamar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Supriyanih\InfoKamar\Facades\InfoKamar;
use Supriyanih\InfoKamar\Models\Ruangrawat;
use Supriyanih\InfoKamar\Models\Kelasrawat;
use Supriyanih\InfoKamar\Requests\StoreRuang;
use Supriyanih\InfoKamar\Requests\UpdateRuang;

/**
 * The InfoKamarController class.
 *
 * @package Supriyanih\InfoKamar
 * @author  supriyanih <supriyanih@gmail.com>
 */
class RuangController extends Controller
{

 public function index(){

 	$ruang = Ruangrawat::with('kelas')->paginate(5);
 	return view('info-kamar::ruang.index', compact('ruang'));

 }

 public function create()
 {
   $kelas = Kelasrawat::all();
 	return view('info-kamar::ruang.create', compact('kelas'));
 }

 public function store(StoreRuang $req)
 {
 	$this->validate($req,[
    'kelas_id' => 'required',
 		'kode_ruang' =>'required',
 		'nama_ruang' => 'required'
 	]);

 	$ruang = new Ruangrawat;
    $ruang->kelas_id = $req->kelas_id;
   	 $ruang->kode_ruang = $req->kode_ruang;
   	 $ruang->nama_ruang = $req->nama_ruang;
   	 $ruang->save();

   	  \Session::flash('flash_message', 'Ruang Rawat Inap Berhasil Di buat');
        return redirect()->route('ruang.index');

 }

 public function show($id)
    {
        $ruang = Ruangrawat::with('kelas')->findOrFail($id);
        return view('info-kamar::ruang.show', compact('ruang'));
    }

 public function edit($id)
   {
     $kelas = Kelasrawat::all();
   	$ruang = Ruangrawat::findOrFail($id);

   		return view('info-kamar::ruang.edit', compact('ruang','kelas'));
   }

   public function update(UpdateRuang $request, $id)
   {
   		$this->validate($request,[
        'kelas_id' => 'required',
   		'kode_ruang' => 'required',
   		'nama_ruang' => 'required',
   	]);
   		$ruang = Ruangrawat::findOrFail($id);
      $ruang->kelas_id = $request->kelas_id;
   		$ruang->kode_ruang = $request->kode_ruang;
	   	 $ruang->nama_ruang = $request->nama_ruang;
	   	 $ruang->save();
   		\Session::flash('flash_message', 'ruang Rawat Inap Berhasil di UPDATE');
        return redirect()->route('ruang.index');
   }

   public function destroy($id)
    {

        Ruangrawat::find($id)->delete();
        return redirect()->route('ruang.index');
    }

}

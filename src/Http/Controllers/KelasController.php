<?php namespace Supriyanih\InfoKamar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Supriyanih\InfoKamar\Facades\InfoKamar;
use Supriyanih\InfoKamar\Models\Kelasrawat;
use Supriyanih\InfoKamar\Requests\StoreKelas;
use Supriyanih\InfoKamar\Requests\UpdateKelas;

/**
 * The InfoKamarController class.
 *
 * @package Supriyanih\InfoKamar
 * @author  supriyanih <supriyanih@gmail.com>
 */
class KelasController extends Controller
{

 public function index(){

 	$kelas = Kelasrawat::paginate(5);

 	return view('info-kamar::kelas.index', compact('kelas'));

 }

 public function create()
 {
 	return view('info-kamar::kelas.create');
 }

 public function store(StoreKelas $req)
 {
 	$this->validate($req,[
 		'kode_kelas' =>'required',
 		'nama_kelas' => 'required'
 	]);

 	$kelas = new Kelasrawat;
   	 $kelas->kode_kelas = $req->kode_kelas;
   	 $kelas->nama_kelas = $req->nama_kelas;
   	 $kelas->save();

   	  \Session::flash('flash_message', 'Kelas Rawat Inap Berhasil Di buat');
        return redirect()->route('kelas.index');

 }

 public function show($id)
    {
        $kelas = Kelasrawat::findOrFail($id);
        return view('info-kamar::kelas.show', compact('kelas'));
    }

 public function edit($id)
   {
   	$kelas = Kelasrawat::findOrFail($id);

   		return view('info-kamar::kelas.edit', compact('kelas'));
   }

   public function update(UpdateKelas $request, $id)
   {
   		$this->validate($request,[
   		'kode_kelas' => 'required',
   		'nama_kelas' => 'required',
   	]);
   		$kelas = Kelasrawat::findOrFail($id);
   		$kelas->kode_kelas = $request->kode_kelas;
	   	 $kelas->nama_kelas = $request->nama_kelas;
	   	 $kelas->save();
   		\Session::flash('flash_message', 'Kelas Rawat Inap Berhasil di UPDATE');
        return redirect()->route('kelas.index');
   }

   public function destroy($id)
    {

        Kelasrawat::find($id)->delete();
        return redirect()->route('kelas.index');
    }

}

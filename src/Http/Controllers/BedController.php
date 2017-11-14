<?php namespace Supriyanih\InfoKamar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Supriyanih\InfoKamar\Facades\InfoKamar;
use Supriyanih\InfoKamar\Models\Ruangrawat;
use Supriyanih\InfoKamar\Models\Tempattidur;
use Supriyanih\InfoKamar\Requests\StoreBed;
use Supriyanih\InfoKamar\Requests\UpdateBed;


class BedController extends Controller
{

 public function index(){

 	$bed = Tempattidur::with('ranjang')->paginate(5);

 	return view('info-kamar::bed.index', compact('bed'));

 }

 public function create()
 {
   $ruang = Ruangrawat::all();
 	return view('info-kamar::bed.create', compact('ruang'));
 }

 public function store(StoreBed $req)
 {
 	$this->validate($req,[
    'ruang_id' => 'required',
 		'kode_bed' =>'required'
 	]);

 	$bed = new Tempattidur;
    $bed->ruang_id = $req->ruang_id;
   	 $bed->kode_bed = $req->kode_bed;
   	 $bed->status = 1;
   	 $bed->save();

   	  \Session::flash('flash_message', 'bed Rawat Inap Berhasil Di buat');
        return redirect()->route('bed.index');

 }

 public function show($id)
    {
        $bed = Tempattidur::with('ranjang')->findOrFail($id);
        return view('info-kamar::bed.show', compact('bed'));
    }

 public function edit($id)
   {
     $ruang = Ruangrawat::all();
   	$bed = Tempattidur::findOrFail($id);

   		return view('info-kamar::bed.edit', compact('bed','ruang'));
   }

   public function update(UpdateBed $request, $id)
   {
   		$this->validate($request,[
        'ruang_id' => 'required',
   		'kode_bed' => 'required',
   		'status' => 'required',
   	]);
   		$bed = Tempattidur::findOrFail($id);
      $bed->ruang_id = $request->ruang_id;
   		$bed->kode_bed = $request->kode_bed;
	   	 $bed->status = $request->status;
	   	 $bed->save();
   		\Session::flash('flash_message', 'bed Rawat Inap Berhasil di UPDATE');
        return redirect()->route('bed.index');
   }

   public function destroy($id)
    {

        Tempattidur::find($id)->delete();
        return redirect()->route('bed.index');
    }

}

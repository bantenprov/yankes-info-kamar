

  <h1>Edit ruang Rawat Inap: {{ $ruang->nama_ruang}}</h1>
  <hr>
  <div class="row">
    <div class="col-md-12">

  {!! Form::open(['method'=> 'PATCH', 'route'=>['ruang.update', $ruang->id], 'files'=>true]) !!}

  <div class="form-group">
    {!! Form::label('Kelas Rawat') !!}
    <select name="kelas_id" id="kelas_id" required >
        <option value="">- - Pilih Dokter Jaga - -</option>
        @foreach ($kelas as $kls)
            <option value="{{ $kls->id }}" {!! ($ruang->kelas_id==$kls->id) ? "selected='selected'":"" !!} >
               {{$kls->kode_kelas}} -  {{$kls->nama_kelas}} </option>
        @endforeach

    </select>

  </div>
      <div class="form-group">
  {!! Form::label('Kode') !!}
  {!! Form::text('kode_ruang', $ruang->kode_ruang, ['class'=> 'form-control']) !!}
</div>

{{-- ruang Ruangan Inap -------------------------------------------------------------------}}
<div class="form-group">
  {!! Form::label('nama_ruang') !!}
  {!! Form::text('nama_ruang', $ruang->nama_ruang, ['class'=> 'form-control']) !!}
</div>

{{-- submit ------------------------------------------------------------------}}
<div class="form-group">
  {!! Form::submit('updated') !!}
</div>
<div class="form-group">
  <a href="{{ route('ruang.index')}}" class="btn btn-default"> &raquo; back</a>
</div>
      {!! Form::close() !!}



    </div>
  </div>

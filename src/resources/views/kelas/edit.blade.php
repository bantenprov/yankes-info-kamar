

  <h1>Edit Kelas Rawat Inap: {{ $kelas->nama_kelas}}</h1>
  <hr>
  <div class="row">
    <div class="col-md-12">

  {!! Form::open(['method'=> 'PATCH', 'route'=>['kelas.update', $kelas->id], 'files'=>true]) !!}
      <div class="form-group">
  {!! Form::label('kode') !!}
  {!! Form::text('kode_kelas', $kelas->kode_kelas, ['class'=> 'form-control']) !!}
</div>

{{-- Kelas Ruangan Inap -------------------------------------------------------------------}}
<div class="form-group">
  {!! Form::label('nama_kelas') !!}
  {!! Form::text('nama_kelas', $kelas->nama_kelas, ['class'=> 'form-control']) !!}
</div>

{{-- submit ------------------------------------------------------------------}}
<div class="form-group">
  {!! Form::submit('updated') !!}
</div>

      {!! Form::close() !!}



    </div>
  </div>

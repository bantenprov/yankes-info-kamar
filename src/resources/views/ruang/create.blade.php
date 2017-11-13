
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(['route'=>['ruang.store', 'store'], 'files'=>true]) !!}

  <div class="form-group">
    <label for="kelas_id">Kelas Rawat Inap</label>
    <select name="kelas_id" id="kelas_id" required >
        <option value="">- - Pilih Kelas Rawat Inap - -</option>
        @foreach ($kelas as $kls)
            <option value="{{ $kls->id }}" > {{$kls->nama_kelas}} </option>
        @endforeach

    </select>
  </div>
    <div class="form-group">
        <label for="kode_ruang">Kode</label>
   <input type="text" name="kode_ruang" id="kode_ruang">

    </div>
    <div class="form-group">
        <label for="nama_ruang"> Ruang Rawat Inap</label>
        <input type="text" name="nama_ruang" id="nama_ruang">
    </div>

    {!! Form::submit('submit')!!}

    <div class="form-group">
      <a href="{{ route('ruang.index')}}" class="btn btn-default"> &raquo; back</a>
    </div>
{!! Form::close() !!}

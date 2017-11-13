
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(['route'=>['bed.store', 'store'], 'files'=>true]) !!}

  <div class="form-group">
    <label for="ruang_id">Nama Ruangan</label>
    <select name="ruang_id" id="ruang_id" required >
        <option value="">- - Pilih Nama Ruangan - -</option>
        @foreach ($ruang as $r)
            <option value="{{ $r->id }}" > {{$r->nama_ruang}} </option>
        @endforeach

    </select>
  </div>
    <div class="form-group">
        <label for="kode_ruang">Kode Tempat Tidur</label>
   <input type="text" name="kode_bed" id="kode_bed">

    </div>

    {!! Form::submit('submit')!!}

    <div class="form-group">
      <a href="{{ route('bed.index')}}" class="btn btn-default"> &raquo; back</a>
    </div>
{!! Form::close() !!}

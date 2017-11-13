
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(['route'=>['kelas.store', 'store'], 'files'=>true]) !!}

    <div class="form-group">
        <label for="kode_kelas">Kode Kelas Rawat Inap</label>
   <input type="text" name="kode_kelas" id="kode_kelas">

    </div>
    <div class="form-group">
        <label for="nama_kelas"> Kelas Rawat Inap</label>
        <input type="text" name="nama_kelas" id="nama_kelas">
    </div>

    {!! Form::submit('submit')!!}
    
    
{!! Form::close() !!}

    <h2>{{$ruang->kelas->nama_kelas}}</h2>
    <h2>{{ $ruang->kode_ruang }}</h2>
    <h2> {{ $ruang->nama_ruang }}</h2>


<hr>
<a href="{{ route('ruang.index')}}" class="btn btn-default"> &raquo; back</a>
<a href="{{ route('ruang.edit',$ruang->id)}}" class="btn btn-default">ubah &raquo;</a>

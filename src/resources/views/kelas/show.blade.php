
    <h1>{{ $kelas->kode_kelas }}</h1>
    <h2> {{ $kelas->nama_kelas }}</h2>
    

<hr>

<a href="{{ route('kelas.edit',$kelas->id)}}" class="btn btn-default">ubah &raquo;</a>


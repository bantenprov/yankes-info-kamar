
    <h2>{{$bed->ranjang->nama_ruang}}</h2>
    <h2>{{ $bed->kode_bed }}</h2>
    <h2> {{ $bed->status }}</h2>


<hr>
<a href="{{ route('bed.index')}}" class="btn btn-default"> &raquo; back</a>
<a href="{{ route('bed.edit',$bed->id)}}" class="btn btn-default">ubah &raquo;</a>

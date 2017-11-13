

<h1>ruang Rawat Inap</h1>
   <h3> <a href="{{ url('demo')}}" class="btn btn-default btn-sm">&laquo; Kembali </a></h3>
    <h3> <a href="{{ route('ruang.create')}}" class="btn btn-default btn-sm">Tambah &raquo;</a></h3>
   <div class="table-responsive">
    <table class="table table-striped  b-t">
         <thead>
        <tr>
            <th>Kode</th>
            <th>Kelas</th>
            <th>ruang Rawat Inap</th>
            <th>Aksi</th>
        </tr>
        </thead>
         <tbody>

    @foreach($ruang as $r)
      <tr>
       <td>{{$r->kode_ruang}}</td>
       <td>{{$r->kelas->nama_kelas}}</td>
       <td>{{ $r->nama_ruang }}</td>
       <td class="text-center">
            <a href="{{ route('ruang.show',$r->id)}}" class="btn btn-sm"> show </a>
            <a href="{{ route('ruang.edit',$r->id)}}" class="btn btn-sm"> ubah </a>
            <form method="POST" action="{{ route('ruang.destroy', [$r->id]) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-warning">hapus</button>
            </form></td>
       </td>

        </tr>

        @endforeach

         </tbody>
         </table>
     </div>

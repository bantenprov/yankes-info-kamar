

<h1>Kelas Rawat Inap</h1>
  <h3> <a href="{{ url('demo')}}" class="btn btn-default btn-sm">&laquo; Kembali </a></h3>
    <h3> <a href="{{ route('kelas.create')}}" class="btn btn-default btn-sm">Tambah &raquo;</a></h3>
   <div class="table-responsive">
    <table class="table table-striped  b-t">
         <thead>
        <tr>
            <th>Kode</th>
            <th>Kelas Rawat Inap</th>
            <th>Aksi</th>
        </tr>
        </thead>
         <tbody>

    @foreach($kelas as $kls)
      <tr>
       <td>{{$kls->kode_kelas}}</td>
       <td>{{ $kls->nama_kelas }}</td>
       <td class="text-center">
            <a href="{{ route('kelas.show',$kls->id)}}" class="btn btn-sm"> show </a>
            <a href="{{ route('kelas.edit',$kls->id)}}" class="btn btn-sm"> ubah </a>
            <form method="POST" action="{{ route('kelas.destroy', [$kls->id]) }}">
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



<h1>Data Tempat Tidur</h1>
<h4> <a href="{{ url('demo')}}" class="btn btn-default btn-sm">&laquo; Kembali </a></h4>
    <h3> <a href="{{ route('bed.create')}}" class="btn btn-default btn-sm">Tambah &raquo;</a></h3>
   <div class="table-responsive">
    <table class="table table-striped  b-t">
         <thead>
        <tr>

            <th>Nama Ruang</th>
            <th>Kode Tempat Tidur</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        </thead>
         <tbody>

    @foreach($bed as $r)
      <tr>

       <td>{{$r->ranjang->nama_ruang}}</td>
       <td>{{ $r->kode_bed }}</td>
          <td>{{ $r->status }}</td>
       <td class="text-center">
            <a href="{{ route('bed.show',$r->id)}}" class="btn btn-sm"> show </a>
            <a href="{{ route('bed.edit',$r->id)}}" class="btn btn-sm"> ubah </a>
            <form method="POST" action="{{ route('bed.destroy', [$r->id]) }}">
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

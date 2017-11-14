<h3>Menu</h3>
<a href="{{ route('kelas.index')}}">Kelas Rawat Inap</a>
<a href="{{ route('ruang.index')}}">Ruanga Rawat Inap</a>
<a href="{{ route('bed.index')}}">Tempat Tidur</a>

<h4><strong>Data Kamar Inap</strong></h4>
<table>
  <thead>
    <tr>
      <th>Kelas </th>
      <th>Ruangan</th>
      <th>Kode Tempat Tidur</th>
      <th>Status</th>


    </tr>
  </thead>
  <tbody>
    @foreach ($bed as $tt)
      <tr>
        <td>{{$tt->ranjang->kelas->nama_kelas}}</td>
        <td>{{$tt->ranjang->nama_ruang}}</td>
        <td>{{$tt->kode_bed}}</td>
        <td>{{$tt->status}}</td>


      </tr>
    @endforeach

  </tbody>

</table>
<h5>Paginate</h5>
  <div >
 Data {{ $bed->firstItem() }}-{{ $bed->lastItem() }} Total Data :<strong> {{ $bed->total()  }}</strong> </small>
   {!! $bed->links() !!}
  </div>
  

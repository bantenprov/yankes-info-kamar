

  <h1>Edit Tempat Tidur: {{ $bed->kode_bed}}</h1>
  <hr>
  <div class="row">
    <div class="col-md-12">

  {!! Form::open(['method'=> 'PATCH', 'route'=>['bed.update', $bed->id], 'files'=>true]) !!}

  <div class="form-group">
    {!! Form::label('ruang Rawat') !!}
    <select name="ruang_id" id="ruang_id" required >
        <option value="">-  Edit Nama Ruangan  -</option>
        @foreach ($ruang as $r)
            <option value="{{ $r->id }}" {!! ($bed->ruang_id==$r->id) ? "selected='selected'":"" !!} >
               {{$r->kode_ruang}} - {{$r->nama_ruang}} </option>
        @endforeach

    </select>

  </div>
      <div class="form-group">
  {!! Form::label('Kode') !!}
  {!! Form::text('kode_bed', $bed->kode_bed, ['class'=> 'form-control']) !!}
</div>

{{-- bed bedan Inap -------------------------------------------------------------------}}
<div class="form-group">

      <div class="radio">
          <label class="ui-check ui-check-md">
              {!! Form::radio('status','1',($bed->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')) !!}


          </label>
          &nbsp; &nbsp;
          <label class="ui-check ui-check-md">
              {!! Form::radio('status','0',($bed->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')) !!}    

          </label>
      </div>

</div>

{{-- submit ------------------------------------------------------------------}}
<div class="form-group">
  {!! Form::submit('updated') !!}
</div>
<div class="form-group">
  <a href="{{ route('bed.index')}}" class="btn btn-default"> &raquo; back</a>
</div>
      {!! Form::close() !!}



    </div>
  </div>

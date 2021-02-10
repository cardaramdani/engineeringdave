@extends('layouts.crud')
@section('title')
      Filter Kwh Unit
@endsection
@section('li_tambahan')
      <form action="/kwhmeterunit/export" method="post">
        @csrf
          <input type="date" name="startdate" >
          <input type="date" name="todate" >
          <button type="submit" ><i class="fas fa-download"></i></button>
      </form>
      
@endsection
@section('main-container')
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
<h1 class="my-5" align="center">Form filter data KWH Unit</h1>
  <table class="table table-bordered table-striped my-1 ">

  <thead class="fixed-header thead-dark" align="center">
    
<tr>
  
    <th scope="col" align="center" class="align-middle">No</th>
    <th scope="col" class="align-middle">ACTION</th>
    <th scope="col" align="center" class="align-middle">Unit</th>
    @if(Auth::user()->jabatan=='chief')
    <th scope="col" align="center" class="align-middle">No Seri</th>
    <th scope="col" align="center" class="align-middle">Daya</th>
    @endif
    <th scope="col" align="center" class="align-middle">Stand Awal</th>
    @if(Auth::user()->jabatan=='chief')
     <th scope="col" align="center" class="align-middle">Gambar Awal</th> 
     @endif
    <th scope="col" align="center" class="align-middle">Stand Akhir</th>
    @if(Auth::user()->jabatan=='chief')
     <th scope="col" align="center" class="align-middle">Gambar Akhir</th> 
     @endif
    <th scope="col" align="center" class="align-middle">Pemakaian</th>
    @if(Auth::user()->jabatan=='chief')
    <th scope="col" align="center" class="align-middle">Tanggal BAST</th>
    @endif
    <th scope="col" align="center" class="align-middle">Tanggal Catat</th>
    <th scope="col" align="center" class="align-middle">Nama Petugas</th>
    @if(Auth::user()->jabatan=='chief')
    <th scope="col" align="center">ACTION</th>
    @endif
</tr>
  </thead>

  <tbody>
    @php $no=1; @endphp
     @foreach ($Kwhmeterunit as $kwh)
      <tr>   

          <td align="center">{{$no++}}</td>
          <td align="center">

            <form action="/kwhmeterunit/add/{{$kwh->id}}" method="get" class="d-inline">
                  @csrf

                <button type="submit" name="tomboladd"  class="btn btn-outline-success">Add</button> 
            </form>


          </td>
          <td align="center">{{$kwh->Unit}}</td>
          @if(Auth::user()->jabatan=='chief')
          <td align="center">{{$kwh->NoSeri}}</td>
          <td align="center">{{$kwh->Daya}}</td>
          @endif
          <td align="center">{{$kwh->StandAwal}}</td>
          @if(Auth::user()->jabatan=='chief')
           <td align="center">
          <a href="{{ url('/dataIMG_kwhmeterunit/'.$kwh->GambarAwal) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_kwhmeterunit/'.$kwh->GambarAwal) }}" style="width:50px; height:50px;"/>
          </a>
        </td>
        @endif
          <td align="center">{{$kwh->StandAkhir}}</td>
          @if(Auth::user()->jabatan=='chief')
           <td align="center">
          <a href="{{ url('/dataIMG_kwhmeterunit/'.$kwh->GambarAkhir) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_kwhmeterunit/'.$kwh->GambarAkhir) }}" style="width:50px; height:50px;"/>
          </a>
        </td>
        @endif
          <td align="center">{{$kwh->StandAkhir-$kwh->StandAwal}}</td>
          @if(Auth::user()->jabatan=='chief')

          <td align="center">{{$kwh->TanggalBAST}}</td>
          @endif
          <td align="center">{{$kwh->created_at}}</td>
          <td align="center">{{$kwh->teknisi}}</td>
          
          @if(Auth::user()->jabatan=='chief')
          <td align="center" class="align-middle" style="display: flex;">
            <div class="form-check form-check-inline align-middle" >
              <input class="form-check-input align-middle" align="center" type="checkbox" id="inlineCheckbox1" value="option1" disabled>
              <label class="form-check-label"  for="inlineCheckbox1"></label>
            </div>

            <form action="/kwhmeterunit/edit/{{$kwh->id}}" method="get" class="d-inline">
                  @csrf

                <button type="submit" name="tomboladd"  class="btn btn-outline-warning">Edit</button> 
            </form>

            <form action="/kwhmeterunit/delete/{{$kwh->id}}" method="post" class="d-inline"onclick=" return confirm ('Yakin Mau Di Delet?');">
                @method('delete')
                  @csrf

                <button type="submit" name="tomboladd"  class="btn btn-outline-danger">Delete</button> 
            </form>
        
          </td>
          @endif
    </tr>
@endforeach

    </tbody>
</table>
@endsection


    
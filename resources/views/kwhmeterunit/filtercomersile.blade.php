@extends('layouts.crud')
@section('title')
      Filter Kwh Comersile
@endsection
@section('li_tambahan')
      <form action="/kwhcomersile/export" method="post">
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
    <th scope="col" align="center" class="align-middle">No Seri</th>
    @if(Auth::user()->jabatan=='chief')
    <th scope="col" align="center" class="align-middle">Faktor Kali</th>
    @endif
    <th scope="col" align="center" class="align-middle">lwbp Awal(elec 1)</th>
    <!-- <th scope="col" align="center" class="align-middle">Gambar Awal</th> -->
    <th scope="col" align="center" class="align-middle">lwbp Akhir(elec 1)</th>
    <!-- <th scope="col" align="center" class="align-middle">Gambar Akhir</th> -->
    <th scope="col" align="center" class="align-middle">wbp Awal(elec 2)</th>
    <!-- <th scope="col" align="center" class="align-middle">Gambar Awal</th> -->
    <th scope="col" align="center" class="align-middle">wbp Akhir(elec 2)</th>
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
     @foreach ($Kwhcomersile as $kwh)
      <tr>   

          <td align="center">{{$no++}}</td>
          <td align="center">
            <form action="/kwhcomersile/add/{{$kwh->id}}" method="get" class="d-inline">
                  @csrf
                <button type="submit" name="tomboladd"  class="btn btn-outline-success">Add</button> 
            </form>
          </td>
          <td align="center">{{$kwh->Unit}}</td>
          <td align="center">{{$kwh->NoSeri}}</td>
          @if(Auth::user()->jabatan=='chief')
          <td align="center">{{$kwh->Faktor_kali}}</td>
          @endif
          <td align="center">{{$kwh->StandAwal_lwbp}}</td>
          <!-- <td align="center">
          <a href="{{ url('/dataIMG_Kwhcomersile/'.$kwh->GambarAwal) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_Kwhcomersile/'.$kwh->GambarAwal) }}" style="width:50px; height:50px;"/>
          </a>
        </td> -->
          <td align="center">{{$kwh->StandAkhir_lwbp}}</td>
          <!-- <td align="center">
          <a href="{{ url('/dataIMG_Kwhcomersile/'.$kwh->GambarAkhir) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_Kwhcomersile/'.$kwh->GambarAkhir) }}" style="width:50px; height:50px;"/>
          </a>
        </td> -->

        <td align="center">{{$kwh->StandAwal_wbp}}</td>
          <!-- <td align="center">
          <a href="{{ url('/dataIMG_Kwhcomersile/'.$kwh->GambarAwal) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_Kwhcomersile/'.$kwh->GambarAwal) }}" style="width:50px; height:50px;"/>
          </a>
        </td> -->
          <td align="center">{{$kwh->StandAkhir_wbp}}</td>
          <!-- <td align="center">
          <a href="{{ url('/dataIMG_Kwhcomersile/'.$kwh->GambarAkhir) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_Kwhcomersile/'.$kwh->GambarAkhir) }}" style="width:50px; height:50px;"/>
          </a>
        </td> -->
          <td align="center">{{$kwh->total}}</td>
          @if(Auth::user()->jabatan=='chief')
          <td align="center">{{$kwh->TanggalBAST}}</td>
          @endif
          <td align="center">{{$kwh->created_at}}</td>
          <td align="center">{{$kwh->Nama}}</td>
          @if(Auth::user()->jabatan=='chief')
          <td align="center" class="align-middle" style="display: flex;">
            <div class="form-check form-check-inline align-middle" >
              <input class="form-check-input align-middle" align="center" type="checkbox" id="inlineCheckbox1" value="option1" disabled>
              <label class="form-check-label"  for="inlineCheckbox1"></label>
            </div>

            <form action="/Kwhcomersile/edit/{{$kwh->id}}" method="get" class="d-inline">
                  @csrf

                <button type="submit" name="tomboladd"  class="btn btn-outline-warning">Edit</button> 
            </form>

            <form action="/Kwhcomersile/delete/{{$kwh->id}}" method="post" class="d-inline"onclick=" return confirm ('Yakin Mau Di Delet?');">
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


    
@extends('layouts.crud')
@section('title')
      Filter Water Meter Unit
@endsection
@section('li_tambahan')
      
      <form action="/watermeterunit/export" method="post">
        @csrf
          <input type="date" name="startdate" >
          <input type="date" name="todate" >
          <button type="submit"><i class="fas fa-download"></i></button>
      </form>
      <!--<li class="nav-item dropdown font-weight-bold">-->
      <!--  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
      <!--    <i class="fas fa-download"></i>-->
      <!--  </a>-->
      <!--  <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
      <!--    <button type="submit" action="/watermeterunit/export">xcel</button>-->
          
      <!--  </div>-->
      <!--</li>-->
      
@endsection
@section('main-container')
      <h1 class="my-5" align="center">Form pencatatan bulanan</h1>
  <table class="table table-bordered table-striped my-5 ">

  <thead class="fixed-header thead-dark my-5" align="center">
    
<tr >
  
    <th scope="col" align="center" class="fixed align-middle">No</th>
    <th scope="col" class="align-middle">ACTION</th>
    <th scope="col" align="center" class="align-middle">Unit</th>
    <th scope="col" align="center" class="align-middle">No Seri</th>
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
    <th scope="col" align="center" class="align-middle">ACTION</th>
    @endif
</tr>
  </thead>

  <tbody>

     
@php $no=1; @endphp
@foreach ($Watermeterunit as $watermeterunit)

    <tr>             
        <td align="center">{{$no++}}</td>
        <td align="center">
            <form action="/watermeterunit/add/{{$watermeterunit->id}}" method="get" class="d-inline">
                @csrf
              <button type="submit"  class="btn btn-outline-success">Add</button> 
            </form>
            
        </td>
        <td align="center">{{$watermeterunit->Unit}}</td>
        <td align="center">{{$watermeterunit->NoSeri}}</td>
        <td align="center">{{$watermeterunit->StandAwal}}</td>
        @if(Auth::user()->jabatan=='chief')
        <td align="center">
          <a href="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAwal) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAwal) }}" style="width:50px; height:50px;"/>
          </a>
        </td>
        @endif
        <td align="center">{{$watermeterunit->StandAkhir}}</td>
        @if(Auth::user()->jabatan=='chief')
        <td align="center">
          <a href="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
          <img src="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir) }}" style="width:50px; height:50px;"/>
          </a>
        </td>
        @endif
        <td align="center">{{$watermeterunit->StandAkhir-$watermeterunit->StandAwal}}</td>
        @if(Auth::user()->jabatan=='chief')
        <td align="center">{{$watermeterunit->TanggalBAST}}</td>
        @endif
        <td align="center">{{$watermeterunit->created_at}}</td>
        <td align="center">{{$watermeterunit->teknisi}}</td>
        
        @if(Auth::user()->jabatan=='chief')

        <td align="center align-middle" style="display: flex;">
              
          <div class="form-check form-check-inline" >
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled>
            <label class="form-check-label"  for="inlineCheckbox1"></label>
          </div>
            <form action="/watermeterunit/edit/{{$watermeterunit->id}}" method="get" class="d-inline">
                  @csrf

                <button type="submit" name="tomboladd"  class="btn btn-outline-warning">Edit</button> 
            </form>

            <form action="/watermeterunit/delete/{{$watermeterunit->id}}" method="post" class="d-inline"onclick=" return confirm ('Yakin Mau Di Delet?');">
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


    

  
    
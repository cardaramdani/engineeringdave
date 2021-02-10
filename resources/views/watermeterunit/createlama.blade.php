@extends('layouts.crud')
@section('title')
      Add watermeter unit
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')
      <h1 align="center" class="my-5">Form pencatatan bulanan water meter unit</h1>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Ooops!</strong> Ada sesuatu yang salah pada proses upload data<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<table class="table table-bordered table-striped table-sm">
  <thead class="fixed-header thead-dark" align="center">
    <form method="post" action="/watermeterunit/add" enctype="multipart/form-data">
    @csrf
      <tr>
          <th scope="col" align="center" colspan="2" class="align-middle">Unit</th>
      </tr>
      <tr>
        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
        <div class="form-group">
         <input type="text" class="form-control" value="{{$watermeterunit->Unit}}" name="Unit" readonly>
        <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>
      </tr>
      <tr>
          <th scope="col" align="center" class="align-middle">No Seri</th>
          <th scope="col" align="center" class="align-middle">Stand Awal</th>
      </tr>
      <tr>
        
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
             <input type="text" class="form-control" value="{{$watermeterunit->NoSeri}}" name="NoSeri"readonly>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
             <input type="number" class="form-control" value="{{$watermeterunit->StandAkhir}}" name="StandAwal" readonly>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
      </tr>
      <tr>
          <!-- <th scope="col" align="center" class="align-middle">Gambar Awal</th> -->
          <th scope="col" align="center" class="align-middle">Stand Akhir</th>
          <th scope="col" align="center" class="align-middle">Gambar</th>
          <!-- <th scope="col" align="center" class="align-middle">Tanggal BAST</th> -->
      </tr>
  </thead>

 
      <input type="hidden" id="unit"  name="GambarAwal" value="{{$watermeterunit->GambarAkhir}}">
      <input type="hidden" name="teknisi" value="{{Auth::user()->username}}">
      <input type="hidden" name="TanggalBAST" value="{{$watermeterunit->TanggalBAST}}" >
    

   <!--  <td scope="col" align="center" class="was-validated align-middle">
        <a href="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
        <img src="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir) }}" style="width:50px; height:50px;"/>
      </a>
      
    </td> -->

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
         <input type="number" id="StandAkhir" class="form-control @error('StandAkhir') is-invalid @enderror" value="{{ old('StandAkhir') }}" placeholder="Stand Akhir" name="StandAkhir" required autocomplete="off">
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated ">
        <div class="custom-file">
            <input type="file" class="custom-file-input @error('GambarAkhir') is-invalid @enderror" name="GambarAkhir" id="GambarAkhir" value="{{ old('GambarAkhir')}}" required autocomplete="off">
            <label class="custom-file-label @error('GambarAkhir') is-invalid @enderror" align="left" value="{{ old('GambarAkhir')}}" for="GambarAkhir">Upload Gambar...</label>
            @error('GambarAkhir')
                  <span class="invalid-feedback" role="alert">
                      <strong>Gagal upload{{ $message }}</strong>
                  </span>
            @enderror   
    </div>
    </td>

      <input type="hidden" value="" id="total" name="TotalPakai">

    <!-- <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
            <input type="date" class="form-control" name="TanggalBAST" value="{{$watermeterunit->TanggalBAST}}" readonly>
        <div class="invalid-feedback">pilih tanggal sesuai aktual</div>
        </div>
    </td> -->
    <button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit">Submit form</button>

  </form>  
</table>
@endsection



  
  
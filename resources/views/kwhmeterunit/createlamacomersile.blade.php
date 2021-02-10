@extends('layouts.crud')
@section('title')
      Add new Kwh comersile
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')
      <h1 align="center" class="my-5">Form pencatatan bulanan kwh meter comersile</h1>
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
    <form method="post" action="/kwhcomersile/add" enctype="multipart/form-data">
    @csrf

      <tr>
          <th scope="col" align="center" colspan="3" class="align-middle">Unit</th>
        
      </tr>
      <tr >
        <td scope="col" align="center" colspan="3" class="was-validated align-middle">
        <div class="form-group">
         <input type="text" class="form-control text-center"  value="{{$kwhcomersile->Unit}}" name="Unit" readonly>
        <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>
      </tr>

      <tr>
        <th scope="col" align="center" colspan="3" class="align-middle">No Seri</th>
      </tr>

      <tr>
        <td scope="col" align="center" colspan="3" class="was-validated align-middle">
            <div class="form-group">
             <input type="text" class="form-control text-center" value="{{$kwhcomersile->NoSeri}}" name="NoSeri"readonly>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col" align="center" class="align-middle">Stand Awal lwbp</th>
        <th scope="col" align="center" class="align-middle">Stand Akhir lwbp (elec 1)</th>
        <th scope="col" align="center" class="align-middle">Gambar Akhir lwbp</th>
      </tr>
      <tr>
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
             <input type="number" class="form-control text-center" value="{{$kwhcomersile->StandAkhir_lwbp}}" name="StandAwal_lwbp" readonly>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
             <input type="text" class="form-control @error('StandAkhir_lwbp') is-invalid @enderror text-center" value="{{ old('StandAkhir_lwbp') }}" name="StandAkhir_lwbp" autofocus required>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="was-validated align-middle ">
          <div class="custom-file">
              <input type="file" class="custom-file-input" name="GambarAkhir_lwbp" required>
              <label class="custom-file-label @error('GambarAkhir_lwbp') is-invalid @enderror" align="left"  for="GambarAkhir_lwbp">Upload Gambar...</label>@error('GambarAkhir_lwbp')
                <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
              @enderror   
          </div>
        </td>
      </tr>

      <tr>
        <th scope="col" align="center" class="align-middle">Stand Awal wbp</th>
        <th scope="col" align="center" class="align-middle">Stand Akhir wbp (elec 2)</th>
        <th scope="col" align="center" class="align-middle">Gambar Akhir wbp</th>
      </tr>
      <tr>
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
             <input type="number" class="form-control text-center" value="{{$kwhcomersile->StandAkhir_wbp}}" name="StandAwal_wbp" readonly>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
             <input type="text" class="form-control @error('StandAkhir_wbp') is-invalid @enderror text-center" value="{{ old('StandAkhir_wbp') }}" name="StandAkhir_wbp" autofocus required>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="was-validated align-middle ">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="GambarAkhir_wbp" required>
                <label class="custom-file-label @error('GambarAkhir_wbp') is-invalid @enderror" align="left"  for="GambarAkhir_wbp">Upload Gambar...</label>@error('GambarAkhir_wbp')
                  <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
                @enderror   
            </div>
        </td>
      </tr>
  </thead>


      <input type="hidden"  name="Gambarlama_GambarAwal_lwbp" value="{{$kwhcomersile->GambarAwal_lwbp}}">
      <input type="hidden"  name="Gambarlama_GambarAwal_wbp" value="{{$kwhcomersile->GambarAwal_wbp}}">
      <input type="hidden"  name="Gambarlama_GambarAkhir_lwbp" value="{{$kwhcomersile->GambarAkhir_lwbp}}">
      <input type="hidden"  name="Gambarlama_GambarAkhir_wbp" value="{{$kwhcomersile->GambarAkhir_wbp}}">
      <input type="hidden" value="" id="total" name="TotalPakai">
      <input type="hidden"  name="Nama" value="{{Auth::user()->username}}">
      <input type="hidden"  name="Daya" value="{{$kwhcomersile->Daya}}">
      <input type="hidden"  name="GambarAwal_lwbp" value="{{$kwhcomersile->GambarAkhir_lwbp}}">
      <input type="hidden"  name="GambarAwal_wbp" value="{{$kwhcomersile->GambarAkhir_wbp}}">
      <input type="hidden"  name="TanggalBAST" value="{{$kwhcomersile->TanggalBAST}}">
      <input type="hidden"  name="Faktor_kali" value="{{$kwhcomersile->Faktor_kali}}">

   

    <!-- <td scope="col" align="center" class="was-validated align-middle">
        <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
        <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir) }}" style="width:50px; height:50px;"/>
      </a>
    </td> -->


    <!-- <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
            <input type="date" class="form-control" name="TanggalBAST" value="{{$kwhcomersile->TanggalBAST}}" readonly>
        <div class="invalid-feedback">pilih tanggal sesuai aktual</div>
        </div>
    </td> -->
    <button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit">Submit form</button>

  </form>

  
</table>
@endsection


    
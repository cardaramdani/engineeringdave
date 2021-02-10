@extends('layouts.crud')
@section('title')
      COO
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')

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
      <form action="/coo/add" method="post" class="d-inline offset-md-5" enctype="multipart/form-data">
          @csrf
        
          <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group" >
              <label for="peralatan" class="font-weight-bold">peralatan</label>
             <input id="peralatan" type="text" class="form-control @error('peralatan') is-invalid @enderror" name="peralatan" value="{{ old('peralatan') }}" placeholder="No peralatan" required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
          <label for="pengesah" class="font-weight-bold">No Seri</label>
         <input type="text" id="pengesah" class="form-control @error('pengesah') is-invalid @enderror" placeholder="No Seri" name="pengesah" value="{{ old('pengesah') }}" required autocomplete="off">
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
          <label for="garansi" class="font-weight-bold">Stand Awal</label>
         <input type="number" id="garansi" class="form-control @error('garansi') is-invalid @enderror" value="{{ old('garansi') }}" placeholder="Stand Awal" name="garansi" required autocomplete="off">
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
          <label for="list_part" class="font-weight-bold">Stand Akhir</label>
         <input type="number" id="list_part" class="form-control @error('list_part') is-invalid @enderror" value="{{ old('list_part') }}" placeholder="Stand Akhir" name="list_part" required autocomplete="off">
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="custom-file">
            <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{ old('gambar')}}" required autocomplete="off">
            <label class="custom-file-label @error('gambar') is-invalid @enderror" align="left" value="{{ old('gambar')}}" for="gambar">Upload Gambar...</label>
            @error('gambar')
                  <span class="invalid-feedback" role="alert">
                      <strong>Gagal upload{{ $message }}</strong>
                  </span>
            @enderror   
           
      </div>
    </td>

    
    
        <div class="modal-footer">
          
          <button class="btn-lg btn-primary col-md-12  font-weight-bold"  type="submit">Submit form</button>
        </div>
      </form>
@endsection
@extends('layouts.crud')
@section('title')
     update Logsheet
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')
      <h1 class="my-2 " align="center">FORM Update LogBooks</h1>
    <!-- <a href="/amr/add" class="btn btn-outline-success my-3"  >Add Data AMR</a> -->
  <table class="table table-bordered table-striped m ">

  <thead class="fixed-header thead-dark" align="center">
    
<tr>
  
    <th scope="col" align="center" class="align-middle">Shift</th>
    <th scope="col" align="center" class="align-middle">Nama</th>
    <th scope="col" align="center" class="align-middle">Deskripsi</th>
</tr>
  </thead>

  <tbody>
      <form method="post" action="/logbook/edit/{{$logbook->id}}" >
    @method('patch')
      @csrf
     
<tr>        
  <td align="center" class="align-middle">
  	<div class="form-group">
      <select class="custom-select" name="shift" required>
      <option value="{{$logbook->shift}}">{{$logbook->shift}}</option>
      
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
  </td>
  
  <td align="center" class="align-middle">
  	<div class="form-group">
      <select class="custom-select" name="teknisi" required>
      <option value="{{$logbook->teknisi}}">{{$logbook->teknisi}}</option>
      
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
  </td>
  
  <td align="center" class="align-middle"><textarea  cols="50" rows="10" name="deskripsi">{{$logbook->deskripsi}}</textarea></td>
</tr>
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit">Update</button>
</form>
    </tbody>
@endsection

@extends('layouts.crud')
@section('title')
     Add Logsheet PDAM
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')
      <h1 align="center">Form Tambah Data Pdam</h1>

<table class="table table-bordered table-striped">

<thead class="thead-dark" align="center">

<tr>
    <th scope="col" align="center">Shift</th>
    <th scope="col" align="center">Stand Water Meter</th>
    
</tr>
</thead>
<tbody>
   <form method="post" action="/pdam/add" >
      @csrf
      <input type="hidden" name="nama" value="{{Auth::user()->username}}">
 
 <td scope="col" align="center" class="was-validated">
    
       <div class="form-group">
      <select class="custom-select" name="shift" required>
      <option value="">Open this select menu</option>
      <option value="Pagi">Pagi</option>
      <option value="Siang">Siang</option>
      <option value="Malam">Malam</option>
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    
</td>
<td scope="col" align="center" class="was-validated">
  
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Stand Meter" name="stand" required>
      <div class="invalid-feedback">input data sesuai aktual</div>
    </div>
</td>
      <button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit">Submit form</button>
</form>
</tbody>
</table>
@endsection




    
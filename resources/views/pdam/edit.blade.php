@extends('layouts.crud')
@section('title')
     Update Logsheet PDAM
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')
          <h1 align="center" class="my-5">Edit Data Pdam</h1>

<table class="table table-bordered table-striped">

<thead class="thead-dark" align="center">

<tr>
    <th scope="col" align="center">Nama</th>
    <th scope="col" align="center">Shift</th>
    <th scope="col" align="center">Stand Water Meter</th>
</tr>
</thead>
<tbody>
   <form method="post" action="/pdam/edit/{{$pdam->id}}" >
    @method('patch')
      @csrf
 <td scope="col" align="center" class="was-validated">  
      <div class="form-group">
      <select class="custom-select" id="nama" name="nama" required>
      <option value="{{$pdam->nama}}">{{$pdam->nama}}</option>
      <option value="Dimas" >Dimas</option>
      <option value="ali">ali</option>
      <option value="norman">norman</option>
      <option value="misbun">misbun</option>
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
 </td>
 <td scope="col" align="center" class="was-validated">
    
       <div class="form-group">
      <select class="custom-select" name="shift" required>
      <option value="{{$pdam->shift}}">{{$pdam->shift}}</option>
      <option value="Pagi">Pagi</option>
      <option value="Siang">Siang</option>
      <option value="Malam">Malam</option>
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    
</td>
<td scope="col" align="center" class="was-validated">
  
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Stand Meter" value="{{$pdam->stand}}" name="stand" required autocomplete="off">
      <div class="invalid-feedback">input data sesuai aktual</div>
    </div>
</td>
      <button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit">Submit form</button>
</form>
</tbody>
</table>
@endsection




@extends('layouts.crud')
@section('title')
     Add Logsheet transferpump
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')
      
    <h1 align="center" class="my-5">Form Tambah Data Transfer Pump</h1>
<table class="table table-bordered table-striped table-sm">
<thead class="thead-dark" align="center">
<tr>   
        
        <th scope="col" align="center" rowspan="4" class="align-middle">Shift</th>
    <tr>
        <th scope="col" align="center" colspan="5">Transfer pump A</th>
        <th scope="col" align="center" colspan="5">Transfer pump B</th>
        <th scope="col" align="center" colspan="5">Transfer pump C</th>
        <th scope="col" align="center" colspan="5">Transfer pump Cadangan</th>
        <th scope="col" align="center" colspan="3" rowspan="2" class="align-middle">Kondisi Pompa</th>
    </tr> 
    <tr>
        <th scope="col" align="center" colspan="2">Posisi Valve</th>
        <th scope="col" align="center" colspan="3">Status</th>
        <th scope="col" align="center" colspan="2">Posisi Valve</th>
        <th scope="col" align="center" colspan="3">Status</th>
        <th scope="col" align="center" colspan="2">Posisi Valve</th>
        <th scope="col" align="center" colspan="3">Status</th>
        <th scope="col" align="center" colspan="2">Posisi Valve</th>
        <th scope="col" align="center" colspan="3">Status</th>
    </tr>
    <tr>
        <th scope="col" align="center">Buka</th>
        <th scope="col" align="center">Tutup</th>
        <th scope="col" align="center">Manual</th>
        <th scope="col" align="center">Off</th>
        <th scope="col" align="center">Auto</th>
        <th scope="col" align="center">Buka</th>
        <th scope="col" align="center">Tutup</th>
        <th scope="col" align="center">Manual</th>
        <th scope="col" align="center">Off</th>
        <th scope="col" align="center">Auto</th>
        <th scope="col" align="center">Buka</th>
        <th scope="col" align="center">Tutup</th>
        <th scope="col" align="center">Manual</th>
        <th scope="col" align="center">Off</th>
        <th scope="col" align="center">Auto</th>
        <th scope="col" align="center">Buka</th>
        <th scope="col" align="center">Tutup</th>
        <th scope="col" align="center">Manual</th>
        <th scope="col" align="center">Off</th>
        <th scope="col" align="center">Auto</th>
        <th scope="col" align="center">Bersih</th>
        <th scope="col" align="center">Kotor</th>
        <th scope="col" align="center">Bocor</th>
    </tr>
</tr>
</thead>


<tbody>
    <form method="post" action="/transferpump/add" >
      @csrf
      <input type="hidden" name="nama" value="{{ Auth::user()->username }}">
 
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
<td scope="col" align="center" colspan="2" class="was-validated">
    
       <div class="form-group">
      <select class="custom-select" name="valve_tfa" required>
      <option value="">Open this select menu</option>
      <option value="Buka">Buka</option>
      <option value="Tutup">Tutup</option>
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    
</td>
<td scope="col" align="center" colspan="3" class="was-validated" >
     <div class="form-group">
     <select class="custom-select" name="status_tfa" required>
      <option value="">Open this select menu</option>
      <option value="Manual">Manual</option>
      <option value="Off">Off</option>
      <option value="Auto">Auto</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>
        <td scope="col" align="center" colspan="2" class="was-validated">
          
       <div class="form-group">
    <select class="custom-select" name="valve_tfb" required>
      <option value="">Open this select menu</option>
      <option value="Buka">Buka</option>
      <option value="Tutup">Tutup</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
</td>

<td scope="col" align="center" colspan="3" class="was-validated">
       <div class="form-group">
      <select class="custom-select"name="status_tfb" required>
      <option value="">Open this select menu</option>
      <option value="Manual">Manual</option>
      <option value="Off">Off</option>
      <option value="Auto">Auto</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>

<td scope="col" align="center" colspan="2" class="was-validated">
          
       <div class="form-group">
      <select class="custom-select" name="valve_tfc" required>
      <option value="">Open this select menu</option>
      <option value="Buka">Buka</option>
      <option value="Tutup">Tutup</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
</td>

<td scope="col" align="center" colspan="3" class="was-validated">
          
       <div class="form-group">
      <select class="custom-select" name="status_tfc" required>
      <option value="">Open this select menu</option>
      <option value="Manual">Manual</option>
      <option value="Off">Off</option>
      <option value="Auto">Auto</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>
<td scope="col" align="center" colspan="2" class="was-validated">
          
       <div class="form-group">
     <select class="custom-select" name="valve_tfd" required>
      <option value="">Open this select menu</option>
      <option value="Buka">Buka</option>
      <option value="Tutup">Tutup</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>

<td scope="col" align="center" colspan="3" class="was-validated">
          
       <div class="form-group">
      <select class="custom-select" name="status_tfd" required>
      <option value="">Open this select menu</option>
      <option value="Manual">Manual</option>
      <option value="Off">Off</option>
      <option value="Auto">Auto</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>

<td scope="col" align="center" colspan="3" class="was-validated">
  
       <div class="form-group">
     <select class="custom-select" name="kondisi" required>
      <option value="">Open this select menu</option>
      <option value="Bersih">Bersih</option>
      <option value="Kotor">Kotor</option>
      <option value="Bocor">Bocor</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>
<input type="hidden" name="namaspv" value="kosong">

<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit">Submit form</button>

  </form>
  </tbody>
</table>
@endsection

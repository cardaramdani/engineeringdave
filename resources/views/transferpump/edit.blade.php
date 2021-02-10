@extends('layouts.crud')
@section('title')
     Update Logsheet transferpump
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')
          <h1 align="center" class="my-5">Form Tambah Data Transfer Pump</h1>
<table class="table table-bordered table-striped table-sm">
<thead class="thead-dark" align="center">
<tr>   
  <tr>
        <th scope="col" align="center" rowspan="2" class="align-middle">Nama Teknisi</th>
        <th scope="col" align="center" rowspan="2" class="align-middle">Shift</th>

        <th scope="col" align="center" colspan="2">Transfer pump A</th>
        <th scope="col" align="center" colspan="2">Transfer pump B</th>
        <th scope="col" align="center" colspan="2">Transfer pump C</th>
        <th scope="col" align="center" colspan="2">Transfer pump Cadangan</th>
        <th scope="col" align="center"  rowspan="2" class="align-middle">Kondisi Pompa</th>
        <th scope="col" align="center" rowspan="2" class="align-middle">Diperiksa oleh (spv)</th>
    </tr> 
    <tr>
        <th scope="col" align="center" >Posisi Valve</th>
        <th scope="col" align="center" >Status</th>
        <th scope="col" align="center" >Posisi Valve</th>
        <th scope="col" align="center" >Status</th>
        <th scope="col" align="center" >Posisi Valve</th>
        <th scope="col" align="center" >Status</th>
        <th scope="col" align="center" >Posisi Valve</th>
        <th scope="col" align="center" >Status</th>
    </tr>
    
</tr>
</thead>


<tbody>
    <form method="post" action="/transferpump/edit/{{$transferpump->id}}" >
      @method('patch')
    @csrf
 <td scope="col" align="center" class="was-validated">  
      <div class="form-group">
      <select class="custom-select" id="nama" name="nama"  required>
      <option value="{{$transferpump->nama}}">{{$transferpump->nama}}</option>
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
      <option value="{{$transferpump->shift}}">{{$transferpump->shift}}</option>
      <option value="Pagi">Pagi</option>
      <option value="Siang">Siang</option>
      <option value="Malam">Malam</option>
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    
</td>
<td scope="col" align="center" class="was-validated">
       <div class="form-group">
      <select class="custom-select" name="valve_tfa" required>
      <option value="{{$transferpump->valve_tfa}}">{{$transferpump->valve_tfa}}</option>
      <option value="Buka">Buka</option>
      <option value="Tutup">Tutup</option>
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    
</td>
<td scope="col" align="center" class="was-validated" >
     <div class="form-group">
     <select class="custom-select" name="status_tfa" required>
      <option value="{{$transferpump->status_tfa}}">{{$transferpump->status_tfa}}</option>
      <option value="Manual">Manual</option>
      <option value="Off">Off</option>
      <option value="Auto">Auto</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>
<td scope="col" align="center"  class="was-validated">
          
       <div class="form-group">
    <select class="custom-select" name="valve_tfb" required>
      <option value="{{$transferpump->valve_tfb}}">{{$transferpump->valve_tfb}}</option>
      <option value="Buka">Buka</option>
      <option value="Tutup">Tutup</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
</td>

<td scope="col" align="center"  class="was-validated">
       <div class="form-group">
      <select class="custom-select"name="status_tfb" required>
      <option value="{{$transferpump->status_tfb}}">{{$transferpump->status_tfb}}</option>
      <option value="Manual">Manual</option>
      <option value="Off">Off</option>
      <option value="Auto">Auto</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>

<td scope="col" align="center"  class="was-validated">
          
       <div class="form-group">
      <select class="custom-select" name="valve_tfc" required>
      <option value="{{$transferpump->valve_tfc}}">{{$transferpump->valve_tfc}}</option>
      <option value="Buka">Buka</option>
      <option value="Tutup">Tutup</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
</td>

<td scope="col" align="center"  class="was-validated">
          
       <div class="form-group">
      <select class="custom-select" name="status_tfc" required>
      <option value="{{$transferpump->status_tfc}}">{{$transferpump->status_tfc}}</option>
      <option value="Manual">Manual</option>
      <option value="Off">Off</option>
      <option value="Auto">Auto</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>
<td scope="col" align="center" class="was-validated">
          
       <div class="form-group">
     <select class="custom-select" name="valve_tfd" required>
      <option value="{{$transferpump->valve_tfd}}">{{$transferpump->valve_tfd}}</option>
      <option value="Buka">Buka</option>
      <option value="Tutup">Tutup</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>

<td scope="col" align="center"  class="was-validated">
          
       <div class="form-group">
      <select class="custom-select" name="status_tfd" required>
      <option value="{{$transferpump->status_tfd}}">{{$transferpump->status_tfd}}</option>
      <option value="Manual">Manual</option>
      <option value="Off">Off</option>
      <option value="Auto">Auto</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>

<td scope="col" align="center"  class="was-validated">
  
       <div class="form-group">
     <select class="custom-select" name="kondisi" required>
      <option value="{{$transferpump->kondisi}}">{{$transferpump->kondisi}}</option>
      <option value="Bersih">Bersih</option>
      <option value="Kotor">Kotor</option>
      <option value="Bocor">Bocor</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
  
</td>

<td scope="col" align="center" class="was-validated">  
       <div class="form-group">
     <input type="text" class="form-control" name="namaspv" value="{{$transferpump->namaspv}}">
    
    <div class="invalid-feedback">input data sesuai nama pemeriksa</div>
  </div>
</td>

<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit">Submit form</button>

  </form>
  </tbody>
</table>
@endsection


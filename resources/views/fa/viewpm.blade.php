@extends('layouts.crud')
@section('title')
   View PM FireAlarm
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Fire Alarm</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/pmfirealarm/export" >
      @csrf
<tbody>
    <thead class="thead-dark" align="center">

<tr>
        <th scope="col" class="align-middle" colspan="5"> 
        <img src="/dataIMG_user/diamondland.png" style="width:130px; height:70px;"/>
          
        </th>
        <th scope="col" align="center" class="align-middle" colspan="9">PM SCHEDULE :
          <div class="form-group">
            <select class="custom-select" name="jadwalpm" required>
            <option value="{{$firealarm->jadwalpm}}">{{$firealarm->jadwalpm}}</option>
            </select>
          </div>
        </th>
        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr  align="left">
  <th scope="col" colspan="5" rowspan="2" class="align-middle">EQUIPMENT : Fire Alarm
  </th>


  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" value="{{$firealarm->planpm}}" name="planpm" required>
    </div>
  </th>
<th scope="col" align="center" rowspan="2" class="align-middle" >PM STATUS :</th>

<th scope="col" colspan="4" class="align-middle" rowspan="2">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr align="left">
  <th scope="col" align="center" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$firealarm->created_at}}"  required>
    </div>
  </th>
</tr>

</thead>

<tr>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</td>
    <td scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</td>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">KETERANGAN</td>
        
</tr>

<tr>
        <td scope="col" align="left" colspan="18" class="font-weight-bold">3 Bulanan</td>
        
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Panel MCFA apakah berfunfsi dengan baik</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l1" required>
            <option value="{{$firealarm->l1}}">{{$firealarm->l1}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l1k1" value="{{$firealarm->l1k1}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan Panel MCFA </td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l2" required>
            <option value="{{$firealarm->l2}}">{{$firealarm->l2}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l2k2" value="{{$firealarm->l2k2}}">
        </div>
        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Power Supplay</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l3" required>
            <option value="{{$firealarm->l3}}">{{$firealarm->l3}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l3k3" value="{{$firealarm->l3k3}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Modul</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l4" required>
            <option value="{{$firealarm->l4}}">{{$firealarm->l4}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l4k4" value="{{$firealarm->l4k4}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Jack Phone</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l5" required>
            <option value="{{$firealarm->l5}}">{{$firealarm->l5}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l5k5" value="{{$firealarm->l5k5}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Indikator lamp</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l6" required>
            <option value="{{$firealarm->l6}}">{{$firealarm->l6}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l6k6" value="{{$firealarm->l6k6}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Indikator zone</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l7" required>
            <option value="{{$firealarm->l7}}">{{$firealarm->l7}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l7k7" value="{{$firealarm->l7k7}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Bell</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l8" required>
            <option value="{{$firealarm->l8}}">{{$firealarm->l8}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l8k8" value="{{$firealarm->l8k8}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Smoke Detector</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l9" required>
            <option value="{{$firealarm->l9}}">{{$firealarm->l9}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l9k9" value="{{$firealarm->l9k9}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Heat Detector </td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l10" required>
            <option value="{{$firealarm->l10}}">{{$firealarm->l10}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l10k10" value="{{$firealarm->l10k10}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Flow Switch </td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l11" required>
            <option value="{{$firealarm->l11}}">{{$firealarm->l11}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l11k11" value="{{$firealarm->l11k11}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Anounciator</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l12" required>
            <option value="{{$firealarm->l12}}">{{$firealarm->l12}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l12k12" value="{{$firealarm->l12k12}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Printer Alarm</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l13" required>
            <option value="{{$firealarm->l13}}">{{$firealarm->l13}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l13k13" value="{{$firealarm->l13k13}}">
        </div>
        </td>
</tr>

<tr>
        <td scope="col" align="left" colspan="18" class="font-weight-bold">Tahunan</td>
        
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Lakukan pengetesan fungsi smoke detector dan Alarm System</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l14" required>
            <option value="{{$firealarm->l14}}">{{$firealarm->l14}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" readonly name="l14k14" value="{{$firealarm->l14k14}}">
        </div>
        </td>
</tr>

<tr>
  
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="nama">Dikerjakan</label>
         <input type="text" class="form-control" value="{{$firealarm->nama}}" readonly name="nama" id="nama" > 
        </div>
        </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="spv">Diperiksa</label>
         <input type="text" class="form-control" autofocus="" required name="spv" id="spv">
        </div>
        </td>
</tr>

</tbody>
<tfoot>
    @if(Auth::user()->jabatan=='chief')
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit">Export To Excel 
  @endif
</tfoot>
</form>
  </table>
@endsection

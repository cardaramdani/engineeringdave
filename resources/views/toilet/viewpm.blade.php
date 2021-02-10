
@extends('layouts.crud')
@section('title')
   View PM Toilet
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Toilet</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/toilet/export" >
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
            <option value="{{$toilet->jadwalpm}}">{{$toilet->jadwalpm}}</option>
            </select>
          </div>
        </th>
        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr  align="left">
  <th scope="col" colspan="5" class="align-middle" rowspan="2">EQUIPMENT : Toilet <br>
    Lokasi Unit.. : <input type="text" name="lokasi_unit" align="left" class="align-left" value="{{$toilet->lokasi_unit}}" required> 
  </th>


  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" value="{{$toilet->planpm}}" required>
    </div>
  </th>
<th scope="col" align="center"  class="align-middle" rowspan="2">PM STATUS :</th>

<th scope="col" colspan="4" class="align-middle" rowspan="2">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr align="left">
  <th scope="col" align="center" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$toilet->created_at}}"  required>
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
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Drain Urinal tidak tersumbat</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l1" required>
            <option value="{{$toilet->l1}}">{{$toilet->l1}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l1k1}}" name="l1k1" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Flushing Urinal valve berfungsi baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l2" required>
            <option value="{{$toilet->l2}}">{{$toilet->l2}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l2k2}}" name="l2k2" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Washtaple Drain tidak tersumbat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l3" required>
            <option value="{{$toilet->l3}}">{{$toilet->l3}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l3k3}}" name="l3k3" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kran Washtaple berfungsi baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l4" required>
            <option value="{{$toilet->l4}}">{{$toilet->l4}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l4k4}}" name="l4k4" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Drain Closet tidak tersumbat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l5" required>
            <option value="{{$toilet->l5}}">{{$toilet->l5}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l5k5}}" name="l5k5" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Flushing valve Closet berfungsi baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l6" required>
            <option value="{{$toilet->l6}}">{{$toilet->l6}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l6k6}}" name="l6k6" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Handle pintu tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l7" required>
            <option value="{{$toilet->l7}}">{{$toilet->l7}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l7k7}}" name="l7k7" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Daun pintu tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l8" required>
            <option value="{{$toilet->l8}}">{{$toilet->l8}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l8k8}}" name="l8k8" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">FD Tidak tersumbat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l9" required>
            <option value="{{$toilet->l9}}">{{$toilet->l9}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l9k9}}" name="l9k9" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Keramik tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l10" required>
            <option value="{{$toilet->l10}}">{{$toilet->l10}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l10k10}}" name="l10k10" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cat Dinding Tidak Kotor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l11" required>
            <option value="{{$toilet->l11}}">{{$toilet->l11}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l11k11}}" name="l11k11" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cermin Tidak Rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l12" required>
            <option value="{{$toilet->l12}}">{{$toilet->l12}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l12k12}}" name="l12k12" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning Utrap Washtaple</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l13" required>
            <option value="{{$toilet->l13}}">{{$toilet->l13}}</option>
            </select>
          </div>
        </td>
        
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$toilet->l13k13}}" name="l13k13" readonly>
        </div>
        </td>
</tr>

<tr>
  
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="nama">Dikerjakan</label>
         <input type="text" class="form-control" value="{{$toilet->nama}}" required name="nama" id="nama" readonly> 
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

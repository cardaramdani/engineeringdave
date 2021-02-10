



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Filter Firepump</title>
     
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item font-weight-bold border border-primary rounded">
        <a class="nav-link text-primary" href="{{ url('/homescreen')}}">Home</a>
      </li>
      <li class="nav-item font-weight-bold">
        <a class="nav-link " href="{{ url('/SOP')}}">Standar Oprasional Prosedur</a>
      </li>

      <li class="nav-item dropdown  font-weight-bold">
           <a class="nav-link dropdown-toggle " href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PM
          
           </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/pmgenset')}}">Genset</a>
          <a class="dropdown-item" href="{{ url('/pmpanel')}}">Panel Power</a>
          <a class="dropdown-item" href="{{ url('/pmstp')}}">STP</a>
          <a class="dropdown-item" href="{{ url('/pmpompa')}}">Pompa</a>
          <a class="dropdown-item" href="{{ url('/pmfirepump')}}">Fire Pump</a>
          <a class="dropdown-item" href="{{ url('/gondola')}}">Gondola</a>
          <a class="dropdown-item" href="{{ url('/ac')}}">AC</a>
          <a class="dropdown-item" href="{{ url('/pmfirealarm')}}">Fire Alarm</a>
          <a class="dropdown-item" href="{{ url('/cwt')}}">Clean Water Tank</a>
          <a class="dropdown-item" href="{{ url('/rooftank')}}">Roof Tank</a>
          <a class="dropdown-item" href="{{ url('/hydrant')}}">Hydrant Box</a>
          <a class="dropdown-item" href="{{ url('/toilet')}}">Toilet</a>
          <a class="dropdown-item" href="{{ url('/fan')}}">EF & IF</a>
          </div>
      </li>
      
      <li class="nav-item dropdown active font-weight-bold">
           <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LogSheet
           <span class="sr-only">(current)</span></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/genset')}}">Genset</a>
          <a class="dropdown-item" href="{{ url('/PowerHouse')}}">Power House</a>
          <a class="dropdown-item" href="{{ url('/amr')}}">AMR</a>
          <a class="dropdown-item" href="{{ url('/stp')}}">STP</a>
          <a class="dropdown-item" href="{{ url('/pdam')}}">PDAM</a>
          <a class="dropdown-item" href="{{ url('/transferpump')}}">Transfer Pump</a>
          <a class="dropdown-item" href="{{ url('/boosterpump')}}">Booster Pump</a>
          <a class="dropdown-item" href="{{ url('/sumpitpump')}}">Sumpit Pump</a>
          <a class="dropdown-item" href="{{ url('/firepump')}}">Fire Pump</a>
          <a class="dropdown-item" href="{{ url('/logbook')}}">LogBook</a>
          
          
          </div>
      </li>
      <li class="nav-item dropdown font-weight-bold">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Utility
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/watermeterunit')}}">Water Meter Unit</a>
          <a class="dropdown-item" href="{{ url('/kwhmeterunit')}}">Kwh Meter Unit</a>
          
        </div>
      </li>
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="beritaacara">Berita Acara</a>
      </li>
    </ul>
    <form action="/firepump/export" method="post" class="form-inline ">
      @csrf
      
      <div class="custom-date ">
            <label class="text-light" for="startdate">Start Sate</label>
            <input type="date" class="custom-date-input" name="startdate" required>
        <div class="invalid-feedback">pilih foto sesuai keinginan</div>
      </div>
      
      <div class="custom-date  ">
            <label class="text-light" for="todate">To Date</label>
            <input type="date" class="custom-date-input" name="todate" required>
      <div class="invalid-feedback">pilih foto sesuai keinginan</div>
      </div>
      
    <button type="submit" class="btn btn-outline-success  col-2 my-2">export xlsx</button>

</form>

  </div>
</nav>

<h1 class="my-4 hidden">space</h1>
<h1 class="my-2 " align="center">FORM EXPORT TO EXEL</h1>
<table class="table table-bordered table-striped">
<tbody>
  @php $no=1; @endphp
@foreach ($firepump as $pf)
    <thead class="thead-dark" align="center">
<tr>
        
        <th scope="col" align="center" rowspan="2" class="align-middle ">NO</th>
        <th scope="col" align="center" rowspan="2" class="align-middle ">Tanggal</th>
        <th scope="col"  class="align-middle font-weight-bold">No</th>
        <th scope="col" align="center" class="align-middle">Item Pengecekan</th>
        <th scope="col" align="center" class="align-middle">Batasan Normal</th>
        <th scope="col" align="center" class="align-middle">Shift</th>
        <th scope="col" align="center" class="align-middle" rowspan="2">Diperiksa (spv) </th>
    
</tr>

<tr>
    
    <th scope="col" align="center"   class="font-weight-bold" colspan="3">A. Jockey Pump</th>
    <th scope="col" align="center"   class="font-weight-bold" >{{$pf->shift}}</th>
</tr>
<tr>
    <th scope="col" align="center"   class="font-weight-bold align-middle" rowspan="26">{{$no++}}</th>
    <td scope="col" align="center" rowspan="26" class="align-middle font-weight-bold">{{$pf->created_at}}</td>
    <th scope="col" align="center">1</th>
    <th scope="col" align="center">Status</th>
    <th scope="col" align="center">On / Off</th>
    <td scope="col" align="center">{{$pf->statusjockey}}</td>
    <td scope="col" align="center" class="align-middle" rowspan="26" class="font-weight-bold">{{$pf->spv}}</td>
</tr>

<tr>
    <th scope="col" align="center">2</th>
    <th scope="col" align="center">Selector Switch</th>
    <th scope="col" align="center">Auto / Off / Manual</th>
    <td scope="col" align="center">{{$pf->selectorjockey}}</td>
</tr>
<tr>
    <th scope="col" align="center">3</th>
    <th scope="col" align="center">Status Valve</th>
    <th scope="col" align="center">Buka / Tutup</th>
    <td scope="col" align="center">{{$pf->valvejockey}}</td>
</tr>
<tr>
    <th scope="col" align="center">4</th>
    <th scope="col" align="center">Pressure (On)</th>
    <th scope="col" align="center">Min 10 Bar</th>
    <td scope="col" align="center">{{$pf->onpressurejockey}}</td>
</tr>
<tr>
    <th scope="col" align="center">5</th>
    <th scope="col" align="center">Pressure (Off)</th>
    <th scope="col" align="center">11 Bar</th>
    <td scope="col" align="center">{{$pf->ofpressurejockey}}</td>
</tr>
<tr>
    <th scope="col" align="center">6</th>
    <th scope="col" align="center">Kebersihan Pompa</th>
    <th scope="col" align="center">Bersih / Kotor </th>
    <td scope="col" align="center">{{$pf->bodyjockey}}</td>
</tr>
<tr>
    <th scope="col" align="center"   class="font-weight-bold" colspan="4">B. Elektric Pump</th>
    
</tr>
<tr>
    <th scope="col" align="center">1</th>
    <th scope="col" align="center">Status</th>
    <th scope="col" align="center">On / Off</th>
    <td scope="col" align="center">{{$pf->statuselectric}}</td>
</tr>
<tr>
    <th scope="col" align="center">2</th>
    <th scope="col" align="center">Selector Switch</th>
    <th scope="col" align="center">Auto / Off / Manual</th>
    <td scope="col" align="center">{{$pf->selectorelectric}}</td>
</tr>
<tr>
    <th scope="col" align="center">3</th>
    <th scope="col" align="center">Status Valve</th>
    <th scope="col" align="center">Buka / Tutup</th>
    <td scope="col" align="center">{{$pf->valveelectric}}</td>
</tr>
<tr>
 <th scope="col" align="center">4</th>
    <th scope="col" align="center">Pressure (On)</th>
    <th scope="col" align="center">Min 9 Bar</th> 
    <td scope="col" align="center">{{$pf->onpressureelectric}}</td>
</tr>
<tr>
    <th scope="col" align="center">5</th>
    <th scope="col" align="center">Pressure (Off)</th>
    <th scope="col" align="center">Manual </th>
    <td scope="col" align="center">{{$pf->ofpressureelectric}}</td>
</tr>
<tr>
    <th scope="col" align="center">6</th>
    <th scope="col" align="center">Kebersihan Pompa</th>
    <th scope="col" align="center">Bersih / Kotor </th>
    <td scope="col" align="center">{{$pf->bodyelectric}}</td>
</tr>
<tr>
        <th scope="col" align="center"   class="font-weight-bold" colspan="4">C. Diesel Pump</th>
        
</tr>
<tr>
    <th scope="col" align="center">1</th>
    <th scope="col" align="center">Status</th>
    <th scope="col" align="center">On / Off</th>
    <td scope="col" align="center">{{$pf->statusdiesel}}</td>
</tr>
<tr>
    <th scope="col" align="center">2</th>
    <th scope="col" align="center">Selector Switch</th>
    <th scope="col" align="center">Auto / Off / Manual</th>
    <td scope="col" align="center">{{$pf->selectordiesel}}</td>
</tr>
<tr>
    <th scope="col" align="center">3</th>
    <th scope="col" align="center">Status Valve</th>
    <th scope="col" align="center">Buka / Tutup</th>
    <td scope="col" align="center">{{$pf->valvediesel}}</td>
</tr>
<tr>
    <th scope="col" align="center">4</th>
    <th scope="col" align="center">Pressure (On)</th>
    <th scope="col" align="center">Min 7 Bar</th>
    <td scope="col" align="center">{{$pf->onpressurediesel}}</td>
</tr>
<tr>
    <th scope="col" align="center">5</th>
    <th scope="col" align="center">Pressure (Off)</th>
    <th scope="col" align="center">Manual </th>
    <td scope="col" align="center">{{$pf->ofpressurediesel}}</td>
</tr>
<tr>
    <th scope="col" align="center">6</th>
    <th scope="col" align="center">Battery Charger</th>
    <th scope="col" align="center">24-26 Vdc</th>
    <td scope="col" align="center">{{$pf->batterycharger}}</td>
</tr>
<tr>
    <th scope="col" align="center">7</th>
    <th scope="col" align="center">Level Oli</th>
    <th scope="col" align="center">High / Low </th>
    <td scope="col" align="center">{{$pf->leveloli}}</td>
</tr>
<tr>
    <th scope="col" align="center">8</th>
    <th scope="col" align="center">Level Air Radiator</th>
    <th scope="col" align="center">High / Low </th>
    <td scope="col" align="center">{{$pf->levelradiator}}</td>
</tr>
<tr>
    <th scope="col" align="center">9</th>
    <th scope="col" align="center">Level Solar</th>
    <th scope="col" align="center">High / Low </th>
    <td scope="col" align="center">{{$pf->levelsolar}}</td>
</tr>
<tr>
    <th scope="col" align="center">10</th>
    <th scope="col" align="center">Aktual pressure Pipa Header</th>
    <th scope="col" align="center">7-10 Bar</th>
    <td scope="col" align="center">{{$pf->aktualpressureheader}}</td>
</tr>
<tr>
    <th scope="col" class="align-top" colspan="3" class="font-weight-bold">Temuan:</th>
    <th scope="col" align="center" class="font-weight-bold">Nama teknisi</th>
</tr>
<tr>
    <td scope="col" class="align-top" colspan="3" class="font-weight-bold">{{$pf->temuan}}</td>
    <td scope="col" align="center"> {{$pf->teknisi}}</td>
</tr>
</thead>
        @endforeach
  
</tbody>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  
</html>

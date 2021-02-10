



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Filter Power House</title>
     
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
    <form action="/PowerHouse/export" method="post" class="form-inline ">
      @csrf
      
      <div class="custom-date ">
            <label class="text-light" for="startdate">Start Sate</label>
            <input type="date" class="custom-date-input" name="startdate" required>
        <div class="invalid-feedback">pilih data sesuai keinginan</div>
      </div>
      
      <div class="custom-date  ">
            <label class="text-light" for="todate">To Date</label>
            <input type="date" class="custom-date-input" name="todate" required>
      <div class="invalid-feedback">pilih data sesuai keinginan</div>
      </div>
      
    <button type="submit" class="btn btn-outline-success  col-2 my-2">export xlsx</button>

  </form>
  </div>
</nav>
      <h3 align="center" class="my-2">---------</h3>
    <h1 align="center" class="my-5">Form filter Data Power House</h1>
            <table class="table table-bordered table-striped">
<tbody>
    @php $no=1; @endphp
@foreach ($PowerHouse as $result => $ph)
    <thead class="thead-dark" align="center">
      <tr>
              <th scope="col" align="center"  class="align-middle "  >NO</th>
              <th scope="col" align="center"  class="align-middle "  >Tanggal</th>
              <th scope="col"  class="align-middle font-weight-bold"  >Nama</th>
              <th scope="col" align="center" class="align-middle" >Shift</th>
              <th scope="col" align="center" class="align-middle" >Item Pengecekan</th>
              <th scope="col" align="center" class="align-middle" >PUTR 1 </th>
              <th scope="col" align="center" class="align-middle" >PUTR 2 </th>
              <th scope="col" align="center" class="align-middle" >Diperiksa (spv) </th>
      </tr>
    </thead>
    
        <tr>
    <td scope="col" align="center"   class="font-weight-bold align-middle" rowspan="28">{{$no++}}</td>
    <td scope="col" align="center"   class="font-weight-bold align-middle" rowspan="27">{{$ph->created_at}}</td>
    <td scope="col" align="center"   class="font-weight-bold align-middle" rowspan="27">{{$ph->teknisi}}</td>
    <td scope="col" align="center"   class="font-weight-bold align-middle" rowspan="27">{{$ph->shift}}</td>
    <td scope="col" align="center"   class="font-weight-bold align-middle" colspan="3">A. POWER METER PUTR</td>
    <td scope="col" align="center" class="align-middle" rowspan="28" class="font-weight-bold">{{$ph->spv}} <br>
      <form action="/PowerHouse/edit/{{$ph->id}}" method="post" class="d-inline" >
        @csrf
         <button type="submit" class="btn btn-outline-success">Isi</button> 
        </form>
    </td>
    
</tr>
<tr>
    <td scope="col" align="center">Total KWH</td>
    <td scope="col" align="center">{{$ph->kwh1}}</td>
    <td scope="col" align="center">{{$ph->kwh2}}</td>
</tr>
<tr>
    <td scope="col" align="center">Total Kva</td>
    <td scope="col" align="center">{{$ph->kva1}}</td>
    <td scope="col" align="center">{{$ph->kva2}}</td>
</tr>

<tr>
    <td scope="col" align="center">Total KVarH</td>
    <td scope="col" align="center">{{$ph->kvarh1}}</td>
    <td scope="col" align="center">{{$ph->kvarh2}}</td>
</tr>
<tr>
    <td scope="col" align="center">Ampere R</td>
    <td scope="col" align="center">{{$ph->ampere1r}}</td>
    <td scope="col" align="center">{{$ph->ampere2r}}</td>
</tr>
<tr>
    <td scope="col" align="center">Ampere S</td>
    <td scope="col" align="center">{{$ph->ampere1s}}</td>
    <td scope="col" align="center">{{$ph->ampere2s}}</td>
</tr>
<tr>
    <td scope="col" align="center">Ampere T</td>
    <td scope="col" align="center">{{$ph->ampere1t}}</td>
    <td scope="col" align="center">{{$ph->ampere2t}}</td>
</tr>
<tr>
    <td scope="col" align="center">Voltage R-S</td>
    <td scope="col" align="center">{{$ph->v1rs}}</td>
    <td scope="col" align="center">{{$ph->v2rs}}</td>
</tr>
<tr>
    <td scope="col" align="center">Voltage S-T</td>
    <td scope="col" align="center">{{$ph->v1st}}</td>
    <td scope="col" align="center">{{$ph->v2st}}</td>
</tr>
<tr>
    <td scope="col" align="center">Voltage T-R</td>
    <td scope="col" align="center">{{$ph->v1tr}}</td>
    <td scope="col" align="center">{{$ph->v2tr}}</td>
</tr>
<tr>
    <td scope="col" align="center">Voltage R-N</td>
    <td scope="col" align="center">{{$ph->v1rn}}</td>
    <td scope="col" align="center">{{$ph->v2rn}}</td>
</tr>
<tr>
    <td scope="col" align="center">Voltage S-N</td>
    <td scope="col" align="center">{{$ph->v1sn}}</td>
    <td scope="col" align="center">{{$ph->v2sn}}</td>
</tr>
<tr>
    <td scope="col" align="center">VoltageT-N</td>
    <td scope="col" align="center">{{$ph->v1tn}}</td>
    <td scope="col" align="center">{{$ph->v2tn}}</td>
</tr>
<tr>
    <td scope="col" align="center">Frequency </td>
    <td scope="col" align="center">{{$ph->freq1}}</td>
    <td scope="col" align="center">{{$ph->freq2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Selector Panel</td>
    <td scope="col" align="center">{{$ph->selektor1}}</td>
    <td scope="col" align="center">{{$ph->selektor2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Fan Blower panel</td>
    <td scope="col" align="center">{{$ph->fan1}}</td>
    <td scope="col" align="center">{{$ph->fan2}}</td>
</tr>
<tr>
    <td scope="col" align="center"   class="font-weight-bold" colspan="3">B. CAPASITOR BANK</td>
</tr>
<tr>    
    <td scope="col" align="center">Power Factor(cosp)</td>
    <td scope="col" align="center">{{$ph->pf1}}</td>
    <td scope="col" align="center">{{$ph->pf2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Step Cap On</td>
    <td scope="col" align="center">{{$ph->cap1}}</td>
    <td scope="col" align="center">{{$ph->cap2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Fan Blowe Panel</td>
    <td scope="col" align="center">{{$ph->fancap1}}</td>
    <td scope="col" align="center">{{$ph->fancap2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Temperature panel</td>
    <td scope="col" align="center">{{$ph->tempcap1}}</td>
    <td scope="col" align="center">{{$ph->tempcap2}}</td>
</tr>
<tr>
    <td scope="col" align="center"   class="font-weight-bold" colspan="3">C. TRAFO 1</td>
</tr>
<tr>    
    <td scope="col" align="center" >Level Oli Trafo</td>
    <td scope="col" align="center" colspan="2">{{$ph->levelolitrafo1}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Temperature Oli </td>
    <td scope="col" align="center" colspan="2">{{$ph->temptrafo1}}</td>
</tr>
<tr>
    <td scope="col" align="center"   class="font-weight-bold" colspan="3">D. TRAFO 2 </td>
</tr>
<tr>    
    <td scope="col" align="center">Level Oli Trafo</td>
    <td scope="col" align="center" colspan="2">{{$ph->levelolitrafo2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Temperature Oli </td>
    <td scope="col" align="center" colspan="2">{{$ph->temptrafo2}}</td>
</tr>
<tr>
    
    <td scope="col" align="left" colspan="6" class="font-weight-bold text-danger" >Temuan : {{$ph->temuan}}</td>
    
</tr>
@endforeach


      
</tbody>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  
</html>
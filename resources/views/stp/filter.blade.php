



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>filter Stp</title>
     
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

<form action="/stp/export" method="post" class="form-inline ">
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
      
    <button type="submit" class="btn btn-outline-success  col-2">export xlsx</button>

</form>
  </div>
</nav>
              <h3>o</h3>
              <h1 align="center" class="my-5" >Form filter Stp</h1>
              
<table class="table table-bordered table-striped">

<tbody>
    
    @php $no=1; @endphp
    @foreach ($Stp as $stp)
    <thead class="thead-dark" align="center">
      
<tr>
        <th scope="col"   class="align-middle">No</th>
        <th scope="col" align="center" class="align-middle">Tanggal</th>
        <th scope="col" align="center" class="align-middle">Nama</th>
        <th scope="col" align="center" class="align-middle">Shift</th>
        <th scope="col" align="center"  class="align-middle">Item Pengecekan</th>
        <th scope="col" align="center"  class="align-middle">Status</th>
        <th scope="col" align="center" class="align-middle">Diperiksa (spv)</th>
    
</tr>

</thead>

<tr>
        <td scope="col" align="center" rowspan="29" class="font-weight-bold">{{$no++}}</td>
        <td scope="col" align="center"  class="font-weight-bold" rowspan="28" >{{$stp->created_at}}</td>
        <td scope="col" align="center"  class="font-weight-bold" rowspan="28" >{{$stp->teknisi}}</td>
        <td scope="col" align="center"  class="font-weight-bold" rowspan="28" >{{$stp->shift}}</td>
        <td scope="col" align="center">Basket Screen </td>
        <td scope="col" align="center">{{$stp->basketscreen}}</td>
        <td scope="col" align="center" rowspan="29">{{$stp->spv}}
            <form action="/stp/edit/{{$stp->id}}" method="post" class="d-inline" >
              @csrf
            <button type="submit" class="btn btn-outline-success">isi</button> 
          </form>
        </td>
       
</tr>
<tr>
  <td scope="col" align="center" colspan="2" class="font-weight-bold">A. Blower </td>
</tr>

<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">{{$stp->selektorblower}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Status Blower 1 </td>
        <td scope="col" align="center">{{$stp->statusblower1}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Pressure Blower 1 </td>
        <td scope="col" align="center">{{$stp->pressureblower1}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Kondisi Umum Blower 1</td>
        <td scope="col" align="center">{{$stp->kondisiblower1}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Status Blower 2 </td>
        <td scope="col" align="center">{{$stp->statusblower2}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Pressure Blower 2 </td>
        <td scope="col" align="center">{{$stp->pressureblower2}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Kondisi Umum Blower 2</td>
        <td scope="col" align="center">{{$stp->kondisiblower2}}</td>
        
</tr>
<tr>
        <td scope="col" align="center" colspan="2" class="font-weight-bold">B. Equalizing Pump </td>
</tr>

<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">{{$stp->selektorequalizing}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Status Equalizing pump 1 </td>
        <td scope="col" align="center">{{$stp->statusequalizing1}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Status Equalizing pump 2 </td>
        <td scope="col" align="center">{{$stp->statusequalizing2}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Level Tank Equalizing </td>
        <td scope="col" align="center">{{$stp->levelequalizing}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Kondisi Air Equalizing </td>
        <td scope="col" align="center">{{$stp->kondisiequalizing}}</td>
        
</tr>


<tr>
        <td scope="col" align="center" colspan="2" class="font-weight-bold">C. Effluent Pump </td>
</tr>

<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">{{$stp->selektoreffluent}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Status Effluent pump 1 </td>
        <td scope="col" align="center">{{$stp->statuseffluent1}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Status Effluent pump 2 </td>
        <td scope="col" align="center">{{$stp->statuseffluent2}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Level Tank Effluent </td>
        <td scope="col" align="center">{{$stp->leveleffluent}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Kondisi Air Effluent </td>
        <td scope="col" align="center">{{$stp->kondisieffluent}}</td>
        
</tr>

<tr>
        <td scope="col" align="center" colspan="2" class="font-weight-bold">D. Fillter Pump </td>
</tr>

<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">{{$stp->selektorfilter}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Status Fillter pump 1 </td>
        <td scope="col" align="center">{{$stp->statusfilter1}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Status Fillter pump 2 </td>
        <td scope="col" align="center">{{$stp->statusfilter2}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Intake Fan </td>
        <td scope="col" align="center">{{$stp->intakefan}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Exhaust Fan </td>
        <td scope="col" align="center">{{$stp->exhaustfan}}</td>
        
</tr>
<tr>
        
        <td scope="col" align="center">Stand Meteran Air </td>
        <td scope="col" align="center">{{$stp->standmeter}}</td>
        
</tr>


<tr>
        <th scope="col" class="align-top" colspan="5" rowspan="2" class="font-weight-bold" style="color: red">Temuan: {{$stp->temuan}} 
        </th>
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
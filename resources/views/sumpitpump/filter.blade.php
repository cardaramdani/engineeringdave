



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Filter Data SumpitPump</title>
     
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

<form action="/sumpitpump/export" method="post" class="form-inline">
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

<h1 align="center" class="my-5">Form export data</h1>

<table class="table table-bordered table-striped table-sm">

<thead class="thead-dark" align="center">
@php $no=1;  @endphp
@foreach ($Sumpitpump as $sumpit)
<tr>
        <th scope="col" align="center" rowspan="3" class="align-middle">No</th>
        <th scope="col" align="center" rowspan="3" class="align-middle">Tanggal</th>
        <th scope="col" align="center" rowspan="3" class="align-middle">Nama</th>
        <th scope="col" align="center" rowspan="3" class="align-middle">Shift</th>
        
    <tr>
        <th scope="col" align="center" colspan="8">Sumpit 1</th>
        <th scope="col" align="center" colspan="8">Sumpit 2</th>
        <th scope="col" align="center" colspan="8">Sumpit 3</th>
        <th scope="col" align="center" colspan="8">Sumpit 4</th>
        <th scope="col" align="center" colspan="8">Sumpit 5</th>
        
    </tr>
      
    <tr>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
    </tr>

<tr>
        <td scope="col" align="center" rowspan="4" class="align-middle">{{$no++}}</td>
        <td scope="col" align="center" rowspan="4" class="align-middle">{{$sumpit->created_at}}</td>
        <td scope="col" align="center" rowspan="4" class="align-middle">{{$sumpit->teknisi}}</td>
        <td scope="col" align="center" rowspan="4" class="align-middle">{{$sumpit->shift}}</td>
        
        <td scope="col" align="center" colspan="2">{{$sumpit->powerpit1}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->selektorpit1}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->wlcpit1}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->kondisipit1}}</td>

        <td scope="col" align="center" colspan="2">{{$sumpit->powerpit2}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->selektorpit2}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->wlcpit2}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->kondisipit2}}</td>

        <td scope="col" align="center" colspan="2">{{$sumpit->powerpit3}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->selektorpit3}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->wlcpit3}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->kondisipit3}}</td>

        <td scope="col" align="center" colspan="2">{{$sumpit->powerpit4}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->selektorpit4}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->wlcpit4}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->kondisipit4}}</td>

        <td scope="col" align="center" colspan="2">{{$sumpit->powerpit5}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->selektorpit5}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->wlcpit5}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->kondisipit5}}</td>
    </tr>

    <tr>
        <th scope="col" align="center" colspan="8">Sumpit 6</th>
        <th scope="col" align="center" colspan="8">Sumpit 7</th>
        <th scope="col" align="center" colspan="8">Sumpit 8</th>
        <th scope="col" align="center" colspan="8">Sumpit 9</th>
        <th scope="col" align="center" colspan="8">Sumpit 10</th>
        
    </tr>

    <tr>
      <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
    </tr>
    <tr>
        <td scope="col" align="center" colspan="2">{{$sumpit->powerpit6}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->selektorpit6}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->wlcpit6}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->kondisipit6}}</td>

        <td scope="col" align="center" colspan="2">{{$sumpit->powerpit7}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->selektorpit7}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->wlcpit7}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->kondisipit7}}</td>

        <td scope="col" align="center" colspan="2">{{$sumpit->powerpit8}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->selektorpit8}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->wlcpit8}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->kondisipit8}}</td>

        <td scope="col" align="center" colspan="2">{{$sumpit->powerpit9}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->selektorpit9}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->wlcpit9}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->kondisipit9}}</td>

        <td scope="col" align="center" colspan="2">{{$sumpit->powerpit10}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->selektorpit10}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->wlcpit10}}</td>
        <td scope="col" align="center" colspan="2">{{$sumpit->kondisipit10}}</td>

    </tr>
    <tr>
       
        <th scope="col" align="center" colspan="19"></th>
        <th scope="col" align="center" colspan="6">spv
          <form action="/sumpitpump/edit/{{$sumpit->id}}" method="get" class="d-inline" >
            <button type="submit" class="btn btn-outline-success">isi</button> 
          </form>
        <th scope="col" align="center" colspan="19"></th>
       </th>
    </tr>
    <tr>
       <td scope="col" align="center" colspan="19"></td>
       <td scope="col" align="center" colspan="6">{{$sumpit->spv}}</td>
        
        <td scope="col" align="center" colspan="19"></td>
    </tr>
    <tr>
      <td scope="col" align="center" colspan="44"></td>
    </tr>
</tr>
@endforeach
</thead>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  
</html>
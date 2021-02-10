



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Filter Logbook</title>
     
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
    <form action="/logbook/export" method="post" class="form-inline ">
      
      @csrf
      
      <div class="custom-date ">
            <label for="startdate">Start Sate</label>
            <input type="date" class="custom-date-input" name="startdate" required>
        <div class="invalid-feedback">pilih foto sesuai keinginan</div>
      </div>
      
      <div class="custom-date  ">
            <label for="todate">To Date</label>
            <input type="date" class="custom-date-input" name="todate" required>
      <div class="invalid-feedback">pilih foto sesuai keinginan</div>
      </div>
      
    <button type="submit" class="btn btn-outline-success  col-2 my-2">export xlsx</button>

</form>

  </div>
</nav>

<h1 class="my-4 hidden">space</h1>
<h1 class="my-2 " align="center">FORM EXPORT TO EXEL</h1>
    <!-- <a href="/amr/add" class="btn btn-outline-success my-3"  >Add Data AMR</a> -->
  <table class="table table-bordered table-striped m ">

  <thead class="fixed-header thead-dark" align="center">
    
<tr>
  
    <th scope="col" align="center" class="align-middle">No</th>
    <th scope="col" align="center" class="align-middle">Shift</th>
    <th scope="col" align="center" class="align-middle">Nama</th>
    <th scope="col" align="center" class="align-middle">Deskripsi</th>
    <th scope="col" align="center" class="align-middle">Tanggal Catat</th>
</tr>
  </thead>

  <tbody>
    @php $no=1; @endphp
     @foreach ($Logbook as $logbook)
      
<tr>        
  <td align="center" class="align-middle">{{$no++}}</td>
  <td align="center" class="align-middle">{{$logbook->shift}}</td>
  <td align="center" class="align-middle">{{$logbook->teknisi}}</td>
  <td align="center" class="align-middle"><textarea  cols="140" rows="10"  readonly="">{{$logbook->deskripsi}}</textarea></td>
  <td align="center" class="align-middle">{{$logbook->created_at}}</td>
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

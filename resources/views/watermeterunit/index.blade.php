@extends('layouts.index_logsheet')
@section('tambahan_link')
      <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
@endsection
@section('title')
      Water Meter Unit
@endsection
@section('li_tambahan')
      <form action="/watermeterunit/filter" method="post" class="form-inline col-6">
  @csrf
    <input type="date" 
            name="startdate" id="startdate"
            class="form-control mr-sm-1 @error('startdate') is-invalid @enderror col-4.5"
            value="{{old('startdate')}}">
    @error('startdate')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
  
    <input type="date" 
          name="todate" id="todate"
          class="form-control mr-sm-1 @error('todate') is-invalid @enderror col-4.5" 
          value="{{old('todate')}}">
    @error('todate')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  
    <button type="submit" class="fas fa-filter"></button>
  
</form>
      
@endsection
@section('main-container')
      <div class="header-c">
          <div class="judul-menu">
        
            {{$Watermeterunit->links()}}
            <div class="title">watermeter<span>_unit</span></div>
            <ul>

              <!--search box start-->  
              <form class="search-box" action="/watermeterunit/cari" method="post">
                @csrf
                <input type="text" name="#" value="" placeholder="Search">
                <button class="search-btn" type="submit">
                 <i class="fas fa-search"></i>
                </button>
              </form>
              <!--search box end-->


              <li><a href="#"><i class="fas fa-info"></i></a></li>
                <form id="watermeterunit-add-form" action="/watermeterunit/add" method="get" style="display: none;">
                                  @csrf
                </form>
              <li>

              @if(Auth::user()->jabatan=='chief')
                <a href=""onclick="event.preventDefault();
                document.getElementById('watermeterunit-add-form').submit();">
                <i class="fas fa-plus-square"></i>
                </a>
                @endif
              </li>
            </ul>
          </div>

          @if (session('status'))
          <div class="alert-success">
            <span> {{ session('status') }}</span>
          </div>
          @endif

          <div class="table">
          <table class="table-border">
            <thead>
              <tr>
                  <th scope="col" align="center" class="align-middle" >No</th>
                  <th scope="col" align="center" class="align-middle">Unit</th>
                  <th scope="col" align="center" class="align-middle">No Seri</th>
                  <th scope="col" align="center" class="align-middle">Stand Awal</th>
                  <th scope="col" align="center" class="align-middle">Gambar Awal</th>
                  <th scope="col" align="center" class="align-middle">Stand Akhir</th>
                  <th scope="col" align="center" class="align-middle">Gambar Akhir</th>
                  <th scope="col" align="center" class="align-middle">Pemakaian</th>
                  <th scope="col" align="center" class="align-middle">Tanggal BAST</th>
                  <th scope="col" align="center" class="align-middle">Tanggal Catat</th>
                  <th scope="col" align="center" class="align-middle">Nama Petugas</th>
                  @if(Auth::user()->jabatan=='chief')
                  <th scope="col" class="align-middle">ACTION</th>
                  @endif
              </tr>
            </thead>

            <tbody>
              @foreach ($Watermeterunit as $result => $watermeterunit)
                <tr>
                  <td align="center" class="font-weight-bold align-middle fixed">{{$result + $Watermeterunit->firstitem()}}</td>
                  <td align="center" class="align-middle">{{$watermeterunit->Unit}}</td>
                  <td align="center" class="align-middle">{{$watermeterunit->NoSeri}}</td>
                  <td align="center" class="align-middle">{{$watermeterunit->StandAwal}}</td>
                  <td align="center" class="align-middle">
                      <a href="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAwal) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                        <img src="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAwal) }}" style="width:50px; height:50px;"/>
                      </a>
                  </td>
                  <td align="center" class="align-middle">{{$watermeterunit->StandAkhir}}</td>

                  <td align="center" class="align-middle">
                      <a href="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                        <img src="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir) }}" style="width:50px; height:50px;"/>
                      </a>
                  </td>

                  <td align="center" class="align-middle">{{$watermeterunit->StandAkhir-$watermeterunit->StandAwal}}</td>
                  <td align="center" class="align-middle">{{$watermeterunit->TanggalBAST}}</td>
                  <td align="center" class="align-middle">{{$watermeterunit->created_at}}</td>
                  <td align="center" class="align-middle">{{$watermeterunit->teknisi}}</td>
                        @if(Auth::user()->jabatan=='chief')
                  <td align="center" >
                    <ul class="align-middle">
                      
                      <form action="/watermeterunit/edit/{{$watermeterunit->id}}" method="get" class="d-inline ">
                      @csrf
                      <li><button type="submit"><i class="fas fa-edit"></i></button></li>
                      </form>

                      <form action="/watermeterunit/delete/{{$watermeterunit->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
                        @method('delete')
                      @csrf
                      <li><button type="submit"><i class="fas fa-trash-alt"></i></button></li>
                      </form>
                    </ul>
                      
                    </td>
                  @endif
            
                </tr>
              @endforeach

              
            </tbody>
          </table>
        </div>
        </div>
          
  
        

  
    

@endsection
@section('tambahan_script')
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
@endsection
    

  


  

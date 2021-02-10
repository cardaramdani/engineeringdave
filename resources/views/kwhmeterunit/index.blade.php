@extends('layouts.index_logsheet')
@section('title')
      Kwh Unit
@endsection
@section('li_tambahan')
      <form action="/kwhmeterunit/filter" method="post" class="form-inline col-6">
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
        
            {{$Kwhmeterunit->links()}}
            <div class="title">KwhMeter<span>_unit</span></div>
            <ul>

              <!--search box start-->  
              <form class="search-box" action="/kwhmeterunit/cari" method="post">
                @csrf
                <input type="text" name="#" value="" placeholder="Search">
                <button class="search-btn" type="submit">
                 <i class="fas fa-search"></i>
                </button>
              </form>
              <!--search box end-->


              <li><a href="#"><i class="fas fa-info"></i></a></li>
              <form id="kwhmeterunit-add-form" action="/kwhmeterunit/add" method="get" style="display: none;">
                                @csrf
                            </form>
              <li>

              @if(Auth::user()->jabatan=='chief')
                <a href=""onclick="event.preventDefault();
                  document.getElementById('kwhmeterunit-add-form').submit();">
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
                  <th scope="col" align="center" class="align-middle">No </th>
                  <th scope="col" align="center" class="align-middle">Unit</th>
                  <th scope="col" align="center" class="align-middle">No Seri</th>
                  <th scope="col" align="center" class="align-middle">Daya (Kva)</th>
                  <th scope="col" align="center" class="align-middle">Stand Awal</th>
                  <th scope="col" align="center" class="align-middle">GambarAwal</th>
                  <th scope="col" align="center" class="align-middle">Stand Akhir</th>
                  <th scope="col" align="center" class="align-middle">GambarAkhir</th>
                  <th scope="col" align="center" class="align-middle">Pemakaian</th>
                  <th scope="col" align="center" class="align-middle">Tanggal Bast</th>
                  <th scope="col" align="center" class="align-middle">Tanggal Catat</th>
                  <th scope="col" align="center" class="align-middle">Nama Petugas</th>
                      @if(Auth::user()->jabatan=='chief')
                  <th scope="col" class="align-middle">ACTION</th>
                      @endif
              </tr>
            </thead>

            <tbody>
              @foreach ($Kwhmeterunit as $result => $kwhmeterunit)
                <tr>
                  <td align="center" class="font-weight-bold align-middle fixed">{{$result + $Kwhmeterunit->firstitem()}}</td>
                  <td align="center" class="align-middle">{{$kwhmeterunit->Unit}}</td>
                  <td align="center" class="align-middle">{{$kwhmeterunit->NoSeri}}</td>
                  <td align="center" class="align-middle">{{$kwhmeterunit->Daya}}</td>
                  <td align="center" class="align-middle">{{$kwhmeterunit->StandAwal}}</td>
                  <td align="center" class="align-middle">
                      <a href="{{ url('/dataIMG_kwhmeterunit/'.$kwhmeterunit->GambarAwal) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                        <img src="{{ url('/dataIMG_kwhmeterunit/'.$kwhmeterunit->GambarAwal) }}" style="width:50px; height:50px;"/>
                      </a>
                  </td>
                  <td align="center" class="align-middle">{{$kwhmeterunit->StandAkhir}}</td>

                  <td align="center" class="align-middle">
                      <a href="{{ url('/dataIMG_kwhmeterunit/'.$kwhmeterunit->GambarAkhir) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                        <img src="{{ url('/dataIMG_kwhmeterunit/'.$kwhmeterunit->GambarAkhir) }}" style="width:50px; height:50px;"/>
                      </a>
                  </td>

                  <td align="center" class="align-middle">{{$kwhmeterunit->StandAkhir-$kwhmeterunit->StandAwal}}</td>
                  <td align="center" class="align-middle">{{$kwhmeterunit->TanggalBAST}}</td>
                  <td align="center" class="align-middle">{{$kwhmeterunit->created_at}}</td>
                  <td align="center" class="align-middle">{{$kwhmeterunit->teknisi}}</td>
                        @if(Auth::user()->jabatan=='chief')
                  <td align="center" >
                    <ul class="align-middle">
                      
                      <form action="/kwhmeterunit/edit/{{$kwhmeterunit->id}}" method="get" class="d-inline ">
                      @csrf
                      <li><button type="submit"><i class="fas fa-edit"></i></button></li>
                      </form>

                      <form action="/kwhmeterunit/delete/{{$kwhmeterunit->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
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

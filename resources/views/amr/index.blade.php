@extends('layouts.index_logsheet')
@section('title')
      Logsheet AMR
@endsection
@section('li_tambahan')
      
              @if(Auth::user()->jabatan=='chief')
              <form action="/amr/export" method="post">
                @csrf
                  <input type="date" name="startdate" >
                  <input type="date" name="todate" >
                  <button type="submit" ><i class="fas fa-download"></i></button>
              </form>
              @endif
      
@endsection
@section('main-container')
      <div class="header-c">
          <div class="judul-menu">
            {{$Amr->links()}}
            <div class="title">Logsheet<span>_Automatic Meter Reading</span></div>
            <ul>
              @if(Auth::user()->jabatan=='chief')
              <!--search box start-->  
              <form class="search-box" action="/amr/teangan" method="post">
                @csrf
                <input type="text" name="#" value="" placeholder="Search">
                <button class="search-btn" type="submit">
                 <i class="fas fa-search"></i>
                </button>
              </form>
              <!--search box end-->
              @endif


              <li><a href="#"><i class="fas fa-info"></i></a></li>
              <form id="amr-add-form" action="/amr/add" method="get" style="display: none;">
                                @csrf
                            </form>
              <li>

                <a href=""onclick="event.preventDefault();
                                             document.getElementById('amr-add-form').submit();"><i class="fas fa-plus-square"></i></a>
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
  
                  <th scope="col" align="center" class="fixed">NO</th>
                  <th scope="col" align="center">TANGGAL Logsheet</th>
                  <th scope="col" align="center" >NAMA</th>
                  <th scope="col" align="center" >SHIFT</th>
                  <th scope="col" align="center" >Cosp</th>
                  <th scope="col" align="center" >lwbp</th>
                  <th scope="col" align="center" >wbp</th>
                  <th scope="col" align="center" >total</th>
                  <th scope="col" align="center" >kvarh</th>
                  <th scope="col" align="center" >penalty</th>
                  @if(Auth::user()->jabatan=='chief')
                  <th scope="col">ACTION</th>
                  @endif
                
              </tr>
            </thead>
            <tbody>
              @foreach ($Amr as $result => $amr)
                <tr>
                  
                  <td align="center" class="font-weight-bold">{{$result + $Amr->firstitem()}}</td>
                  <td align="center">{{$amr->created_at}}</td>
                  <td align="center">{{$amr->namateknisi}}</td>
                  <td align="center">{{$amr->shift}}</td>
                  <td align="center">{{$amr->cosp}}</td>
                  <td align="center">{{$amr->lwbp}}</td>
                  <td align="center">{{$amr->wbp}}</td>
                  <td align="center">{{$amr->total}}</td>
                  <td align="center">{{$amr->kvarh}}</td>
                  <td align="center">{{$amr->penalty}}</td>
                        @if(Auth::user()->jabatan=='chief')
                  <td align="center" >
                    <ul class="align-middle">
                      
                      <form action="/amr/edit/{{$amr->id}}" method="post" class="d-inline ">
                      @csrf
                      <li><button type="submit"><i class="fas fa-edit"></i></button></li>
                      </form>

                      <form action="/amr/delete/{{$amr->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
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
      <</table>

      </div>
      </div>


    
@endsection



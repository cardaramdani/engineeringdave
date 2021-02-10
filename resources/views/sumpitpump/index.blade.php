@extends('layouts.index_logsheet')
@section('title')
     Logsheet Sumpitpump
@endsection
@section('li_tambahan')
      
              @if(Auth::user()->jabatan=='chief')
              <form action="/sumpitpump/export" method="post">
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
        
            {{$Sumpitpump->links()}}
            <div class="title">Logsheet<span>_Sumpitpump</span></div>
            <ul>

              @if(Auth::user()->jabatan=='chief')
              <!--search box start-->  
              <form class="search-box" action="/sumpitpump/teangan" method="post">
                @csrf
                <input type="text" name="#" value="" placeholder="Search">
                <button class="search-btn" type="submit">
                 <i class="fas fa-search"></i>
                </button>
              </form>
              <!--search box end-->
              @endif

              <li><a href="#"><i class="fas fa-info"></i></a></li>
              <form id="sumpitpump-add-form" action="/sumpitpump/add" method="get" style="display: none;">
                                @csrf
                            </form>
              <li>

                <a href=""onclick="event.preventDefault();
                                             document.getElementById('sumpitpump-add-form').submit();"><i class="fas fa-plus-square"></i></a>
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
                  @if(Auth::user()->jabatan=='chief')
                  <th scope="col">ACTION</th>
                  @endif
                
              </tr>
            </thead>

            <tbody>
              @foreach ($Sumpitpump as $result => $sumpitpump)
                <tr>
                  
                  <td align="center" class="font-weight-bold">{{$result + $Sumpitpump->firstitem()}}</td>
                  <td align="center">{{$sumpitpump->created_at}}</td>
                  <td align="center">{{$sumpitpump->teknisi}}</td>
                  <td align="center">{{$sumpitpump->shift}}</td>
                        @if(Auth::user()->jabatan=='chief')
                  <td align="center" >
                    <ul class="align-middle">
                      <form action="/sumpitpump/view/{{$sumpitpump->id}}" method="post" class="d-inline ">
                        @csrf
                      <li><button type="submit"><i class="fas fa-eye"></i></button></li>
                      </form>

                      <form action="/sumpitpump/edit/{{$sumpitpump->id}}" method="post" class="d-inline ">
                      @csrf
                      <li><button type="submit"><i class="fas fa-edit"></i></button></li>
                      </form>

                      <form action="/sumpitpump/delete/{{$sumpitpump->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
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

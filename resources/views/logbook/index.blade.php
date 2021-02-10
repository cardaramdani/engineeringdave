@extends('layouts.index_logsheet')
@section('title')
     LogBooks
@endsection
@section('li_tambahan')
      
              @if(Auth::user()->jabatan=='chief')
              <form action="/logbook/export" method="post">
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
        
            {{$Logbook->links()}}
            <div class="title"><span>_logbooks</span></div>
            <ul>

              @if(Auth::user()->jabatan=='chief')
              <!--search box start-->  
              <form class="search-box" action="/logbook/teangan" method="post">
                @csrf
                <input type="text" name="#" value="" placeholder="Search">
                <button class="search-btn" type="submit">
                 <i class="fas fa-search"></i>
                </button>
              </form>
              <!--search box end-->
              @endif


              <li><a href="#"><i class="fas fa-info"></i></a></li>
              <form id="logbook-add-form" action="/logbook/add" method="get" style="display: none;">
                                @csrf
                            </form>
              <li>

                <a href=""onclick="event.preventDefault();
                                             document.getElementById('logbook-add-form').submit();"><i class="fas fa-plus-square"></i></a>
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
                  <th scope="col">ACTION</th>
                
                
              </tr>
            </thead>

            <tbody>
              @foreach ($Logbook as $result => $logbook)
                <tr>
                  
                  <td align="center" class="font-weight-bold">{{$result + $Logbook->firstitem()}}</td>
                  <td align="center">{{$logbook->created_at}}</td>
                  <td align="center">{{$logbook->teknisi}}</td>
                  <td align="center">{{$logbook->shift}}</td>
                        
                  <td align="center" >
                    <ul class="align-middle">
                      <form action="/logbook/view/{{$logbook->id}}" method="post" class="d-inline ">
                        @csrf
                      <li><button type="submit"><i class="fas fa-eye"></i></button></li>
                      </form>
                      
                      <form action="/logbook/edit/{{$logbook->id}}" method="post" class="d-inline ">
                      @csrf
                      <li><button type="submit"><i class="fas fa-edit"></i></button></li>
                      </form>
                      
@if(Auth::user()->jabatan=='chief')
                      <form action="/logbook/delete/{{$logbook->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
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

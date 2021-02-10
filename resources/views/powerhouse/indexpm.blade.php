@extends('layouts.index_logsheet')
@section('title')
      PM PANEL power
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <div class="header-c">
        <div class="judul-menu">
        
            {{$Pmpanel->links()}}
        
          <div class="title">PM.<span>PANEL POWER</span></div>
          
          <ul>
              @if(Auth::user()->jabatan=='chief')
            <!--search box start-->  
            <form class="search-box" action="/pmpanel/cari" method="post">
              @csrf
              <input type="text" name="#" value="" placeholder="Search">
              <button class="search-btn" type="submit">
               <i class="fas fa-search"></i>
              </button>
            </form>
            <!--search box end-->
            @endif
            <li><a href="#"><i class="fas fa-info"></i></a></li>
            <form id="pmpanel-add-form" action="/pmpanel/add" method="get" style="display: none;">
                              @csrf
                          </form>
            <li>

              <a href=""onclick="event.preventDefault();
                                           document.getElementById('pmpanel-add-form').submit();"><i class="fas fa-plus-square"></i></a>
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
                  <th scope="col" align="center" >Lokasi</th>
                  <th scope="col" align="center">TANGGAL PREVENTIVE</th>
                  <th scope="col" align="center" >NAMA</th>
                 
                  <th scope="col">ACTION</th>
                
                
              </tr>
            </thead>

            <tbody>
              @foreach ($Pmpanel as $result => $pmpanel)
                <tr>
                  
                  <td align="center" class="font-weight-bold">{{$result + $Pmpanel->firstitem()}}</td>
                  <td align="center">{{$pmpanel->lokasi}}</td>
                  <td align="center">{{$pmpanel->created_at}}</td>
                  <td align="center">{{$pmpanel->nama}}</td>
                        
                  <td align="center" >
                    <ul class="align-middle">
                      <form action="/pmpanel/view/{{$pmpanel->id}}" method="post" class="d-inline ">
                        @csrf
                      <li><button type="submit"><i class="fas fa-eye"></i></button></li>
                      </form>
@if(Auth::user()->jabatan=='chief')
                      <form action="/pmpanel/edit/{{$pmpanel->id}}" method="post" class="d-inline ">
                      @csrf
                      <li><button type="submit"><i class="fas fa-edit"></i></button></li>
                      </form>

                      <form action="/pmpanel/delete/{{$pmpanel->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
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

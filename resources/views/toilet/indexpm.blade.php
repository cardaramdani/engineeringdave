@extends('layouts.index_logsheet')
@section('title')
      PM Toilet
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <div class="header-c">
        <div class="judul-menu">
        
            {{$Toilet->links()}}
        
          <div class="title">PM.<span>Toilet</span></div>
          
          <ul>
              @if(Auth::user()->jabatan=='chief')
            <!--search box start-->  
            <form class="search-box" action="/toilet/cari" method="post">
              @csrf
              <input type="text" name="#" value="" placeholder="Search">
              <button class="search-btn" type="submit">
               <i class="fas fa-search"></i>
              </button>
            </form>
            <!--search box end-->
            @endif
            <li><a href="#"><i class="fas fa-info"></i></a></li>
            <form id="toilet-add-form" action="/toilet/add" method="get" style="display: none;">
                              @csrf
                          </form>
            <li>

              <a href=""onclick="event.preventDefault();
                                           document.getElementById('toilet-add-form').submit();"><i class="fas fa-plus-square"></i></a>
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
  
                  <th scope="col" align="center" class="fixed">No</th>
                  <th scope="col" align="center">Lokasi</th>
                  <th scope="col" align="center">Tanggal Preventive</th>
                  <th scope="col" align="center" >Nama</th>
                  
                  <th scope="col">ACTION</th>
                 
                
              </tr>
            </thead>

            <tbody>
              @foreach ($Toilet as $result => $toilet)
                <tr>
                  
                  <td align="center" class="font-weight-bold">{{$result + $Toilet->firstitem()}}</td>
                  <td align="center">{{$toilet->lokasi_unit}}</td>
                  <td align="center">{{$toilet->created_at}}</td>
                  <td align="center">{{$toilet->nama}}</td>
                  
                        
                  <td align="center" >
                    <ul>
                      <form action="/toilet/view/{{$toilet->id}}" method="post" class="d-inline ">
                        @csrf
                      <li>
                        <button type="submit"><i class="fas fa-eye"></i></button>
                      </li>
                      <br>
                      </form>
@if(Auth::user()->jabatan=='chief')
                      <form action="/toilet/edit/{{$toilet->id}}" method="post" class="d-inline ">
                      @csrf
                      <li>
                        <button type="submit"><i class="fas fa-edit"></i></button>
                      </li>
                      <br>
                      </form>

                      <form action="/toilet/delete/{{$toilet->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
                        @method('delete')
                      @csrf
                      <li>
                        <button type="submit"><i class="fas fa-trash-alt"></i></button>
                      </li>
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

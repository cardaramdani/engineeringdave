@extends('layouts.index_logsheet')
@section('title')
      PM FIREPUMPS
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <div class="header-c">
        <div class="judul-menu">
        
            {{$pmFirepumps->links()}}
        
          <div class="title">PM.<span>FIREPUMPS</span></div>
          
          <ul>
              @if(Auth::user()->jabatan=='chief')
            <!--search box start-->  
            <form class="search-box" action="/pmfirepump/cari" method="post">
              @csrf
              <input type="text" name="#" value="" placeholder="Search">
              <button class="search-btn" type="submit">
               <i class="fas fa-search"></i>
              </button>
            </form>
            <!--search box end-->
            @endif
            <li><a href="#"><i class="fas fa-info"></i></a></li>
            <form id="pmfirepump-add-form" action="/pmfirepump/add" method="get" style="display: none;">
                              @csrf
                          </form>
            <li>

              <a href=""onclick="event.preventDefault();
                                           document.getElementById('pmfirepump-add-form').submit();"><i class="fas fa-plus-square"></i></a>
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
                  <th scope="col" align="center">TANGGAL PREVENTIVE</th>
                  <th scope="col" align="center" >NAMA</th>
                  
                  <th scope="col">ACTION</th>
                 
                
              </tr>
            </thead>

            <tbody>
              @foreach ($pmFirepumps as $result => $pmfirepumps)
                <tr>
                  
                  <td align="center" class="font-weight-bold">{{$result + $pmFirepumps->firstitem()}}</td>
                  <td align="center">{{$pmfirepumps->created_at}}</td>
                  <td align="center">{{$pmfirepumps->nama}}</td>
                  
                        
                  <td align="center" >
                    <ul class="align-middle">
                      <form action="/pmfirepump/view/{{$pmfirepumps->id}}" method="post" class="d-inline ">
                        @csrf
                      <li><button type="submit"><i class="fas fa-eye"></i></button></li>
                      </form>
@if(Auth::user()->jabatan=='chief')
                      <form action="/pmfirepump/edit/{{$pmfirepumps->id}}" method="post" class="d-inline ">
                      @csrf
                      <li><button type="submit"><i class="fas fa-edit"></i></button></li>
                      </form>

                      <form action="/pmfirepump/delete/{{$pmfirepumps->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
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

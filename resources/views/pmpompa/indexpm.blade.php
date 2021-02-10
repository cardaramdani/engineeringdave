@extends('layouts.index_logsheet')
@section('title')
      PM PUMPS
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <div class="header-c">
        <div class="judul-menu">
        
            {{$Pmpompa->links()}}
        
          <div class="title">PM.<span>pumps</span></div>
          
          <ul>
              @if(Auth::user()->jabatan=='chief')
            <!--search box start-->  
            <form class="search-box" action="/pmpompa/cari" method="post">
              @csrf
              <input type="text" name="#" value="" placeholder="Search">
              <button class="search-btn" type="submit">
               <i class="fas fa-search"></i>
              </button>
            </form>
            <!--search box end-->
            @endif
            <li><a href="#"><i class="fas fa-info"></i></a></li>
            <form id="pmpompa-add-form" action="/pmpompa/add" method="get" style="display: none;">
                              @csrf
                          </form>
            <li>

              <a href=""onclick="event.preventDefault();
                                           document.getElementById('pmpompa-add-form').submit();"><i class="fas fa-plus-square"></i></a>
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
                  <th scope="col" align="center" >Pompa</th>
                  <th scope="col" align="center">lokasi</th>
                  <th scope="col" align="center">Tanggal Preventive</th>
                  <th scope="col" align="center" >Nama</th>
                  
                  <th scope="col">ACTION</th>
                  
                
              </tr>
            </thead>

            <tbody>
              @foreach ($Pmpompa as $result => $pmpompa)
                <tr>
                  
                  <td align="center" class="font-weight-bold">{{$result + $Pmpompa->firstitem()}}</td>
                  <td align="center">{{$pmpompa->nama_pompa}}</td>
                  <td align="center">{{$pmpompa->lokasi_unit}}</td>
                  <td align="center">{{$pmpompa->created_at}}</td>
                  <td align="center">{{$pmpompa->nama}}</td>
                  
                       
                  <td align="center" >
                    <ul>
                      <form action="/pmpompa/view/{{$pmpompa->id}}" method="post" class="d-inline ">
                        @csrf
                      <li>
                        <button type="submit"><i class="fas fa-eye"></i></button>
                      </li>
                      <br>
                      </form>
@if(Auth::user()->jabatan=='chief')
                      <form action="/pmpompa/edit/{{$pmpompa->id}}" method="post" class="d-inline ">
                      @csrf
                      <li>
                        <button type="submit"><i class="fas fa-edit"></i></button>
                      </li>
                      <br>
                      </form>

                      <form action="/pmpompa/delete/{{$pmpompa->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
                        @method('delete')
                      @csrf
                      <li>
                        <button type="submit"><i class="fas fa-trash-alt"></i></button>
                      </li>
                      </form>
                    </ul>
                      <!-- <form action="/pmpompa/edit/{{$pmpompa->id}}" method="get" class="d-inline ">
                        @csrf
                        <button type="submit" class="btn btn-outline-success">Edit</button> 
                      </form>

                      <form action="/pmpompa/delete/{{$pmpompa->id}}" method="post" class="d-inline" onclick=" return confirm ('Yakin Mau Di Delet?');">
                          @method('delete')
                          @csrf
                        <button type="submit" class="btn btn-outline-danger">Delete</button> 
                      </form> -->
                    </td>
                  @endif
            
                </tr>
              @endforeach

              
            </tbody>
          </table>
        </div>
      </div>
@endsection

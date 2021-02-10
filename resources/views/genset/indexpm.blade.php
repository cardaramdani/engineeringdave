@extends('layouts.index_logsheet')
@section('title')
      PM GENSET
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <div class="header-c">
        <div class="judul-menu">
        
            {{$pmGenset->links()}}
        
          <div class="title">PM.<span>GENSET</span></div>
          
          <ul>
              @if(Auth::user()->jabatan=='chief')

            <!--search box start-->  
            <form class="search-box" action="/pmgenset/cari" method="post">
              @csrf
              <input type="text" name="#" value="" placeholder="Search">
              <button class="search-btn" type="submit">
               <i class="fas fa-search"></i>
              </button>
            </form>
            <!--search box end-->
              @endif

            <li><a href="#"><i class="fas fa-info"></i></a></li>
            <form id="pmgenset-add-form" action="/pmgenset/add" method="get" style="display: none;">
                              @csrf
                          </form>
            <li>

              <a href=""onclick="event.preventDefault();
                                           document.getElementById('pmgenset-add-form').submit();"><i class="fas fa-plus-square"></i></a>
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
              @foreach ($pmGenset as $result => $pmgenset)
                <tr>
                  
                  <td align="center" class="font-weight-bold">{{$result + $pmGenset->firstitem()}}</td>
                  <td align="center">{{$pmgenset->created_at}}</td>
                  <td align="center">{{$pmgenset->nama}}</td>
                  
                        
                  <td align="center" >
                    <ul class="align-middle">
                      <form action="/pmgenset/view/{{$pmgenset->id}}" method="get" class="d-inline ">
                        @csrf
                      <li><button type="submit"><i class="fas fa-eye"></i></button></li>
                      </form>
@if(Auth::user()->jabatan=='chief')
                      <form action="/pmgenset/edit/{{$pmgenset->id}}" method="post" class="d-inline ">
                      @csrf
                      <li><button type="submit"><i class="fas fa-edit"></i></button></li>
                      </form>

                      <form action="/pmgenset/delete/{{$pmgenset->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
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


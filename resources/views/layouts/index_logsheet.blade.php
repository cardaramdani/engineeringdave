



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    @yield('tambahan_link')
    <link rel="stylesheet" href="{{asset('/assets/css/Sidebar_submenu/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>@yield('title')</title>
     
</head>
<body>
<div class="wrapper">
  <!--header menu start-->
      <div class="header">
        <div class="header-menu">
          <div class="title">Eng<span>ineering</span></div>
          <div class="sidebar-btn">
            <i class="fas fa-bars"></i>
          </div>
          <ul>
            <li>
              @yield('li_tambahan')
              
            </li>
            <li><a href="#"><i class="fas fa-bell"></i></a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
            <li>

              <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <!--header menu end-->

      <!--sidebar start-->
      <div class="sidebar">
        <div class="sidebar-menu">
          <center class="profile">
            <img src="{{ url('/dataIMG_user/'.Auth::user()->gambar) }}" alt="">
            <p>{{ Auth::user()->username }}</p>
          </center>
          <li class="item">
            <a href="{{ url('/homescreen')}}" class="menu-btn">
              <i class="fas fa-home"></i><span>Home</span>
            </a>
          </li>
          <li class="item">
            <a href="{{ url('/SOP')}}" class="menu-btn">
              <i class="fas fa-book-reader"></i><span>SOP</span>
            </a>
          </li>
          <li class="item" id="PM">
            <a href="#PM" class="menu-btn">
              <i class="fas fa-tools"></i><span>PM <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
                  <div class="sub-menu">
                    <a href="{{ url('/ac')}}"><i class="fas fa-fan"></i><span>AC</span></a>
                    <a href="{{ url('/cwt')}}"><i class="fas fa-tint"></i><span>Clean Water Tank</span></a>
                    <a href="{{ url('/fan')}}"><i class="fas fa-fan"></i><span>EF & IF</span></a>
                    <a href="{{ url('/pmfirealarm')}}"><i class="fas fa-bullhorn"></i><span>Fire Alarm</span></a>
                    <a href="{{ url('/pmfirepump')}}"><i class="fas fa-fire-extinguisher"></i><span>Fire Pump</span></a>
                    <a href="{{ url('/pmgenset')}}"><i class="fas fa-oil-can"></i><span>Genset</span></a>
                    <a href="{{ url('/gondola')}}"><i class="fas fa-ellipsis-v"></i><span>Gondola</span></a>
                    <a href="{{ url('/hydrant')}}"><i class="fas fa-fire-extinguisher"></i><span>Hydrant Box</span></a>
                    <a href="{{ url('/pmpanel')}}"><i class="fas fa-charging-station"></i><span>Panel Power</span></a>
                    <a href="{{ url('/pmpompa')}}"><i class="fas fa-address-card"></i><span>Pompa</span></a>
                    <a href="{{ url('/rooftank')}}"><i class="fas fa-codepen"></i><span>Roof Tank</span></a>
                    <a href="{{ url('/pmstp')}}"><i class="fas fa-industry"></i><span>STP</span></a>
                    <a href="{{ url('/toilet')}}"><i class="fas fa-toilet"></i><span>Toilet</span></a>
                  </div>
          </li>
          <li class="item" id="LogSheet">
            <a href="#LogSheet" class="menu-btn">
              <i class="fas fa-book-open"></i><span>LogSheet <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
                <div class="sub-menu">
                  <a href="{{ url('/amr')}}"><i class="fas fa-bolt"></i><span>AMR</span></a>
                  <a href="{{ url('/boosterpump')}}"><i class="fas fa-atom"></i><span>Booster Pump</span></a>
                  <a href="{{ url('/firepump')}}"><i class="fas fa-fire-extinguisher"></i><span>Fire Pump</span></a>
                  <a href="{{ url('/genset')}}"><i class="fas fa-oil-can"></i><span>Genset</span></a>
                  <a href="{{ url('/logbook')}}"><i class="fas fa-book"></i><span>LogBooks</span></a>
                  <a href="{{ url('/pdam')}}"><i class="fas fa-tint"></i><span>PDAM</span></a>
                  <a href="{{ url('/PowerHouse')}}"><i class="fas fa-charging-station"></i><span>Power House</span></a>
                  <a href="{{ url('/stp')}}"><i class="fas fa-industry"></i><span>STP</span></a>
                  <a href="{{ url('/sumpitpump')}}"><i class="fas fa-atom"></i><span>Sumpit Pump</span></a>
                  <a href="{{ url('/transferpump')}}"><i class="fas fa-atom"></i><span>Transfer Pump</span></a>
                </div>
          </li>
          <li class="item" id="Utility">
            <a href="#Utility" class="menu-btn">
              <i class="fas fa-bolt"></i><span>Utility <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
                <div class="sub-menu">
                  <a href="{{ url('/watermeterunit')}}"><i class="fas fa-tint"></i><span>Water Meter Unit</span></a>
                  <a href="{{ url('/kwhmeterunit')}}"><i class="fas fa-bolt"></i><span>Kwh Meter Unit</span></a>
                  <a href="{{ url('/kwhcomersile')}}"><i class="fas fa-bolt"></i><span>Kwh Meter Comersile</span></a>
                </div>
          </li>
          <li class="item" id="settings">
            <a href="#settings" class="menu-btn">
              <i class="fas fa-cog"></i><span>Settings <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
            <div class="sub-menu">
              <a href="#" onclick="event.preventDefault();
                                           document.getElementById('updatepass').submit();"><i class="fas fa-lock"></i><span>Password</span></a>
              <form id="updatepass" action="{{ route('password.change') }}" method="get" style="display: none;">
                              @csrf
                          </form>
              <a href="#"onclick="event.preventDefault();
                                           document.getElementById('profile-form').submit();"><i class="fas fa-user-circle"></i><span>Profile</span></a>
              <form id="profile-form" action="/profile/{{Auth::user()->id}}" method="get" style="display: none;">
                              @csrf
                          </form>
            </div>
          </li>
          <li class="item">
            <a href="#" class="menu-btn">
              <i class="fas fa-info-circle"></i><span>About</span>
            </a>
          </li>
        </div>
      </div>
      <!--samping end-->
      <div class="main-container">
        @yield('main-container')
        
      </div>
  </div>

<!--main container end-->
     <script type="text/javascript">
    $(document).ready(function(){
      $(".sidebar-btn").click(function(){
        $(".wrapper").toggleClass("collapse");
      });
    });

    
    </script>
    @yield('tambahan_script')
  
    
  </body>
  
</html>
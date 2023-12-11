<!doctype html>
<html lang="en">

<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Google Fonts -->	
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    
    <!-- Bootstrap Stylesheet -->	
            <link rel="stylesheet" href="{{ asset("css/bootstrap-4.4.1.min.css") }}">
    

    <!-- Sidebar Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/jquery.mCustomScrollbar.min.css") }}">
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
        
    <!-- Custom Stylesheets -->	
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" id="cpswitch" href="{{ asset("css/orange.css") }}">
    <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.css") }}">
    
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="{{ asset("css/flexslider.css") }}" type="text/css" />
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="{{ asset("css/datepicker.css") }}">
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        nav.navbar#mynavbar-1 .navbar-collapse ul li a{
            font-size: 13px !important;
        }
        #top-bar{
            background-color:#26B3FA; 
        }
        #best-features.lightgrey-features{
            color: #000;
        }
        #best-features.lightgrey-features .b-feature-block p{
            color: #000;
        }
        .ftr-top-grey {
    background: #0f1e31;
}
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url("{{ asset('/images/logo.png') }}") center no-repeat #fff;
}
#sidebar #web-name::after {
    background: #26b3fa;
    transform: rotate(43deg);
}
.hotelbtn{
    width: 100%;
border: 0px;
background-color: white;
}
        </style>
</head>


<body id="main-homepage" >

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>
            
            
        <!--======== SEARCH-OVERLAY =========-->       
        <div id="myOverlay" class="overlay">
         
        </div><!-- end overlay -->
        
        
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>{{ setting('site.address') }}</li>
                                <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>{{ setting('site.phone') }}</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    <div class="col-12 col-md-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                @guest
                                <li class="list-inline-item"><a href="{{ route('register') }}"><span><i class="fa fa-lock"></i></span>S'inscrire </a></li>
                                @else
                                <li class="list-inline-item"><span><i class="fa fa-unlock"></i></span>connecté : <a href="">{{  Auth::user()->name }} {{  Auth::user()->lname }}</a></li>
                                <li class="list-inline-item"><span><i class="fa fa-user"></i></span> Statut du compte :  <a href=""><span></span>@if (Auth::user()->active==0)
                                  <span style="color: red">  Pas activé </span>
                                @else
                            <span style="color:green">    Activée </span>
                                @endif</a></li>
                                <li class="list-inline-item">   
                                    <span><i class="fa fa-address-card"></i></span>
                                Portefeuille : {{  Auth::user()->wallet }}
                                </li>
                                <li class="list-inline-item">   
                                    <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"><span><i class=" 	fa fa-sign-out"></i></span>
                                   Se déconnecter 
                                 </a>
    
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                     @csrf
                                 </form>
                                </li>
                                @endif

                              
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
        
        <nav class="navbar navbar-expand-xl sticky-top navbar-custom main-navbar p-1" id="mynavbar-1">
            <div class="container">
        
                <a href="{{ route('/') }}" class="navbar-brand py-1 m-0" style="font-size: 20px;"><span>E</span>LJOURI <span>B</span>OOKING <span><img style="width: 20%;" src="{{ asset('/images/logo.png') }}" /></span></a>
               
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse">
                    <i class="fa fa-navicon py-1"></i>
                </button>
        
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="navbar-nav ml-auto navbar-search-link">
                        <li class="nav-item dropdown active">
                            <a href="{{ route('/') }}" class="nav-link" id="navbarDropdown" >DOMICILE</a>
                          
                        </li>
                        @guest

                        <li class="nav-item dropdown ">
                            <a href="{{ route('about') }}" class="nav-link" id="navbarDropdown" >Qui sommes nous</a>
                          
                        </li>
                        <li class="nav-item dropdown ">
                            <a href="{{ route('contact') }}" class="nav-link" id="navbarDropdown" >Nous Contacter</a>
                          
                        </li>
                        @endif
                        @if (Auth::user())
                        @if (Auth::user()->active==1)
                        @if (setting('site.activevsa')==1)
                        <li class="nav-item dropdown ">
                            <a href="{{ route('visa') }}" class="nav-link" id="navbarDropdown" >Visa</a>
                          
                        </li>
                        @endif
                     
                        @endif
                        @endif
                        @if (Auth::user())
                        @if (Auth::user()->active==1)
                        @if (setting('site.flights')==1)
                        <li class="nav-item dropdown ">
                            <a href="{{ route('flights') }}" class="nav-link" id="navbarDropdown" >
                                Vols charters</a>
                          
                        </li>
                        @endif
                     
                        @endif
                        @endif
                        @if (Auth::user())
                        
                        @if (Auth::user()->active==1)
                        <li class="nav-item dropdown ">
                            <a href="#"class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >voyages<span><i class="fa fa-angle-down "></i></span></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (setting('site.traveldemond')==1)
                        
                                <li><a  class="dropdown-item"  href="{{ route('voyages.group') }}">les voyages de groupe</a></li>
                               
                          
                        
                        @endif
                      @if (setting('site.singletravel')==1)
                        
                               
                                <li><a  class="dropdown-item"  href="{{ route('voyages.single') }}">les trajets personnels</a></li>
                          
                        
                        @endif
                            </ul>
                        </li>
                        @endif
                        @endif
                        @if (Auth::user())
                        @if (Auth::user()->active==1)
                        @if (setting('site.drivedenomd')==1)
                        <li class="nav-item dropdown ">
                            <a href="{{ route('drivdemond') }}" class="nav-link" id="navbarDropdown" >PERMIS DE CONDUIRE</a>
                          
                        </li>
                        @endif
                     
                        @endif
                        @endif

                        @if (Auth::user())
                        
                        @if (Auth::user()->active==1)
                        <li class="nav-item dropdown ">
                            <a href="#"class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Hotels<span><i class="fa fa-angle-down "></i></span></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (setting('site.activehotal')==1)
                        
                                <li><a  class="dropdown-item"  href="{{ route('hotels') }}">Hôtels dans le monde</a></li>
                               
                          
                        
                        @endif
                      @if (setting('site.hotelvisa')==1)
                        
                               
                                <li><a  class="dropdown-item"  href="{{ route('hotel_request') }}">Demande de réservation d'hôtel visa</a></li>
                          
                        
                        @endif
                            </ul>
                        </li>
                        @endif
                        @endif
                        @if (Auth::user())
                        @if (Auth::user()->active==1)
                        <li class="nav-item dropdown ">
                            <a href="{{ route('myorder') }}" class="nav-link" id="navbarDropdown" >reservation</a>
                          
                        </li>
                        @endif
                        @endif
                        @if (Auth::user())
                        @if (Auth::user()->active==1)
                        <li class="nav-item dropdown ">
                            <a href="{{ route('finance') }}" class="nav-link" id="navbarDropdown" >Finance</a>
                          
                        </li>
                        @endif
                        @endif
                        <li class="nav-item dropdown " style="display: none">
                            <a href="{{ route('contact') }}" class="nav-link" id="navbarDropdown" ></a>
                          
                        </li>
                
                        
            
                  
                       
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- End container -->
        </nav>
        <div class="sidenav-content">
            <!-- Sidebar  -->
            <nav id="sidebar" class="sidenav">
                <h2 id="web-name"><span></span>ELJOURI BOOKING</h2>
        
                <div id="main-menu">
                    <div id="dismiss">
                        <button class="btn" id="closebtn">&times;</button>
                    </div>
                    <div class="list-group panel">
                               
                                <a href="{{ route('/') }}" class="items-list" >
                                    <span><i class="fa fa-home link-icon"></i></span>DOMICILE</a>
                             
                            
                               <a href="{{ route('about') }}" class="items-list" >
                                        <span><i class="fa fa-home link-icon"></i></span>Qui sommes nous</a>
                                 
                                
                               
                                    <a href="{{ route('contact') }}" class="items-list" >
                                        <span><i class="fa fa-home link-icon"></i></span>Nous Contacter</a>
                                    @if (Auth::user())
                        @if (Auth::user()->active==1)
                        @if (setting('site.activevsa')==1)

                        
                            <a href="{{ route('visa') }}" class="items-list" >
                                <span><i class="fa fa-home link-icon"></i></span>Visa</a>
                            @endif
                        @endif
                        @endif
                        @if (Auth::user())
                        @if (Auth::user()->active==1)
                        @if (setting('site.flights')==1)

                            
                            <a href="{{ route('flights') }}" class="items-list" >
                                <span><i class="fa fa-home link-icon"></i></span>Vols charters</a>
                            @endif
                        @endif
                        @endif
                                    @if (Auth::user())
                                    @if (Auth::user()->active==1)
        

                                        
                                        <a href="#home-links" class="items-list" data-toggle="collapse" aria-expanded="false">
                                            <span><i class="fa fa-home link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                            <div class="collapse sub-menu text-danger" id="home-links">
                                                @if (setting('site.activehotal')==1)
                                                <a class="items-list" href="{{ route('hotels') }}">Hôtels dans le monde</a>
                                                @endif
                                                @if (setting('site.hotelvisa')==1)
                                                <a class="items-list" href="{{ route('hotel_request') }}">Demande de réservation d'hôtel visa</a>
                                                @endif 
                                            </div><!-- end sub-menu -->
                    
                                            @endif   
                                    @endif  

                                    @if (Auth::user())
                                    @if (Auth::user()->active==1)
        

                                        
                                        <a href="#hoe-links" class="items-list" data-toggle="collapse" aria-expanded="false">
                                            <span><i class="fa fa-home link-icon"></i></span>voyages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                            <div class="collapse sub-menu text-danger" id="hoe-links">
                                                @if (setting('site.traveldemond')==1)
                                                <a class="items-list" href="{{ route('voyages.group') }}">les voyages de groupe</a>
                                                @endif
                                                @if (setting('site.singletravel')==1)
                                                <a class="items-list" href="{{ route('voyages.single') }}">les trajets personnels</a>
                                                @endif 
                                            </div><!-- end sub-menu -->
                    
                                            @endif   
                                    @endif 

                                    @if (Auth::user())
                                    @if (Auth::user()->active==1)
                                    @if (setting('site.drivedenomd')==1)
            
                                        
                                        <a href="{{ route('drivdemond') }}" class="items-list" >
                                            <span><i class="fa fa-home link-icon"></i></span>PERMIS DE CONDUIRE</a>
                                        @endif
                                    @endif
                                    @endif

                                    @if (Auth::user())
                        @if (Auth::user()->active==1)
                            <a href="{{ route('myorder') }}" class="items-list" >
                                <span><i class="fa fa-home link-icon"></i></span>reservation</a>
                         
                   
                        @endif
                        @endif
                        @if (Auth::user())
                        @if (Auth::user()->active==1)
                
                            <a href="{{ route('finance') }}" class="items-list" >
                                <span><i class="fa fa-home link-icon"></i></span>Finance</a>
                         
                   
                        @endif
                        @endif
                           
        
                    </div><!-- End list-group panel -->
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End sidenav-content -->

@include('include.header')

<style>
  .text-gray-700{
  margin-top: 15px;    
  }
    </style>
<!--=================== PAGE-COVER =================-->
<section class="page-cover" id="cover-hotel-grid-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title"> Nos sélections des hôtels </h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Hotels</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="hotel-grid" class="innerpage-section-padding">
        <div class="container">
            <div class="row">            
                
                <div class="col-12 col-md-12 col-lg-3 side-bar left-side-bar">
                                
                    <div class="side-bar-block filter-block" style="padding: 33px 25px 5px;">
                        <h3>Trier par filtre </h3>
                        <p>Réservez votre hôtel</p>
                        
                        <div class="panels-group">
                            
                            <div class="card">
                                <div class="card-header">                 
                                    <a href="#panel-1" data-toggle="collapse" >Choisir une catégorie <span><i class="fa fa-angle-down"></i></span></a>
                                </div><!-- end card-header -->
                                
                                <div id="panel-1" class="panel-collapse collapse">
                                    <div class="card-body text-left">
                                        <ul class="list-unstyled">
                                            <li class="custom-check"> <input type="checkbox" class="clickcategory"  id="check00" name="checkbox" value="0"/>
                                            <label for="check00"><span><i class="fa fa-check"></i></span>All</label></li>

                                            @foreach ($hotelcategories as $hotelcategory)
                                            <li class="custom-check"><input type="checkbox" class="clickcategory"  id="check{{ $hotelcategory->id }}" name="checkbox" value="{{ $hotelcategory->id }}"/>
                                                <label for="check{{ $hotelcategory->id }}"><span><i class="fa fa-check"></i></span>{{ $hotelcategory->name }}</label></li>
                                                
                                            @endforeach
                                          
                                        </ul>
                                    </div><!-- end card-body -->
                                </div><!-- end panel-collapse -->
                            </div><!-- end panel-default -->
                         
                            <div class="card">
                                <div class="card-header">                 
                                    <a href="#panel-3" data-toggle="collapse" >Évaluation <span><i class="fa fa-angle-down"></i></span></a>
                                </div><!-- end card-header -->
                                
                                <div id="panel-3" class="panel-collapse collapse">
                                    <div class="card-body text-left">
                                        <ul class="list-unstyled">
                                            <li class="custom-check"><input type="checkbox" class="click" id="star1" name="star1" value="1"/>
                                            <label for="star1"><span><i class="fa fa-check"></i></span>1 Star</label></li>
                                            <li class="custom-check"><input type="checkbox" class="click"  id="star2" name="star2" value="2"/>
                                            <label for="star2"><span><i class="fa fa-check"></i></span>2 Star</label></li>
                                            <li class="custom-check"><input type="checkbox" class="click"  id="star3" name="star3" value="3"/>
                                            <label for="star3"><span><i class="fa fa-check"></i></span>3 Star</label></li>
                                            <li class="custom-check"><input type="checkbox" class="click"  id="star4" name="star4" value="4"/>
                                            <label for="star4"><span><i class="fa fa-check"></i></span>4 Star</label></li>
                                            <li class="custom-check"><input type="checkbox" class="click"  id="star5" name="star5" value="5"/>
                                            <label for="star5"><span><i class="fa fa-check"></i></span>5 Star</label></li>
                                        </ul>
                                    </div><!-- end card-body -->
                                </div><!-- end panel-collapse -->
                            </div><!-- end panel-default -->
                            
                        </div><!-- end panel-group -->
                        
                        <div class="price-slider">
                            <p><input type="text" id="amount" readonly></p>
                            <div id="slider-range"></div>
                        </div><!-- end price-slider -->
                    </div><!-- end side-bar-block -->
                    
                </div><!-- end columns -->
                
                <div class="col-12 col-md-12 col-lg-9 col-xl-9 content-side">
                    <div class="row">
                    @foreach ($hotels as $hotel)
                    @if ($hotel->status=="Enable")
                      
                    <div class="col-md-6 col-lg-6 col-xl-4 category{{$hotel->idcategory  }} categories  star{{$hotel->rate  }}">
                        <div class="grid-block main-block h-grid-block">
                            <div class="main-img h-grid-img">
                                <a  href="{{ route('hoteldemond',['id'=>$hotel->id]) }}">
                                    <img src="{{ url('storage/app/public/'.$hotel->coverimg) }}" class="img-fluid" alt="hotel-img" />
                                </a>
                              
                            </div><!-- end h-grid-img -->
                            
                             <div class="block-info h-grid-info">
                                 <div class="rating">
                                     @php
                                     $x=0;    
                                     @endphp
                                     @for ($i = 0; $i < $hotel->rate; $i++)
                                     <span><i class="fa fa-star orange"></i></span>
                                
                                     @endfor
                                   @if ($hotel->rate<5)
                                   @for ($i = $hotel->rate; $i < 5; $i++)
                                   <span><i class="fa fa-star lightgrey"></i></span>
                              
                                   @endfor
                                       
                                   @endif
                              
                                </div><!-- end rating -->
                                
                                 <h3 class="block-title"><a href="{{ route('hoteldemond',['id'=>$hotel->id]) }}">{{ $hotel->name }}</a></h3>
                                <p class="block-minor">Location : {{ $hotel->location }}</p>
                                <p>{{ $hotel->descrip }} </p>
                                <div class="grid-btn">
                                    <a href="{{ route('hoteldemond',['id'=>$hotel->id]) }}" class="btn btn-orange btn-block btn-lg">View More</a>
                                </div><!-- end grid-btn -->
                             </div><!-- end h-grid-info -->
                        </div><!-- end h-grid-block -->
                    </div><!-- end columns -->
                        
                    @endif
                    @endforeach
                     
              
                 

                    </div><!-- end row -->
                    
                    <div class="pages">
                        {{ $hotels->links() }}
                    </div><!-- end pages -->
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end hotel-grid -->
</section><!-- end innerpage-wrapper -->



@include('include.footer')

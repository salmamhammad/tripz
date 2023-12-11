
@include('include.header')
<style>
    #flexslider-container-1{
    height: 202px;
}
@media only screen and (max-width: 1000px) {
    #flexslider-container-1{
    height: 400px;
}
}
.calendar-text { margin-top: .3em; }
#flexslider-container-1 {
    height: auto;
}
.search-tabs {
    position: relative;
    bottom: 75px;
    left: 0px;
    width: 100%;
}
</style>
<!--=================== PAGE-COVER =================-->
<section class="page-cover" id="cover-hotel-grid-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title"> Nom de l'Hotel : {{ $hotels->name }} </h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">DOMICILE</a></li>
                    <li class="breadcrumb-item">Hotels</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->

<section class="innerpage-wrapper">
    <div id="flight-booking" class="innerpage-section-padding" style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-5 col-xl-4 side-bar left-side-bar">
                    <div class="row">
                    
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="side-bar-block detail-block style2 text-center">
                                <div class="detail-img text-center">
                                    <a href="#"><img src="{{ url('storage/app/public/'.$hotels->coverimg) }}" class="img-fluid" alt="detail-img"/></a>
                                    <div class="detail-title">
                                        <h4><a href="#">{{ $hotels->name }}</a></h4>
                                     
                                    </div><!-- end detail-title -->
                                    
                                    <span class="detail-price"><h4>${{ $hotels->price }} <span>/ nuit</span></h4></span>

                                </div><!-- end detail-img -->
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Rating</td>
                                                <td>
                                                    <div class="rating">
                                                        @php
                                                        $x=0;    
                                                        @endphp
                                                        @for ($i = 0; $i < $hotels->rate; $i++)
                                                        <span><i class="fa fa-star "></i></span>
                                                   
                                                        @endfor
                                                      @if ($hotels->rate<5)
                                                      @for ($i = $hotels->rate; $i < 5; $i++)
                                                      <span><i class="fa fa-star-o"></i></span>
                                                 
                                                      @endfor
                                                          
                                                      @endif
                                                     
                                                    </div><!-- end rating -->
                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Emplacement : </td>
                                                <td>{{ $hotels->location }}</td>
                                            </tr>
                                            <tr>
                                                <td>la description : </td>
                                                <td>{{ $hotels->descrip }}</td>
                                            </tr>
                                           
                                           
                                        </tbody>
                                    </table>
                                </div><!-- end table-responsive -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->
                    
                        
                    </div><!-- end row -->
                
                </div><!-- end columns -->
                @php
                    $images = json_decode($hotels->sliderimg);
                    $x=0;
                @endphp
                
                <div class="col-12 col-md-12 col-lg-7 col-xl-8 content-side">
                    <div id="hot-tour-carousel" class="carousel slide" data-ride="carousel">
        
                        <div class="carousel-inner">
                            @foreach ($images as $image)
                            <div class="carousel-item @if($x==0) active @endif">
                                <img src="{{ url('storage/app/public/'.$image) }}"  style="width: 100%;">
                            </div>
                            @php
                              $x=1;  
                            @endphp
                            @endforeach
                           
                            
                         
                        </div><!-- end carousel-inner -->
                        
                        <a class="left arrow-icons carousel-control-prev" href="#hot-tour-carousel" data-slide="prev">
                            <span class="glyphicon carousel-control-prev-icon fa fa-arrow-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right arrow-icons carousel-control-next" href="#hot-tour-carousel" data-slide="next">
                            <span class="glyphicon carousel-control-next-icon fa fa-arrow-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div><!-- end hot-tour-carousel -->
                    
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->         
    </div><!-- end flight-booking -->
</section><!-- end innerpage-wrapper -->


<section class="flexslider-container" id="demond">
    <br/>   <br/>   <br/>   <br/>   <br/>   <br/>   <br/>
    <div class="search-tabs" id="search-tabs-1">
        <div class="container">
            <h3 class="text-center">Tarifs et Résevation</h3>
            <div class="row">
                <div class="col-md-12">
                
                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav-item " style="    border: 1px solid #e6e6e6;"><a class="nav-link stageone"  style="padding: 20px;  pointer-events: none;" href="#flights" data-toggle="tab"><span style="color: #fd9a00;" >1</span>  &nbsp;  <span class="d-md-inline-flex d-none st-text">la demande</span></a></li>
                        <li class="nav-item active" style="    border: 1px solid #e6e6e6;"><a class="nav-link stagetwo" style="padding: 20px;  pointer-events: none;" href="#hotels" data-toggle="tab"><span style="color: #fd9a00;" >2</span>  &nbsp; <span class="d-md-inline-flex d-none st-text"> les chambres </span></a></li>
                        <li class="nav-item" style="    border: 1px solid #e6e6e6;"><a class="nav-link stagefour" style="padding: 20px;  pointer-events: none;" href="#cruise" data-toggle="tab"><span style="color: #fd9a00;" >4</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">confirmation</span></a></li>
                    </ul>

                    <div class="tab-content" style="    border: 1px solid #e6e6e6;">

                        <div id="hotels" class="tab-pane in active">
                            <form action="{{ url('/demondhotel') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    
                                    <h3>Informations sur les chambres </h3>  <br/> 
                                   <input type="hidden" name="idhotel" value="{{ $hotels->id }}" />
                                   <input type="hidden" name="numberroms"  id="numberroms" value="{{ $hotels->numberroms }}" />
                                    
                                </div>
                              

                                <div class="row">
  
                                    @for ($i = 1; $i <= $demondhotels->numberroms; $i++) 
 
                                                   <div class="row " >
                                                    <h4>Chambre {{ $i }}</h4>  <br/> 
                                                    </div>
                                                    <div class="row">
                                                     <div class="col-12 col-md-12 col-lg-12">
                                                              <div class="form-group right-icon">
                                                               
                                                                  <select class="form-control" name="type{{ $i }}" required>
                                                                    <option selected>  Type de chambres *  </option>
                                                                    @foreach ($rooms as $room)
                                                                    <option value="{{ $room->id }}"> {{ $room->type }} - le prix: {{ $room->price  }}  </option>
                                                                    @endforeach
                                                                </select>
                                                                <i class=" fa fa-address-book"></i>
                                                         
                                                                   </div>
                                                                </div><!-- end columns --></div><!-- end columns -->
                                                      
                                                                    
                                                  
                                                @endfor
                                    </div><!-- end columns -->
                            
                                    <div class="row">   
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                                        </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                        <button class="btn btn-orange"> Suivant  </button>
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </form>
                        </div><!-- end flights -->
                        
          

                 
                        
                    </div><!-- end tab-content -->
                    
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->
    
     </div><!-- end container -->
    </section><!-- end page-cover -->
    <!--===== INNERPAGE-WRAPPER ====-->
  

@include('include.footer')

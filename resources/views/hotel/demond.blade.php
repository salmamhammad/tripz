
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
                                    
                                    <span class="detail-price"><h4>{{ $hotels->price }} <span>/ nuit</span></h4></span>

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


<section class="flexslider-container" id="flexslider-container-1">
    <div class="search-tabs" id="search-tabs-1">
        <div class="container">
            <h3 class="text-center">Tarifs et Résevation</h3>
            <div class="row">
                <div class="col-md-12">
                
                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav-item active" style="    border: 1px solid #e6e6e6;"><a class="nav-link stageone"  style="padding: 20px;  pointer-events: none;" href="#flights" data-toggle="tab"><span style="color: #fd9a00;" >1</span>  &nbsp;  <span class="d-md-inline-flex d-none st-text">la demande</span></a></li>
                        <li class="nav-item" style="    border: 1px solid #e6e6e6;"><a class="nav-link stagetwo" style="padding: 20px;  pointer-events: none;" href="#hotels" data-toggle="tab"><span style="color: #fd9a00;" >2</span>  &nbsp; <span class="d-md-inline-flex d-none st-text"> les chambres </span></a></li>
                        <li class="nav-item" style="    border: 1px solid #e6e6e6;"><a class="nav-link stagefour" style="padding: 20px;  pointer-events: none;" href="#cruise" data-toggle="tab"><span style="color: #fd9a00;" >4</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">confirmation</span></a></li>
                    </ul>
                    <form action="{{ url('/demondhotel') }}" method="POST">
                        {{ csrf_field() }}
                    <div class="tab-content" style="    border: 1px solid #e6e6e6;">

                        <div id="flights" class="tab-pane in active">
                         
                                <div class="row">
                                    
                                    <h3>La demande</h3>  <br/> 
                                   <input type="hidden" name="idhotel" value="{{ $hotels->id }}" />
                                    
                                </div>
                              

                                <div class="row">

                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text" id="fromdate" onfocus="(this.type='date')" name="arrivedate" class="form-control" required placeholder="Date d'arrivée * " >

                                            <i class=" fa fa-calendar-o"></i>
                                        </div>
                                    </div><!-- end columns -->
                         
                                    
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text" id="todate" onfocus="(this.type='date')" name="departdate" class="form-control" required placeholder="date de départ  * " >

                                            <i class="fa fa-calendar-o"></i>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                                <div class="row">

                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="number" readonly name="night" id="nights" class="form-control" required placeholder="Nombre de nuits * " >
               
                                            <i class=" fa fa-tasks"></i>
                                            <span id="result"></span>
                                        </div>
                                    </div><!-- end columns -->
                         
                                    
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="number"  name="numberroms" id="numberroms" class="form-control numberroms" required placeholder="Nombre de chambres  * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                                <div class="row">

                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="number"  name="adult" id="adult" class="form-control" required placeholder="Nombre de adults * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                         
                                    
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="number"  name="chlid" id="chlid" class="form-control" required placeholder="Nombre d'enfants  * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                                    <div class="row">   
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                                        </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                        <button type="button" class="firstbtn btn btn-orange"> Suivant  </button>
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </form>
                        </div><!-- end flights -->
                        
          
                        <div id="hotels" class="tab-pane">
                      
                                <div class="row">
                                    
                                    <h3>Informations sur les chambres </h3>  <br/> 
                                  
                                    
                                </div>
                              

                                <div class=" roomss">
  
                                
                                    </div><!-- end columns -->
                            
                                    <div class="row">   
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                                            <h4> Prix total :  <span class="total">0<span> * <span class="numbernights">0<span> nights = <span class="totalnight">0<span>$</h4>
                                                <input type="hidden"  name="totalprice" id="totalhhhhhhprice" class="form-control" >

                                            </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                        <button type="button" class="secondbtn btn btn-orange"> Suivant  </button>
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                         
                        </div><!-- end flights -->
                        <div id="cruise" class="tab-pane">
                      
                            <div class="row">
                                
                                <h3>Confirmation </h3>  <br/> 
                              
                                
                            </div>
                            <div class="row">
                                <div style="border: 2px solid black;  padding: 5px; margin:10px;width: 100%;" >
                                    <div class="row" style="margin-left: 15px">
                                        <div class="col-md-6" >
                                    <p>Date d'arrivée : <span id="arrivéeconf"></span></p>
                            
                                    <p>Date de départ  : <span id="départconf"></span></p>
  
                                    <p>Nombre de nuits: <span id="nuitsconf"></span></p>
                                
                                </div>
                                <div class="col-md-6">
                             
                                    <p>Nombre de chambres: <span id="chambresconf"></span></p>
                                    <p>Nombre de adults : <span id="adultsconf"></span></p>
                                    <p>Nombre d'enfants  : <span id="enfantsconf"></span></p>
                                </div>
                                </div>
                                </div>
                            </div>
                            <div class="row comfirrooms">
                         
                            </div>
                            <div class="row">   
                                <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                                  <h4> Prix total :  <span class="total">0<span> * <span class="numbernights">0<span> nights = <span class="totalnight">0<span>$</h4>
                                </div><!-- end columns -->
                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                <button type="submit" class=" btn btn-orange"> Soumettre  </button>
                            </div><!-- end columns -->
                            
                        </div><!-- end row -->
                        </div>
          
                    </div><!-- end tab-content -->
                </form>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->
    
     </div><!-- end container -->
</section><!-- end page-cover -->
    <!--===== INNERPAGE-WRAPPER ====-->
    @php
      $x=0; 
    
    @endphp
    @foreach ($rooms as $room)
    @php
      $y=0; 
    $x=$x+1;    
    @endphp
              <input type="hidden" class="hotelroomservicefromid{{   $room->id }}"  value="{{ $room->type }}" />

          <input type="hidden" class="hotelroom{{  $x }}"  value="{{ $room->type }}" />
          <input type="hidden" class="hotelroomid{{  $x }}"  value="{{ $room->id }}" />
      @foreach ($roomservice as $roomserv)
      
      @if ($roomserv->roomid==$room->id)
      @php
      $y=$y+1;    
      @endphp
      <input type="hidden"  class="rooms{{ $room->id }}y{{ $y}}"  id="roomservice{{  $roomserv->id}}y{{ $y}}" value="{{ $roomserv->service }}" />
      <input type="hidden"  class="roomsserviceid{{ $room->id }}y{{ $y}}"  id="roomsserviceid{{  $roomserv->id}}y{{ $y}}" value="{{ $roomserv->id }}" />
      <input type="hidden"  class="serviceinputid{{ $roomserv->id}}"  value="{{ $roomserv->price }}" />
      <input type="hidden"  class=" {{ $roomserv->id}}"  value="{{ $roomserv->service }}" />

      @endif

         @endforeach
         <input type="hidden" id="county{{ $room->id }}" value="{{ $y }}" />

    @endforeach
    <input type="hidden" id="countx" value="{{ $x }}" />



@include('include.footer')

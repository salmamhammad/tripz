
@include('include.header')

<style>
  .text-gray-700{
  margin-top: 15px;    
  }
  span.dispo {
  font-size: 12px;
  font-weight: 600;
  color: #FFF;
  text-align: center;
  line-height: 20px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  width: 100px;
  display: block;
  background: #ff6600;
  box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
  position: absolute;
  top: 19px;
  left: -21px;
  }
  .box-item-flight .ribbon {
  position: absolute;
  left: -5px;
  top: -5px;
  z-index: 1;
  overflow: hidden;
  width: 75px;
  height: 75px;
  text-align: right;
}
.ribbon {
  padding: 0 20px;
  height: 30px;
  line-height: 30px;
  clear: left;
  position: absolute;
  top: 12px;
  left: -2px;
  color: #fff;
}
.box-item-flight .ribbon-front {
  background-color: #e12d2d;
  height: 30px;
  width: 165px;
  position: relative;
  left: 3px;
  z-index: 2;
  font: 16px/30px bold Verdana, Geneva, sans-serif;
  color: #f8f8f8;
  text-align: left;
  text-shadow: 0px 1px 2px #e12d2d;
  padding-left: 12px;
}

.box-item-flight .ribbon-edge-topleft {
  top: -5px;
  border-width: 5px 10px 0 0;
}
.box-item-flight .ribbon-edge-topright {
  top: 0px;
  border-width: 0px 0 0 10px;
}
.box-item-flight .ribbon-edge-bottomleft {
  border-width: 0 10px 0px 0;
}
.box-item-flight .ribbon-edge-bottomright {
  border-width: 0 0 5px 10px;
}
.box-item-flight .ribbon-wrapper {
  top: 90%;
  position: absolute;
  z-index: 998;
  left: -5px;
}
.box-item-flight{
    box-shadow: 5px 5px 5px #5e5e5e63;
}
.box-item-flight:hover{
    box-shadow: 10px 10px 5px #5e5e5e63;
}
    </style>
<!--=================== PAGE-COVER =================-->
<section class="page-cover" id="cover-flight-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">
                    Vols charters </h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">
                        Vols charters</li>
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
             
                
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 content-side">
                    <div class="row">
                   


                        @foreach ($flights as $flight)
                        @if ($flight->status!="Disable")  
                            <div class="col-md-12 category-content">  
                              <!-- if results  -->
                              <div class="box-item-flight mb-4">
                                <div class="bg-bleu-turq text-white px-3 py-2" style="background: #26b3f9;">
                                  <div class="row">
                                    <div class="col-12 col-md-7 col-sm-7">
                                      
                                        <h3 class="h5 mb-0">{{ $flight->name }}</h3>
                                      
                                    </div>
                                    <div class="col-12 col-md-5 col-sm-5 text-right">
                                        
                                          <div class="total fz-18 font-weight-bold">
                                            @if ($flight->direction=="Go_and_Return")
                                            Aller/Retour à partir de 
                                            @elseif ($flight->direction=="Go")
                                            Aller à partir de 
                                            @else
                                            Retour à partir de 
                                            @endif
                                         
                                            {{ $flight->adult }} DZD
                                          </div>
                                        
                                    </div>
                                  </div>
                                </div>
                                <div class="card" style="text-align: center">
                                  <div class="card-body p-0">
                                    <div class="ribbon"><span class="dispo">
                                        @if ($flight->place<=$flight->reserveplace)
                                        indisponible
                                        @else
                                        Disponible
                                        @endif
                                        </span></div>
                                        @if ($flight->direction=="Go_and_Return")
                                    <div class="bg-bleu-opac py-3 px-5" style="background: aliceblue;">
                                      <div class="row align-items-center">
                                        <div class="col-12 col-sm-2 col-md-2">
                                          Aller
                                        </div>
                                        <div class="col-12 col-md-2 col-sm-2">
                                          <span class="font-weight-500 text-primary">{{ $flight->departcity }} - {{ $flight->arrivecity }}</span>
                                          <p>{{ $flight->arrivedate }}</p>
                                        </div>
                                        <div class="col-12 col-md-3 col-sm-3">
                                          <p class="mb-1">Départ: {{ $flight->departtime }}</p>
                                          <p class="mb-1">Arrivée: {{ $flight->arrivetime }}</p>
                                        </div>
                                        <div class="col-12 col-md-3 col-sm-3">
                                            @foreach ($airlines as $airline)
                                            @if ($airline->id==$flight->airlineid)
                                            <img class="img-fluid" src="{{ asset('storage/app/public/'.$airline->img) }}">

                                            @endif
     
                                            @endforeach
                                        </div>
                                        <div class="col-12 col-md-2 col-sm-2">
                                          <p> Vol direct</p>
                                        </div>
                                      </div>
                                    </div>
                                    
                                      <div class="bg-white py-3 px-5">
                                        <div class="row align-items-center">
                                          <div class="col-12 col-md-2 col-sm-2">
                                            Retour
                                          </div>
                                          <div class="col-12 col-md-2 col-sm-2">
                                            <span class="font-weight-500 text-primary">{{ $flight->arrivecity }} - {{ $flight->departcity }}</span>
                                            <p>{{ $flight->departdate }}</p>
                                          </div>
                                          <div class="col-12 col-md-3 col-sm-3">
                                            <p class="mb-1">Départ: {{ $flight->departtime2 }}</p>
                                            <p class="mb-1">Arrivée: {{ $flight->arrivetime2 }}</p>
                                          </div>
                                          <div class="col-12 col-md-3 col-sm-3">
                                            @foreach ($airlines as $airline)
                                            @if ($airline->id==$flight->airlineid)
                                            <img class="img-fluid" src="{{ asset('storage/app/public/'.$airline->img) }}">

                                            @endif
     
                                            @endforeach                                          </div>
                                          <div class="col-12 col-md-2 col-sm-2">
                                            <p>Vol direct</p>
                                          </div>
                                        </div>
                                      </div>
                                      @elseif ($flight->direction=="Go")
                                      <div class="bg-bleu-opac py-3 px-5" style="background: aliceblue;">
                                        <div class="row align-items-center">
                                          <div class="col-12 col-sm-2 col-md-2">
                                            Aller
                                          </div>
                                          <div class="col-12 col-md-2 col-sm-2">
                                            <span class="font-weight-500 text-primary">Alger - Istanbul</span>
                                            <p>ven. 25/03/2022</p>
                                          </div>
                                          <div class="col-12 col-md-3 col-sm-3">
                                            <p class="mb-1">Départ: 10h00 Alger</p>
                                            <p class="mb-1">Arrivée: 15h30 Istanbul</p>
                                          </div>
                                          <div class="col-12 col-md-3 col-sm-3">
                                            @foreach ($airlines as $airline)
                                            @if ($airline->id==$flight->airlineid)
                                            <img class="img-fluid" src="{{ asset('storage/app/public/'.$airline->img) }}">

                                            @endif
     
                                            @endforeach                                           </div>
                                          <div class="col-12 col-md-2 col-sm-2">
                                            <p> Vol direct</p>
                                          </div>
                                        </div>
                                      </div>
                                      @else


                                  
                                      <div class="bg-white py-3 px-5">
                                        <div class="row align-items-center">
                                          <div class="col-12 col-md-2 col-sm-2">
                                            Retour
                                          </div>
                                          <div class="col-12 col-md-2 col-sm-2">
                                            <span class="font-weight-500 text-primary">{{ $flight->arrivecity }} - {{ $flight->departcity }}</span>
                                            <p>{{ $flight->departdate }}</p>
                                          </div>
                                          <div class="col-12 col-md-3 col-sm-3">
                                            <p class="mb-1">Départ: {{ $flight->departtime2 }}</p>
                                            <p class="mb-1">Arrivée: {{ $flight->arrivetime2 }}</p>
                                          </div>
                                          <div class="col-12 col-md-3 col-sm-3">
                                            @foreach ($airlines as $airline)
                                            @if ($airline->id==$flight->airlineid)
                                            <img class="img-fluid" src="{{ asset('storage/app/public/'.$airline->img) }}">

                                            @endif
     
                                            @endforeach                                           </div>
                                          <div class="col-12 col-md-2 col-sm-2">
                                            <p>Vol direct</p>
                                          </div>
                                        </div>
                                      </div>
                                    @endif
                  
                                    <div class="bg-white px-3 pb-3">
                                      
                                        <div class="ribbon-wrapper">
                                          <div class="ribbon-front">
                                            @if ($flight->place<=$flight->reserveplace)
                                            Complet !! !!
                                            @else
                                            {{$flight->place- $flight->reserveplace }}Places disponibles 
                                            @endif
                                          </div>
                                          <div class="ribbon-edge-topleft"></div>
                                          <div class="ribbon-edge-topright"></div>
                                          <div class="ribbon-edge-bottomleft"></div>
                                          <div class="ribbon-edge-bottomright"></div>
                                        </div>
                                      
                                      <div class="row justify-content-end">
                                        <div class="col-md-3 text-right bg-white px-3 py-2">
                                          <a rel="nofollow" href="{{ route('flightdemond',['id'=>$flight->id]) }}" class="btn btn-warning book btn-round-25 px-3 font-weight-500">Réserver</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endif
                            @endforeach

                    </div><!-- end row -->
                    
                    <div class="pages">
                        {{ $flights->links() }}
                    </div><!-- end pages -->
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end hotel-grid -->
</section><!-- end innerpage-wrapper -->



@include('include.footer')

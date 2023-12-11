
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
                <h1 class="page-title"> le nom du voyage : {{ $travel->name }} </h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">DOMICILE</a></li>
                    <li class="breadcrumb-item">Voyage</li>
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
                                    <a href="#"><img src="{{ url('storage/app/public/'.$travel->cover) }}" class="img-fluid" alt="detail-img"/></a>
                                    <div class="detail-title">
                                        <h4><a href="#">{{ $travel->name }}</a></h4>
                                     
                                    </div><!-- end detail-title -->
                                    
                                    <span class="detail-price"><h4>Dés {{ $travel->price }} DZD /pers <span></span></h4></span>

                                </div><!-- end detail-img -->
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>évaluation:</td>
                                                <td>
                                                    <div class="rating">
                                                        @php
                                                        $x=0;    
                                                        @endphp
                                                        @for ($i = 0; $i < $travel->rate; $i++)
                                                        <span><i class="fa fa-star "></i></span>
                                                   
                                                        @endfor
                                                      @if ($travel->rate<5)
                                                      @for ($i = $travel->rate; $i < 5; $i++)
                                                      <span><i class="fa fa-star-o"></i></span>
                                                 
                                                      @endfor
                                                          
                                                      @endif
                                                     
                                                    </div><!-- end rating -->
                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Emplacement</td>
                                                <td>{{ $travel->location }}</td>
                                            </tr>
                                            <tr>
                                                <td>l'information  </td>
                                                <td>{{ $travel->discrip }}</td>
                                            </tr>
                                           
                                           
                                        </tbody>
                                    </table>
                                </div><!-- end table-responsive -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->
                    
                        
                        
                    </div><!-- end row -->
                
                </div><!-- end columns -->
              
                <div class="col-12 col-md-12 col-lg-7 col-xl-8 content-side">
                    @php
                    $total=$adult+$childern+$babies;
                    $find=0;
                    foreach ($arrayage as $array) {
                        if($array>$travel->limitage){
                            $find=1;
                        }
                    }
                    @endphp
                    @if($travel->limitnum<$total)
                    <div  style="    border: 2px solid #f69e00;margin: 10px;
                    padding: 10px;">
                    Tarif sur demande ! Veuillez nous contacter par téléphone pour plus d'informations.
                </div>
                @elseif( $find==1)

                <div  style="    border: 2px solid #f69e00;margin: 10px;
                padding: 10px;">
                Tarif sur demande ! Veuillez nous contacter par téléphone pour plus d'informations.
            </div>
                    @else
                    
                    <form action="{{ url('/demondtravelinfor') }}" method="POST">
                        {{ csrf_field() }}
                    <h3>Votre Devis</h3>  <br/> 
                   <input type="hidden" name="idtravel" value="{{ $travel->id }}" />
                               
                <div class="row" style="background: #6eccfb;pading:5px ;padding-top:10px;margin-bottom:10px">
                               
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                        <h5>Forfait principal                        </h5>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6" style="float: right;
                    text-align: right;">
                    @php
                        $adultprice=0;
                        $childprice1=0;
                        $childprice2=0;
                        $babyprice=0;
                    @endphp
                      @foreach ($accommodations as $accommodation)
                      @if($accommodation->type=="Adulte")
                      @php
                           $adultprice=$accommodation->price;
                      @endphp
                      @endif
                      @if($accommodation->type=="Enfant12-6")
                      @php
                      $childprice1=$accommodation->price;
                 @endphp
                      @endif
                      @if($accommodation->type=="Enfantless6")
                      @php
                      $childprice2=$accommodation->price;
                 @endphp
                      @endif
                      @if($accommodation->type=="Bébé")
                      @php
                      $babyprice=$accommodation->price;
                 @endphp
                      @endif
                      @endforeach
                      @php
                          $numless6=0;
                          $nummore6=0;

                      @endphp
                            @foreach ($arrayage as $item)
                            @php
                                 if($item<6){
                                    $numless6=$numless6+1;
                                 }else{
                                    $nummore6=$nummore6+1;
                                 }
                            @endphp    
                           
                            @endforeach
                        
                        <h5 class="pricetravel">{{$adult*$adultprice + $numless6*$childprice2 +  $nummore6*$childprice1 +  $babyprice*$babies }} DZD
                        </h5>
                    </div>
                </div>
                <h4>Hébergement</h4>
                    <div class="row">
                               
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="hidden" id="adult" value="{{ $adult }}" />
                            <input type="hidden" id="childern" value="{{ $childern }}" />
                            <input type="hidden" id="babies" value="{{ $babies }}" />
 
                            <div class="form-group right-icon">
                          @foreach ($accommodations as $accommodation)
                          @if($accommodation->type=="chmabre")
                          <input type="hidden" class="priceacomnd{{  $accommodation->id  }}"  value="{{ $accommodation->price }}" />
                          <div style="display: block ruby;" >
                          <input type="radio"   name="accom" id="accom" onchange="getRating(this)"  value="{{ $accommodation->id }}" style="font-size: 2px;width: 20px;" class="form-control accom" required placeholder="Nombre de adults * " >
                          <label >{{ $accommodation->typeroom }} - Le prix : {{ $accommodation->price }}</label>
                          </div>
                          @endif
                          @endforeach
                           

                                
                            </div>
                            <hr/>
                        </div><!-- end columns -->
                    </div>
                    <h4>Offre</h4>
            <div class="row">
                               
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <input type="hidden" id="adult" name="adult"  value="{{ $adult }}" />
                    <input type="hidden" id="childern" name="childern" value="{{ $childern }}" />
                    <input type="hidden" id="babies" name="babies" value="{{ $babies }}" />
                    <input type="hidden" id="totalnum" value="{{ $adult+$childern+$babies }}" />

                    <div class="form-group right-icon">
                  @foreach ($offers as $offer)
             
                  <input type="hidden" class="priceoffer{{  $offer->id  }}"  value="{{ $offer->price }}" />
                  <div style="display: block ruby;" >
                  <input type="checkbox"   name="offer" id="offer" onchange="getprice(this)"  value="{{ $offer->id }}" style="font-size: 2px;width: 20px;" class="form-control offer" required placeholder="Nombre de adults * " >
                  <label >{{ $offer->name }} </label>
                  </div>
          
                  @endforeach
                      @if ($childern>0)
                      <h5>for {{$adult  }} adult and {{$childern  }}Enfants  - le prix :<span class="priceeoffer"></span></h5>  <br/> 

                      @else
                      <h5>for {{$adult  }} adult - le prix :<span class="priceeoffer"></span></h5>  <br/> 

                      @endif

                        <input type="hidden" id="priceeoffer" name="priceeoffer" value="0" />
                    </div>
                    <hr/>
                </div><!-- end columns -->
            </div>
                <div class="row" style="background: #f9bb5b;pading:5px ;padding-top:10px;margin-bottom:10px">
                               
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                        <h5>Frais d'inscription                    </h5>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6" style="float: right;
                    text-align: right;">
                        <h5><span class="applicationfee">{{$travel->applicationfee  }}</span> DZD
                        </h5>
                    </div>
                </div>

                <div class="row" style="background: #f9bb5b;pading:5px ;padding-top:10px;margin-bottom:10px">
                               
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                        <h5>Prix total TTC                     </h5>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6" style="float: right;
                    text-align: right;">
                        <h5 > <span class="totalprice">{{$adult*$adultprice + $numless6*$childprice2 +  $nummore6*$childprice1 +  $babyprice*$babies+ $travel->applicationfee}} </span> DZD
                        </h5>
                        <input type="hidden" id="totalprice" name="totalprice" value="{{$adult*$adultprice + $numless6*$childprice2 +  $nummore6*$childprice1 +  $babyprice*$babies+ $travel->applicationfee}}" />
                        <input type="hidden" id="travelid" name="travelid" value="{{$travel->id}}" />
                    </div>
                </div>
                   
                    <div class="row">   
                        <div class="col-6 col-md-6 col-lg-6 col-xl-6 search-btn">
                       <a href="{{ route('travelemond',['id'=>$travel->id]) }}">     <button type="button" class=" btn btn-danger" style="width: 200px; background: #b7b7b7;">   retourner  </button>
                       </a> </div><!-- end columns -->
                        
                        <div class="col-6 col-md-6 col-lg-6 col-xl-6 search-btn" style="text-align: right;">
                            <button type="submit" class=" btn btn-orange" style="width: 200px; ">   Voir le tarif  </button>
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                    </form>
                    @endif
                </div><!-- end columns -->

            </div><!-- end row -->
            
          
    </div><!-- end row -->
        </div><!-- end container -->         
    </div><!-- end flight-booking -->
</section><!-- end innerpage-wrapper -->

@include('include.footer')


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
                    
                    <form action="{{ url('/demondtravelfinition') }}" method="POST">
                        {{ csrf_field() }}
                    <h3>Votre Devis</h3>  <br/> 
                    <input type="hidden" name="iddemond" value="{{ $iddemond }}" />
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
                      
                         
                        
                        <h5 class="pricetravel">{{$totalprice}} DZD
                        </h5>
                    </div>
                </div>
                <h4>Vos coordonnées</h4>
                <div class="row">
                           
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group right-icon">
                            <input type="text" id="Civilit"  name="Civilit" class="form-control" required placeholder="Civilité* " >

                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group right-icon">
                            <input type="text" id="name"  name="name" class="form-control" required placeholder="Nom* " >
                            </div>
                    </div>
                   
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group right-icon">
                            <input type="email" id="email"  name="email" class="form-control" required placeholder="Votre e-mail*" >

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group right-icon">
                            <input type="text" id="Mobile"  name="Mobile" class="form-control" required placeholder="Mobile* " >

                        </div>
                       
                    </div>
                    <p>(pour y recevoir un e-mail de confirmation)</p>
                </div>
                <hr/>

                <h4>Occupation</h4>
                    <div class="row">
                               
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="hidden" id="adult" value="{{ $adult }}" />
                            <input type="hidden" id="childern" value="{{ $childern }}" />
                            <input type="hidden" id="babies" value="{{ $babies }}" />
                       
                            @for ($i = 1; $i <= $adult; $i++)
                            <h5>adulte {{ $i }}</h5>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-group right-icon">
                                        <input type="text" id="adultetype{{ $i }}"  name="adultetype{{ $i }}" class="form-control" required placeholder="Civilité* " >
            
                                    </div>
                                </div>  
                           <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group right-icon">
                                <input type="text" id="adultefname{{ $i }}"  name="adultefname{{ $i }}" class="form-control" required placeholder="Nom* " >
    
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group right-icon">
                                <input type="text" id="lname{{ $i }}"  name="adultelname{{ $i }}" class="form-control" required placeholder="Prénom* " >
    
                            </div>
                        </div>
                    </div>
                           @endfor
                           @for ($i = 1; $i <= $childern; $i++)
                           <h5>Enfants {{ $i }}</h5>
                           <div class="row">
                              
                               <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                           <div class="form-group right-icon">
                               <input type="text" id="fname{{ $i }}"  name="Enfantsfname{{ $i }}" class="form-control" required placeholder="Nom* " >
   
                           </div>
                       </div>
                       <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                           <div class="form-group right-icon">
                               <input type="text" id="lname{{ $i }}"  name="Enfantslname{{ $i }}" class="form-control" required placeholder="Prénom* " >
   
                           </div>
                       </div>
                       <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group right-icon">
                            <input type="date" id="bith{{ $i }}"  name="Enfantsbith{{ $i }}" class="form-control" required placeholder="Naissance* " >

                        </div>
                    </div>
                   </div>
                          @endfor
                          @for ($i = 1; $i <= $babies; $i++)
                          <h5>babies {{ $i }}</h5>
                          <div class="row">
                            
                              <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                          <div class="form-group right-icon">
                              <input type="text" id="fname{{ $i }}"  name="babiesfname{{ $i }}" class="form-control" required placeholder="Nom* " >
  
                          </div>
                      </div>
                      <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                          <div class="form-group right-icon">
                              <input type="text" id="lname{{ $i }}"  name="babieslname{{ $i }}" class="form-control" required placeholder="Prénom* " >
  
                          </div>
                      </div>
                      <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                       <div class="form-group right-icon">
                           <input type="date" id="bith{{ $i }}"  name="babiesbith{{ $i }}" class="form-control" required placeholder="Naissance* " >

                       </div>
                   </div>
                  </div>
                         @endfor
                            </div>
                            <hr/>
                        </div><!-- end columns -->
            
                    <h4>Mode de paiement</h4>
            <div class="row">
                               
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <input type="hidden" id="adult" name="adult"  value="{{ $adult }}" />
                    <input type="hidden" id="childern" name="childern" value="{{ $childern }}" />
                    <input type="hidden" id="babies" name="babies" value="{{ $babies }}" />
                    <input type="hidden" id="totalnum" value="{{ $adult+$childern+$babies }}" />

                    <div class="form-group right-icon">
                        <h5>Agence</h5>
                  @foreach ($typepayments as $typepayment)
             @if ( $typepayment->type=="agence")
           
             <div style="display: block ruby;" >
                <input type="radio"   name="typepayment" id="typepayment"  value="{{ $typepayment->id }}" style="font-size: 2px;width: 20px;" class="form-control offer" required placeholder="Nombre de adults * " >
                <label >{{ $typepayment->text }} </label>
                </div>
           
             @endif
                
                  @endforeach
                  <h5>Bancaire</h5>
                  @foreach ($typepayments as $typepayment)
                  @if ( $typepayment->type=="bancaire")
                
                  <div style="display: block ruby;" >
                     <input type="radio"   name="typepayment" id="typepayment"  value="{{ $typepayment->id }}" style="font-size: 2px;width: 20px;" class="form-control offer" required placeholder="Nombre de adults * " >
                     <label >{{ $typepayment->text }} </label>
                     </div>
                
                  @endif
                     
                       @endforeach
                        <input type="hidden" id="priceeoffer" name="priceeoffer" value="0" />
                    </div>
                    <hr/>
                </div><!-- end columns -->
            </div>
            <h4> Demande particulière (Non Garantie)</h4>
            <div class="row">
                               
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                  <textarea   class="form-control" id="note" name="note" value="" ></textarea>
                    </div>
                    <hr/>
                </div><!-- end columns -->
          
                <div class="row" >
                               
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12" style="display: block ruby;">
                        <input type="checkbox"   name="checkbox" id="checkbox"  style="font-size: 2px;width: 20px;" class="form-control offer" required placeholder="Nombre de adults * " >
                        Veuillez cocher la case pour confirmer avoir lu et accepté 
                    </div>
                          
                 
                </div>

              
                   <br/><br/>
                    <div class="row">   
                      
                        <div class="col-6 col-md-6 col-lg-6 col-xl-6 search-btn" style="text-align: right;">
                            <button type="submit" class=" btn btn-orange" style="width: 200px; ">   Voir le tarif  </button>
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                    </form>
                 
                </div><!-- end columns -->

            </div><!-- end row -->
            
          
    </div><!-- end row -->
        </div><!-- end container -->         
    </div><!-- end flight-booking -->
</section><!-- end innerpage-wrapper -->

@include('include.footer')

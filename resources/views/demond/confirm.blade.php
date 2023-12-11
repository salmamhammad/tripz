
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
 
    <!--================ PAGE-COVER ===============-->
    <section class="page-cover" id="cover-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Visa</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">DOMICILE</a></li>
                        <li class="breadcrumb-item">Visa</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->
    <section class="flexslider-container" id="flexslider-container-1">
    <div class="search-tabs" id="search-tabs-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                
                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav-item active"><a class="nav-link stageone" style="padding: 20px;pointer-events: none;" href="#flights" data-toggle="tab"><span style="color: #fd9a00;" >1</span>  &nbsp;  <span class="d-md-inline-flex d-none st-text">la demande</span></a></li>
                        <li class="nav-item"><a class="nav-link stagetwo" style="padding: 20px;pointer-events: none;" href="#hotels" data-toggle="tab"><span style="color: #fd9a00;" >2</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">l'information</span></a></li>
                        <li class="nav-item"><a class="nav-link stagethree" style="padding: 20px;pointer-events: none;" href="#tours" data-toggle="tab"><span style="color: #fd9a00;" >3</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">les conditions</span></a></li>
                        <li class="nav-item"><a class="nav-link stagefour" style="padding: 20px;pointer-events: none;" href="#cruise" data-toggle="tab"><span style="color: #fd9a00;" >4</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">confirmation</span></a></li>
                    </ul>

                    <div class="tab-content">

                        <div id="cruise" class="tab-pane  in active">
                            <form  action="{{ url('/submit') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    
                                    <h3>Confirmation</h3>  <br/> 
                                 
                                    
                                </div><!-- end columns -->
                                <div class="row">
                                    
                                    <h5>la demande</h5>  <br/> 
                                 
                                    
                                </div><!-- end columns -->
                                <div class="row">
                                <div style="border: 2px solid black;  padding: 5px; margin:10px;width: 100%;" >
                                    <div class="row" style="margin-left: 15px">
                                        <div class="col-md-6" >
                                    <p>Pays: <span id="paysconf">{{ $demond->country }}</span></p>
                            
                                    <p>Types de visas : <span id="visasconf">{{ $visatype->type }}</span></p>
  
                                    <p>Nombre de personne: <span id="nompersonconf">{{ $demond->numberfamily }}</span></p>
                                
                                </div>
                                <div class="col-md-6">
                             
                                    <p>Nationalité: <span id="nationalitéconf">{{ $demond->nationality }}</span></p>
                                    <p>Date d'arrivée: <span id="datearriveconf">{{ $demond->datearrive }}</span></p>
                                    <p>Documents de voyage: <span id="docvoyageconf">{{ $demond->docvoyager }}</span></p>
                                </div>
                                </div>
                                </div>
                            </div>
                                <div class="row">
                                    
                                    <h5>l'information</h5>  <br/> 
                                </div><!-- end columns -->
                                    
                                    
                                <div class="row">

                                <div style="border: 2px solid black;  padding: 5px; margin:10px; width: 100%;" >
                                    <div class="conferminformtaiton" style="margin-left: 15px">
                                        @php
                                            $x=0;
                                        @endphp
                                    @foreach ($participants as $participant)
                                    @php
                                         $x=$x+1;
                                    @endphp
                                      <div class="row " >
                                         <h5>Participant {{ $x }}</h5>  <br/> 
                                         </div>
                                        <div class="row">
                                           <div class="col-6 col-md-6 col-lg-6">
                                                 <div class="form-group right-icon">
                                                         <p>Prénom : <span>{{ $participant->fname }}</span></p>
                                                         </div>
                                                    </div><!-- end columns -->
                                                <div class="col-6 col-md-6 col-lg-6">
                                                  <div class="form-group right-icon">
                                                 <div class="form-group right-icon">
                                                         <p>Nom : <span>{{ $participant->lname }}</span></p> 
                                                            </div>
                                                              </div>
                                                        </div><!-- end columns -->
                                                </div><!-- end row -->
                                                 <div class="row">
                                                 <div class="col-6 col-md-6 col-lg-6">
                                                 <div class="form-group right-icon">
                                                     <p>Numéro de passeport : <span>{{ $participant->passportnum }}</span></p>             
                                                          </div>
                                                     </div><!-- end columns -->
                                                <div class="col-6 col-md-6 col-lg-6">
                                                 <div class="form-group right-icon">
                                                       <div class="form-group right-icon">
                                                         <p>Date de naissance : <span>{{ $participant->datebirth }}</span></p>              
                                                           </div>
                                                           </div>
                                                           </div><!-- end columns -->
                                                          </div><!-- end row -->
                                                          <div class="row">
                                                                <div class="col-6 col-md-6 col-lg-6">
                                                <div class="form-group right-icon">
                                                     <p>Lieu de naissance : <span>{{ $participant->locationbirth }}</span></p>
                                                           </div>
                                                        </div><!-- end columns -->
                                               <div class="col-6 col-md-6 col-lg-6">
                                                  <div class="form-group right-icon">
                                                     <div class="form-group right-icon">
                                                         <p>Date expirée: <span>{{ $participant->dateexpired  }}</span></p> 
                                                         </div>
                                                          </div>
                                                         </div><!-- end columns -->
                                                </div><!-- end row -->
                                                <div class="row">
                                                 <div class="col-6 col-md-6 col-lg-6">
                                                    <div class="form-group right-icon">
                                                         <p>E-mail: <span>{{ $participant->email  }}</span></p> 
                                                          </div>
                                                         </div><!-- end columns -->
                                               <div class="col-6 col-md-6 col-lg-6">
                                                  <div class="form-group right-icon">
                                                    <div class="form-group right-icon">
                                                         <p>Date d\'émission: <span>{{ $participant->daterelease  }}</span></p>
                                                            </div>
                                                      </div>
                                                             </div><!-- end columns -->
                                                            </div><!-- end row -->
                                            <div class="row">
                                                 <div class="col-12 col-md-12 col-lg-12">
                                                      <div class="form-group right-icon">
                                                         <div class="form-group right-icon">
                                                             <p>Adresse de recidence: <span>{{ $participant->address  }}</span></p>
                                                                   </div>
                                                                 </div>
                                                                  </div><!-- end columns -->
                                                                   </div><!-- end row -->
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                    
                                    <h5>Les conditions</h5>  <br/> 
                                    
                                </div><!-- end columns -->
                                <div class="row">
                                <div style="border: 2px solid black;  padding: 5px; margin:10px;width: 100%;" >
                                    @foreach ($visaconditions as $visacondition)
                                     
                                    <div class="row visacondition{{ $visacondition->countriesid }}" style="margin-left: 20px;">
                                        <p><span style="color: #faa61a" class="fa fa-star"></span> {{ $visacondition->text }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                                <div class="row">
                                    
                                    <h5>Sommaire </h5>  <br/> 
                                    
                                </div><!-- end columns -->
                                <div class="row">
                                <div style="border: 2px solid black;  padding: 5px; margin:10px;width: 100%;" >
                                    <p  style="margin-left: 15px">Prix total : <span id="totalconfirm">{{ $pricevisa }}</span></p>
                                  
                                </div>
                            </div>
                                <div class="row search-btn">
                                    <input type="hidden" id="demondidsubmit" name="demondidsubmit" value="{{ $id }}" />

                                    <button class="btn btn-orange  " style="background-color:rgb(65, 185, 41)"> soumettre  </button>
                                </div><!-- end columns -->
                            </form>
                        </div><!-- end cruises -->

                 
                        
                    </div><!-- end tab-content -->
                    
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->
    
     </div><!-- end container -->
    </section><!-- end page-cover -->
@include('include.footer')
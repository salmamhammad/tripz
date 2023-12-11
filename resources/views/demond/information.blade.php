
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
                        <li class="nav-item "><a class="nav-link stageone" style="padding: 20px;pointer-events: none;" href="#flights" data-toggle="tab"><span style="color: #fd9a00;" >1</span>  &nbsp;  <span class="d-md-inline-flex d-none st-text">la demande</span></a></li>
                        <li class="nav-item active"><a class="nav-link stagetwo" style="padding: 20px;pointer-events: none;" href="#hotels" data-toggle="tab"><span style="color: #fd9a00;" >2</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">l'information</span></a></li>
                        <li class="nav-item"><a class="nav-link stagethree" style="padding: 20px;pointer-events: none;" href="#tours" data-toggle="tab"><span style="color: #fd9a00;" >3</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">les conditions</span></a></li>
                        <li class="nav-item"><a class="nav-link stagefour" style="padding: 20px;pointer-events: none;" href="#cruise" data-toggle="tab"><span style="color: #fd9a00;" >4</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">confirmation</span></a></li>
                    </ul>

                    <div class="tab-content">

                        
                        <div id="hotels" class="tab-pane  in active">
                            <form  action="{{ url('/participant') }}" method="POST"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                           <h3>  L'information </h3>  <br/> 
                                          </div>
                                          <input type="hidden" id="demondid"  name="demondid" value="{{ $id }}" />
                                          <input type="hidden" id="visacountry" name="visacountry" value="{{ $visacountry }}" />
                                          {{-- <input type="hidden" id="visaidarray" name="visaidarray"  value="{{ $visaidarray }}" /> --}}
                                          <input type="hidden" id="numberfamily"  name="numberfamily"  value="{{ $numberfamily }}" />
                                          <input type="hidden" id="pricevisa"  name="pricevisa"  value="{{ $pricevisa }}" />
                              
   
                                          <div class="">




                                                @for ($i = 1; $i <= $numberfamily; $i++) 
 
                                                   <div class="row " >
                                                    <h4>Participant {{ $i }}</h4>  <br/> 
                                                    </div>
                                                    <div class="row">
                                                     <div class="col-6 col-md-6 col-lg-6">
                                                              <div class="form-group right-icon">
                                                                     <input type="text" name="fname{{ $i }}" class="form-control" placeholder="prénom * " required >
                                                                       <i class=" fa fa-address-book"></i>
                                                                     </div>
                                                            </div><!-- end columns -->
                                                            <div class="col-6 col-md-6 col-lg-6">
                                                              <div class="form-group right-icon">
                                                                 <div class="form-group right-icon">
                                                                     <input type="text" name="lname{{ $i }}" class="form-control" placeholder="Nom * "  required>
                                                                       <i class=" fa fa-address-book"></i>    
                                                                         </div>
                                                                          </div>
                                                                    </div><!-- end columns -->
                                                             </div><!-- end row -->
                                                             <div class="row">
                                                             <div class="col-6 col-md-6 col-lg-6">
                                                             <div class="form-group right-icon">
                                                                     <input type="text" name="passport{{ $i }}" class="form-control" placeholder="numéro de passeport  * " required>
                                                                       <i class="fa fa-address-card"></i>    
                                                                    </div>
                                                                  </div><!-- end columns -->
                                                            <div class="col-6 col-md-6 col-lg-6">
                                                            <div class="form-group right-icon">
                                                                <div class="form-group right-icon">
                                                                    <input type="text" onfocus="(this.type='date')" name="birthdate{{ $i }}" class="form-control" required placeholder="date de naissance * " >       
                                                                       <i class=" fa fa-calendar-o"></i>
                                                                       </div>
                                                                       </div>
                                                                       </div><!-- end columns -->
                                                                      </div><!-- end row -->
                                                                      <div class="row">
                                                                           <div class="col-6 col-md-6 col-lg-6">
                                                             <div class="form-group right-icon">
                                                                     <input type="text" name="locationbirth{{ $i }}" class="form-control" placeholder="Lieu de naissance * " required>
                                                                       <i class="fa fa-map-marker"></i>
                                                                       </div>
                                                                    </div><!-- end columns -->
                                                           <div class="col-6 col-md-6 col-lg-6">
                                                              <div class="form-group right-icon">
                                                                 <div class="form-group right-icon">
                                                                    <input type="text" onfocus="(this.type='date')" name="expireddate{{ $i }}" class="form-control" required placeholder="date expirée  * " >
                                                                       <i class=" fa fa-calendar-o"></i>
                                                                     </div>
                                                                      </div>
                                                                     </div><!-- end columns -->
                                                            </div><!-- end row -->
                                                            <div class="row">
                                                             <div class="col-6 col-md-6 col-lg-6">
                                                                <div class="form-group right-icon">
                                                                      <input type="email" name="email{{ $i }}" class="form-control" placeholder="E-mail * " required>
                                                                     <i class=" 	fa fa-envelope"></i>
                                                                      </div>
                                                                     </div><!-- end columns -->
                                                           <div class="col-6 col-md-6 col-lg-6">
                                                             <div class="form-group right-icon">
                                                                <div class="form-group right-icon">
                                                                       <input type="text" onfocus="(this.type='date')" name="releaseddate{{ $i }}" class="form-control" required placeholder="Date d'émission   * " >
                                                                        <i class=" 	 	fa fa-calendar-o"></i>
                                                                        </div>
                                                                   </div>
                                                                  </div><!-- end columns -->
                                                                        </div><!-- end row -->
                                                        <div class="row">
                                                             <div class="col-12 col-md-12 col-lg-12">
                                                              <div class="form-group right-icon">
                                                                 <div class="form-group right-icon">
                                                                          <textarea  name="addressres{{ $i }}" class="form-control" placeholder="Adresse de recidence  * "  required></textarea>
                                                                         </div>
                                                                             </div>
                                                                              </div><!-- end columns -->
                                                                               </div><!-- end row -->
                                                                             <div class="row " >
                                                                        <h5>Documents é téléchargé </h5>  <br/> <br/> </div>
                                                                          <div class="docvisa" >
                                                                              @php
                                                                                  $count=0;
                                                                              @endphp
                                                    @foreach ($visadoc as $vd)
                                                    @php
                                                          $count=$count+1; 
                                                    @endphp
                                                 
                                               <div class="col-md-12" style="margin-left:10px">
                                                <label>{{ $vd }}</label><br><input type="file" name="file{{ $count }}{{ $i }}" required/></div>
                                                    
                                                    @endforeach
                                                                            </div>
                                                 <input type="hidden" id="length" name="length" value="{{ $count }}" />

                                                    
                                                @endfor
                                                   
                                              </div>
                                        
                                            
                                
                                      
                                        <div class="row">
                                    
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                        <button type="submit" class="btn btn-orange  "> Suivant  </button>
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </form>
                        </div><!-- end hotels -->

                       
                        
                    </div><!-- end tab-content -->
                    
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->
    
     </div><!-- end container -->
    </section><!-- end page-cover -->
@include('include.footer')
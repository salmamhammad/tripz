
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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                        <li class="nav-item active"><a class="nav-link stageone" style="padding: 20px;" href="#flights" data-toggle="tab"><span style="color: #fd9a00;" >1</span>  &nbsp;  <span class="d-md-inline-flex d-none st-text">la demande</span></a></li>
                        <li class="nav-item"><a class="nav-link stagetwo" style="padding: 20px;" href="#hotels" data-toggle="tab"><span style="color: #fd9a00;" >2</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">l'information</span></a></li>
                        <li class="nav-item"><a class="nav-link stagethree" style="padding: 20px;" href="#tours" data-toggle="tab"><span style="color: #fd9a00;" >3</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">les conditions</span></a></li>
                        <li class="nav-item"><a class="nav-link stagefour" style="padding: 20px;" href="#cruise" data-toggle="tab"><span style="color: #fd9a00;" >4</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">confirmation</span></a></li>
                    </ul>

                    <div class="tab-content">

                        <div id="flights" class="tab-pane in active">
                            <form action="{{ url('/demond') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    
                                    <h3>La demande</h3>  <br/> 
                                 
                                    
                                </div>
                                <div class="row">
                                
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <select class="form-control country" name="country">
                                                <option selected>Pays *</option>
                                                @foreach ($countries as $country)
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                                @endforeach
                                        
                                               
                                            </select>
                                            <i class="fa fa-building-o"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    @foreach ($visas as $visa)
                                    <input type="hidden" style="display: none"  id="visacoun{{ $visa->id }}" value="{{ $visa->type }}" />
                                    @endforeach
                                    
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <select class="form-control visass" disabled name="visass"  id="visass">
                                                <option selected>   Types de visas *</option>
                                                @foreach ($countries as $country)
                                                @foreach ($visas as $visa)
                                                @if($country->visaid==$visa->id)
                                                @if($country->status=='Enable')
                                                <option style="display: none"  class="{{ $country->name }} visacountry" value="{{ $visa->id }}">{{ $visa->type }}</option>
                                                 @endif
                                                 @endif
                                                @endforeach
                                                @endforeach
                                               
                                            </select>
                                            <i class="fa fa-home"></i>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->

                                <div class="row">

                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="number" name="numberfamily" class="form-control" placeholder="nombre de personne *" >

                                            <i class="fa fa-users"></i>
                                        </div>
                                    </div><!-- end columns -->
                         
                                    
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <select name="nationality" class="form-control">
                                                <option value="" selected> Nationalité *</option>
                                                <option value="afghan">Afghan</option>
                                                <option value="albanian">Albanian</option>
                                                <option value="algerian">Algerian</option>
                                                <option value="american">American</option>
                                                <option value="andorran">Andorran</option>
                                                <option value="angolan">Angolan</option>
                                                <option value="antiguans">Antiguans</option>
                                                <option value="argentinean">Argentinean</option>
                                                <option value="armenian">Armenian</option>
                                                <option value="australian">Australian</option>
                                                <option value="austrian">Austrian</option>
                                                <option value="azerbaijani">Azerbaijani</option>
                                                <option value="bahamian">Bahamian</option>
                                                <option value="bahraini">Bahraini</option>
                                                <option value="bangladeshi">Bangladeshi</option>
                                                <option value="barbadian">Barbadian</option>
                                                <option value="barbudans">Barbudans</option>
                                                <option value="batswana">Batswana</option>
                                                <option value="belarusian">Belarusian</option>
                                                <option value="belgian">Belgian</option>
                                                <option value="belizean">Belizean</option>
                                                <option value="beninese">Beninese</option>
                                                <option value="bhutanese">Bhutanese</option>
                                                <option value="bolivian">Bolivian</option>
                                                <option value="bosnian">Bosnian</option>
                                                <option value="brazilian">Brazilian</option>
                                                <option value="british">British</option>
                                                <option value="bruneian">Bruneian</option>
                                                <option value="bulgarian">Bulgarian</option>
                                                <option value="burkinabe">Burkinabe</option>
                                                <option value="burmese">Burmese</option>
                                                <option value="burundian">Burundian</option>
                                                <option value="cambodian">Cambodian</option>
                                                <option value="cameroonian">Cameroonian</option>
                                                <option value="canadian">Canadian</option>
                                                <option value="cape verdean">Cape Verdean</option>
                                                <option value="central african">Central African</option>
                                                <option value="chadian">Chadian</option>
                                                <option value="chilean">Chilean</option>
                                                <option value="chinese">Chinese</option>
                                                <option value="colombian">Colombian</option>
                                                <option value="comoran">Comoran</option>
                                                <option value="congolese">Congolese</option>
                                                <option value="costa rican">Costa Rican</option>
                                                <option value="croatian">Croatian</option>
                                                <option value="cuban">Cuban</option>
                                                <option value="cypriot">Cypriot</option>
                                                <option value="czech">Czech</option>
                                                <option value="danish">Danish</option>
                                                <option value="djibouti">Djibouti</option>
                                                <option value="dominican">Dominican</option>
                                                <option value="dutch">Dutch</option>
                                                <option value="east timorese">East Timorese</option>
                                                <option value="ecuadorean">Ecuadorean</option>
                                                <option value="egyptian">Egyptian</option>
                                                <option value="emirian">Emirian</option>
                                                <option value="equatorial guinean">Equatorial Guinean</option>
                                                <option value="eritrean">Eritrean</option>
                                                <option value="estonian">Estonian</option>
                                                <option value="ethiopian">Ethiopian</option>
                                                <option value="fijian">Fijian</option>
                                                <option value="filipino">Filipino</option>
                                                <option value="finnish">Finnish</option>
                                                <option value="french">French</option>
                                                <option value="gabonese">Gabonese</option>
                                                <option value="gambian">Gambian</option>
                                                <option value="georgian">Georgian</option>
                                                <option value="german">German</option>
                                                <option value="ghanaian">Ghanaian</option>
                                                <option value="greek">Greek</option>
                                                <option value="grenadian">Grenadian</option>
                                                <option value="guatemalan">Guatemalan</option>
                                                <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                <option value="guinean">Guinean</option>
                                                <option value="guyanese">Guyanese</option>
                                                <option value="haitian">Haitian</option>
                                                <option value="herzegovinian">Herzegovinian</option>
                                                <option value="honduran">Honduran</option>
                                                <option value="hungarian">Hungarian</option>
                                                <option value="icelander">Icelander</option>
                                                <option value="indian">Indian</option>
                                                <option value="indonesian">Indonesian</option>
                                                <option value="iranian">Iranian</option>
                                                <option value="iraqi">Iraqi</option>
                                                <option value="irish">Irish</option>
                                                <option value="israeli">Israeli</option>
                                                <option value="italian">Italian</option>
                                                <option value="ivorian">Ivorian</option>
                                                <option value="jamaican">Jamaican</option>
                                                <option value="japanese">Japanese</option>
                                                <option value="jordanian">Jordanian</option>
                                                <option value="kazakhstani">Kazakhstani</option>
                                                <option value="kenyan">Kenyan</option>
                                                <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                <option value="kuwaiti">Kuwaiti</option>
                                                <option value="kyrgyz">Kyrgyz</option>
                                                <option value="laotian">Laotian</option>
                                                <option value="latvian">Latvian</option>
                                                <option value="lebanese">Lebanese</option>
                                                <option value="liberian">Liberian</option>
                                                <option value="libyan">Libyan</option>
                                                <option value="liechtensteiner">Liechtensteiner</option>
                                                <option value="lithuanian">Lithuanian</option>
                                                <option value="luxembourger">Luxembourger</option>
                                                <option value="macedonian">Macedonian</option>
                                                <option value="malagasy">Malagasy</option>
                                                <option value="malawian">Malawian</option>
                                                <option value="malaysian">Malaysian</option>
                                                <option value="maldivan">Maldivan</option>
                                                <option value="malian">Malian</option>
                                                <option value="maltese">Maltese</option>
                                                <option value="marshallese">Marshallese</option>
                                                <option value="mauritanian">Mauritanian</option>
                                                <option value="mauritian">Mauritian</option>
                                                <option value="mexican">Mexican</option>
                                                <option value="micronesian">Micronesian</option>
                                                <option value="moldovan">Moldovan</option>
                                                <option value="monacan">Monacan</option>
                                                <option value="mongolian">Mongolian</option>
                                                <option value="moroccan">Moroccan</option>
                                                <option value="mosotho">Mosotho</option>
                                                <option value="motswana">Motswana</option>
                                                <option value="mozambican">Mozambican</option>
                                                <option value="namibian">Namibian</option>
                                                <option value="nauruan">Nauruan</option>
                                                <option value="nepalese">Nepalese</option>
                                                <option value="new zealander">New Zealander</option>
                                                <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                <option value="nicaraguan">Nicaraguan</option>
                                                <option value="nigerien">Nigerien</option>
                                                <option value="north korean">North Korean</option>
                                                <option value="northern irish">Northern Irish</option>
                                                <option value="norwegian">Norwegian</option>
                                                <option value="omani">Omani</option>
                                                <option value="pakistani">Pakistani</option>
                                                <option value="palauan">Palauan</option>
                                                <option value="panamanian">Panamanian</option>
                                                <option value="papua new guinean">Papua New Guinean</option>
                                                <option value="paraguayan">Paraguayan</option>
                                                <option value="peruvian">Peruvian</option>
                                                <option value="polish">Polish</option>
                                                <option value="portuguese">Portuguese</option>
                                                <option value="qatari">Qatari</option>
                                                <option value="romanian">Romanian</option>
                                                <option value="russian">Russian</option>
                                                <option value="rwandan">Rwandan</option>
                                                <option value="saint lucian">Saint Lucian</option>
                                                <option value="salvadoran">Salvadoran</option>
                                                <option value="samoan">Samoan</option>
                                                <option value="san marinese">San Marinese</option>
                                                <option value="sao tomean">Sao Tomean</option>
                                                <option value="saudi">Saudi</option>
                                                <option value="scottish">Scottish</option>
                                                <option value="senegalese">Senegalese</option>
                                                <option value="serbian">Serbian</option>
                                                <option value="seychellois">Seychellois</option>
                                                <option value="sierra leonean">Sierra Leonean</option>
                                                <option value="singaporean">Singaporean</option>
                                                <option value="slovakian">Slovakian</option>
                                                <option value="slovenian">Slovenian</option>
                                                <option value="solomon islander">Solomon Islander</option>
                                                <option value="somali">Somali</option>
                                                <option value="south african">South African</option>
                                                <option value="south korean">South Korean</option>
                                                <option value="spanish">Spanish</option>
                                                <option value="sri lankan">Sri Lankan</option>
                                                <option value="sudanese">Sudanese</option>
                                                <option value="surinamer">Surinamer</option>
                                                <option value="swazi">Swazi</option>
                                                <option value="swedish">Swedish</option>
                                                <option value="swiss">Swiss</option>
                                                <option value="syrian">Syrian</option>
                                                <option value="taiwanese">Taiwanese</option>
                                                <option value="tajik">Tajik</option>
                                                <option value="tanzanian">Tanzanian</option>
                                                <option value="thai">Thai</option>
                                                <option value="togolese">Togolese</option>
                                                <option value="tongan">Tongan</option>
                                                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                <option value="tunisian">Tunisian</option>
                                                <option value="turkish">Turkish</option>
                                                <option value="tuvaluan">Tuvaluan</option>
                                                <option value="ugandan">Ugandan</option>
                                                <option value="ukrainian">Ukrainian</option>
                                                <option value="uruguayan">Uruguayan</option>
                                                <option value="uzbekistani">Uzbekistani</option>
                                                <option value="venezuelan">Venezuelan</option>
                                                <option value="vietnamese">Vietnamese</option>
                                                <option value="welsh">Welsh</option>
                                                <option value="yemenite">Yemenite</option>
                                                <option value="zambian">Zambian</option>
                                                <option value="zimbabwean">Zimbabwean</option>
                                              </select>
                                            <i class="fa fa-university"></i>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                                <div class="row">

                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text" onfocus="(this.type='date')" name="datearrive" class="form-control" placeholder="Date d'arrivée * " >

                                            <i class=" 	fa fa-space-shuttle"></i>
                                        </div>
                                    </div><!-- end columns -->
                         
                                    
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <select class="form-control" name="docvoyager">
                                                <option selected>   documents de voyage*  </option>
                                         
                                                <option value="passport"> passport  </option>
                                               
                                            </select>
                                            <i class="fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                                    <div class="row">   
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                                        </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                        <button class="btn btn-orange  demond"> Suivant  </button>
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </form>
                        </div><!-- end flights -->
                        
                        <div id="hotels" class="tab-pane">
                            <form  action="{{ url('/participant') }}" method="POST"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                           <h3>  L'information </h3>  <br/> 
                                          </div>
                                          <input type="hidden" id="demondid" value="" />
                                          <input type="hidden" id="visacountry" value="" />
                                          <input type="hidden" id="visaidarray" value="" />
                                              <div class="particpanssssssssts"></div>
                                        
                                            
                                
                                      
                                        <div class="row">
                                    
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                        <button type="button" class="btn btn-orange  informationbbb"> Suivant  </button>
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </form>
                        </div><!-- end hotels -->

                        <div id="tours" class="tab-pane">
                            <form  action="{{ url('/conditions') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <h3>Les conditions </h3>  <br/> 
                                </div>
                                <div class="conditions">
                                    
                                        @foreach ($visaconditions as $visacondition)
                                     
                                        <div class="row visacondition{{ $visacondition->countriesid }}" style="display: none;">
                                            <p><span style="color: #faa61a" class="fa fa-star"></span> {{ $visacondition->text }}</p>
                                        </div>
                                        @endforeach
                                        <div class="form-group right-icon">
                                            <input type="checkbox" name="conditionaccept" value="true" style="height: 20px;"  /> <span> J'accepte les conditions ci-dessus </span> <br>
                                           
                                        </div>
                                </div>
                               
                                <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                    <button class="btn btn-orange  condtionssub"> Suivant  </button>
                                </div><!-- end columns -->
                            </form>
                        </div><!-- end tours -->
                        
                        <div id="cruise" class="tab-pane">
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
                                    <p>Pays: <span id="paysconf"></span></p>
                                    <p>Types de visas : <span id="visasconf"></span></p>
                                    <p>Nombre de personne: <span id="nompersonconf"></span></p>
                                
                                </div>
                                <div class="col-md-6">
                             
                                    <p>Nationalité: <span id="nationalitéconf"></span></p>
                                    <p>Date d'arrivée: <span id="datearriveconf"></span></p>
                                    <p>Documents de voyage: <span id="docvoyageconf"></span></p>
                                </div>
                                </div>
                                </div>
                            </div>
                                <div class="row">
                                    
                                    <h5>l'information</h5>  <br/> 
                                </div><!-- end columns -->
                                    
                                    
                                <div class="row">

                                <div style="border: 2px solid black;  padding: 5px; margin:10px; width: 100%;" >
                                    <div class="conferminformtaiton" style="margin-left: 15px"></div>
                                </div>
                            </div>
                                <div class="row">
                                    
                                    <h5>Les conditions</h5>  <br/> 
                                    
                                </div><!-- end columns -->
                                <div class="row">
                                <div style="border: 2px solid black;  padding: 5px; margin:10px;width: 100%;" >
                                    @foreach ($visaconditions as $visacondition)
                                     
                                    <div class="row visacondition{{ $visacondition->countriesid }}" style="display: none; margin-left: 15px;">
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
                                    <p  style="margin-left: 15px">Prix total : <span id="totalconfirm"></span></p>
                                  
                                </div>
                            </div>
                                <div class="row search-btn">
                                    <input type="hidden" id="demondidsubmit" name="demondidsubmit" value="" />

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
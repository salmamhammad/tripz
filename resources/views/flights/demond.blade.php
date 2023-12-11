
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
.faplane {
  color: #faa61a;

  font-size: 19px;
  margin-right: 8px;
  position: relative;
  top: 3px;
}
</style>
<!--=================== PAGE-COVER =================-->
<section class="page-cover" id="cover-flight-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">  {{ $flights->name }} </h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">DOMICILE</a></li>
                    <li class="breadcrumb-item">Vols charters </li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->

<section class="innerpage-wrapper">
    <div id="flight-booking" class="innerpage-section-padding" style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-5 col-xl-4  col-sm-4 side-bar left-side-bar">
                    <div class="row">
                    
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="side-bar-block detail-block style2 text-center">
                                <div class="detail-img text-center">
                                  
                                    <div class="row" style="  padding-top: 50px;
                                    padding-bottom: 0px;">
                                        <div class="col-4 ">
                                            <div class="font-weight font-12"><span><i class="faplane fa fa-plane"></i></span> 09h45</div>
                                            <div class="text-muted"> Alger </div>
                                        </div>
                                        <div class="col-4 text-center position-relative">
                                            <div class="mt-2 font-12">
                                                Aller 
                                            </div>
                                            <div class="mb-2">
                                                @foreach ($airlines as $airline)
                                                @if ($airline->id==$flights->airlineid)
                                                <img class="img-fluid" src="{{ asset('storage/app/public/'.$airline->img) }}">
    
                                                @endif
         
                                                @endforeach                                              </div>
                                          
                                           
                                        </div>
                                        <div class="col-4 ">
                                            <div class="font-weight font-12"><span><i class=" faplane fa fa-plane" style="transform: rotate(83deg);"></i></span> 15h30</div>
                                            <div class="text-muted">Istanbul</div>
                                        </div>
                                      </div>
                                      <div class="row" style="  padding-top: 10px;
                                      padding-bottom: 20px;">
                                          <div class="col-4 ">
                                              <div class="font-weight font-12"><span><i class=" faplane fa fa-plane"></i></span> 09h45</div>
                                              <div class="text-muted"> Alger </div>
                                          </div>
                                          <div class="col-4 text-center position-relative">
                                              <div class="mt-2 font-12">
                                                Retour 
                                              </div>
                                              <div class="mb-2">
                                                  @foreach ($airlines as $airline)
                                                  @if ($airline->id==$flights->airlineid)
                                                  <img class="img-fluid" src="{{ asset('storage/app/public/'.$airline->img) }}">
      
                                                  @endif
           
                                                  @endforeach                                              </div>
                                            
                                             
                                          </div>
                                          <div class="col-4 ">
                                              <div class="font-weight font-12"><span><i class=" faplane fa fa-plane" style="transform: rotate(83deg);"></i></span> 15h30</div>
                                              <div class="text-muted">Istanbul</div>
                                          </div>
                                        </div>
          
                                    <span class="detail-price">
                                        <h4>{{$flights->place- $flights->reserveplace }}Places disponibles  <span></span></h4>
                                    </span>

                                </div><!-- end detail-img -->
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                          
                                            <tr>
                                                <td>Prix par adulte
                                                </td>
                                                <td>{{ $flights->adult }}</td>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <td>Prix par Enfant
                                                </td>
                                                <td>{{ $flights->child }}</td>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td>Prix par Bébé
                                                    </td>
                                                    <td>{{ $flights->bebes }}</td>
                                                </tr>
                                                
                                           
                                            <tr style="background: #333;color: #fff;">
                                                <td>Total Adultes  </td>
                                                <td class="adultoutput">{{ $flights->adult }}</td>
                                            </tr>
                                            <tr style="background: #333;color: #fff;">

                                                <td>Total Enfants  </td>
                                                <td class="childoutput">0</td>
                                            </tr>
                                            <tr style="background: #333;color: #fff;">

                                                <td>Total Bébés  </td>
                                                <td  class="bebesoutput">0</td>
                                            </tr>
                                            <tr style="background: #333;color: #fff;">

                                                <td>Total   </td>
                                                <td  class="totaloutput">{{ $flights->adult }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end table-responsive -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->
                    
                        
                    </div><!-- end row -->
                
                </div><!-- end columns -->
               
                
                <div class="col-sm-8 z-left">
                    <div class="card mb-3">
                        <div class="card-body content-carte-body">
                            <div class="titre-card" ><h3>Informations sur les voyageurs</h3></div>
                            
                            <p class="text-muted">Reportez un nom de Famille et un Prénom tels qu'ils figurent sur votre passeport<br>les noms des voyageurs doivent être différents !</p>
                            <form id="demande" name="demande" action="{{ route('flightdemond.send') }}" method="post">
                                {{ csrf_field() }}

                               
                                <input type="hidden" name="flightId" value="{{ $flights->id }}">
                                <input type="hidden" name="adultprice" class="adultprice" value="{{ $flights->adult }}">
                                <input type="hidden" name="childprice" class="childprice" value="{{ $flights->child }}">
                                <input type="hidden" name="bebesprice" class="bebesprice" value="{{ $flights->bebes }}">
                                <input type="hidden" name="totalprice" class="totalprice" value="{{ $flights->adult }}">
          
                                <input type="hidden" name="totaladultprice" class="totaladultprice" value="{{ $flights->adult }}">
                                <input type="hidden" name="totalchildprice" class="totalchildprice" value="0">
                                <input type="hidden" name="totalbebesprice" class="totalbebesprice" value="0">

                       
                                
                                <p><strong>Sélectionnez nombre de voyageurs</strong></p>
                                <div class="row mb-3">
                                  <div class="col-md-8 ">
                                    
                                    <div class="row">
                                      <div class="col-md-3">
                                        <div class="form-group">
                                          <label for="adult">Adulte(s)</label>
                                          <select id="adult" name="adult" class="form-control  label-input adult">
                                        
                                            <option value="1" selected="">1
                                            </option>
                                            
                                            <option value="2" >2
                                            </option>
                                            
                                            <option value="3">3
                                            </option>
                                            
                                            <option value="4">4
                                            </option>
                                            
                                            <option value="5">5
                                            </option>
                                            
                                            <option value="6">6
                                            </option>
                                            
                                            <option value="7">7
                                            </option>
                                            
                                            <option value="8">8
                                            </option>
                                            
                                            <option value="9">9
                                            </option>
                                            
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="form-group">
                                          <label for="child">Enfant(s)</label>
                                          <select id="child" name="child" class="form-control label-input child">
                                            
                                            <option value="0" selected="">0</option>
                                            
                                            <option value="1">1</option>
                                            
                                            <option value="2">2</option>
                                            
                                            <option value="3">3</option>
                                            
                                            <option value="4">4</option>
                                            
                                          </select>
                                          <small><i>(De 2 à 12 ans)</i></small>
                                        </div>
                                      </div>
                                      
                                      <div class="col-md-3">
                                        <div class="form-group">
                                          <label for="Bébé">Bébé(s)</label>
                                          <select id="Bébé" name="bebes" class="form-control label-input bebes" >
                                            
                                            <option value="0" selected="">0</option>
                                            
                                            <option value="1">1</option>
                                            
                                            <option value="2">2</option>
                                            
                                          </select>
                                          <small><i>(-2 ans)</i></small>
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>
                                <p><strong>Saisissez les coordonnées des voyageurs</strong></p>
                                <div class="datapeople">
                                     
        <div class="row form-group" name="name2" id="listAd_1" style="">
                                   
            <div class="col-md-12 mb-3">
              <i class=" fa fa-user-circle-o"></i>
                Passager 1, adulte
            </div>
         
           <div class="col-md-12 mb-3">
               <div class="row">  
                  <div class="col-md-2">
                   <input type="radio" id="title1" name="title_AD_1" value="Mr"> 
                    <label for="title1"> Mr</label>
                 </div>
                 <div class="col-md-2">
                   <input type="radio" id="title2" name="title_AD_1" value="Mme">
                   <label for="title2">Mme</label>
                 </div>
                </div>
            </div>

          <div class="col-md-4">
              <label>Nom de famille</label>
       
            <input type="text" name="lastName_AD_1" id="lastName_AD_1" class="form-control" placeholder="Nom" required="required">
          </div>
            <div class="col-md-4">
              <label>Prénom</label>
                <input type="text" name="firstName_AD_1" id="firstName_AD_1" class="form-control " placeholder="Prénom" required="required">
            </div>
          <div class="col-md-4">
            <label>Date de naissance</label>
            <input type="date" name="age_AD_1" id="age_AD_1" class="form-control " placeholder="Date de naissance *" required="required">
          </div>
  
        </div>
                                </div>
                                <div class="datachiledren"></div>
                                
                                
                                <p><strong>Informations complémentaires</strong></p>
                                <div class="row mb-3">
                                  <div class="col-md-12 ">
                                    <div class=" form-group">
                                        <textarea id="message" name="message" placeholder="Remarques ou demandes particulières" class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="row z-btn">
                                  <div class="col-md-4 col-xs-12 ml-auto mb-1 ">
                                    <div id="reslt-remb"></div>
                                      <button type="submit" class=" btn btn-orange">Envoyer</button>
                                  </div>
                                  
                                </div>
                            </form>
                    </div>
                    </div>
                </div>

            </div><!-- end row -->
        </div><!-- end container -->         
    </div><!-- end flight-booking -->
</section><!-- end innerpage-wrapper -->


@include('include.footer')

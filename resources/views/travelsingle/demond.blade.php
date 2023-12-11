
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
                                                <td>
                                                    Téléphoner
                                                </td>
                                                <td>{{ $travel->phone }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" class=" btn btn-orange" style="width: 200px; " data-toggle="modal" data-target="#exampleModal">   Demande de Devis </button>
                                                </td>
                                              
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
                @php
                    $images = json_decode($travel->slider);
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
            <h3 class="text-center">Description et Réservation </h3>
            <div class="row">
                <div class="col-md-12">
                
                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav-item active" style="    border: 1px solid #e6e6e6;"><a class="nav-link stageone"  style="padding: 20px;  " href="#flights" data-toggle="tab"><span style="color: #fd9a00;" >1</span>  &nbsp;  <span class="d-md-inline-flex d-none st-text"> Description du voyage </span></a></li>
                        <li class="nav-item" style="    border: 1px solid #e6e6e6;"><a class="nav-link stagetwo" style="padding: 20px;  " href="#hotels" data-toggle="tab"><span style="color: #fd9a00;" >2</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">  Infos Pratique  </span></a></li>
                    </ul>
                  
                    <div class="tab-content" style="    border: 1px solid #e6e6e6;">

                        <div id="flights" class="tab-pane in active">
                         
                                <div class="row">
                                    
                                    <h3> Description du voyage </h3>  <br/> 
                                    
                                </div>
                                <div class="row">
                                    <p> <?php echo htmlspecialchars_decode( $travel->longdiscrip ); ?></p>  

                                  
                                </div>
                        </div><!-- end flights -->
                        
          
                        <div id="hotels" class="tab-pane">
                      
                               
                            <div class="row">
                                    
                                <h3>  Infos Pratique </h3>  <br/> 
                                
                            </div>
                            <div class="row">
                                <p> <?php echo htmlspecialchars_decode( $travel->practicalinf ); ?></p>  

                              
                            </div>
                         
                        </div><!-- end hotels -->
                    
                    </div><!-- end tab-content -->
              
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->
    
     </div><!-- end container -->
</section><!-- end page-cover -->
    <!--===== INNERPAGE-WRAPPER ====-->
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $travel->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="margin: 10px;">
            <form id="prebook" class="prebook fv-form fv-form-bootstrap" action="{{ route('singledemond.send') }}" method="post" role="form" autocomplete="off" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                {{ csrf_field() }}
                <input type="hidden" name="idtravel" value="{{ $travel->id }}" />
                              
            
                <div class="modal-body">        
                   <h4>Recevez votre devis gratuit pour</h4>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <select id="adults" name="adults" class="form-control" required>
                                    <option value="1" selected="selected">1</option>
                                    <option value="2" >2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <span>Adulte(s)</span>
                            </div> 
                        </div>                 
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <select id="children" name="children" class="form-control" required>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <span>Enfant(s)</span><br>                                
                                <small>(2-12 ans)</small>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <select id="infant" name="bebe" class="form-control" required>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <span>Bébé(s)</span><br><small>(-2 ans)</small> 
                            </div>
                        </div>
                    </div>
                    
                 
                    
                    <h4>Date de départ souhaitée</h4>
                    <div class="row">
                        
                            <div class="col-md-4">
                                <div class="form-group has-feedback">
                                    <input name="depDate" type="date" id="depDate2" required placeholder="jj/mm/aaaa" class="form-control" data-fv-field="depDate"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="depDate" style="display: none;"></i>
                                <small class="help-block" data-fv-validator="date" data-fv-for="depDate" data-fv-result="NOT_VALIDATED" style="display: none;">Date invalide</small></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="flexibility" id="flexibility" class="form-control" required>
                                        <option value="0">+/- 0 jour</option>
                                        <option value="1">+/- 1 jour</option>
                                        <option value="2">+/- 2 jours</option>
                                        <option value="3" selected="selected">+/- 3 jours</option>
                                        <option value="4">+/- 4 jours</option>
                                    </select>
                                </div>
                            </div>
                        
                    </div>
                    <h4>Entrez vos coordonnées</h4>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group has-feedback">
                                <input name="lastName" type="text"required maxlength="50" placeholder="Nom* " class="form-control" data-fv-field="lastName"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="lastName" style="display: none;"></i>
                            <small class="help-block" data-fv-validator="notEmpty" data-fv-for="lastName" data-fv-result="NOT_VALIDATED" style="display: none;">Veuillez saisir votre nom</small><small class="help-block" data-fv-validator="stringLength" data-fv-for="lastName" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small></div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group has-feedback">
                                <input name="firstName" type="text" required maxlength="50" placeholder="Prénom*" class="form-control" data-fv-field="firstName"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="firstName" style="display: none;"></i>
                            <small class="help-block" data-fv-validator="notEmpty" data-fv-for="firstName" data-fv-result="NOT_VALIDATED" style="display: none;">Veuillez saisir votre prénom</small><small class="help-block" data-fv-validator="stringLength" data-fv-for="firstName" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small></div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group has-feedback">
                                <input name="email" type="email" required maxlength="200" placeholder="E-mail*" class="form-control" data-fv-field="email"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="email" style="display: none;"></i>
                            <small class="help-block" data-fv-validator="notEmpty" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">email invalide</small><small class="help-block" data-fv-validator="emailAddress" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">email invalide</small><small class="help-block" data-fv-validator="stringLength" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group has-feedback">
                                <input name="mobile" maxlength="50" required placeholder="Mobile" type="text" class="form-control" data-fv-field="mobile"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="mobile" style="display: none;"></i>
                            <small class="help-block" data-fv-validator="notEmpty" data-fv-for="mobile" data-fv-result="NOT_VALIDATED" style="display: none;">Le numéro du téléphone est obligatoire</small><small class="help-block" data-fv-validator="stringLength" data-fv-for="mobile" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small></div>
                        </div>
                        <div class="col-md-4 col-sm-4"><div class="form-group has-feedback"><input type="text" name="city" maxlength="50" placeholder="Ville" class="form-control" data-fv-field="city"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="city" style="display: none;"></i><small class="help-block" data-fv-validator="stringLength" data-fv-for="city" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small></div></div>
                        <div class="col-md-4 col-sm-4"><div class="form-group has-feedback"><input type="text" name="country" maxlength="50" placeholder="Pays" class="form-control" data-fv-field="country"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="country" style="display: none;"></i><small class="help-block" data-fv-validator="stringLength" data-fv-for="country" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small></div></div>
                    </div>
                    <h4>Informations complémentaires</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="message" name="message" style="height:50px;" placeholder="Remarques ou demandes particulières" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="result-prebook"></div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default custom-btn-six my-btn-sm btn-annul" data-dismiss="modal">Fermer</button>
                    <button type="submit" class=" btn btn-orange custom-btn-six my-btn-sm prebook">Envoyez votre demande</button>
                </div>
            </form>
        </div>
      
      </div>
    </div>
  </div>


  <div class="modal fade" id="endModal" tabindex="-1" role="dialog" aria-labelledby="endModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="endModalLabel">{{ $travel->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="margin: 10px;">
            Nous avons le plaisir de vous informer que votre demande a été prise en compte par notre équipe et qu'elle sera traitée dans les plus brefs délais.
Nos conseillères de voyages vous répondrons par émail dans les meilleurs délais possible.

Nous vous remercions encore pour votre confiance.
Merci d'avoir choisi Notre site pour effectuer votre demande de réservation.
        </div>
      
      </div>
    </div>
  </div>










@include('include.footer')

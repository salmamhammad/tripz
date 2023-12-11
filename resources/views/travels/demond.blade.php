
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
                                                <td>Mobile</td>
                                                <td>{{ $travel->mobile }}</td>
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
                    $images = json_decode($travel->sliders);
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
                        <li class="nav-item" style="    border: 1px solid #e6e6e6;"><a class="nav-link stagefour" style="padding: 20px;  " href="#cruise" data-toggle="tab"><span style="color: #fd9a00;" >3</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">la demande</span></a></li>
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
                        <div id="cruise" class="tab-pane">
                      
                            <form action="{{ url('/demondtravel') }}" method="POST">
                                {{ csrf_field() }}
                            <div class="row">
                                    
                                <h3>La demande</h3>  <br/> 
                               <input type="hidden" name="idtravel" value="{{ $travel->id }}" />
                                
                            </div>
                            <div class="row">
                                <p>Veuillez Remplir Le Formulaire</p>
                            </div>
                            <div class="row">
                               
                                <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                    <label >Adultes</label>
                                    <div class="form-group right-icon">
                                  
                                        <select   name="adult" id="adult" class="form-control" required placeholder="Nombre de adults * " >
                                            <option value="0" class="form-control">0</option>
                                            <option value="1"  class="form-control">1</option>
                                            <option value="2"  class="form-control">2</option>
                                            <option value="3"  class="form-control">3</option>
                                            <option value="4"  class="form-control">4</option>
                                        </select>

                                        <i class=" fa fa-user-circle-o"></i>
                                    </div>
                                </div><!-- end columns -->
                     
                                
                                <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                    <label  >Enfants</label>
                                    <div class="form-group right-icon">
                                      
                                        <select   name="childern" id="childern" class="form-control childern" required placeholder="Nombre de adults * " >
                                            <option value="0" class="form-control">0</option>
                                            <option value="1"  class="form-control">1</option>
                                            <option value="2"  class="form-control">2</option>
                                            <option value="3"  class="form-control">3</option>
                                      
                                        </select>

                                        <i class=" fa fa-user-circle"></i>
                                    </div>
                                </div><!-- end columns -->

                                <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                    <label  >Bébés</label>
                                    <div class="form-group right-icon">
                                      
                                        <select   name="babies" id="babies" class="form-control" required placeholder="Nombre de adults * " >
                                            <option value="0" class="form-control">0</option>
                                            <option value="1"  class="form-control">1</option>
                                            <option value="2"  class="form-control">2</option>
                                          
                                        </select>

                                        <i class=" fa fa-address-book-o "></i>
                                    </div>
                                </div><!-- end columns -->
                            </div><!-- end row -->
                                   
                             <div class="ages row">

                             </div>
                            
                            <div class="row">   
                           
                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                <button type="submit" class=" btn btn-orange" style="width: 200px; ">   Voir le tarif  </button>
                            </div><!-- end columns -->
                            
                        </div><!-- end row -->
                        <div class="row" style="    border: 2px solid #f69e00;margin: 10px;
                        padding: 10px;"> 
     
                            <div class="col-12 col-md-12 col-lg-6 col-xl-6" >  
                                <h5>Ce prix comprend</h5>  <br/> 
                                <p> <?php echo htmlspecialchars_decode( $travel->include ); ?></p>  

                            </div>
                                     
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <h5>Ce prix ne comprends pas</h5>  <br/>   
                                    <p> <?php echo htmlspecialchars_decode( $travel->notinclude ); ?></p>  

                                </div>
                        </div><!-- end row -->
                            </form>
                        </div>
          
                    </div><!-- end tab-content -->
              
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->
    
     </div><!-- end container -->
</section><!-- end page-cover -->
    <!--===== INNERPAGE-WRAPPER ====-->
 



@include('include.footer')

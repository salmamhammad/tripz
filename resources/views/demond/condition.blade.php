
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
                        <li class="nav-item "><a class="nav-link stageone" style="padding: 20px;  pointer-events: none;" href="#flights" data-toggle="tab"><span style="color: #fd9a00;" >1</span>  &nbsp;  <span class="d-md-inline-flex d-none st-text">la demande</span></a></li>
                        <li class="nav-item"><a class="nav-link stagetwo" style="padding: 20px;  pointer-events: none;" href="#hotels" data-toggle="tab"><span style="color: #fd9a00;" >2</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">l'information</span></a></li>
                        <li class="nav-item active"><a class="nav-link stagethree" style="padding: 20px;  pointer-events: none;" href="#tours" data-toggle="tab"><span style="color: #fd9a00;" >3</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">les conditions</span></a></li>
                        <li class="nav-item"><a class="nav-link stagefour" style="padding: 20px;  pointer-events: none;" href="#cruise" data-toggle="tab"><span style="color: #fd9a00;" >4</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">confirmation</span></a></li>
                    </ul>

                    <div class="tab-content">

                  
                    
                        <div id="tours" class="tab-pane  in active">
                            <form  action="{{ url('/conditions') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <h3>Les conditions </h3>  <br/> 
                                </div>
                                <div class="conditions">
                                    <input type="hidden" name="visacountry" value="{{ $visacountry }}" />
                                    <input type="hidden" name="id" value="{{ $id }}" />
                                    <input type="hidden" name="pricevisa" value="{{ $pricevisa }}" />
                                        @foreach ($visaconditions as $visacondition)
                                     
                                        <div class="row visacondition{{ $visacondition->countriesid }}" >
                                            <p><span style="color: #faa61a" class="fa fa-star"></span> {{ $visacondition->text }}</p>
                                        </div>
                                        @endforeach
                                        <div class="form-group right-icon">
                                            <input type="checkbox" name="conditionaccept" value="true" style="height: 20px;"  /> <span> J'accepte les conditions ci-dessus </span> <br>
                                           
                                        </div>
                                </div>
                               
                                <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                    <button class="btn btn-orange  "> Suivant  </button>
                                </div><!-- end columns -->
                            </form>
                        </div><!-- end tours -->
                        
                   
                 
                        
                    </div><!-- end tab-content -->
                    
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->
    
     </div><!-- end container -->
    </section><!-- end page-cover -->
@include('include.footer')
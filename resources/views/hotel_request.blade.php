
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
<style>
  .text-gray-700{
  margin-top: 15px;    
  }
  
    </style>
<!--=================== PAGE-COVER =================-->
<section class="page-cover" id="cover-hotel-grid-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title"> Demande de réservation d'hôtel visa </h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Hotels</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<section class="flexslider-container" id="flexslider-container-1">
    <div class="search-tabs" id="search-tabs-1" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                
                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav-item active" style="    border: 1px solid #e6e6e6;"><a class="nav-link stageone"  style="padding: 20px;  pointer-events: none;" href="#flights" data-toggle="tab"><span style="color: #fd9a00;" >1</span>  &nbsp;  <span class="d-md-inline-flex d-none st-text">la demande</span></a></li>
                        <li class="nav-item" style="    border: 1px solid #e6e6e6;"><a class="nav-link stagetwo" style="padding: 20px;  pointer-events: none;" href="#hotels" data-toggle="tab"><span style="color: #fd9a00;" >2</span>  &nbsp; <span class="d-md-inline-flex d-none st-text"> des occupants </span></a></li>
                        <li class="nav-item" style="    border: 1px solid #e6e6e6;"><a class="nav-link stagefour" style="padding: 20px;  pointer-events: none;" href="#cruise" data-toggle="tab"><span style="color: #fd9a00;" >4</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">Budget </span></a></li>
                    </ul>
                    <form action="{{ url('/demondhotelreq') }}" method="POST">
                        {{ csrf_field() }}
                    <div class="tab-content" style="    border: 1px solid #e6e6e6;">

                        <div id="flights" class="tab-pane in active">
                         
                                <div class="row">
                                    
                                    <h3>La demande</h3>  <br/> 
                                    
                                </div>
                              

                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="name" id="name" class="form-control numberroms" required placeholder="Ville, zone ou nom d'hôtel                                            * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                                <div class="row">

                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text" id="fromdate" onfocus="(this.type='date')" name="arrivetime" class="form-control" required placeholder="Date d'arrivée * " >

                                            <i class=" fa fa-calendar-o"></i>
                                        </div>
                                    </div><!-- end columns -->
                         
                                    
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text" id="todate" onfocus="(this.type='date')" name="departtime" class="form-control" required placeholder="date de départ  * " >

                                            <i class="fa fa-calendar-o"></i>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                                <div class="row">

                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="number" readonly name="night" id="nights" class="form-control" required placeholder="Nombre de nuits * " >
               
                                            <i class=" fa fa-tasks"></i>
                                            <span id="result"></span>
                                        </div>
                                    </div><!-- end columns -->
                         
                                    
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="number"  name="room" id="numberroms" class="form-control numberroms" required placeholder="Nombre de chambres  * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                                <div class="row">

                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="number"  name="adult" id="adult" class="form-control" required placeholder="Nombre de adults * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                         
                                    
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="number"  name="child" id="chlid" class="form-control" required placeholder="Nombre d'enfants  * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                                    <div class="row">   
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                                        </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                        <button type="button" class="reqfirstbtn btn btn-orange"> Suivant  </button>
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </form>
                        </div><!-- end flights -->
                        
          
                        <div id="hotels" class="tab-pane">
                      
                                <div class="row">
                                    
                                    <h3>Saisissez les coordonnées des occupants

                                    </h3>  <br/> 
                                  
                                    
                                </div>
                              

                                <div class=" roomss">
  
                                
                                    </div><!-- end columns -->
                            
                                    <div class="row">   
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                              
                                            </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                        <button type="button" class="secondbtnreq btn btn-orange"> Suivant  </button>
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                         
                        </div><!-- end flights -->
                        <div id="cruise" class="tab-pane">
                      
                            <div class="row">
                                
                                <h4>Budget par occupant par nuit

                                </h4>  <br/> 
                              
                                
                            </div>
                            <div class="row">
                                <div style="  padding: 5px; margin:10px;width: 100%;" >
                                    <div class="row" style="margin-left: 15px">
                                        <div class="col-md-12" >
                                         
                                 @foreach ($budgets as $hotelreq)
                                 <div class="col-md-12" >
                                   <input type="checkbox" name="hotelreq{{ $hotelreq->id   }}" value="{{ $hotelreq->id }}"  style="height: 17px;"/>
                                     €{{  $hotelreq->from }} - €{{  $hotelreq->to }} par nuit
                                    </div>
                                 @endforeach
                                
                                </div>
                               
                                </div>
                                </div>
                            </div>
                            <div class="row comfirrooms">
                         
                            </div>
                            <div class="row">   
                                <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                                  <h4> Importantes</h4>
                                </div><!-- end columns -->
                                <div class="row" style="margin-left: 15px">
                                    <div class="col-md-12" >
                             @foreach ($notes as $note)
                               <p>     {{  $note->text }} </p>
                             @endforeach
                            
                            </div>
                           
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                <button type="submit" class=" btn btn-orange"> Soumettre  </button>
                            </div><!-- end columns -->
                            
                        </div><!-- end row -->
                        </div>
          
                    </div><!-- end tab-content -->
                </form>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->
    
     </div><!-- end container -->
</section><!-- end page-cover -->

@include('include.footer')

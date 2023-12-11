
@include('include.header')
  

<!--========================= FLEX SLIDER =====================-->
<section class="flexslider-container" id="flexslider-container-1" style="height: auto;">
  <section class="page-cover" id="cover-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="page-title">Finance</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">DOMICILE</a></li>
                    <li class="breadcrumb-item">Mes Finance </li>
                </ul>
            </div><!-- end columns -->
               <div class="col-md-10">votre portefeuille total  : 
                   {{Auth::user()->wallet}}
                   </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->
  
  <div class="search-tabs" id="search-tabs-1" style="position: relative; margin-top: 20px;">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
              
                  <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item active"><a class="nav-link" href="#ad" data-toggle="tab"><span><i class="fa fa-plane"></i></span><span class="d-md-inline-flex d-none st-text">Opérations </span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#flights" data-toggle="tab"><span><i class="fa fa-suitcase"></i></span><span class="d-md-inline-flex d-none st-text">Visa</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#hotels" data-toggle="tab"><span><i class="fa fa-building"></i></span><span class="d-md-inline-flex d-none st-text"> Hotel </span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#cruise" data-toggle="tab"><span><i class="fa fa-ship"></i></span><span class="d-md-inline-flex d-none st-text">D'hôtel visa</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#tours" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="d-md-inline-flex d-none st-text">Permis de conduire</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#voyage" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="d-md-inline-flex d-none st-text">Voyages </span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#cars" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="d-md-inline-flex d-none st-text">Vols charters </span></a></li>
                  </ul>

               

                  <div class="tab-content">
                       <div id="ad" class="tab-pane in active">

<div class="innerpage-wrapper" style="height: auto;">
<br/>
<div class="container">
<h2>Opérations financières  </h2>
<table class="table table-hover">
<thead>
<tr>
<th>Montant:</th>
<th>Type d'opération :</th>
<th>créé à: </th>

</tr>
</thead>
<tbody>
@foreach ($demondrecords as $demondrecord)
@if ($demondrecord->serviceid==NULL)
<tr>
    <td>{{  $demondrecord->amount }}</td>  
    <td>{{  $demondrecord->operationtype }}</td> 
    <td>{{  $demondrecord->created_at }}</td> 

</tr>
@endif


@endforeach

</tbody>
</table>
</div>

<br/>
</div><!-- end page-cover -->
                
                    </div>

                      <div id="flights" class="tab-pane in">
                          

<div class="innerpage-wrapper" style="height: auto;">
<br/>
<div class="container">
<h2>Opérations financières  </h2>
<table class="table table-hover">
<thead>
<tr>
<th>Montant:</th>
<th>Type d'opération :</th>
<th>créé à: </th>
<th>Numéro de commande : </th>

</tr>
</thead>
<tbody>
@foreach ($demondrecords as $demondrecord)
@if ($demondrecord->servicetype=="Visa")
<tr>
    <td>{{  $demondrecord->amount }}</td>  
    <td>{{  $demondrecord->operationtype }}</td> 
    <td>{{  $demondrecord->created_at }}</td> 
    <td>{{  $demondrecord->serviceid }}</td> 

</tr>
@endif


@endforeach

</tbody>
</table>
</div>

<br/>
</div><!-- end page-cover -->
                      </div><!-- end flights -->
                      
                      <div id="hotels" class="tab-pane">
                                  

<div class="innerpage-wrapper" style="height: auto;">
<br/>
<div class="container">
<h2>Opérations financières  </h2>
<table class="table table-hover">
<thead>
<tr>
<th>Montant:</th>
<th>Type d'opération :</th>
<th>créé à: </th>
<th>Numéro de commande : </th>

</tr>
</thead>
<tbody>
@foreach ($demondrecords as $demondrecord)
@if ($demondrecord->servicetype=="Hotal")
<tr>
    <td>{{  $demondrecord->amount }}</td>  
    <td>{{  $demondrecord->operationtype }}</td> 
    <td>{{  $demondrecord->created_at }}</td> 
    <td>{{  $demondrecord->serviceid }}</td> 

</tr>
@endif


@endforeach

</tbody>
</table>
</div>

<br/>
</div><!-- end page-cover -->
                         
                      </div><!-- end hotels -->

                      <div id="tours" class="tab-pane">
                     
<div class="innerpage-wrapper" style="height: auto;">
    <br/>
    <div class="container">
    <h2>Opérations financières  </h2>
    <table class="table table-hover">
    <thead>
    <tr>
    <th>Montant:</th>
    <th>Type d'opération :</th>
    <th>créé à: </th>
    <th>Numéro de commande : </th>
    
    </tr>
    </thead>
    <tbody>
    @foreach ($demondrecords as $demondrecord)
    @if ($demondrecord->servicetype=="Permis de conduire")
    <tr>
        <td>{{  $demondrecord->amount }}</td>  
        <td>{{  $demondrecord->operationtype }}</td> 
        <td>{{  $demondrecord->created_at }}</td> 
        <td>{{  $demondrecord->serviceid }}</td> 
    
    </tr>
    @endif
    
    
    @endforeach
    
    </tbody>
    </table>
    </div>
    
    <br/>
    </div>   
                      </div><!-- end tours -->
                      
                      <div id="cruise" class="tab-pane">
                         
<div class="innerpage-wrapper" style="height: auto;">
    <br/>
    <div class="container">
    <h2>Opérations financières  </h2>
    <table class="table table-hover">
    <thead>
    <tr>
    <th>Montant:</th>
    <th>Type d'opération :</th>
    <th>créé à: </th>
    <th>Numéro de commande : </th>
    
    </tr>
    </thead>
    <tbody>
    @foreach ($demondrecords as $demondrecord)
    @if ($demondrecord->servicetype=="Hotal")
    <tr>
        <td>{{  $demondrecord->amount }}</td>  
        <td>{{  $demondrecord->operationtype }}</td> 
        <td>{{  $demondrecord->created_at }}</td> 
        <td>{{  $demondrecord->serviceid }}</td> 
    
    </tr>
    @endif
    
    
    @endforeach
    
    </tbody>
    </table>
    </div>
    
    <br/>
    </div><!-- end page-cover -->
                             
                          </div><!-- end hotels -->
    
                          <div id="voyage" class="tab-pane">
                         
    <div class="innerpage-wrapper" style="height: auto;">
        <br/>
        <div class="container">
        <h2>Opérations financières  </h2>
        <table class="table table-hover">
        <thead>
        <tr>
        <th>Montant:</th>
        <th>Type d'opération :</th>
        <th>créé à: </th>
        <th>Numéro de commande : </th>
        <th>Type de voyage  : </th>
        
        </tr>
        </thead>
        <tbody>
        @foreach ($demondrecords as $demondrecord)
        @if ($demondrecord->servicetype=="les voyages de groupe")
        <tr>
            <td>{{  $demondrecord->amount }}</td>  
            <td>{{  $demondrecord->operationtype }}</td> 
            <td>{{  $demondrecord->created_at }}</td> 
            <td>{{  $demondrecord->serviceid }}</td> 
            <td>les voyages de groupe</td> 
        
        </tr>
        @endif
     
        
        @endforeach
        
        </tbody>
        </table>
        </div>
        
        <br/>
        </div>
                      </div><!-- end cruises -->

                      <div id="cars" class="tab-pane">
                                     
    <div class="innerpage-wrapper" style="height: auto;">
        <br/>
        <div class="container">
        <h2>Opérations financières  </h2>
        <table class="table table-hover">
        <thead>
        <tr>
        <th>Montant:</th>
        <th>Type d'opération :</th>
        <th>créé à: </th>
        <th>Numéro de commande : </th>
        
        </tr>
        </thead>
        <tbody>
        @foreach ($demondrecords as $demondrecord)
        @if ($demondrecord->servicetype=="flight")
        <tr>
            <td>{{  $demondrecord->amount }}</td>  
            <td>{{  $demondrecord->operationtype }}</td> 
            <td>{{  $demondrecord->created_at }}</td> 
            <td>{{  $demondrecord->serviceid }}</td> 
             
        
        </tr>
        @endif
     
        
        @endforeach
        
        </tbody>
        </table>
        </div>
        
        <br/>
        </div> 
                      </div><!-- end cars -->
                      
                  </div><!-- end tab-content -->
                  
              </div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end container -->
  </div><!-- end search-tabs -->
  
</section><!-- end flexslider-container -->




@include('include.footer')

@include('include.header')
  

<!--========================= FLEX SLIDER =====================-->
<section class="flexslider-container" id="flexslider-container-1" style="height: auto;">
  <section class="page-cover" id="cover-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">Mes commandes </h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">DOMICILE</a></li>
                    <li class="breadcrumb-item">Mes commandes </li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->
  
  <div class="search-tabs" id="search-tabs-1" style="position: relative;">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
              
                  <ul class="nav nav-tabs justify-content-center">
                      <li class="nav-item active"><a class="nav-link" href="#flights" data-toggle="tab"><span><i class="fa fa-plane"></i></span><span class="d-md-inline-flex d-none st-text">Visa </span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#hotels" data-toggle="tab"><span><i class="fa fa-building"></i></span><span class="d-md-inline-flex d-none st-text">Reservation hotel </span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#tours" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="d-md-inline-flex d-none st-text">Permis de conduire</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#cruise" data-toggle="tab"><span><i class="fa fa-ship"></i></span><span class="d-md-inline-flex d-none st-text">Voyages</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#cars" data-toggle="tab"><span><i class="fa fa-suitcase"></i></span><span class="d-md-inline-flex d-none st-text">Vols charters </span></a></li>
                  </ul>

                  <div class="tab-content">

                      <div id="flights" class="tab-pane in active">
                          

<div class="innerpage-wrapper" style="height: auto;overflow-x: auto;">
<br/>
<div class="container" style="max-width: 1200px;">
<h2>Liste des commandes </h2>
<table class="table table-hover">
<thead>
<tr>
<th>Numéro de commande </th>
<th>Pays</th>
<th>Types de visas</th>
<th>Nombre de personne</th>
<th>Nationalité</th>
<th>Date d'arrivée: </th>
<th>Documents de voyage</th>
<th>Etat</th>
<th>Participant</th>
</tr>
</thead>
<tbody>
@foreach ($orders as $order)
<tr>
<td>{{  $order->id }}</td>
<td>{{  $order->country }}</td>
@foreach ($visas as $visa)
 @if ($visa->id==$order->visaid)
 <td>{{  $visa->type }}</td> 
 @endif 
@endforeach

<td>{{  $order->numberfamily }}</td>
<td>{{  $order->nationality }}</td>
<td>{{  $order->datearrive }}</td>
<td>{{  $order->docvoyager }}</td>
<td>{{  $order->status }}</td>
<td style="display: block ruby;">  <button type="button" style="margin: 5px;    padding: 8px 8px;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal{{ $order->id }}">View</button>
</td>
</tr>
@endforeach

</tbody>
</table>
</div>
@foreach ($orders as $order)
<!-- Modal -->
<div class="modal fade" id="myModal{{ $order->id }}" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Participant</h4>
</div>
<div class="modal-body" style="    padding-left: 30px;">
@php
  $x=0;
@endphp
@foreach ($participents as $participent)
@if ($participent->visaid==$order->id)

@php
  $x=$x+1;
@endphp
<div class="row">
  <h5>Participant {{ $x }}</h5>
</div>
<div class="row">
<div class="col-md-6">
<p>Prénom : <span>{{$participent->fname  }}</span></p>
<p>Nom : <span>{{$participent->lname  }}</span></p>
<p>passeport : <span>{{$participent->passportnum  }}</span></p>
<p>Date de naissance : <span>{{$participent->datebirth  }}</span></p>
</div>
<div class="col-md-6">
<p>Date de lieu : <span>{{$participent->locationbirth  }}</span></p>
<p>Date expirée : <span>{{$participent->dateexpired  }}</span></p>
<p>E-mail : <span>{{$participent->email  }}</span></p>
<p>Date d'émission : <span>{{$participent->daterelease  }}</span></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p>Adresse de recidence: <span>{{$participent->address  }}</span></p>
</div>
</div> 

@endif 
@endforeach

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>
@endforeach

<br/>
</div><!-- end page-cover -->
                      </div><!-- end flights -->
                      
                      <div id="hotels" class="tab-pane">
                          
<div class="innerpage-wrapper" style="height: auto;">
  <br/>
  <div class="container" style="max-width: 1200px;">
  

    <div class="row">            
                
        <div class="col-12 col-md-12 col-lg-2 side-bar left-side-bar">
                        
            <div class="side-bar-block filter-block" style="padding: 3px 5px 5px;">
                <div class="panels-group">
                            
                    <div class="card">
                        <div class="card-header">   
                            
                            <button   class="hotelbtn" value="hotel1">Hôtels dans le monde<span></span></button>

                        </div> 
                    </div>
                    <div class="card">
                        <div class="card-header">   
                            
                            <button class="hotelbtn" value="hotel2">Demande de réservation d'hôtel visa<span></span></button>

                        </div> 
                    </div>
                </div>  
            </div> 
        </div>
        <div class="col-12 col-md-12 col-lg-10 col-xl-10 content-side" style="overflow-x: auto;">
            <div class="hotel1 hootel">
            <h3>Hôtels dans le monde </h3>
    <table class="table table-hover"  >
      <thead>
        <tr>
           <th>Numéro de commande</th>
            <th>Hotels</th>
           <th> Date d'arrivée</th>
           <th> date de départ</th>
           <th>Nombre de nuits</th>
           <th> nombre de chambres</th>
           <th>adultes</th>
           <th>enfants</th>
           <th>Etat</th>
           <th>le prix</th>
        </tr>
       </thead>
       <tbody>
         @foreach ($ordershotel as $ordershote)
           <tr>
                <td>{{  $ordershote->id }}</td>

               @foreach ($Hotels as $Hotel)
                  @if ($Hotel->id==$ordershote->idhotel)
                     <td>{{  $Hotel->name }}</td> 
                  @endif 
               @endforeach

                <td>{{  $ordershote->arrivedate }}</td>
                <td>{{  $ordershote->departdate }}</td>
                <td>{{  $ordershote->night }}</td>
                <td>{{  $ordershote->numberroms }}</td>
                <td>{{  $ordershote->adult }}</td>
                <td>{{  $ordershote->child }}</td>
                <td>{{  $ordershote->status }}</td>
                <td>{{  $ordershote->totalprice }}</td>


               </tr>
           @endforeach

          </tbody>
   </table>
</div>
<div class="hotel2 hootel" style="display: none;">
    <h2>Demande de réservation d'hôtel visa</h2>
<table class="table table-hover"  >
<thead>
<tr>
    <th>Numéro de commande</th>
   <th>Ville, zone ou nom d'hôtel </th>
    <th>Date d'arrivée</th>
   <th> date de départ </th>
   <th> nombre de chambres </th>
   <th>Nombre de adults</th>
   <th> Nombre d'enfants</th>
   <th>Budget par occupant par nuit </th>
   <th>Etat</th>
  
</tr>
</thead>
<tbody>
 @foreach ($hotelreqs as $hotelreq)
   <tr>
        <td>{{  $hotelreq->id }}</td>
        <td>{{  $hotelreq->name }}</td>
       
        <td>{{  $hotelreq->arrivetime }}</td>
        <td>{{  $hotelreq->departtime }}</td>
        <td>{{  $hotelreq->room }}</td>
        <td>{{  $hotelreq->numberroms }}</td>
        <td>{{  $hotelreq->adult }}</td>
        <td>{{  $hotelreq->child }}</td>

        @foreach ($budgets as $budget)
       @foreach ($tablebudgets as $tablebudget)
          @if ($budget->id==$tablebudget->budgetid)
          @if ($tablebudget->reqid==$hotelreq->id)
          <td> €{{  $budget->from }} - €{{  $budget->to }} par nuit </td> 

             @endif 
             @endif 
       @endforeach
       @endforeach

        <td>{{  $hotelreq->status }}</td>


       </tr>
   @endforeach

  </tbody>
</table>
</div>
</div>        
</div> 
</div>


         <br/>
</div><!-- end page-cover -->
                         
                      </div><!-- end hotels -->

                      <div id="tours" class="tab-pane">
                        
<div class="innerpage-wrapper" style="height: auto;overflow-x: auto;">
    <br/>
    <div class="container" style="max-width: 1200px;">
    <h2>Demandes de licence</h2>
    <table class="table table-hover">
    <thead>
    <tr>
    <th>Numéro de commande </th>
    <th>Prénom</th>
    <th>Nom de famille</th>
    <th>adresse</th>
    <th>ville</th>
    <th>Province</th>
    <th>code postal</th>
    <th>pays</th>
    <th>pays de naissance</th>
    <th>Catégorie</th>
    <th>numéro de permis de conduire</th>
    <th>date de première émission</th>
    <th>Etat</th>
    <th>des détails </th>
    </tr>
    </thead>
    <tbody>
    @foreach ($drivdemonds as $drivdemond)
    <tr>
    <td>{{  $drivdemond->id }}</td>
    <td>{{  $drivdemond->fname }}</td>  
    <td>{{  $drivdemond->lname }}</td>
    <td>{{  $drivdemond->address }}</td>
    <td>{{  $drivdemond->city }}</td>
    <td>{{  $drivdemond->province }}</td>
    <td>{{  $drivdemond->zipcode }}</td>
    <td>{{  $drivdemond->country }}</td>
    <td>{{  $drivdemond->datebirth }}</td>
    <td>{{  $drivdemond->countrybirth }}</td>
    <td>{{  $drivdemond->category }}</td>
    @foreach ($drives as $drive)
     @if ($drive->id==$drivdemond->category)
     <td>{{  $drive->category }}</td> 
     @endif 
    @endforeach
    <td>{{  $drivdemond->drivenumber }}</td>
    <td>{{  $drivdemond->firstissue }}</td>
    <td>{{  $drivdemond->status }}</td>
    <td style="display: block ruby;">  <button type="button" style="margin: 5px;    padding: 8px 8px;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#driveModal{{ $drivdemond->id }}">View</button>
    </td>
    </tr>
    @endforeach
    
    </tbody>
    </table>
    </div>
 @foreach ($drivdemonds as $drivdemond)
     
  <!-- Modal -->
<div class="modal fade" id="driveModal{{ $drivdemond->id }}" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Detail</h4>
    </div>
    <div class="modal-body" style="    padding-left: 30px;">
   
    <div class="row">
      <h5>Detail</h5>
    </div>
    <div class="row">
    <div class="col-md-6">
    <p>Mail Prénom : <span>{{$drivdemond->mfname  }}</span></p>
    <p>Mail nom de famille : <span>{{$drivdemond->mlname  }}</span></p>
    <p>Mail adresse : <span>{{$drivdemond->maddress  }}</span></p>
    <p>Mail ville : <span>{{$drivdemond->mcity  }}</span></p>
    </div>
    <div class="col-md-6">
    <p>Mail Province : <span>{{$drivdemond->mprovince  }}</span></p>
    <p>Mail code postal: <span>{{$drivdemond->mzip  }}</span></p>
    <p>Mail pays : <span>{{$drivdemond->mcountry  }}</span></p>
    <p>téléphoner : <span>{{$drivdemond->phone  }}</span></p>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <p>commentaires <span>{{$drivdemond->comment  }}</span></p>
</div>
    <div class="col-md-6">

    <p>le prix <span>{{$drivdemond->price  }}</span></p>
    </div>
    </div> 
    
   
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    
    </div>
    </div>
    @endforeach

    <br/>
    </div><!-- end page-cover -->
           
                      </div><!-- end tours -->
                      
                      <div id="cruise" class="tab-pane">
                                              
<div class="innerpage-wrapper" style="height: auto;">
    <br/>
    <div class="container" style="max-width: 1200px;">
    
  
      <div class="row">            
                  
          <div class="col-12 col-md-12 col-lg-2 side-bar left-side-bar">
                          
              <div class="side-bar-block filter-block" style="padding: 3px 5px 5px;">
                  <div class="panels-group">
                              
                      <div class="card">
                          <div class="card-header">   
                              
                              <button   class="hotelbtn" value="gruop">Voyages de groupe <span></span></button>
  
                          </div> 
                      </div>
                      <div class="card">
                          <div class="card-header">   
                              
                              <button class="hotelbtn" value="single">
                                voyages personnels<span></span></button>
  
                          </div> 
                      </div>
                  </div>  
              </div> 
          </div>
          <div class="col-12 col-md-12 col-lg-10 col-xl-10 content-side" style="overflow-x: auto;">
              <div class="gruop hootel">
              <h3>Voyages de groupe </h3>
      <table class="table table-hover"  >
        <thead>
          <tr>
             <th>Numéro de commande</th>
             <th> Voyages </th>
              <th> Nom </th>   
             <th> Email</th>
             <th> Adultes</th>
             <th>Enfants</th>
             <th> Babies</th>
             <th>Prix Tavel</th>
            
             <th>Ajouté à</th>
            
             <th> Mobile </th>
             <th>  Demande particulière  </th>
             <th> Statut </th>
             <th>des détails </th>

          </tr>
         </thead>
         <tbody>
           @foreach ($traveldemonds as $traveldemond)
             <tr>
                  <td>{{  $traveldemond->id }}</td>
  
                  @foreach ($travels as $travel)
                  @if ($travel->id==$traveldemond->travelid)
                     <td>{{  $travel->name }}</td> 
                  @endif 
               @endforeach
  
                  <td>{{  $traveldemond->name }}</td>
                  <td>{{  $traveldemond->email }}</td>
                  <td>{{  $traveldemond->adults }}</td>
                  <td>{{  $traveldemond->childern }}</td>
                  <td>{{  $traveldemond->babies }}</td>
                  <td>{{  $traveldemond->tavelprice }}</td>
                  <td>{{  $traveldemond->created_at }}</td>
                  <td>{{  $traveldemond->mobile }}</td>
                  <td>{{  $traveldemond->note }}</td>
               
                  <td>{{  $traveldemond->status }}</td>
  
                  <td style="display: block ruby;">  <button type="button" style="margin: 5px;    padding: 8px 8px;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#groupModal{{ $traveldemond->id }}">View</button>
                  </td>
                 </tr>
             @endforeach
  
            </tbody>
     </table>
  </div>
  @foreach ($traveldemonds as $traveldemond)
     
  <!-- Modal -->
<div class="modal fade" id="groupModal{{ $traveldemond->id }}" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Detail</h4>
    </div>
    <div class="modal-body" style="    padding-left: 30px;">
   
    <div class="row">
      <h5>Detail</h5>
    </div>
    <div class="row">
    <div class="col-md-6">
    <p>accommodations : <span>
        @php
            $exsit=0;
        @endphp
        @foreach ($accommodation as $accommodatio)
            @if ($accommodatio->id==$traveldemond->accomandid)
            {{$accommodatio->typeroom  }}
            @php
            $exsit=1;
        @endphp
               
            @endif
        @endforeach
        @if ($exsit==0)
     
        pas disponible 
        @endif
      </span></p>
    
    </div>
    <div class="col-md-6">
    <p> offers  : <span>
        @php
        $exsit=0;
    @endphp
    @foreach ($offers as $offer)
        @if ($offer->id==$traveldemond->offersid)
        {{$offer->name }} 
        @php
        $exsit=1;
    @endphp
           
        @endif
    @endforeach
    @if ($exsit==0)
 
    pas disponible 
    @endif
      </span></p>
    
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <p>Type de paiement  <span>
            @php
            $exsit=0;
        @endphp
        @foreach ($typepayment as $typepaymen)
            @if ($typepaymen->id==$traveldemond->typepaymentid)
            {{$typepaymen->type }} 
            @php
            $exsit=1;
        @endphp
               
            @endif
        @endforeach
        @if ($exsit==0)
     
        pas disponible 
        @endif
            </span></p>
    </div>
    </div>
    <h4>Adultes</h4>
    <div class="row">
        <div class="col-md-4">Typer
    </div>
    <div class="col-md-4">Prénom
    </div>
    <div class="col-md-4">nom de famille
    </div>
</div>

        <div class="row">      
    @foreach ($pepoltravels as $pepoltravel)
    @if ($pepoltravel->travelid==$traveldemond->id)
        @if ($pepoltravel->sort=="Adulte")
        <div class="col-md-4">
            <p>   <span>{{$pepoltravel->type  }}</span></p>
           </div>
            <div class="col-md-4">
            <p>   <span>{{$pepoltravel->fname  }}</span></p>
           </div>
           <div class="col-md-4">
            <p>   <span>{{$pepoltravel->lname  }}</span></p>
          </div>  
        @endif
    @endif
   
@endforeach
</div>
<h4>Enfants</h4>

<div class="row">
    <div class="col-md-4">Prénom
</div>
<div class="col-md-4">nom de famille
</div>
<div class="col-md-4">Naissance
</div>
</div>
<div class="row">
        
   
@foreach ($pepoltravels as $pepoltravel)
@if ($pepoltravel->travelid==$traveldemond->id)
@if ($pepoltravel->sort=="Enfant")

    <div class="col-md-4">
    <p>   <span>{{$pepoltravel->fname  }}</span></p>
   </div>
   <div class="col-md-4">
    <p>   <span>{{$pepoltravel->lname  }}</span></p>
  </div> 
  <div class="col-md-4">
    <p>   <span>{{$pepoltravel->birth  }}</span></p>
   </div> 
@endif
@endif

@endforeach
</div>
<h4>Babies</h4> 
<div class="row">
    <div class="col-md-4">Prénom
</div>
<div class="col-md-4">nom de famille
</div>
<div class="col-md-4">Naissance
</div>
</div>  
<div class="row">
        
    
@foreach ($pepoltravels as $pepoltravel)
@if ($pepoltravel->travelid==$traveldemond->id)
@if ($pepoltravel->sort=="Babie")

    <div class="col-md-4">
    <p>   <span>{{$pepoltravel->fname  }}</span></p>
   </div>
   <div class="col-md-4">
    <p>  <span>{{$pepoltravel->lname  }}</span></p>
  </div> 
  <div class="col-md-4">
    <p>   <span>{{$pepoltravel->birth  }}</span></p>
   </div> 
@endif
@endif

@endforeach
</div>
   
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    
    </div>
    </div>
    @endforeach

  <div class="single hootel" style="display: none;">
   
        <h3>
            voyages personnels </h3>
<table class="table table-hover"  >
  <thead>
    <tr>
       <th>Numéro de commande</th>
       <th> Voyages </th>
       <th> Adultes</th>
       <th>Enfants</th>
       <th> Babies</th>
       <th> Date de dépar </th>   
       <th> Nombre de jours</th>
       <th> Informations</th>
       <th> Prénom</th>
       <th> nom de famille</th>
       <th> Email</th>
       <th> Mobile</th>
       <th> ville</th>
       <th> pays</th>
       <th> Date de commande</th>
       <th> Statut </th>
      

    </tr>
   </thead>
   <tbody>
     @foreach ($singledemond as $singledemon)
       <tr>
            <td>{{  $singledemon->id }}</td>
            <td>
            @foreach ($singletravel as $singletrave)
            @if ($singletrave->id==$singledemon->singletravelid)
              {{  $singletrave->name }}
            @endif 
         @endforeach
        </td> 
            <td>{{  $singledemon->adults }}</td>
            <td>{{  $singledemon->child }}</td>
            <td>{{  $singledemon->babies }}</td>
            <td>{{  $singledemon->departdate }}</td>
            <td>{{  $singledemon->numdys }}</td>
            <td>{{  $singledemon->note }}</td>
            <td>{{  $singledemon->fname }}</td>
            <td>{{  $singledemon->lname }}</td>
            <td>{{  $singledemon->email }}</td>
            <td>{{  $singledemon->mobile }}</td>
            <td>{{  $singledemon->town }}</td>
            <td>{{  $singledemon->country }}</td>
            <td>{{  $singledemon->created_at }}</td>
         
            <td>{{  $traveldemond->status }}</td>

           </tr>
       @endforeach

      </tbody>
</table>
</div>
  
</div>         <br/>
  </div><!-- end page-cover -->
                           
</div> </div>   
                      </div><!-- end cruises -->

                      <div id="cars" class="tab-pane">
                            

<div class="innerpage-wrapper" style="height: auto;overflow-x: auto;">
    <br/>
    <div class="container" style="max-width: 1200px;">
    <h2>Demandes de Vols  </h2>
    <table class="table table-hover">
    <thead>
    <tr>
    <th>Numéro de commande </th>
    <th> Vols </th>
    <th> nombre d'adultes </th>
    <th>nombre d'enfants</th>
    <th> nombre de bébés </th>
    <th>Note</th>
    <th> le prix </th>
    <th> Créé à </th>
    
    <th>Etat</th>
    <th>des details</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($demondflights as $demondflight)
    <tr>
    <td>{{  $demondflight->id }}</td>
    @foreach ($flights as $flight)
     @if ($flight->id==$demondflight->flightid)
     <td>{{  $flight->name }}</td> 
     @endif 
    @endforeach
    
    <td>{{  $demondflight->adulte }}</td>
    <td>{{  $demondflight->children }}</td>
    <td>{{  $demondflight->babies }}</td>
    <td>{{  $demondflight->note }}</td>
    <td>{{  $demondflight->price }}</td>
    <td>{{  $demondflight->created_at }}</td>
    <td>{{  $demondflight->status }}</td>
    <td style="display: block ruby;">  <button type="button" style="margin: 5px;    padding: 8px 8px;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#flightModal{{  $demondflight->id }}">View</button>
    </td>
    </tr>
    @endforeach
    
    </tbody>
    </table>
    </div>
    @foreach ($demondflights as $demondflight)
    <!-- Modal -->
    <div class="modal fade" id="flightModal{{ $demondflight->id }}" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Participant</h4>
    </div>
    <div class="modal-body" style="    padding-left: 30px;">
    @php
      $x=0;
    @endphp
       <div class="row">
        <h5>Adultes </h5>
      </div>
      <div class="row">
        <div class="col-md-2">
        <p> Civilité </p>
    </div>
    
        <div class="col-md-3">
        <p> Prénom  </p>
    </div>
    
        <div class="col-md-3">
        <p>Nom</p>
    </div>
    
        <div class="col-md-4">
        <p>Date de naissance</p>
        
    
        </div>
      
        </div>
    @foreach ($peopleflight as $peoplefligh)
    @if ($peoplefligh->demondid==$demondflight->id)
    @if ($peoplefligh->type=="Adulte")
    <div class="row">
    <div class="col-md-2">
    <p><span>{{$peoplefligh->civity  }}</span></p>
</div>

    <div class="col-md-3">
    <p>  <span>{{$peoplefligh->fname  }}</span></p>
</div>

    <div class="col-md-3">
    <p> <span>{{$peoplefligh->lname  }}</span></p>
</div>

    <div class="col-md-4">
    <p> <span>{{$peoplefligh->birth  }}</span></p>
    

    </div>
  
    </div>
  
    
    @endif @endif 
    @endforeach
    <div class="row">
        <h5>Enfant </h5>
      </div>
      <div class="row">
        <h5>Adultes </h5>
      </div>
      <div class="row">
       
    
        <div class="col-md-4">
        <p> Prénom  </p>
    </div>
    
        <div class="col-md-4">
        <p>Nom</p>
    </div>
    
        <div class="col-md-4">
        <p>Date de naissance</p>
        
    
        </div>
      
        </div>
    @foreach ($peopleflight as $peoplefligh)
    @if ($peoplefligh->demondid==$demondflight->id)
    @if ($peoplefligh->type=="Enfant")

    <div class="row">
  

    <div class="col-md-4">
    <p>  <span>{{$peoplefligh->fname  }}</span></p>
</div>

    <div class="col-md-4">
    <p> <span>{{$peoplefligh->lname  }}</span></p>
</div>

    <div class="col-md-4">
    <p> <span>{{$peoplefligh->birth  }}</span></p>
    

    </div>
  
    </div>
  
    
    @endif 
    @endif 
    @endforeach
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    
    </div>
    </div>
    @endforeach
    
    <br/>
    </div><!-- end page-cover -->
                      </div><!-- end cars -->
                      
                  </div><!-- end tab-content -->
                  
              </div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end container -->
  </div><!-- end search-tabs -->
  
</section><!-- end flexslider-container -->




@include('include.footer')
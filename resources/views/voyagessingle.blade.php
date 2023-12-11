
@include('include.header')

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
                <h1 class="page-title">Voyages  </h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Voyages </li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="hotel-grid" class="innerpage-section-padding">
        <div class="container">
            <div class="row">            
                
                
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 content-side">
                    <div class="row">
                    @foreach ($travels as $travel)
                    @if ($travel->status!="Disable")
                        
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="grid-block main-block h-grid-block">
                            <div class="main-img h-grid-img">
                                <a href="{{ route('travelemond',['id'=>$travel->id]) }}">
                                    <img src="{{ url('storage/app/public/'.$travel->cover) }}" class="img-fluid" alt="hotel-img" />
                                </a>
                              
                            </div><!-- end h-grid-img -->
                            
                             <div class="block-info h-grid-info">
                                 <div class="rating">
                                     @php
                                     $x=0;    
                                     @endphp
                                     @for ($i = 0; $i < $travel->rate; $i++)
                                     <span><i class="fa fa-star orange"></i></span>
                                
                                     @endfor
                                   @if ($travel->rate<5)
                                   @for ($i = $travel->rate; $i < 5; $i++)
                                   <span><i class="fa fa-star lightgrey"></i></span>
                              
                                   @endfor
                                       
                                   @endif
                              
                                </div><!-- end rating -->
                                
                                 <h3 class="block-title"><a href="{{ route('travelsingle.demond',['id'=>$travel->id]) }}">{{ $travel->name }}</a></h3>
                                <p class="block-minor">Lieu : {{ $travel->location }}</p>
                                <p>{{ $travel->discrip }} </p>
                                <div class="grid-btn">
                                    <a href="{{ route('travelsingle.demond',['id'=>$travel->id]) }}" class="btn btn-orange btn-block btn-lg">Voir plus</a>
                                </div><!-- end grid-btn -->
                             </div><!-- end h-grid-info -->
                        </div><!-- end h-grid-block -->
                    </div><!-- end columns -->
                      
                    @endif
                    @endforeach
                     
              
                 

                    </div><!-- end row -->
                    
                    <div class="pages">
                        {{ $travels->links() }}
                    </div><!-- end pages -->
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end hotel-grid -->
</section><!-- end innerpage-wrapper -->



@include('include.footer')

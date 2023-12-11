
@include('include.header')
     
        
                <!--========================= FLEX SLIDER =====================-->
                <section class="flexslider-container" id="flexslider-container-1">
        
                    <div class="flexslider slider" id="slider-1">
                        <ul class="slides">
                            @foreach ($sliders as $slider)
                            <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url({{ asset('/storage/app/public/'.str_replace('\\', '/', $slider->img)) }}) 50% 0%;background-size:cover;
                                height:100%;">
                                <div class=" meta">         
                                    <div class="container">
                                        <h2>{{ $abouts->title }}</h2>
                                        <h1>{{ $abouts->subtitle }}</h1>
                                        <a href="{{ route('about') }}" class="btn btn-default">View More</a>
                                    </div><!-- end container -->  
                                </div><!-- end meta -->
                            </li><!-- end item-1 --> 
                            @endforeach
                         
                          
                        </ul>
                    </div><!-- end slider -->
                    
                    <div class="search-tabs" id="search-tabs-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                
                                    <ul class="nav nav-tabs justify-content-center">
                                        <li class="nav-item active"><a class="nav-link active" href="#login" data-toggle="tab"><span><i class="fa fa-user"></i></span><span class="d-md-inline-flex d-none st-text">login</span></a></li>
                                    </ul>
                
                                    <div class="tab-content">
                                        <div id="login" class="tab-pane in active">
                                                           <form method="POST" action="{{ route('login') }}">
                        @csrf               
                                                <div class="row">
                                                
                                                    <div class="col-12 col-md-12 col-lg-10 col-xl-10">
                                                        <div class="row">
                                                        
                                                            <div class="col-md-6 col-lg-6">
                                                                <div class="form-group left-icon">
                                                                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="entrer l'e-mail " />
                                                                    @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                </div>
                                                            </div><!-- end columns -->
                                                            
                                                            <div class="col-md-6 col-lg-6">
                                                                <div class="form-group left-icon">
                                                                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Entrer le mot de passe " />
                                                                    @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                </div>
                                                            </div><!-- end columns -->
                                                            
                                                     
                                                            
                                                        </div><!-- end row -->
                                                    </div><!-- end columns -->
                    
                                                    <div class="col-2 col-md-2 col-lg-2 col-xl-2 search-btn">
                                                        <button class="btn btn-orange">Login</button>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->                    
                                            </form>
                                        </div><!-- end cars -->
                                        


                                    </div><!-- end tab-content -->
                                    
                                </div><!-- end columns -->
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div><!-- end search-tabs -->
                    
                </section><!-- end flexslider-container -->
                
                
        <!--========================= BEST FEATURES =======================-->
        <section id="best-features" class="banner-padding lightgrey-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-dollar"></i></span>
                            <h3>Service des visas </h3>
                    
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-lock"></i></span>
                            <h3>Service de réservation d'hôtel</h3>
                           
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <h3>Permis de conduire</h3>
                       
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-bars"></i></span>
                            <h3>Service touristique </h3>
                            
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end best-features -->



            @include('include.footer')
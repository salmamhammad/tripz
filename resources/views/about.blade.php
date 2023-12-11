
@include('include.header')
  
        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Qui sommes nous</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('/') }}">DOMICILE</a></li>
                            <li class="breadcrumb-item">Qui sommes nous</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="about-us">
                <div id="about-content" class="section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="flex-content">
                                    <div class="flex-content-img about-img">
                                        <img src="{{ asset('storage/app/public/'.$sliders->img) }}" class="img-fluid" alt="about-img" />
                                </div><!-- end about-img -->
                                        <div class="about-text">
                                            <div class="about-detail">
                                                <h2>{{ $abouts->titleabout }}</h2>
                                                <p>{{ $abouts->textabout1 }}</p>
                                                <p>{{ $abouts->textabout2 }}</p>
                                            </div><!-- end about-detail -->
                                        </div><!-- end about-text -->
                                    </div><!-- end flex-content -->
                                </div><!-- end columns -->
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div><!-- end about-content -->
                </div><!-- end container -->
            </section><!-- end page-cover -->


@include('include.footer')
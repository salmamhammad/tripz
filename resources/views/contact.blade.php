
@include('include.header')
<style>
    .custom-form {
    padding: 69px 40px 70px;
}
</style>
    <!--================ PAGE-COVER ===============-->
    <section class="page-cover" id="cover-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Nous Contacter</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('/') }}">DOMICILE</a></li>
                        <li class="breadcrumb-item">Nous Contacter</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->
    
    
    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="contact-us" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
    
                    <div class="col-md-12 col-lg-5 no-pd-r">
                        <div class="custom-form contact-form">
                            <h3>Nous Contacter</h3>
                            <form action="{{ route('contact.send') }}" name="frm_contact" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Nom"  name="name" id="txt_name"/>
                                     <span><i class="fa fa-user"></i></span>
                                </div>
        
                                <div class="form-group">
                                     <input type="email" class="form-control" placeholder="Email"  name="email" id="txt_email"/>
                                     <span><i class="fa fa-envelope"></i></span>
                                </div>
                                
                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Sujet " name="subject" id="txt_phone"/>
                                     <span><i class="fa fa-phone"></i></span>
                                </div>
                                        
                                <div class="form-group">
                                    <textarea class="form-control" rows="4" placeholder="Votre message " name="message" id="txt_message"></textarea>
                                    <span><i class="fa fa-pencil"></i></span>
                                </div>
                                        <div class="col-md-12 text-center" id="result_msg"></div>
                                <button name="submit" id="submit" class="btn btn-orange btn-block">Envoyer </button>
                            </form>
                        </div><!-- end contact-form -->
                    </div><!-- end columns -->
                    
                    <div class="col-md-12 col-lg-7 no-pd-l">
                        <div class="map">
                          @php
                              $map= setting('site.map');
                          @endphp
                            <?php echo htmlspecialchars_decode( $map ); ?>
                        </div><!-- end map -->
                    </div><!-- end columns -->
                    
                </div><!-- end row -->
            </div><!-- end container -->   
        </div><!-- end contact-us -->
    </section><!-- end innerpage-wrapper -->
    
    

@include('include.footer')




<!doctype html>
<html lang="en">
    
<head>
        <title>Login </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
                <link rel="stylesheet" href="{{ asset('css/bootstrap-4.4.1.min.css') }}">
        

        <!-- Sidebar Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" id="cpswitch" href="{{ asset('css/orange.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <style>
            .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url("{{ asset('/images/logo.png') }}") center no-repeat #fff;
}
#full-page-form .custom-form {
    margin: 0 auto;
    width: 100%;
}
#full-page-form .custom-form select {
    background: #f2f2f2;
}
.custom-form .form-group select, .custom-form .form-group textarea {
    border-radius: 0px;
    border: 0px;
}
.custom-form .form-group select {
    height: 45px;
    padding-left: 20px;
}
            </style>
    </head>
    
    
    <body>
    
        <!--====== LOADER =====-->
        <div class="loader"></div>
    
        
        <!--===== FULL-PAGE-FORM ====-->
        <section>
            <div class="colored-border"></div>
            <div id="full-page-form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="full-page-title">
                                <a href="{{ route('/') }}" class="navbar-brand py-1 m-0"><span>E</span>LJOURI <span>B</span>OOKING <img style="width: 20%;" src="{{ asset('/images/logo1.png') }}" /></a>
                            </div><!-- end full-page-title -->
                            
                            <div class="custom-form custom-form-fields">
                                <h3>S'inscrire </h3>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <h5>Se connecter 
                                            </h5>
                                      
                                 
                                    <div class="form-group ">
                                    
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail * ">
                                            <span><i class="fa fa-envelope"></i></span>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                              
                                    </div>
                              
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="le mot de passe * ">
                                        <span><i class="fa fa-lock"></i></span>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                  
                                    <button class="btn btn-orange btn-block">                                  S'inscrire 
                                    </button>
                            
                           
                                </form>
                             <!-- end custom-form -->
                            
                            <p class="full-page-copyright">   ©Tous les droits sont réservés .</p>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
        	</div><!-- end full-page-form -->
            <div class="colored-border"></div>
		</section>
        

        <!-- Page Scripts Starts -->
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-4.4.1.min.js') }}"></script>
        <script src="{{ asset('js/custom-navigation.js') }}"></script>
        <!-- Page Scripts Ends -->
    </body>

</html>


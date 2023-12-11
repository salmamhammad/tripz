   
        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1 "  >
        
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
                <div class="container">
                    <div class="row">
                                
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 footer-widget ftr-contact">
                            <h3 class="footer-heading">NOUS CONTACTER</h3>
                            <ul class="list-unstyled">
                                <li><span><i class="fa fa-map-marker"></i></span>{{ setting('site.address') }}</li>
                                <li><span><i class="fa fa-phone"></i></span>{{ setting('site.phone') }}</li>
                                <li><span><i class="fa fa-envelope"></i></span>{{ setting('site.email') }}</li>
                            </ul>
                        </div><!-- end columns -->
                        
                        
                        
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer-widget ftr-links ftr-pad-left">
                            <h3 class="footer-heading">PAGES </h3>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('/') }}">DOMICILE</a></li>
                                <li><a href="{{ route('about') }}">Qui sommes nous</a></li>
                                <li><a href="{{ route('contact') }}">Nous Contacter</a></li>
                      
                            </ul>
                        </div><!-- end columns -->
        
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 footer-widget ftr-about">
                            <h3 class="footer-heading">À PROPOS DE NOUS </h3>
                            <p>{{ setting('site.description') }}</p>
                            <ul class="social-links list-inline list-unstyled">
                               @if (setting('site.facebook')!="")
                               <li class="list-inline-item"><a href="{{ setting('site.facebook') }}"><span><i class="fa fa-facebook"></i></span></a></li> 
                               @endif 
                               @if (setting('site.twiter ')!="")
                               <li class="list-inline-item"><a href="{{ setting('site.instagram') }}"><span><i class="fa fa-twitter"></i></span></a></li>

                               @endif
                               @if (setting('site.instagram')!="")
                                <li class="list-inline-item"><a href="{{ setting('site.twiter') }}"><span><i class="fa fa-instagram"></i></span></a></li>
                                @endif
                              
                            </ul>
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->
        
            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6 col-xl-6" id="copyright" style="display: flex; float: right !important">
                            Produced by 
                            <div class="footerinternal"></div>
                        </div><!-- end columns -->
                        <div class="col-6 col-md-6 col-lg-6 col-xl-6" id="copyright">
                            <p>©Tous les droits sont réservés .</p>
                        </div><!-- end columns -->
                     
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            
        </section><!-- end footer -->
        
        
         
                        
    <!-- Page Scripts Starts -->
    <script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
    <script src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("js/jquery.mCustomScrollbar.concat.min.js") }}"></script>
    <script src="{{ asset("js/bootstrap-4.4.1.min.js") }}"></script>
    <script src="{{ asset("js/jquery.flexslider.js") }}"></script>
    <script src="{{ asset("js/bootstrap-datepicker.js") }}"></script>
    <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("js/custom-navigation.js") }}"></script>
    <script src="{{ asset("js/custom-flex.js") }}"></script>
    <script src="{{ asset("js/custom-owl.js") }}"></script>
    <script src="{{ asset("js/custom-date-picker.js") }}"></script>
    <script src="{{ asset("js/custom-video.js") }}"></script>
    <script src="{{ asset("js/popup-ad.js") }}"></script>
    <!-- Page Scripts Ends -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  @if(Session::has('success'))

toastr.success("{{ Session::get('success') }}")

 @endif
 @if(Session::has('infor'))

toastr.warning("{{ Session::get('infor') }}")

 @endif

$( document ).ready(function(){
     $('.footerinternal').html(' <div class="row ">'+
                  ' <div class="col-lg-12">'+
            ' <a href="https://mostaql.com/u/iron_women" target="_blank" class="logo"><img Style="height:40px" src="{{ asset("/images/obj.png") }}" alt="logo"></a> '+
           '  </div>');
});

 $('.country').on('change', function() {
//   alert( this.value );
var country=this.value;
$(".visacountry").each(function() {
    $(this).css('display','none');
});
$('.visass').prop("disabled", false); // Element(s) are now enabled.
$("."+country).each(function() {
    $(this).css('display','block');
});


});

$(".clickcategory").on('click', function() {
//  alert( this.value );
    var value=this.value;
    if(value==0){
        $(".categories").css('display','block');
    }else{
        $(".categories").css('display','none');

$(".category"+value).css('display','block');

    }
   
});

$(".click").on('click', function() {
//  alert( this.value );
    var value=this.value;
   
        $(".categories").css('display','none');

$(".star"+value).css('display','block');

    
   
});
$('#todate').on('change', function () {
      var fromdate = $("#fromdate").val();
      var todate = $("#todate").val();
 
      if ((fromdate == "") || (todate == "")) {
        $("#result").html("Veuillez entrer la date d'arrivée et la date de départ  ");
        return false
      }
      $("#result").html('');
      var dt1 = new Date(fromdate);
      var dt2 = new Date(todate);
 
      var time_difference = dt2.getTime() - dt1.getTime();
      var result = time_difference / (1000 * 60 * 60 * 24);
      if(result<0){
          alert('Veuillez saisir la date d\'arrivée et de départ correcte ');
          return false
      }
 
    //   var output = "Total number of days between dates - " + result;
      $("#nights").val(result);
    });

    $('#fromdate').on('change', function () {
      var fromdate = $("#fromdate").val();
      var todate = $("#todate").val();
 
      if ((fromdate == "") || (todate == "")) {
        $("#result").html("Veuillez entrer la date d'arrivée et la date de départ  ");
        return false
      }
      $("#result").html('');
      var dt1 = new Date(fromdate);
      var dt2 = new Date(todate);
 
      var time_difference = dt2.getTime() - dt1.getTime();
      var result = time_difference / (1000 * 60 * 60 * 24);
      if(result<0){
          alert('Veuillez saisir la date d\'arrivée et de départ correcte ');
          return false
      }
 
    //   var output = "Total number of days between dates - " + result;
      $("#nights").val(result);
    });

    
    $('.firstbtn').on('click', function () {
        $( ".stageone").css('pointer-events','all');

        var numroom=  $( ".numberroms" ).val();
        var countx=  $( "#countx" ).val();
        var text="";

        for(let index = 0; index < numroom; index++) {
          text=  $( ".roomss" ).html();
          text+='     <div class="row " >'+
                   ' <h4>Chambre '+index+'</h4>  <br/> '+
                           ' </div>'+
                            ' <div class="row">'+
                               ' <div class="col-12 col-md-12 col-lg-12">'+
                               '  <div class="form-group right-icon">'+
                                      '   <select class=" typeroomindex form-control  type'+index+'" name="type'+index+'" required> '+
                                              '  <option selected>  Type de chambres *  </option>';

                                              for(let x = 1; x <= countx; x++) {
                                                var room=  $( ".hotelroom"+x ).val(); 
                                                var roomid= $( ".hotelroomid"+x ).val(); 
                                                
                                                text+=  '  <option value="'+roomid+'"> '+room+'  </option>';
                                              }     
                                              text+=      
                                        '   </select>'+
                                                              '  <i class=" fa fa-suitcase"></i>'+
                                                         ' </div>'+
                                                              '  </div><!-- end columns --></div>'+
                                                              ' <div class="row">'+
                               ' <div class="col-5 col-md-12 col-lg-6">'+
                               '  <div class="form-group right-icon">'+
                                      '   <select class=" serviceroomindex form-control serviceroom'+index+'" id="'+index+'" name="service'+index+'" required > '+
                                        '  <option selected>  type de service  *  </option>';
                                         
                                               for(let x = 1; x <= countx; x++) {
                                                   var room=  $( ".hotelroom"+x ).val(); 
                                                   var roomid= $( ".hotelroomid"+x ).val(); 
                                                   var county= $( "#county"+roomid ).val();
                                                   for(let y = 1; y <= county; y++) {
                                                    var roomsserviceid= $( ".roomsserviceid"+roomid+'y'+y ).val();  
                                                    var roomsservice= $( ".rooms"+roomid+'y'+y ).val();  
                                                   text+=  '  <option style="display:none;" class="optionservice'+index+'  optionserviceroom'+index+'room'+roomid+'" value="'+roomsserviceid+'"> '+roomsservice+'  </option>';
                                                         } 
                                               }    
                                                text+=      
                                                       '   </select>'+
                                                              '  <i class="fa fa-ticket"></i>'+
                                                         ' </div>'+
                                                              '  </div><!-- end columns -->'+
                                                              ' <div class="col-5 col-md-12 col-lg-6">'+
                               '  <div class="form-group right-icon" style="margin-top: 5px;">'+
                                     '  <p > Le prix :  <span id="priceeeee'+index+'" style="margin-left: 40%;font-size: 20px;font-weight: bold;"> 0</span></p>'+
                                     '          <input type="hidden" class="priceee'+index+'" name="price'+index+'"  value="" />'+
                                     '  <i class="fa fa-dollar"></i>'+
                                                         ' </div>'+
                                                              '  </div><!-- end columns -->' +
                                                             '</div><br/>'
                                                      
                                                    ;

                        
          $( ".roomss" ).html(text);           
        }
        $( ".stagetwo" ).click();
    });

    $(document).on('change','.typeroomindex', function () {
        var numroom=  $( ".numberroms" ).val();
        for(let index = 0; index < numroom; index++) {
           var roomtype=this.value;
            $( ".optionservice"+index).css('display','none');
            $( ".optionserviceroom"+index+'room'+roomtype ).css('display','block');
                                            
                                                         
        }
                                                        });
                                                        
    $(document).on('change','.serviceroomindex', function () {
        var idservice=this.value;

        var price=  $( ".serviceinputid"+idservice ).val();
        var nights=  $( "#nights" ).val();
      
        var numroom=  $( ".numberroms" ).val();
       var i=$(this).attr('id');
       $( "#priceeeee"+i).html(price);
       $( ".priceee"+i ).val(price);


        let total=0;
     
       for(let index = 0; index < numroom; index++) {
        let priceindex=  $( ".priceee"+index ).val();  
         total=total+priceindex*1;  
       }
    //    alert(total);
       $( ".total").html(total);
       $( ".numbernights").html(nights);
       $( ".totalnight").html(total*nights);
       $( "#totalhhhhhhprice").val(total*nights);
       //totalprice


                                                        });



                                                            
    $('.secondbtn').on('click', function () {
        let fromdate=  $( "#fromdate" ).val(); 
        $( "#arrivéeconf" ).html(fromdate);
        let todate=  $( "#todate" ).val(); 
        $( "#départconf" ).html(todate);
        let nights=  $( "#nights" ).val(); 
        $( "#nuitsconf" ).html(nights);
        let numberroms=  $( "#numberroms" ).val();
        $( "#chambresconf" ).html(numberroms); 
        let adult=  $( "#adult" ).val(); 
        $( "#adultsconf" ).html(adult);
        let chlid=  $( "#chlid" ).val(); 
        $( "#enfantsconf" ).html(chlid);

var text="";
         for (let xx = 0; xx < numberroms; xx++) {
            //  alert("gg");
            let typeid=  $( ".type"+xx ).val(); 
            let type=$( ".hotelroomservicefromid"+typeid ).val(); 
            let serviceroomid=  $( ".serviceroom"+xx ).val(); 
            let serviceroom=  $( ".servicetypefromid"+serviceroomid ).val(); 
            let priceee=  $( ".priceee"+xx ).val(); 

          text=$('.comfirrooms').html();
          text+='       <div style="border: 2px solid black;  padding: 5px; margin:10px;width: 100%;" >'+
                                   ' <div class="row" style="margin-left: 15px">'+
                                      '  <div class="col-md-12" >'+
                                        '  <h5>chambre'+xx+'</h5>'+
                                        '    <p>Type de chambres: <span id="arrivéeconf">'+type+'</span></p>'+

                                        '</div>'+
                                        '  <div class="col-md-6" >'+
                            
                                            '   <p>Type de service  : <span id="départconf">'+serviceroom+'</span></p>'+
  
                                
                                            '    </div>'+
                                            '   <div class="col-md-6">'+
                             
                                                '    <p>Le prix : <span id="chambresconf">'+priceee+'</span></p>'+
                                
                                                '  </div> </div> </div>' ; 
                                $('.comfirrooms').html(text);
             
         }

        $( ".stagetwo").css('pointer-events','all');
        $( ".stagefour" ).click();
    });
    $('.reqfirstbtn').on('click', function () {
        $( ".stageone").css('pointer-events','all');

        var adult=  $( "#adult" ).val();
        var chlid=  $( "#chlid" ).val();
        // var countx=  +adult + +chlid;
        // alert(countx);
        var text="";
//for adult
        for(let index = 0; index < adult; index++) {
          text=  $( ".roomss" ).html();
          text+='     <div class="row " >'+
                   ' <h4>Adulte '+index+'</h4>  <br/> '+
                           ' </div>'+
                            ' <div class="row">'+
                               ' <div class="col-4 col-md-4 col-lg-4">'+
                               '  <div class="form-group right-icon">'+
                                '   <select class=" civi form-control civi'+index+'" id="'+index+'" name="civi'+index+'" required > '+
                                        '  <option selected> Civilité*:  </option>'+  
                                        '  <option > Mr  </option>'+     
                                        '  <option > Mme  </option>'+     
                                        '  <option > Mlle  </option>'+     

                                                       '   </select>'+
                                                              '  <i class=" fa fa-bookmark-o"></i>'+
                                                         ' </div>'+
                                                              '  </div><!-- end columns -->'+
                                                             
                                                                ' <div class="col-4 col-md-4 col-lg-4">'+
                               '  <div class="form-group right-icon">'+
                                '  <input type="text"  name="fname'+index+'" id="fname'+index+'" class="form-control numberroms" required placeholder="Prénom*:" >'+

                                                              '  <i class="fa fa-drivers-license"></i>'+
                                                         ' </div>'+
                                                              '  </div><!-- end columns -->'+
                                                              ' <div class="col-4 col-md-4 col-lg-4">'+
                               '  <div class="form-group right-icon" style="margin-top: 5px;">'+
                                '  <input type="text"  name="lname'+index+'" id="lname'+index+'" class="form-control numberroms" required placeholder="Nom*:" >'+
                                  '  <i class=" 	fa fa-drivers-license-o"></i>'+
                                                         ' </div>'+
                                                              '  </div><!-- end columns -->' +
                                                             '</div><br/>'
                                                      
                                                    ;

                        
          $( ".roomss" ).html(text);           
        }
        //for child
        for(let index = 0; index < adult; index++) {
          text=  $( ".roomss" ).html();
          text+='     <div class="row " >'+
                   ' <h4>Enfant '+index+'</h4>  <br/> '+
                           ' </div>'+
                            ' <div class="row">'+
                               ' <div class="col-4 col-md-4 col-lg-4">'+
                               '  <div class="form-group right-icon">'+
                                '  <input type="text"  name="fname'+index+'" id="fname'+index+'" class="form-control numberroms" required placeholder="Prénom*:" >'+

                                                              '  <i class=" fa fa-drivers-license"></i>'+
                                                         ' </div>'+
                                                              '  </div><!-- end columns -->'+
                                                              
                               ' <div class="col-4 col-md-4 col-lg-4">'+
                               '  <div class="form-group right-icon">'+
                                '  <input type="text"  name="lname'+index+'" id="lname'+index+'" class="form-control numberroms" required placeholder="Nom*:" >'+

                                                              '  <i class=" 	fa fa-drivers-license-o"></i>'+
                                                         ' </div>'+
                                                              '  </div><!-- end columns -->'+
                                                              ' <div class="col-4 col-md-4 col-lg-4">'+
                               '  <div class="form-group right-icon" style="margin-top: 5px;">'+
                                '                                             <input type="text" id="fromdate" onfocus="(this.type=`date`)" name="birth'+index+'" class="form-control" required placeholder="Date de naissance * " >'+
                                  '  <i class=" fa fa-calendar"></i>'+
                                                         ' </div>'+
                                                              '  </div><!-- end columns -->' +
                                                             '</div><br/>'
                                                      
                                                    ;

                        
          $( ".roomss" ).html(text);           
        }
        $( ".stagetwo" ).click();
    });
    $('.secondbtnreq').on('click', function () {
       
        $( ".stagetwo").css('pointer-events','all');
        $( ".stagefour" ).click(); 
    });


    $('.hotelbtn').on('click', function(e) {
            // alert($(this).val());
            $( ".hootel").css('display','none');

    var value = $(this).val().toLowerCase();
    // alert(value);
    $( "."+value).css('display','block');

            });


            $('.first').on('click', function () {
       
       $( ".stageone").css('pointer-events','all');
       $( ".stagetwo" ).click(); 
   });
   $('.second').on('click', function () {
       
       $( ".stagetwo").css('pointer-events','all');
       $( ".stagefour" ).click(); 
   });

   $('.third').on('click', function () {
       
       $( ".stagefour").css('pointer-events','all');
       $( ".stagefifth" ).click(); 
   });

   ////////////////

   $('.childern').on('change', function () {
    //    alert(this.value);
    let num=this.value;
    $( ".ages").html(``);
    for (let index = 1; index <= num; index++) {
        // const element = array[index];
        var age=  $( ".ages").html();
        $( ".ages").html(age+`
        
        <div class="col-12 col-md-12 col-lg-4 col-xl-4" >
                                    <label  >Age enf.`+index+`</label>
                                    <div class="form-group right-icon">
                                      
                                        <select   name="childernage`+index+`" id="childernage`+index+`" class="form-control" required placeholder="Nombre de adults * " >
                                          <option value="2"  class="form-control">2</option>
                                            <option value="3"  class="form-control">3</option>
                                            <option value="4"  class="form-control">4</option>
                                            <option value="5"  class="form-control">5</option>
                                            <option value="6"  class="form-control">6</option>
                                            <option value="7"  class="form-control">7</option>
                                            <option value="8"  class="form-control">8</option>
                                            <option value="9"  class="form-control">9</option>
                                            <option value="10"  class="form-control">10</option>
                                            <option value="11"  class="form-control">11</option>

                                        </select>

                                      
                                    </div>
                                </div><!-- end columns -->`);
    }
   });

   function getRating(el) {
     
    // let accom=this.value;
    let adulte=  $('#adult').val();
    let accom=  $('.priceacomnd'+el.value).val();
    let totalprice=  $('#totalprice').val();
    // alert(accom);
    // $( ".pricee").html(accom*adulte);
    if(el.checked == false){
    $( "#totalprice").val(+totalprice-accom);
    $( ".totalprice").html(+totalprice-accom);
    }else{
        $( "#totalprice").val(+accom+ +totalprice);
    $( ".totalprice").html(+accom+ +totalprice);   
    }
   }; 
   function getprice(el) {
     
     // let accom=this.value;
     let adulte=  $('#totalnum').val();
     let accom=  $('.priceoffer'+el.value).val();
     let totalprice=  $('#totalprice').val();
     let priceeoffer=  $('#priceeoffer').val();
     // alert(accom);
     if(el.checked == false){
    //  $( ".priceeoffer").html(accom*adulte);
     $( "#totalprice").val( +totalprice-accom*adulte);
    $( ".totalprice").html(+totalprice-accom*adulte);
}else{
    $( ".priceeoffer").html(accom*adulte);
     $( "#totalprice").val(+accom*adulte+ +totalprice);
     $( "#priceeoffer").val(accom*adulte+ +priceeoffer);
    $( ".totalprice").html(+accom*adulte+ +totalprice);  
    }
    }; 
//////////////////////////

$('.adult').on('change', function () {
    let num =this.value;
    let price=$('.adultprice').val();
    let totaladultprice=price*num;
    $( ".adultoutput").html(price*num);
    let childtotal=$('.totalchildprice').val();
    let totalbebes=$('.totalbebesprice').val();
    $( ".totaloutput").html(price*num+ +childtotal+ +totalbebes);
    $( ".totalprice").val(price*num+ +childtotal+ +totalbebes);
    $( ".totaladultprice").val(price*num);

    $( ".datapeople").html('');
    for (let index = 1; index <= num; index++) {
        // const element = array[index];
        var datapeople=  $( ".datapeople").html();
        $( ".datapeople").html(datapeople+` 
        <div class="row form-group" name="name2" id="listAd_`+index+`" style="">
                                   
                                   <div class="col-md-12 mb-3">
                                     <i class=" fa fa-user-circle-o"></i>
                                       Passager `+index+`, adulte
                                   </div>
                                
                                  <div class="col-md-12 mb-3">
                                      <div class="row">  
                                         <div class="col-md-2">
                                          <input type="radio" id="title1" name="title_AD_`+index+`" value="Mr"> 
                                           <label for="title1"> Mr</label>
                                        </div>
                                        <div class="col-md-2">
                                          <input type="radio" id="title2" name="title_AD_`+index+`" value="Mme">
                                          <label for="title2">Mme</label>
                                        </div>
                                       </div>
                                   </div>
       
                                 <div class="col-md-4">
                                     <label>Nom de famille</label>
                              
                                   <input type="text" name="lastName_AD_`+index+`" id="lastName_AD_1" class="form-control" placeholder="Nom" required="required">
                                 </div>
                                   <div class="col-md-4">
                                     <label>Prénom</label>
                                       <input type="text" name="firstName_AD_`+index+`" id="firstName_AD_1" class="form-control " placeholder="Prénom" required="required">
                                   </div>
                                 <div class="col-md-4">
                                   <label>Date de naissance</label>
                                   <input type="date" name="age_AD_`+index+`" id="age_AD_1" class="form-control " placeholder="Date de naissance *" required="required">
                                 </div>
                         
                             </div>`);
    }
});



$('.child').on('change', function () {
    let num =this.value;
    let price=$('.childprice').val();
    $( ".datachiledren").html('');
    $( ".childoutput").html(price*num);

    let totalchildprice=price*num;
    let adulttotal=$('.totaladultprice').val();
    let totalbebes=$('.totalbebesprice').val();
    $( ".totaloutput").html(totalchildprice+ +adulttotal+ +totalbebes);
    $( ".totalprice").val(totalchildprice+ +adulttotal+ +totalbebes);
    $( ".totalchildprice").val(totalchildprice);


    for (let index = 1; index <= num; index++) {
        // const element = array[index];
        var datachiledren=  $( ".datachiledren").html();
        $( ".datachiledren").html(datachiledren+` 
                <div class="row form-group" id="listEn_`+index+`" >
                                      <div class="col-md-12 mb-3">
                                        <i class=" fa fa-user-circle"></i>  Passager `+index+`, Enfant
                                        </div>
                                 
                                  <div class="col-md-4">
                                    <input type="text" name="firstName_EN_`+index+`" id="firstName_EN_1" class="form-control " placeholder="Prénom">
                                  </div>
                                  <div class="col-md-4">
                                    <input type="text" name="lastName_EN_`+index+`" id="lastName_EN_1" class="form-control " placeholder="Nom">
                                  </div>
                                  <div class="col-md-4">
                                    <input type="date" name="age_EN_`+index+`" id="age_EN_1" class="form-control " placeholder="Date de naissance *">
                                  </div>
                                  
                                </div>`);
    }
});

$('.bebes').on('change', function () {
    let num =this.value;
    let price=$('.bebesprice').val();
    $( ".bebesoutput").html(price*num);

    
    let totalbebesprice=price*num;
    let adulttotal=$('.totaladultprice').val();
    let totalchildprice=$('.totalchildprice').val();
    $( ".totaloutput").html(totalbebesprice+ +adulttotal+ +totalchildprice);
    $( ".totalprice").val(totalbebesprice+ +adulttotal+ +totalchildprice);
    $( ".totalbebesprice").val(totalbebesprice);


});


</script>

@if(session('donee')==1)
 <script>
        $(document).ready(function () {

$('#endModal').modal('show'); //open modal

        });
 </script>
@endif
@php
Session::put('donee', 0);
@endphp
</body>

</html>

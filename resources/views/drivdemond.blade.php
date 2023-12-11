
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
                <h1 class="page-title"> Demande de permis de conduire  </h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">permis</li>
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
                        <li class="nav-item active" style="    border: 1px solid #e6e6e6;"><a class="nav-link stageone"  style="padding: 20px;  pointer-events: none;" href="#flights" data-toggle="tab"><span style="color: #fd9a00;" >1</span>  &nbsp;  <span class="d-md-inline-flex d-none st-text">DÉTAILS DU PERMIS DE CONDUIRE </span></a></li>
                        <li class="nav-item" style="    border: 1px solid #e6e6e6;"><a class="nav-link stagetwo" style="padding: 20px;  pointer-events: none;" href="#hotels" data-toggle="tab"><span style="color: #fd9a00;" >2</span>  &nbsp; <span class="d-md-inline-flex d-none st-text"> INFORMATIONS POSTALES </span></a></li>
                        <li class="nav-item" style="    border: 1px solid #e6e6e6;"><a class="nav-link stagefour" style="padding: 20px;  pointer-events: none;" href="#cruise" data-toggle="tab"><span style="color: #fd9a00;" >4</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">DÉTAILS DU PROFIL  </span></a></li>
                        <li class="nav-item" style="    border: 1px solid #e6e6e6;"><a class="nav-link stagefifth" style="padding: 20px;  pointer-events: none;" href="#confirm" data-toggle="tab"><span style="color: #fd9a00;" >4</span>  &nbsp; <span class="d-md-inline-flex d-none st-text">confirmation  </span></a></li>
                    </ul>
                    <form action="{{ url('/demonddriv') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="tab-content" style="    border: 1px solid #e6e6e6;">

                        <div id="flights" class="tab-pane in active">
                         
                                <div class="row">
                                    
                                    <h3>La demande</h3>  <br/> 
                                    
                                </div>
                              

                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="fname" id="name" class="form-control numberroms" required placeholder=" Prénom * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                               
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="lname" id="name" class="form-control numberroms" required placeholder="  nom de famille  * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="address" id="name" class="form-control numberroms" required placeholder="  adresse * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="city" id="name" class="form-control numberroms" required placeholder="  ville * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="province" id="name" class="form-control numberroms" required placeholder="  Province * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="zipcode" id="name" class="form-control numberroms" required placeholder="   code postal  * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group right-icon">
                                            <select name="country" class="form-control" required>
                                                <option value="" selected>  pays  *</option>
                                               
    <option value="Afghanistan">Afghanistan</option>
    <option value="Aland_Islands">Aland Islands</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American_Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antarctica">Antarctica</option>
    <option value="Antigua_and_Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bonaire_Sint_Eustatius_and_Saba">Bonaire, Sint Eustatius and Saba</option>
    <option value="Bosnia_and_Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet_Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British_Indian_Ocean_Territory">British Indian Ocean Territory</option>
    <option value="Brunei_Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina_Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cabo_Verde">Cabo Verde</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cayman_Islands">Cayman Islands</option>
    <option value="Central_African_Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas_Island">Christmas Island</option>
    <option value="Cocos_Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo_Democratic_Republic">Congo, Democratic Republic of the Congo</option>
    <option value="Cook_Islands">Cook Islands</option>
    <option value="Costa_Rica">Costa Rica</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Curaçao">Curacao</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czechia">Czech Republic</option>
    <option value="Côte_d'Ivoire">Côte d'Ivoire</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican_Republic">Dominican Republic</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El_Salvador">El Salvador</option>
    <option value="Equatorial_Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Eswatini">Eswatini</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland_Islands">Falkland Islands (Malvinas)</option>
    <option value="Faroe_Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French_Guiana">French Guiana</option>
    <option value="French_Polynesia">French Polynesia</option>
    <option value="French_Southern_Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guernsey">Guernsey</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard_Island_and_McDonald_Islands">Heard Island and Mcdonald Islands</option>
    <option value="Holy_See">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong_Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran, Islamic Republic of</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Isle_of_Man">Isle of Man</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jersey">Jersey</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Korea_Democratic_People">Korea, Democratic People's Republic of</option>
    <option value="Korea_Republic">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao_People's_Democratic_Republic">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macao">Macao</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall_Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia_Federated_States">Micronesia, Federated States of</option>
    <option value="Moldova_Republic">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montenegro">Montenegro</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="New_Caledonia">New Caledonia</option>
    <option value="New_Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk_Island">Norfolk Island</option>
    <option value="Northern_Mariana_Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Palestine">Palestinian Territory, Occupied</option>
    <option value="Panama">Panama</option>
    <option value="Papua_New_Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto_Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Republic_North_Macedonia">Republic of North Macedonia</option>
    <option value="Réunion">Réunion</option>
    <option value="Romania">Romania</option>
    <option value="Russian_Federation">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint_Barthélemy">Saint Barthelemy</option>
    <option value="Saint_Helena_Ascension_and_Tristan_da_Cunha">Saint Helena</option>
    <option value="Saint_Kitts_and_Nevis">Saint Kitts and Nevis</option>
    <option value="Saint_Lucia">Saint Lucia</option>
    <option value="Saint_Martin_French_part">Saint Martin</option>
    <option value="Saint_Pierre_and_Miquelon">Saint Pierre and Miquelon</option>
    <option value="Saint_Vincent_and_the_Grenadines">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San_Marino">San Marino</option>
    <option value="Sao_Tome_and_Principe">Sao Tome and Principe</option>
    <option value="Saudi_Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Serbia">Serbia</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra_Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Sint_Maarten_(Dutch_part)">Sint Maarten</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon_Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South_Africa">South Africa</option>
    <option value="South_Georgia_and_the_South_Sandwich_Islands">South Georgia and the South Sandwich Islands</option>
    <option value="South_Sudan">South Sudan</option>
    <option value="Spain">Spain</option>
    <option value="Sri_Lanka">Sri Lanka</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard_and_Jan_Mayen">Svalbard and Jan Mayen</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syrian_Arab_Republic">Syrian Arab Republic</option>
    <option value="Taiwan">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania_United_Republic_of">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Timor-Leste">Timor-Leste</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad_and_Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks_and_Caicos_Islands">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United_Arab_Emirates">United Arab Emirates</option>
    <option value="United_Kingdom_of_Great_Britain_and_northern_Ireland">United Kingdom</option>
    <option value="United_States_of_America">United States</option>
    <option value="United_States_Minor_Outlying_Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela_Bolivarian_Republic">Venezuela</option>
    <option value="Viet_Nam">Viet Nam</option>
    <option value="Virgin_Islands_British">Virgin Islands, British</option>
    <option value="Virgin_Islands_US">Virgin Islands, U.s.</option>
    <option value="Wallis_and_Futuna">Wallis and Futuna</option>
    <option value="Western_Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>

                                              </select>
                                            <i class="fa fa-university"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group right-icon">
                                            <input type="text" id="fromdate" onfocus="(this.type='date')" name="databirth" class="form-control" required placeholder=" date de naissance  * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                   
                                    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group right-icon">
                                            <select name="countrybirth" class="form-control" required>
                                                <option value="" selected>   pays de naissance   *</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Aland_Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American_Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua_and_Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire_Sint_Eustatius_and_Saba">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="Bosnia_and_Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet_Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British_Indian_Ocean_Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei_Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina_Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cabo_Verde">Cabo Verde</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cayman_Islands">Cayman Islands</option>
                                                <option value="Central_African_Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas_Island">Christmas Island</option>
                                                <option value="Cocos_Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo_Democratic_Republic">Congo, Democratic Republic of the Congo</option>
                                                <option value="Cook_Islands">Cook Islands</option>
                                                <option value="Costa_Rica">Costa Rica</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaçao">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czechia">Czech Republic</option>
                                                <option value="Côte_d'Ivoire">Côte d'Ivoire</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican_Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El_Salvador">El Salvador</option>
                                                <option value="Equatorial_Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Eswatini">Eswatini</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland_Islands">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe_Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French_Guiana">French Guiana</option>
                                                <option value="French_Polynesia">French Polynesia</option>
                                                <option value="French_Southern_Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard_Island_and_McDonald_Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy_See">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong_Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle_of_Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea_Democratic_People">Korea, Democratic People's Republic of</option>
                                                <option value="Korea_Republic">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao_People's_Democratic_Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall_Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia_Federated_States">Micronesia, Federated States of</option>
                                                <option value="Moldova_Republic">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="New_Caledonia">New Caledonia</option>
                                                <option value="New_Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk_Island">Norfolk Island</option>
                                                <option value="Northern_Mariana_Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestine">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua_New_Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto_Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic_North_Macedonia">Republic of North Macedonia</option>
                                                <option value="Réunion">Réunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian_Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint_Barthélemy">Saint Barthelemy</option>
                                                <option value="Saint_Helena_Ascension_and_Tristan_da_Cunha">Saint Helena</option>
                                                <option value="Saint_Kitts_and_Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint_Lucia">Saint Lucia</option>
                                                <option value="Saint_Martin_French_part">Saint Martin</option>
                                                <option value="Saint_Pierre_and_Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint_Vincent_and_the_Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San_Marino">San Marino</option>
                                                <option value="Sao_Tome_and_Principe">Sao Tome and Principe</option>
                                                <option value="Saudi_Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra_Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Sint_Maarten_(Dutch_part)">Sint Maarten</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon_Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South_Africa">South Africa</option>
                                                <option value="South_Georgia_and_the_South_Sandwich_Islands">South Georgia and the South Sandwich Islands</option>
                                                <option value="South_Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri_Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard_and_Jan_Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian_Arab_Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania_United_Republic_of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad_and_Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks_and_Caicos_Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United_Arab_Emirates">United Arab Emirates</option>
                                                <option value="United_Kingdom_of_Great_Britain_and_northern_Ireland">United Kingdom</option>
                                                <option value="United_States_of_America">United States</option>
                                                <option value="United_States_Minor_Outlying_Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela_Bolivarian_Republic">Venezuela</option>
                                                <option value="Viet_Nam">Viet Nam</option>
                                                <option value="Virgin_Islands_British">Virgin Islands, British</option>
                                                <option value="Virgin_Islands_US">Virgin Islands, U.s.</option>
                                                <option value="Wallis_and_Futuna">Wallis and Futuna</option>
                                                <option value="Western_Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>  
                                            </select>
                                            <i class="fa fa-university"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="drivernumber" id="name" class="form-control numberroms" required placeholder="    numéro de permis de conduire  * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text" id="fromdate" onfocus="(this.type='date')" name="firstissue" class="form-control" required placeholder="  date de première émission   * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                                
                                <div class="row"> 
                                    <div class="col-md-12  col-lg-12 col-xl-12" style="text-align: center">
                                    <h5>Catégorie</h5>  <br/> 
                                </div>
                                </div><!-- end row -->
                                
                                <div class="row"> 
                                    @foreach ($drives as $drive)
                                    @if($drive->status=="Enable")
                                    <div class="col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="radio" class="custom-control-input" id="ck1a" name="categorie" value="{{ $drive->id }}">
                                            <label class="custom-control-label" for="ck1a">
                                                {{ $drive->category }} - le prix : {{ $drive->price }} 
                                                <img src="{{ asset('storage/app/public/'.$drive->img) }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                   <!-- Write your comments here 
                                    <div class="col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1b"  name="B">
                                            <label class="custom-control-label" for="ck1b">
                                                <img src="{{ asset('images/B.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1c"  name="C">
                                            <label class="custom-control-label" for="ck1c">
                                                <img src="{{ asset('images/C.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1d"  name="D">
                                            <label class="custom-control-label" for="ck1d">
                                                <img src="{{ asset('images/D.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1be"  name="BE">
                                            <label class="custom-control-label" for="ck1be">
                                                <img src="{{ asset('images/BE.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1ce"  name="CE">
                                            <label class="custom-control-label" for="ck1ce">
                                                <img src="{{ asset('images/CE.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1de"  name="DE">
                                            <label class="custom-control-label" for="ck1de">
                                                <img src="{{ asset('images/DE.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class=" col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1a1"  name="A1">
                                            <label class="custom-control-label" for="ck1a1">
                                                <img src="{{ asset('images/A1.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1b1"  name="B1">
                                            <label class="custom-control-label" for="ck1b1">
                                                <img src="{{ asset('images/B1.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1c1"  name="C1">
                                            <label class="custom-control-label" for="ck1c1">
                                                <img src="{{ asset('images/C1.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1d1"  name="D1">
                                            <label class="custom-control-label" for="ck1d1">
                                                <img src="{{ asset('images/D1.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-2  col-lg-2 col-xl-2">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1d1e"  name="D1E">
                                            <label class="custom-control-label" for="ck1d1e">
                                                <img src="{{ asset('images/D1E.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12  col-lg-12 col-xl-12" style="text-align: center">
                                        <div class="custom-control custom-checkbox image-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck1c1e"  name="C1E">
                                            <label class="custom-control-label" for="ck1c1e">
                                                <img src="{{ asset('images/C1E.jpg') }}" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>


-->

                                </div><!-- end row -->
                                
                                    <div class="row">   
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                                        </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                        <button type="button" class="first btn btn-orange"> Suivant  </button>
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </form>
                        </div><!-- end flights -->
                        
          
                        <div id="hotels" class="tab-pane">
                      
                                <div class="row">
                                    
                                    <h3>INFORMATIONS POSTALES 

                                    </h3>  <br/> 
                                  
                                    
                                </div>
                              
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="mfname" id="name" class="form-control numberroms" required placeholder=" Prénom * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                               
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="mlname" id="name" class="form-control numberroms" required placeholder="  nom de famille  * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="maddress" id="name" class="form-control numberroms" required placeholder="  adresse * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group right-icon">
                                            <select name="mcountry" class="form-control" required>
                                                <option value="" selected>  pays  *</option>
                                                <option value="Afghanistan">Afghanistan</option>
    <option value="Aland_Islands">Aland Islands</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American_Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antarctica">Antarctica</option>
    <option value="Antigua_and_Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bonaire_Sint_Eustatius_and_Saba">Bonaire, Sint Eustatius and Saba</option>
    <option value="Bosnia_and_Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet_Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British_Indian_Ocean_Territory">British Indian Ocean Territory</option>
    <option value="Brunei_Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina_Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cabo_Verde">Cabo Verde</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cayman_Islands">Cayman Islands</option>
    <option value="Central_African_Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas_Island">Christmas Island</option>
    <option value="Cocos_Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo_Democratic_Republic">Congo, Democratic Republic of the Congo</option>
    <option value="Cook_Islands">Cook Islands</option>
    <option value="Costa_Rica">Costa Rica</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Curaçao">Curacao</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czechia">Czech Republic</option>
    <option value="Côte_d'Ivoire">Côte d'Ivoire</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican_Republic">Dominican Republic</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El_Salvador">El Salvador</option>
    <option value="Equatorial_Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Eswatini">Eswatini</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland_Islands">Falkland Islands (Malvinas)</option>
    <option value="Faroe_Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French_Guiana">French Guiana</option>
    <option value="French_Polynesia">French Polynesia</option>
    <option value="French_Southern_Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guernsey">Guernsey</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard_Island_and_McDonald_Islands">Heard Island and Mcdonald Islands</option>
    <option value="Holy_See">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong_Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran, Islamic Republic of</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Isle_of_Man">Isle of Man</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jersey">Jersey</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Korea_Democratic_People">Korea, Democratic People's Republic of</option>
    <option value="Korea_Republic">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao_People's_Democratic_Republic">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macao">Macao</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall_Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia_Federated_States">Micronesia, Federated States of</option>
    <option value="Moldova_Republic">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montenegro">Montenegro</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="New_Caledonia">New Caledonia</option>
    <option value="New_Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk_Island">Norfolk Island</option>
    <option value="Northern_Mariana_Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Palestine">Palestinian Territory, Occupied</option>
    <option value="Panama">Panama</option>
    <option value="Papua_New_Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto_Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Republic_North_Macedonia">Republic of North Macedonia</option>
    <option value="Réunion">Réunion</option>
    <option value="Romania">Romania</option>
    <option value="Russian_Federation">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint_Barthélemy">Saint Barthelemy</option>
    <option value="Saint_Helena_Ascension_and_Tristan_da_Cunha">Saint Helena</option>
    <option value="Saint_Kitts_and_Nevis">Saint Kitts and Nevis</option>
    <option value="Saint_Lucia">Saint Lucia</option>
    <option value="Saint_Martin_French_part">Saint Martin</option>
    <option value="Saint_Pierre_and_Miquelon">Saint Pierre and Miquelon</option>
    <option value="Saint_Vincent_and_the_Grenadines">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San_Marino">San Marino</option>
    <option value="Sao_Tome_and_Principe">Sao Tome and Principe</option>
    <option value="Saudi_Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Serbia">Serbia</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra_Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Sint_Maarten_(Dutch_part)">Sint Maarten</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon_Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South_Africa">South Africa</option>
    <option value="South_Georgia_and_the_South_Sandwich_Islands">South Georgia and the South Sandwich Islands</option>
    <option value="South_Sudan">South Sudan</option>
    <option value="Spain">Spain</option>
    <option value="Sri_Lanka">Sri Lanka</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard_and_Jan_Mayen">Svalbard and Jan Mayen</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syrian_Arab_Republic">Syrian Arab Republic</option>
    <option value="Taiwan">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania_United_Republic_of">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Timor-Leste">Timor-Leste</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad_and_Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks_and_Caicos_Islands">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United_Arab_Emirates">United Arab Emirates</option>
    <option value="United_Kingdom_of_Great_Britain_and_northern_Ireland">United Kingdom</option>
    <option value="United_States_of_America">United States</option>
    <option value="United_States_Minor_Outlying_Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela_Bolivarian_Republic">Venezuela</option>
    <option value="Viet_Nam">Viet Nam</option>
    <option value="Virgin_Islands_British">Virgin Islands, British</option>
    <option value="Virgin_Islands_US">Virgin Islands, U.s.</option>
    <option value="Wallis_and_Futuna">Wallis and Futuna</option>
    <option value="Western_Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                            <i class="fa fa-university"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="mcity" id="name" class="form-control numberroms" required placeholder="  ville * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="mprovince" id="name" class="form-control numberroms" required placeholder="  Province * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group right-icon">
                                            <input type="text"  name="mzip" id="name" class="form-control numberroms" required placeholder="   code postal  * " >

                                            <i class=" fa fa-tasks"></i>
                                        </div>
                                    </div><!-- end columns -->
                              
                                </div>
                                    <div class="row">   
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                              
                                            </div><!-- end columns -->
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                        <button type="button" class="second btn btn-orange"> Suivant  </button>
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                         
                        </div><!-- end flights -->
                        <div id="cruise" class="tab-pane">
                      
                            <div class="row">
                                
                                <h4>DÉTAILS DU PROFIL 

                                </h4>  <br/> 
                              
                                
                            </div>
                            <div class="row">
                                <div style="  padding: 5px; margin:10px;width: 100%;" >
                                    <div class="row" style="margin-left: 15px">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-4" style="text-align: center">
                                            <h6> Image de profil    </h6>
                                            <div class="form-group right-icon">
                                                <input type="file"  name="profpic" id="name" class="form-control " required  >
    
                                                <i class=" fa fa-user-circle"></i>
                                            </div>
                                        </div><!-- end columns -->
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-4" style="text-align: center">
                                            <h6>Signature    </h6>

                                            <div class="form-group right-icon">
                                                <input type="file"  name="signature" id="name" class="form-control " required  >
    
                                                <i class=" fa fa-bookmark"></i>
                                            </div>
                                        </div><!-- end columns -->
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-4" style="text-align: center">
                                            <h6>  DL d'origine  </h6>

                                            <div class="form-group right-icon">
                                                <input type="file"  name="orgdl" id="name" class="form-control " required  >
    
                                                <i class=" fa fa-address-book-o"></i>
                                            </div>
                                        </div><!-- end columns -->
                                </div>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                      
                                    </div><!-- end columns -->
                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                <button type="button" class="third btn btn-orange"> Suivant  </button>
                            </div><!-- end columns -->
                            
                        </div><!-- end row -->
                  
                           
                     
                        </div>
                        <div id="confirm" class="tab-pane">
                      
                            <div class="row">
                                
                                <h3>confirmation

                                </h3>  <br/> 
                              
                                
                            </div>
                          
                            <div class="row">
                                                           
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="form-group right-icon">
                                        <input type="text"  name="phone" id="name" class="form-control numberroms" required placeholder="   téléphoner  * " >

                                        <i class=" fa fa-tasks"></i>
                                    </div>
                                </div><!-- end columns -->
                                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-group right-icon">
                                        <input type="email"  name="email" id="name" class="form-control numberroms" required placeholder="  Email * " >

                                        <i class=" fa fa-tasks"></i>
                                    </div>
                                </div><!-- end columns -->
                           
                                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="form-group right-icon">
                                        <textarea type="text"  name="comment" id="name" class="form-control numberroms" required placeholder="   commentaires  * " ></textarea>

                                        <i class=" fa fa-tasks"></i>
                                    </div>
                                </div><!-- end columns -->
                             
                              
                            </div>
                              
                        <div class="row"> 
                            <div class="col-12 col-md-12 col-lg-12 col-xl-10 search-btn">
                      
                            </div><!-- end columns -->
                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                <button type="submit" class=" btn btn-orange"> Soumettre  </button>
                            </div><!-- end columns -->
                            
                        </div><!-- end row -->
                     
                    </div><!-- end flights -->


                    </div><!-- end tab-content -->
                </form>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->
    
     </div><!-- end container -->
</section><!-- end page-cover -->

@include('include.footer')

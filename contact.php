       <?php include "header.php"; ?>
      <main>
         <div class="main__wrapper">
            <div class="general-content-header responsive-image" style="background-image:url(assets/images/about.jpg)">
               <div class="general-content-header__content">
                  <div class="general-content-header__title">
                     <span class="general-content-header__type">
                     About us
                     </span>
                     <h1>Contact us</h1>
                  </div>
               </div>
            </div>
            <style>
               .form-main-form {
               /* padding: 30px; */
               /* margin-right: 10px; */
               border-radius: 0;
               /* border: 1px solid #e5e5e5; */
               }
               .form-main-field {
               margin-bottom: 22px;
               }
               .form-main-field label span{
                  color:red;
               }
               .form-main-field label {
               font-size: 14px;
               font-weight: 700;
               display: block;
               margin-bottom: 10px;
               }
             select, input[type=date], input[type=email], input[type=password], input[type=search], input[type=tel], input[type=text], input[type=time], input[type=url], textarea {
               margin: 0;
               width: 100%;
               height: 40px;
               color: #000;
               font-size: 14px;
               border-radius: 0px;
               background-color: transparent;
               padding: 10px 20px !important;
               border: none !important;
               transition: all .4s;
               border: 1px solid #e1e1e1 !important;
               }
               textarea {
               height: 100px;
               resize: none;
               border-radius: 0px;
               }
               #form-main-btn {
               width: 180px;
               height: 60px;
               display: flex;
               color: #fffdf8;
               font-size: 16px;
               font-weight: 700;
               align-items: center;
               justify-content: center;
               border-radius: 50px;
               transition: all .4s;
               background-color: var(--dark-bg);
               }
               .contact_detail .detail_bx .footer__social li{
                  border-bottom: 0px solid white !important;
               }
               .contact_detail ul li:nth-last-child(1){
                   border-bottom: 0px solid white !important;
               }
               .detail_bx h6 {
    font-size: 16px;
    letter-spacing: 1px;
}
            </style>
            <div class="o-container o-container--ful">
               <div class="row">

                  <div class="col-12 col-xl-4">
                        <div class="contact_detail">
                           <ul>
                              <li>
                                    <div class="detail_bx">
                                       <h4>General</h4>
                                       <p>Lorem ipsum dolor sit amet consectetur elit.</p>
                                       <a href="#">info@micromount.com</a>
                                    </div>
                              </li>

                              <li>
                                 <div class="detail_bx">
                                    <h4>Parents</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur elit.</p>
                                    <a href="#">inroll@micromount.com</a>
                                 </div>
                              </li>

                              <li>
                                 <div class="detail_bx">
                                    <h4>Vendors</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur elit.</p>
                                    <a href="#">collab@micromount.com</a>
                                 </div>
                              </li>
                              <li>
                                 <div class="detail_bx">
                                    <h6>Keep in touch</h6>
                                 <ul class="footer__social">
                                 
                                    <li class="footer__social--facebook"><a href="https://www.facebook.com/" target="_blank">Facebook</a>
                                    </li>
                                    <li class="footer__social--linkedin"><a href="https://www.linkedin.com/" target="_blank">LinkedIn</a></li>
                                    <li class="footer__social--youtube"><a href="https://www.youtube.com/" target="_blank">YouTube</a></li>
                                    <li class="footer__social--instagram"><a href="https://www.instagram.com/" target="_blank">Instagram</a>
                                    </li>
                                 </ul>
                                 </div>
                              </li>

                           </ul>

                        </div>


                  </div>
                  <div class="col-12 col-xl-8" >
                     <div class="form-main-form mb-5">
                        <form action="#">

                           <div class="row">
<div class="form-main-field col-12 col-xl-6">
   <label>First Name <span>*</span></label>
   <input type="text">

</div>


<div class="form-main-field col-12 col-xl-6">
   <label>Last Name <span>*</span></label>
   <input type="text">
</div>


<div class="form-main-field col-12 col-xl-12">
   <label>Email <span>*</span></label>
   <input type="email">
</div>

<div class="form-main-field col-12 col-xl-6">
      <label>Company <span>*</span></label>
      <input type="text">
   </div>
<div class="form-main-field col-12 col-xl-6">
      <label>Job title <span>*</span></label>
      <input type="text">
   </div>

      <div class="form-main-field col-12 col-xl-6">
         <label>Country <span>*</span></label>
         <select class="elq-item-input">
            <option>Please select
            </option>
            <option value="US">United States
            </option>
            <option value="GB">United Kingdom
            </option>
            <option value="CA">Canada
            </option>
            <option value="IN">India
            </option>
            <option value="NL">Netherlands
            </option>
            <option value="AU">Australia
            </option>
            <option value="ZA">South Africa
            </option>
            <option value="FR">France
            </option>
            <option value="DE">Germany
            </option>
            <option value="SG">Singapore
            </option>
            <option value="SE">Sweden
            </option>
            <option value="BR">Brazil
            </option>
            <option>--------------
            </option>
            <option value="AF">Afghanistan
            </option>
            <option value="AX">Åland Islands
            </option>
            <option value="AL">Albania
            </option>
            <option value="DZ">Algeria
            </option>
            <option value="AS">American Samoa
            </option>
            <option value="AD">Andorra
            </option>
            <option value="AO">Angola
            </option>
            <option value="AI">Anguilla
            </option>
            <option value="AQ">Antarctica
            </option>
            <option value="AG">Antigua and Barbuda
            </option>
            <option value="AR">Argentina
            </option>
            <option value="AM">Armenia
            </option>
            <option value="AW">Aruba
            </option>
            <option value="AU">Australia
            </option>
            <option value="AT">Austria
            </option>
            <option value="AZ">Azerbaijan
            </option>
            <option value="BS">Bahamas
            </option>
            <option value="BH">Bahrain
            </option>
            <option value="BD">Bangladesh
            </option>
            <option value="BB">Barbados
            </option>
            <option value="BY">Belarus
            </option>
            <option value="BE">Belgium
            </option>
            <option value="BZ">Belize
            </option>
            <option value="BJ">Benin
            </option>
            <option value="BM">Bermuda
            </option>
            <option value="BT">Bhutan
            </option>
            <option value="BO">Bolivia
            </option>
            <option value="BA">Bosnia and Herzegovina
            </option>
            <option value="BW">Botswana
            </option>
            <option value="BV">Bouvet Island
            </option>
            <option value="BR">Brazil
            </option>
            <option value="IO">Brit/Indian Ocean Terr.
            </option>
            <option value="BN">Brunei Darussalam
            </option>
            <option value="BG">Bulgaria
            </option>
            <option value="BF">Burkina Faso
            </option>
            <option value="BI">Burundi
            </option>
            <option value="KH">Cambodia
            </option>
            <option value="CM">Cameroon
            </option>
            <option value="CA">Canada
            </option>
            <option value="CV">Cape Verde
            </option>
            <option value="KY">Cayman Islands
            </option>
            <option value="CF">Central African Republic
            </option>
            <option value="TD">Chad
            </option>
            <option value="CL">Chile
            </option>
            <option value="CN">China
            </option>
            <option value="CX">Christmas Island
            </option>
            <option value="CC">Cocos (Keeling) Islands
            </option>
            <option value="CO">Colombia
            </option>
            <option value="KM">Comoros
            </option>
            <option value="CG">Congo
            </option>
            <option value="CD">Congo, The Dem. Republic Of
            </option>
            <option value="CK">Cook Islands
            </option>
            <option value="CR">Costa Rica
            </option>
            <option value="CI">Côte d'Ivoire
            </option>
            <option value="HR">Croatia
            </option>
            <option value="CU">Cuba
            </option>
            <option value="CY">Cyprus
            </option>
            <option value="CZ">Czech Republic
            </option>
            <option value="DK">Denmark
            </option>
            <option value="DJ">Djibouti
            </option>
            <option value="DM">Dominica
            </option>
            <option value="DO">Dominican Republic
            </option>
            <option value="EC">Ecuador
            </option>
            <option value="EG">Egypt
            </option>
            <option value="SV">El Salvador
            </option>
            <option value="GQ">Equatorial Guinea
            </option>
            <option value="ER">Eritrea
            </option>
            <option value="EE">Estonia
            </option>
            <option value="ET">Ethiopia
            </option>
            <option value="FK">Falkland Islands
            </option>
            <option value="FO">Faroe Islands
            </option>
            <option value="FJ">Fiji
            </option>
            <option value="FI">Finland
            </option>
            <option value="FR">France
            </option>
            <option value="GF">French Guiana
            </option>
            <option value="PF">French Polynesia
            </option>
            <option value="TF">French Southern Terr.
            </option>
            <option value="GA">Gabon
            </option>
            <option value="GM">Gambia
            </option>
            <option value="GE">Georgia
            </option>
            <option value="DE">Germany
            </option>
            <option value="GH">Ghana
            </option>
            <option value="GI">Gibraltar
            </option>
            <option value="GB">United Kingdom
            </option>
            <option value="GR">Greece
            </option>
            <option value="GL">Greenland
            </option>
            <option value="GD">Grenada
            </option>
            <option value="GP">Guadeloupe
            </option>
            <option value="GU">Guam
            </option>
            <option value="GT">Guatemala
            </option>
            <option value="GN">Guinea
            </option>
            <option value="GW">Guinea-Bissau
            </option>
            <option value="GY">Guyana
            </option>
            <option value="HT">Haiti
            </option>
            <option value="HM">Heard/McDonald Isls.
            </option>
            <option value="HN">Honduras
            </option>
            <option value="HK">Hong Kong
            </option>
            <option value="HU">Hungary
            </option>
            <option value="IS">Iceland
            </option>
            <option value="IN">India
            </option>
            <option value="ID">Indonesia
            </option>
            <option value="IR">Iran
            </option>
            <option value="IQ">Iraq
            </option>
            <option value="IE">Ireland
            </option>
            <option value="IL">Israel
            </option>
            <option value="IT">Italy
            </option>
            <option value="JM">Jamaica
            </option>
            <option value="JP">Japan
            </option>
            <option value="JO">Jordan
            </option>
            <option value="KZ">Kazakhstan
            </option>
            <option value="KE">Kenya
            </option>
            <option value="KI">Kiribati
            </option>
            <option value="KP">Korea (North)
            </option>
            <option value="KR">Korea (South)
            </option>
            <option value="KW">Kuwait
            </option>
            <option value="KG">Kyrgyzstan
            </option>
            <option value="LA">Laos
            </option>
            <option value="LV">Latvia
            </option>
            <option value="LB">Lebanon
            </option>
            <option value="LS">Lesotho
            </option>
            <option value="LR">Liberia
            </option>
            <option value="LY">Libya
            </option>
            <option value="LI">Liechtenstein
            </option>
            <option value="LT">Lithuania
            </option>
            <option value="LU">Luxembourg
            </option>
            <option value="MO">Macau
            </option>
            <option value="MK">Macedonia
            </option>
            <option value="MG">Madagascar
            </option>
            <option value="MW">Malawi
            </option>
            <option value="MY">Malaysia
            </option>
            <option value="MV">Maldives
            </option>
            <option value="ML">Mali
            </option>
            <option value="MT">Malta
            </option>
            <option value="MH">Marshall Islands
            </option>
            <option value="MQ">Martinique
            </option>
            <option value="MR">Mauritania
            </option>
            <option value="MU">Mauritius
            </option>
            <option value="YT">Mayotte
            </option>
            <option value="MX">Mexico
            </option>
            <option value="FM">Micronesia
            </option>
            <option value="MD">Moldova
            </option>
            <option value="MC">Monaco
            </option>
            <option value="MN">Mongolia
            </option>
            <option value="MS">Montserrat
            </option>
            <option value="MA">Morocco
            </option>
            <option value="MZ">Mozambique
            </option>
            <option value="MM">Myanmar
            </option>
            <option value="MP">N. Mariana Isls.
            </option>
            <option value="NA">Namibia
            </option>
            <option value="NR">Nauru
            </option>
            <option value="NP">Nepal
            </option>
            <option value="NL">Netherlands
            </option>
            <option value="AN">Netherlands Antilles
            </option>
            <option value="NC">New Caledonia
            </option>
            <option value="NZ">New Zealand
            </option>
            <option value="NI">Nicaragua
            </option>
            <option value="NE">Niger
            </option>
            <option value="NG">Nigeria
            </option>
            <option value="NU">Niue
            </option>
            <option value="NF">Norfolk Island
            </option>
            <option value="NO">Norway
            </option>
            <option value="OM">Oman
            </option>
            <option value="PK">Pakistan
            </option>
            <option value="PW">Palau
            </option>
            <option value="PS">Palestinian Territory, Occupied
            </option>
            <option value="PA">Panama
            </option>
            <option value="PG">Papua New Guinea
            </option>
            <option value="PY">Paraguay
            </option>
            <option value="PE">Peru
            </option>
            <option value="PH">Philippines
            </option>
            <option value="PN">Pitcairn
            </option>
            <option value="PL">Poland
            </option>
            <option value="PT">Portugal
            </option>
            <option value="PR">Puerto Rico
            </option>
            <option value="QA">Qatar
            </option>
            <option value="RE">Reunion
            </option>
            <option value="RO">Romania
            </option>
            <option value="RU">Russian Federation
            </option>
            <option value="RW">Rwanda
            </option>
            <option value="KN">Saint Kitts and Nevis
            </option>
            <option value="LC">Saint Lucia
            </option>
            <option value="WS">Samoa
            </option>
            <option value="SM">San Marino
            </option>
            <option value="ST">Sao Tome/Principe
            </option>
            <option value="SA">Saudi Arabia
            </option>
            <option value="SN">Senegal
            </option>
            <option value="CS">Serbia and Montenegro
            </option>
            <option value="SC">Seychelles
            </option>
            <option value="SL">Sierra Leone
            </option>
            <option value="SG">Singapore
            </option>
            <option value="SK">Slovak Republic
            </option>
            <option value="SI">Slovenia
            </option>
            <option value="SB">Solomon Islands
            </option>
            <option value="SO">Somalia
            </option>
            <option value="ZA">South Africa
            </option>
            <option value="ES">Spain
            </option>
            <option value="LK">Sri Lanka
            </option>
            <option value="SH">St. Helena
            </option>
            <option value="PM">St. Pierre and Miquelon
            </option>
            <option value="VC">St. Vincent and Grenadines
            </option>
            <option value="SD">Sudan
            </option>
            <option value="SR">Suriname
            </option>
            <option value="SJ">Svalbard/Jan Mayen Isls.
            </option>
            <option value="SZ">Swaziland
            </option>
            <option value="SE">Sweden
            </option>
            <option value="CH">Switzerland
            </option>
            <option value="SY">Syria
            </option>
            <option value="TW">Taiwan
            </option>
            <option value="TJ">Tajikistan
            </option>
            <option value="TZ">Tanzania
            </option>
            <option value="TH">Thailand
            </option>
            <option value="TL">Timor-Leste
            </option>
            <option value="TG">Togo
            </option>
            <option value="TK">Tokelau
            </option>
            <option value="TO">Tonga
            </option>
            <option value="TT">Trinidad and Tobago
            </option>
            <option value="TN">Tunisia
            </option>
            <option value="TR">Turkey
            </option>
            <option value="TM">Turkmenistan
            </option>
            <option value="TC">Turks/Caicos Isls.
            </option>
            <option value="TV">Tuvalu
            </option>
            <option value="UG">Uganda
            </option>
            <option value="UA">Ukraine
            </option>
            <option value="AE">United Arab Emirates
            </option>
            <option value="US">United States
            </option>
            <option value="UM">US Minor Outlying Is.
            </option>
            <option value="UY">Uruguay
            </option>
            <option value="UZ">Uzbekistan
            </option>
            <option value="VU">Vanuatu
            </option>
            <option value="VA">Vatican City
            </option>
            <option value="VE">Venezuela
            </option>
            <option value="VN">Viet Nam
            </option>
            <option value="VG">Virgin Islands (British)
            </option>
            <option value="VI">Virgin Islands (U.S.)
            </option>
            <option value="WF">Wallis/Futuna Isls.
            </option>
            <option value="EH">Western Sahara
            </option>
            <option value="YE">Yemen
            </option>
            <option value="ZM">Zambia
            </option>
            <option value="ZW">Zimbabwe
            </option>
         </select>
      </div>
      <div class="form-main-field col-12 col-xl-6">
         <label>Relationship With Micromount <span>*</span></label>
         <select class="elq-item-input">
            <option value="Client">Client
            </option>
            <option value="Partner">Partner
            </option>
            <option value="Procurement">Procurement
            </option>
            <option value="Employee">Employee
            </option>
            <option value="Supplier">Supplier
            </option>
            <option value="Charity">Charity
            </option>
            <option value="Job Seeker">Job Seeker
            </option>
            <option value="Student">Student
            </option>
            <option value="Media">Media
            </option>
            <option value="Project Community">Project Community
            </option>
            <option value="Government">Government
            </option>
            <option value="Other">Other
            </option>
         </select>
      </div>

          <div class="form-main-field col-12 col-xl-12">
                              <label>Your question or comment <span>*</span></label>
                         <textarea></textarea>
                           </div>
                       
                              <div class="p_p col-12 ">
                              
                                 <input type="checkbox" name="singleCheckbox" id="fe1815">&nbsp;
                                 <span>I consent to Mace storing my submitted information so they
                                    can respond to my inquiry. See our </span><a href="#" style="letter-spacing: -0.5px; font-size: 1.125rem;">privacy
                                    policy</a> to learn more about how we use data.


                                    <br>
                                    <br>

                                    And finally, a quick test - just to prove you're human, please answer the following question:
                              
                              </div>
                              <div class="col-12 mt-4">
<button id="form-main-btn_" class="explore" type="submit">Send Message</button>

                              </div>
                           </div>
           
               
                          
                        </form>
                     </div>
                  </div>
               </div>
            </div>
             <?php include "footer.php"; ?>
<?php
  include_once("core/function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Checkout Page</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="robots" content="*">
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css" >
<link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Playfair+Display:400,400i,700,900|Rubik:300,400,400i,500,500i,700" rel="stylesheet">


</head>
<body>
<div id="page">
<?php
  drawheader();
?>

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
<h2>Checkout</h2>
</div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- BEGIN Main Container col2-right -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 wow bounceInUp animated animated" style="visibility: visible;"> 
          
          <ol class="one-page-checkout" id="checkoutSteps">
            <li id="opc-billing" class="section allow active">
              <div class="step-title"> <span class="number">1</span>
                <h3 class="one_page_heading"> Billing Information</h3>
              </div>
              <div id="checkout-step-billing" class="step a-item">
                <form id="co-billing-form" action="#">
                  <fieldset class="group-select">
                    <ul class="">
                      <li class="wide">
                        <label for="billing-address-select">Select a billing address from your address book or enter a new address.</label>
                        <br>
                        <div class="input-box">
                          <select name="billing_address_id" id="billing-address-select" class="address-select" title="" onChange="billing.newAddress(!this.value)">
                            <option value="1" selected="selected">john doe, Street road, AL, Alabama 42136, United States</option>
                            <option value="">New Address</option>
                          </select>
                        </div>
                      </li>
                      <li id="billing-new-address-form" style="display: none;">
                        <fieldset>
                          <input type="hidden" name="billing[address_id]" value="27006" id="billing:address_id">
                          <ul>
                            <li class="fields">
                              <div class="customer-name">
                                <div class="input-box name-firstname">
                                  <label for="billing:firstname">First Name<span class="required">*</span></label>
                                  <div class="input-box1">
                                    <input type="text" id="billing:firstname" name="billing[firstname]" value="john" title="First Name" maxlength="255" class="input-text required-entry">
                                  </div>
                                </div>
                                <div class="input-box name-lastname">
                                  <label for="billing:lastname">Last Name<span class="required">*</span></label>
                                  <div class="input-box1">
                                    <input type="text" id="billing:lastname" name="billing[lastname]" value="doe" title="Last Name" maxlength="255" class="input-text required-entry">
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="fields">
                              <div class="input-box">
                                <label for="billing:company">Company</label>
                                <input type="text" id="billing:company" name="billing[company]" value="" title="Company" class="input-text ">
                              </div>
                            </li>
                            <li class="wide">
                              <label for="billing:street1">Address<em class="required">*</em></label>
                              <br>
                              <input type="text" title="Street Address" name="billing[street][]" id="billing:street1" value="Street road" class="input-text  required-entry">
                            </li>
                            <li class="wide">
                              <input type="text" title="Street Address 2" name="billing[street][]" id="billing:street2" value="" class="input-text ">
                            </li>
                            <li class="fields">
                              <div class="input-box">
                                <label for="billing:city">City<em class="required">*</em></label>
                                <input type="text" title="City" name="billing[city]" value="AL" class="input-text  required-entry" id="billing:city">
                              </div>
                              <div class="field">
                                <label for="billing:region_id">State/Province</label>
                                <br>
                                <div class="input-box">
                                  <select id="billing:region_id" name="billing[region_id]" title="State/Province" class="validate-select required-entry" >
                                    <option value="">Please select region, state or province</option>
                                    <option value="1" title="Alabama">Alabama</option>
                                    <option value="2" title="Alaska">Alaska</option>
                                    <option value="3" title="American Samoa">American Samoa</option>
                                    <option value="4" title="Arizona">Arizona</option>
                                    <option value="5" title="Arkansas">Arkansas</option>
                                    <option value="6" title="Armed Forces Africa">Armed Forces Africa</option>
                                    <option value="7" title="Armed Forces Americas">Armed Forces Americas</option>
                                    <option value="8" title="Armed Forces Canada">Armed Forces Canada</option>
                                    <option value="9" title="Armed Forces Europe">Armed Forces Europe</option>
                                    <option value="10" title="Armed Forces Middle East">Armed Forces Middle East</option>
                                    <option value="11" title="Armed Forces Pacific">Armed Forces Pacific</option>
                                    <option value="12" title="California">California</option>
                                    <option value="13" title="Colorado">Colorado</option>
                                    <option value="14" title="Connecticut">Connecticut</option>
                                    <option value="15" title="Delaware">Delaware</option>
                                    <option value="16" title="District of Columbia">District of Columbia</option>
                                    <option value="17" title="Federated States Of Micronesia">Federated States Of Micronesia</option>
                                    <option value="18" title="Florida">Florida</option>
                                    <option value="19" title="Georgia">Georgia</option>
                                    <option value="20" title="Guam">Guam</option>
                                    <option value="21" title="Hawaii">Hawaii</option>
                                    <option value="22" title="Idaho">Idaho</option>
                                    <option value="23" title="Illinois">Illinois</option>
                                    <option value="24" title="Indiana">Indiana</option>
                                    <option value="25" title="Iowa">Iowa</option>
                                    <option value="26" title="Kansas">Kansas</option>
                                    <option value="27" title="Kentucky">Kentucky</option>
                                    <option value="28" title="Louisiana">Louisiana</option>
                                    <option value="29" title="Maine">Maine</option>
                                    <option value="30" title="Marshall Islands">Marshall Islands</option>
                                    <option value="31" title="Maryland">Maryland</option>
                                    <option value="32" title="Massachusetts">Massachusetts</option>
                                    <option value="33" title="Michigan">Michigan</option>
                                    <option value="34" title="Minnesota">Minnesota</option>
                                    <option value="35" title="Mississippi">Mississippi</option>
                                    <option value="36" title="Missouri">Missouri</option>
                                    <option value="37" title="Montana">Montana</option>
                                    <option value="38" title="Nebraska">Nebraska</option>
                                    <option value="39" title="Nevada">Nevada</option>
                                    <option value="40" title="New Hampshire">New Hampshire</option>
                                    <option value="41" title="New Jersey">New Jersey</option>
                                    <option value="42" title="New Mexico">New Mexico</option>
                                    <option value="43" title="New York">New York</option>
                                    <option value="44" title="North Carolina">North Carolina</option>
                                    <option value="45" title="North Dakota">North Dakota</option>
                                    <option value="46" title="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="47" title="Ohio">Ohio</option>
                                    <option value="48" title="Oklahoma">Oklahoma</option>
                                    <option value="49" title="Oregon">Oregon</option>
                                    <option value="50" title="Palau">Palau</option>
                                    <option value="51" title="Pennsylvania">Pennsylvania</option>
                                    <option value="52" title="Puerto Rico">Puerto Rico</option>
                                    <option value="53" title="Rhode Island">Rhode Island</option>
                                    <option value="54" title="South Carolina">South Carolina</option>
                                    <option value="55" title="South Dakota">South Dakota</option>
                                    <option value="56" title="Tennessee">Tennessee</option>
                                    <option value="57" title="Texas">Texas</option>
                                    <option value="58" title="Utah">Utah</option>
                                    <option value="59" title="Vermont">Vermont</option>
                                    <option value="60" title="Virgin Islands">Virgin Islands</option>
                                    <option value="61" title="Virginia">Virginia</option>
                                    <option value="62" title="Washington">Washington</option>
                                    <option value="63" title="West Virginia">West Virginia</option>
                                    <option value="64" title="Wisconsin">Wisconsin</option>
                                    <option value="65" title="Wyoming">Wyoming</option>
                                  </select>

                                  <input type="text" id="billing:region" name="billing[region]" value="Alabama" title="State/Province" class="input-text required-entry" style="display: none;">
                                </div>
                              </div>
                            </li>
                            <li class="fields">
                              <div class="input-box">
                                <label for="billing:postcode">Zip/Postal Code<em class="required">*</em></label>
                                <input type="text" title="Zip/Postal Code" name="billing[postcode]" id="billing:postcode" value="42136" class="input-text validate-zip-international  required-entry">
                              </div>
                              <div class="input-box">
                                <label for="billing:country_id">Country<em class="required">*</em></label>
                                <select name="billing[country_id]" id="billing:country_id" class="validate-select" title="Country">
                                  <option value="">Select Country</option>
                                  <option value="AF">Afghanistan</option>
                                  <option value="AX">Åland Islands</option>
                                  <option value="AL">Albania</option>
                                  <option value="DZ">Algeria</option>
                                  <option value="AS">American Samoa</option>
                                  <option value="AD">Andorra</option>
                                  <option value="AO">Angola</option>
                                  <option value="AI">Anguilla</option>
                                  <option value="AQ">Antarctica</option>
                                  <option value="AG">Antigua and Barbuda</option>
                                  <option value="AR">Argentina</option>
                                  <option value="AM">Armenia</option>
                                  <option value="AW">Aruba</option>
                                  <option value="AU">Australia</option>
                                  <option value="AT">Austria</option>
                                  <option value="AZ">Azerbaijan</option>
                                  <option value="BS">Bahamas</option>
                                  <option value="BH">Bahrain</option>
                                  <option value="BD">Bangladesh</option>
                                  <option value="BB">Barbados</option>
                                  <option value="BY">Belarus</option>
                                  <option value="BE">Belgium</option>
                                  <option value="BZ">Belize</option>
                                  <option value="BJ">Benin</option>
                                  <option value="BM">Bermuda</option>
                                  <option value="BT">Bhutan</option>
                                  <option value="BO">Bolivia</option>
                                  <option value="BA">Bosnia and Herzegovina</option>
                                  <option value="BW">Botswana</option>
                                  <option value="BV">Bouvet Island</option>
                                  <option value="BR">Brazil</option>
                                  <option value="IO">British Indian Ocean Territory</option>
                                  <option value="VG">British Virgin Islands</option>
                                  <option value="BN">Brunei</option>
                                  <option value="BG">Bulgaria</option>
                                  <option value="BF">Burkina Faso</option>
                                  <option value="BI">Burundi</option>
                                  <option value="KH">Cambodia</option>
                                  <option value="CM">Cameroon</option>
                                  <option value="CA">Canada</option>
                                  <option value="CV">Cape Verde</option>
                                  <option value="KY">Cayman Islands</option>
                                  <option value="CF">Central African Republic</option>
                                  <option value="TD">Chad</option>
                                  <option value="CL">Chile</option>
                                  <option value="CN">China</option>
                                  <option value="CX">Christmas Island</option>
                                  <option value="CC">Cocos [Keeling] Islands</option>
                                  <option value="CO">Colombia</option>
                                  <option value="KM">Comoros</option>
                                  <option value="CG">Congo - Brazzaville</option>
                                  <option value="CD">Congo - Kinshasa</option>
                                  <option value="CK">Cook Islands</option>
                                  <option value="CR">Costa Rica</option>
                                  <option value="CI">Côte d’Ivoire</option>
                                  <option value="HR">Croatia</option>
                                  <option value="CU">Cuba</option>
                                  <option value="CY">Cyprus</option>
                                  <option value="CZ">Czech Republic</option>
                                  <option value="DK">Denmark</option>
                                  <option value="DJ">Djibouti</option>
                                  <option value="DM">Dominica</option>
                                  <option value="DO">Dominican Republic</option>
                                  <option value="EC">Ecuador</option>
                                  <option value="EG">Egypt</option>
                                  <option value="SV">El Salvador</option>
                                  <option value="GQ">Equatorial Guinea</option>
                                  <option value="ER">Eritrea</option>
                                  <option value="EE">Estonia</option>
                                  <option value="ET">Ethiopia</option>
                                  <option value="FK">Falkland Islands</option>
                                  <option value="FO">Faroe Islands</option>
                                  <option value="FJ">Fiji</option>
                                  <option value="FI">Finland</option>
                                  <option value="FR">France</option>
                                  <option value="GF">French Guiana</option>
                                  <option value="PF">French Polynesia</option>
                                  <option value="TF">French Southern Territories</option>
                                  <option value="GA">Gabon</option>
                                  <option value="GM">Gambia</option>
                                  <option value="GE">Georgia</option>
                                  <option value="DE">Germany</option>
                                  <option value="GH">Ghana</option>
                                  <option value="GI">Gibraltar</option>
                                  <option value="GR">Greece</option>
                                  <option value="GL">Greenland</option>
                                  <option value="GD">Grenada</option>
                                  <option value="GP">Guadeloupe</option>
                                  <option value="GU">Guam</option>
                                  <option value="GT">Guatemala</option>
                                  <option value="GG">Guernsey</option>
                                  <option value="GN">Guinea</option>
                                  <option value="GW">Guinea-Bissau</option>
                                  <option value="GY">Guyana</option>
                                  <option value="HT">Haiti</option>
                                  <option value="HM">Heard Island and McDonald Islands</option>
                                  <option value="HN">Honduras</option>
                                  <option value="HK">Hong Kong SAR China</option>
                                  <option value="HU">Hungary</option>
                                  <option value="IS">Iceland</option>
                                  <option value="IN">India</option>
                                  <option value="ID">Indonesia</option>
                                  <option value="IR">Iran</option>
                                  <option value="IQ">Iraq</option>
                                  <option value="IE">Ireland</option>
                                  <option value="IM">Isle of Man</option>
                                  <option value="IL">Israel</option>
                                  <option value="IT">Italy</option>
                                  <option value="JM">Jamaica</option>
                                  <option value="JP">Japan</option>
                                  <option value="JE">Jersey</option>
                                  <option value="JO">Jordan</option>
                                  <option value="KZ">Kazakhstan</option>
                                  <option value="KE">Kenya</option>
                                  <option value="KI">Kiribati</option>
                                  <option value="KW">Kuwait</option>
                                  <option value="KG">Kyrgyzstan</option>
                                  <option value="LA">Laos</option>
                                  <option value="LV">Latvia</option>
                                  <option value="LB">Lebanon</option>
                                  <option value="LS">Lesotho</option>
                                  <option value="LR">Liberia</option>
                                  <option value="LY">Libya</option>
                                  <option value="LI">Liechtenstein</option>
                                  <option value="LT">Lithuania</option>
                                  <option value="LU">Luxembourg</option>
                                  <option value="MO">Macau SAR China</option>
                                  <option value="MK">Macedonia</option>
                                  <option value="MG">Madagascar</option>
                                  <option value="MW">Malawi</option>
                                  <option value="MY">Malaysia</option>
                                  <option value="MV">Maldives</option>
                                  <option value="ML">Mali</option>
                                  <option value="MT">Malta</option>
                                  <option value="MH">Marshall Islands</option>
                                  <option value="MQ">Martinique</option>
                                  <option value="MR">Mauritania</option>
                                  <option value="MU">Mauritius</option>
                                  <option value="YT">Mayotte</option>
                                  <option value="MX">Mexico</option>
                                  <option value="FM">Micronesia</option>
                                  <option value="MD">Moldova</option>
                                  <option value="MC">Monaco</option>
                                  <option value="MN">Mongolia</option>
                                  <option value="ME">Montenegro</option>
                                  <option value="MS">Montserrat</option>
                                  <option value="MA">Morocco</option>
                                  <option value="MZ">Mozambique</option>
                                  <option value="MM">Myanmar [Burma]</option>
                                  <option value="NA">Namibia</option>
                                  <option value="NR">Nauru</option>
                                  <option value="NP">Nepal</option>
                                  <option value="NL">Netherlands</option>
                                  <option value="AN">Netherlands Antilles</option>
                                  <option value="NC">New Caledonia</option>
                                  <option value="NZ">New Zealand</option>
                                  <option value="NI">Nicaragua</option>
                                  <option value="NE">Niger</option>
                                  <option value="NG">Nigeria</option>
                                  <option value="NU">Niue</option>
                                  <option value="NF">Norfolk Island</option>
                                  <option value="MP">Northern Mariana Islands</option>
                                  <option value="KP">North Korea</option>
                                  <option value="NO">Norway</option>
                                  <option value="OM">Oman</option>
                                  <option value="PK">Pakistan</option>
                                  <option value="PW">Palau</option>
                                  <option value="PS">Palestinian Territories</option>
                                  <option value="PA">Panama</option>
                                  <option value="PG">Papua New Guinea</option>
                                  <option value="PY">Paraguay</option>
                                  <option value="PE">Peru</option>
                                  <option value="PH">Philippines</option>
                                  <option value="PN">Pitcairn Islands</option>
                                  <option value="PL">Poland</option>
                                  <option value="PT">Portugal</option>
                                  <option value="PR">Puerto Rico</option>
                                  <option value="QA">Qatar</option>
                                  <option value="RE">Réunion</option>
                                  <option value="RO">Romania</option>
                                  <option value="RU">Russia</option>
                                  <option value="RW">Rwanda</option>
                                  <option value="BL">Saint Barthélemy</option>
                                  <option value="SH">Saint Helena</option>
                                  <option value="KN">Saint Kitts and Nevis</option>
                                  <option value="LC">Saint Lucia</option>
                                  <option value="MF">Saint Martin</option>
                                  <option value="PM">Saint Pierre and Miquelon</option>
                                  <option value="VC">Saint Vincent and the Grenadines</option>
                                  <option value="WS">Samoa</option>
                                  <option value="SM">San Marino</option>
                                  <option value="ST">São Tomé and Príncipe</option>
                                  <option value="SA">Saudi Arabia</option>
                                  <option value="SN">Senegal</option>
                                  <option value="RS">Serbia</option>
                                  <option value="SC">Seychelles</option>
                                  <option value="SL">Sierra Leone</option>
                                  <option value="SG">Singapore</option>
                                  <option value="SK">Slovakia</option>
                                  <option value="SI">Slovenia</option>
                                  <option value="SB">Solomon Islands</option>
                                  <option value="SO">Somalia</option>
                                  <option value="ZA">South Africa</option>
                                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                                  <option value="KR">South Korea</option>
                                  <option value="ES">Spain</option>
                                  <option value="LK">Sri Lanka</option>
                                  <option value="SD">Sudan</option>
                                  <option value="SR">Suriname</option>
                                  <option value="SJ">Svalbard and Jan Mayen</option>
                                  <option value="SZ">Swaziland</option>
                                  <option value="SE">Sweden</option>
                                  <option value="CH">Switzerland</option>
                                  <option value="SY">Syria</option>
                                  <option value="TW">Taiwan</option>
                                  <option value="TJ">Tajikistan</option>
                                  <option value="TZ">Tanzania</option>
                                  <option value="TH">Thailand</option>
                                  <option value="TL">Timor-Leste</option>
                                  <option value="TG">Togo</option>
                                  <option value="TK">Tokelau</option>
                                  <option value="TO">Tonga</option>
                                  <option value="TT">Trinidad and Tobago</option>
                                  <option value="TN">Tunisia</option>
                                  <option value="TR">Turkey</option>
                                  <option value="TM">Turkmenistan</option>
                                  <option value="TC">Turks and Caicos Islands</option>
                                  <option value="TV">Tuvalu</option>
                                  <option value="UG">Uganda</option>
                                  <option value="UA">Ukraine</option>
                                  <option value="AE">United Arab Emirates</option>
                                  <option value="GB">United Kingdom</option>
                                  <option value="US" selected="selected">United States</option>
                                  <option value="UY">Uruguay</option>
                                  <option value="UM">U.S. Minor Outlying Islands</option>
                                  <option value="VI">U.S. Virgin Islands</option>
                                  <option value="UZ">Uzbekistan</option>
                                  <option value="VU">Vanuatu</option>
                                  <option value="VA">Vatican City</option>
                                  <option value="VE">Venezuela</option>
                                  <option value="VN">Vietnam</option>
                                  <option value="WF">Wallis and Futuna</option>
                                  <option value="EH">Western Sahara</option>
                                  <option value="YE">Yemen</option>
                                  <option value="ZM">Zambia</option>
                                  <option value="ZW">Zimbabwe</option>
                                </select>
                              </div>
                            </li>
                            <li class="fields">
                              <div class="input-box">
                                <label for="billing:telephone">Telephone<em class="required">*</em></label>
                                <input type="text" name="billing[telephone]" value="4563" title="Telephone" class="input-text  required-entry" id="billing:telephone">
                              </div>
                              <div class="input-box">
                                <label for="billing:fax">Fax</label>
                                <input type="text" name="billing[fax]" value="" title="Fax" class="input-text " id="billing:fax">
                              </div>
                            </li>
                            <li class="">
                              <input type="checkbox" name="billing[save_in_address_book]" value="1" title="Save in address book" id="billing:save_in_address_book" onChange="if(window.shipping) shipping.setSameAsBilling(false);" class="checkbox">
                              <label for="billing:save_in_address_book">Save in address book</label>
                            </li>
                          </ul>
                          <div class="remember-me-popup">
                            <div class="remember-me-popup-head" style="display:none">
                              <h3 id="text2">What's this?</h3>
                              <a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a> </div>
                            <div class="remember-me-popup-body" style="display:none">
                              <p id="text1">Checking "Remember Me" will let you access your shopping cart on this computer when you are logged out</p>
                              <div class="remember-me-popup-close-button a-right"> <a href="#" class="remember-me-popup-close button" title="Close" onClick="
            showDiv()"><span>Close</span></a> </div>
                            </div>
                          </div>
                         
                          <script>
 function showDiv()
    {
        
            if(document.getElementById('text1').style.display == "") 
            {
              document.getElementById('text1').style.display = "none";
              document.getElementById('text2').style.display = "none";
  
            }
            else
            {
                document.getElementById('text1').style.display = "";
            }
          

       
        
    }
    </script>
                        </fieldset>
                      </li>
                      <li class="">
                        <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_yes" value="1" title="Ship to this address" onClick="$(&#39;shipping:same_as_billing&#39;).checked = true;" class="radio">
                        <label for="billing:use_for_shipping_yes">Ship to this address</label>
                        <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_no" value="0" checked="checked" title="Ship to different address" onClick="$(&#39;shipping:same_as_billing&#39;).checked = false;" class="radio">
                        <label for="billing:use_for_shipping_no">Ship to different address</label>
                      </li>
                    </ul>
                    <div class="buttons-set" id="billing-buttons-container">
                      <p class="required">* Required Fields</p>
                      <button type="button" title="Continue" class="button continue" onClick="billing.save()"><span>Continue</span></button>
                      <span class="please-wait" id="billing-please-wait" style="display:none;"> <img src="images/opc-ajax-loader.gif" alt="Loading next step..." title="Loading next step..." class="v-middle"> Loading next step... </span> </div>
                  </fieldset>
                </form>
               
              </div>
            </li>
            <li id="opc-shipping" class="section">
              <div class="step-title"> <span class="number">2</span>
                <h3 class="one_page_heading"> Shipping Information</h3>
              </div>
              <div id="checkout-step-shipping" class="step a-item" style="display:none;">
                <form action="#" id="co-shipping-form">
                  <ul class="">
                    <li class="wide">
                      <label for="shipping-address-select">Select a shipping address from your address book or enter a new address.</label>
                      <br>
                      <select name="shipping_address_id" id="shipping-address-select" class="address-select" title="" onChange="shipping.newAddress(!this.value)">
                        <option value="1" selected="selected">john doe, Street road, AL, Alabama 42136, United States</option>
                        <option value="">New Address</option>
                      </select>
                    </li>
                    <li id="shipping-new-address-form" style="display: none;">
                      <fieldset class="group-select">
                        <input type="hidden" name="shipping[address_id]" value="27005" id="shipping:address_id">
                        <ul>
                          <li class="fields">
                            <div class="customer-name">
                              <div class="input-box name-firstname">
                                <label for="shipping:firstname">First Name<span class="required">*</span></label>
                                <div class="input-box1">
                                  <input type="text" id="shipping:firstname" name="shipping[firstname]" value="john" title="First Name" maxlength="255" class="input-text required-entry" onChange="shipping.setSameAsBilling(false)">
                                </div>
                              </div>
                              <div class="input-box name-lastname">
                                <label for="shipping:lastname">Last Name<span class="required">*</span></label>
                                <div class="input-box1">
                                  <input type="text" id="shipping:lastname" name="shipping[lastname]" value="doe" title="Last Name" maxlength="255" class="input-text required-entry" onChange="shipping.setSameAsBilling(false)">
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="fields">
                            <div class="input-box">
                              <label for="shipping:company">Company</label>
                              <input type="text" id="shipping:company" name="shipping[company]" value="" title="Company" class="input-text " onChange="shipping.setSameAsBilling(false);">
                            </div>
                          </li>
                          <li class="wide">
                            <label for="shipping:street1">Address<em class="required">*</em></label>
                            <br>
                            <input type="text" title="Street Address" name="shipping[street][]" id="shipping:street1" value="Street road" class="input-text  required-entry" onChange="shipping.setSameAsBilling(false);">
                          </li>
                          <li class="wide">
                            <input type="text" title="Street Address 2" name="shipping[street][]" id="shipping:street2" value="" class="input-text " onChange="shipping.setSameAsBilling(false);">
                          </li>
                          <li class="fields">
                            <div class="input-box">
                              <label for="shipping:city">City<em class="required">*</em></label>
                              <input type="text" title="City" name="shipping[city]" value="AL" class="input-text  required-entry" id="shipping:city" onChange="shipping.setSameAsBilling(false);">
                            </div>
                            <div class="input-box">
                              <label for="shipping:region">State/Province</label>
                              <select id="shipping:region_id" name="shipping[region_id]" title="State/Province" class="validate-select required-entry">
                                <option value="">Please select region, state or province</option>
                                <option value="1" title="Alabama">Alabama</option>
                                <option value="2" title="Alaska">Alaska</option>
                                <option value="3" title="American Samoa">American Samoa</option>
                                <option value="4" title="Arizona">Arizona</option>
                                <option value="5" title="Arkansas">Arkansas</option>
                                <option value="6" title="Armed Forces Africa">Armed Forces Africa</option>
                                <option value="7" title="Armed Forces Americas">Armed Forces Americas</option>
                                <option value="8" title="Armed Forces Canada">Armed Forces Canada</option>
                                <option value="9" title="Armed Forces Europe">Armed Forces Europe</option>
                                <option value="10" title="Armed Forces Middle East">Armed Forces Middle East</option>
                                <option value="11" title="Armed Forces Pacific">Armed Forces Pacific</option>
                                <option value="12" title="California">California</option>
                                <option value="13" title="Colorado">Colorado</option>
                                <option value="14" title="Connecticut">Connecticut</option>
                                <option value="15" title="Delaware">Delaware</option>
                                <option value="16" title="District of Columbia">District of Columbia</option>
                                <option value="17" title="Federated States Of Micronesia">Federated States Of Micronesia</option>
                                <option value="18" title="Florida">Florida</option>
                                <option value="19" title="Georgia">Georgia</option>
                                <option value="20" title="Guam">Guam</option>
                                <option value="21" title="Hawaii">Hawaii</option>
                                <option value="22" title="Idaho">Idaho</option>
                                <option value="23" title="Illinois">Illinois</option>
                                <option value="24" title="Indiana">Indiana</option>
                                <option value="25" title="Iowa">Iowa</option>
                                <option value="26" title="Kansas">Kansas</option>
                                <option value="27" title="Kentucky">Kentucky</option>
                                <option value="28" title="Louisiana">Louisiana</option>
                                <option value="29" title="Maine">Maine</option>
                                <option value="30" title="Marshall Islands">Marshall Islands</option>
                                <option value="31" title="Maryland">Maryland</option>
                                <option value="32" title="Massachusetts">Massachusetts</option>
                                <option value="33" title="Michigan">Michigan</option>
                                <option value="34" title="Minnesota">Minnesota</option>
                                <option value="35" title="Mississippi">Mississippi</option>
                                <option value="36" title="Missouri">Missouri</option>
                                <option value="37" title="Montana">Montana</option>
                                <option value="38" title="Nebraska">Nebraska</option>
                                <option value="39" title="Nevada">Nevada</option>
                                <option value="40" title="New Hampshire">New Hampshire</option>
                                <option value="41" title="New Jersey">New Jersey</option>
                                <option value="42" title="New Mexico">New Mexico</option>
                                <option value="43" title="New York">New York</option>
                                <option value="44" title="North Carolina">North Carolina</option>
                                <option value="45" title="North Dakota">North Dakota</option>
                                <option value="46" title="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="47" title="Ohio">Ohio</option>
                                <option value="48" title="Oklahoma">Oklahoma</option>
                                <option value="49" title="Oregon">Oregon</option>
                                <option value="50" title="Palau">Palau</option>
                                <option value="51" title="Pennsylvania">Pennsylvania</option>
                                <option value="52" title="Puerto Rico">Puerto Rico</option>
                                <option value="53" title="Rhode Island">Rhode Island</option>
                                <option value="54" title="South Carolina">South Carolina</option>
                                <option value="55" title="South Dakota">South Dakota</option>
                                <option value="56" title="Tennessee">Tennessee</option>
                                <option value="57" title="Texas">Texas</option>
                                <option value="58" title="Utah">Utah</option>
                                <option value="59" title="Vermont">Vermont</option>
                                <option value="60" title="Virgin Islands">Virgin Islands</option>
                                <option value="61" title="Virginia">Virginia</option>
                                <option value="62" title="Washington">Washington</option>
                                <option value="63" title="West Virginia">West Virginia</option>
                                <option value="64" title="Wisconsin">Wisconsin</option>
                                <option value="65" title="Wyoming">Wyoming</option>
                              </select>                             
                              <input type="text" id="shipping:region" name="shipping[region]" value="Alabama" title="State/Province" class="input-text required-entry" style="display: none;">
                            </div>
                          </li>
                          <li class="fields">
                            <div class="input-box">
                              <label for="shipping:postcode">Zip/Postal Code<em class="required">*</em></label>
                              <input type="text" title="Zip/Postal Code" name="shipping[postcode]" id="shipping:postcode" value="42136" class="input-text validate-zip-international  required-entry" onChange="shipping.setSameAsBilling(false);">
                            </div>
                            <div class="input-box">
                              <label for="shipping:country_id">Country<em class="required">*</em></label>
                              <select name="shipping[country_id]" id="shipping:country_id" class="validate-select" title="Country" onChange="if(window.shipping)shipping.setSameAsBilling(false);">
                                <option value="">Select Country</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="VG">British Virgin Islands</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos [Keeling] Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo - Brazzaville</option>
                                <option value="CD">Congo - Kinshasa</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Côte d’Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong SAR China</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau SAR China</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar [Burma]</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="KP">North Korea</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territories</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn Islands</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Réunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russia</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">São Tomé and Príncipe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="KR">South Korea</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syria</option>
                                <option value="TW">Taiwan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US" selected="selected">United States</option>
                                <option value="UY">Uruguay</option>
                                <option value="UM">U.S. Minor Outlying Islands</option>
                                <option value="VI">U.S. Virgin Islands</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VA">Vatican City</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                              </select>
                            </div>
                          </li>
                          <li class="fields">
                            <div class="input-box">
                              <label for="shipping:telephone">Telephone<em class="required">*</em></label>
                              <input type="text" name="shipping[telephone]" value="4563" title="Telephone" class="input-text  required-entry" id="shipping:telephone" onChange="shipping.setSameAsBilling(false);">
                            </div>
                            <div class="input-box">
                              <label for="shipping:fax">Fax</label>
                              <input type="text" name="shipping[fax]" value="" title="Fax" class="input-text " id="shipping:fax" onChange="shipping.setSameAsBilling(false);">
                            </div>
                          </li>
                          <li class="">
                            <input type="checkbox" name="shipping[save_in_address_book]" value="1" title="Save in address book" id="shipping:save_in_address_book" onChange="shipping.setSameAsBilling(false);" class="checkbox">
                            <label for="shipping:save_in_address_book">Save in address book</label>
                          </li>
                        </ul>
                      </fieldset>
                    </li>
                    <li class="">
                      <input style="margin:0 3px 3px 0" type="checkbox" name="shipping[same_as_billing]" id="shipping:same_as_billing" value="1" title="Use Billing Address" onClick="shipping.setSameAsBilling(this.checked)" class="checkbox">
                      <label for="shipping:same_as_billing">Use Billing Address</label>
                    </li>
                  </ul>
                  <div class="buttons-set" id="shipping-buttons-container">
                    <p class="required">* Required Fields</p>
                    <button type="button" class="button continue" title="Continue" onClick="shipping.save()"><span>Continue</span></button>
                    <a href="#" onClick="checkout.back(); return false;"><small>« </small>Back</a> <span id="shipping-please-wait" class="please-wait" style="display:none;"> <img src="images/opc-ajax-loader.gif" alt="Loading next step..." title="Loading next step..." class="v-middle"> Loading next step... </span> </div>
                </form>
               
              </div>
            </li>
            <li id="opc-shipping_method" class="section">
              <div class="step-title"> <span class="number">3</span>
                <h3 class="one_page_heading"> Shipping Method</h3>
              </div>
              <div id="checkout-step-shipping_method" class="step a-item" style="display:none;">
                <form id="co-shipping-method-form" action="#">
                  <div id="checkout-shipping-method-load">
                    <p>Sorry, no quotes are available for this order at this time.</p>
                  </div>
                
                  <div id="onepage-checkout-shipping-method-additional-load"> 

                  </div>
                  <div class="buttons-set" id="shipping-method-buttons-container">
                    <button type="button" class="button continue" onClick="shippingMethod.save()"><span>Continue</span></button>
                    <a href="#" onClick="checkout.back(); return false;"><small>« </small>Back</a> <span id="shipping-method-please-wait" class="please-wait" style="display:none;"> <img src="images/opc-ajax-loader.gif" alt="Loading next step..." title="Loading next step..." class="v-middle"> Loading next step... </span> </div>
                </form>
              </div>
            </li>
            <li id="opc-payment" class="section">
              <div class="step-title"> <span class="number">4</span>
                <h3 class="one_page_heading"> Payment Information</h3>
              </div>
              <div id="checkout-step-payment" class="step a-item" style="display:none;"> 
 
                <form action="#" id="co-payment-form">
                  <fieldset>
                    <dl class="sp-methods" id="checkout-payment-method-load">
                      <!-- Content dynamically loaded. Content from the methods.phtml is loaded during the ajax call -->
                    </dl>
                  </fieldset>
                </form>
                <div class="tool-tip" id="payment-tool-tip" style="display:none;">
                  <div class="btn-close"><a href="#" id="payment-tool-tip-close" title="Close">Close</a></div>
                  <div class="tool-tip-content"></div>
                </div>
                <div class="buttons-set" id="payment-buttons-container">
                  <p class="required">* Required Fields</p>
                  <button type="button" class="button continue" onClick="payment.save()"><span>Continue</span></button>
                  <a href="#" onClick="checkout.back(); return false;"><small>« </small>Back</a> <span class="please-wait" id="payment-please-wait" style="display:none;"> <img src="images/opc-ajax-loader.gif" alt="Loading next step..." title="Loading next step..." class="v-middle"> Loading next step... </span> </div>
               
              </div>
            </li>
            <li id="opc-review" class="section">
              <div class="step-title"> <span class="number">5</span>
                <h3 class="one_page_heading"> Order Review</h3>
              </div>
              <div id="checkout-step-review" class="step a-item" style="display:none;">
                <div class="order-review" id="checkout-review-load"> 
                  <!-- Content loaded dynamically --> 
                </div>
              </div>
            </li>
          </ol>

          <br>
        </section>
        <aside class="col-right sidebar col-sm-3 wow bounceInUp animated animated" style="visibility: visible;">
          <div id="checkout-progress-wrapper">
            <div class="block block-progress">
              <div class="block-title"> Your Checkout </div>
              <div class="block-content">
                <div>
                  <div id="billing-progress-opcheckout">
                    <span> Billing Address</span>
                  </div>
                  <div id="shipping-progress-opcheckout">
                    <span> Shipping Address</span>
                  </div>
                  <div id="shipping_method-progress-opcheckout">
                    <span> Shipping Method</span>
                  </div>
                  <div id="payment-progress-opcheckout">
                    <span> Payment Method</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <!--col-right sidebar--> 
      </div>
      <!--row--> 
    </div>
    <!--main-container-inner--> 
  </div>
  <!--main-container col2-left-layout-->
  <!-- For version 1,2,3,4,6 -->
  
<?php
  drawfooter();
?>
  <!-- End For version 1,2,3,4,6 -->
  
</div>
<!--page-->
<!-- Mobile Menu-->
<div id="mobile-menu">
  <ul class="mobile-menu">
   
    <li>
      <div class="home"><a href="#"><i class="icon-home"></i>Home</a> </div>
    </li>
    <li><span class="expand fa fa-plus"></span><a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Grid</a> </li>
        <li> <a href="list.html">List</a> </li>
        <li> <a href="product-detail.html">Product Detail</a> </li>
        <li> <a href="shopping-cart.html">Shopping Cart</a> </li>
        <li><span class="expand fa fa-plus"></span><a href="checkout.html">Checkout</a>
          <ul>
            <li><a href="checkout-method.html">Checkout Method</a> </li>
            <li><a href="checkout-billing-info.html">Checkout Billing Info</a> </li>
          </ul>
        </li>
        <li> <a href="wishlist.html">Wishlist</a> </li>
        <li> <a href="dashboard.html">Dashboard</a> </li>
        <li> <a href="multiple-addresses.html">Multiple Addresses</a> </li>
        <li> <a href="about-us.html">About us</a> </li>
        <li><span class="expand fa fa-plus"></span><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a> </li>
          </ul>
        </li>
        <li><a href="contact-us.html">Contact us</a> </li>
        <li><a href="404error.html">404 Error Page</a> </li>
      </ul>
    </li>
    <li><span class="expand fa fa-plus"></span><a href="#">Women</a>
      <ul>
        <li><span class="expand fa fa-plus"></span> <a href="#" class="">Stylish Bag</a>
          <ul>
            <li> <a href="#" class="">Clutch Handbags</a> </li>
            <li> <a href="#l" class="">Diaper Bags</a> </li>
            <li> <a href="#" class="">Bags</a> </li>
            <li> <a href="#" class="">Hobo handbags</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Material Bag</a>
          <ul>
            <li> <a href="#">Beaded Handbags</a> </li>
            <li> <a href="#">Fabric Handbags</a> </li>
            <li> <a href="#">Handbags</a> </li>
            <li> <a href="#">Leather Handbags</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Shoes</a>
          <ul>
            <li> <a href="#">Flat Shoes</a> </li>
            <li> <a href="#">Flat Sandals</a> </li>
            <li> <a href="#">Boots</a> </li>
            <li> <a href="#">Heels</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Jwellery</a>
          <ul>
            <li> <a href="#">Bracelets</a> </li>
            <li> <a href="#">Necklaces &amp; Pendent</a> </li>
            <li> <a href="#l">Pendants</a> </li>
            <li> <a href="#">Pins &amp; Brooches</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Dresses</a>
          <ul>
            <li> <a href="#">Casual Dresses</a> </li>
            <li> <a href="#">Evening</a> </li>
            <li> <a href="#">Designer</a> </li>
            <li> <a href="#">Party</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Swimwear</a>
          <ul>
            <li> <a href="#">Swimsuits</a> </li>
            <li> <a href="#">Beach Clothing</a> </li>
            <li> <a href="#">Clothing</a> </li>
            <li> <a href="#">Bikinis</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><span class="expand fa fa-plus"></span><a href="#">Men</a>
      <ul>
        <li><span class="expand fa fa-plus"></span> <a href="#" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Sport Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casual Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">canvas shoes</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Casual Dresses</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Evening</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Designer</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Party</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Coats</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Formal Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Blazers</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casio</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Titan</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Tommy-Hilfiger</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Ray Ban</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Police</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Oakley</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Accesories</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Backpacks</a> </li>

            <li class="level2 nav-6-1-1"><a href="#">Wallets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Laptops Bags</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Belts</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><span class="expand fa fa-plus"></span><a href="#">Electronics</a>
      <ul>
        <li><span class="expand fa fa-plus"></span> <a href="#"><spanMobiles</span></a>
          <ul>
            <li> <a href="#"><span>Samsung</span></a> </li>
            <li> <a href="#"><span>Nokia</span></a> </li>
            <li> <a href="#"><span>IPhone</span></a> </li>
            <li> <a href="#"><span>Sony</span></a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="#"><span>Mobile Memory Cards</span></a> </li>
            <li> <a href="#"><span>Cases &amp; Covers</span></a> </li>
            <li> <a href="#"><span>Mobile Headphones</span></a> </li>
            <li> <a href="#"><span>Bluetooth Headsets</span></a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#"><span>Cameras</span></a>
          <ul>
            <li> <a href="#"><span>Camcorders</span></a> </li>
            <li> <a href="#"><span>Point &amp; Shoot</span></a> </li>
            <li> <a href="#"><span>Digital SLR</span></a> </li>
            <li> <a href="#"><span>Camera Accesories</span></a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="#"><span>MP3 Players</span></a> </li>
            <li> <a href="#"><span>IPods</span></a> </li>
            <li> <a href="#"><span>Speakers</span></a> </li>
            <li> <a href="#"><span>Video Players</span></a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#"><span>Computer</span></a>
          <ul>
            <li> <a href="#"><span>External Hard Disk</span></a> </li>
            <li> <a href="#"><span>Pendrives</span></a> </li>
            <li> <a href="#"><span>Headphones</span></a> </li>
            <li> <a href="#"><span>PC Components</span></a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#"><span>Appliances</span></a>
          <ul>
            <li> <a href="#"><span>Vaccum Cleaners</span></a> </li>
            <li> <a href="#"><span>Indoor Lighting</span></a> </li>
            <li> <a href="#"><span>Kitchen Tools</span></a> </li>
            <li> <a href="#"><span>Water Purifier</span></a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Furniture</a> </li>
    <li><a href="#">Kids</a> </li>
    <li><a href="contact-us.html">Contact Us</a> </li>
  </ul>
</div>
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>


</body>
</html>
@extends('layouts.master')

@section('title','الصفحة الرئيسية')



@section('content')
<section class="vh-100">
    <section>
 {{-- 
    The head of the page
    --}} 
    <div class="container-fluid row pt-2 ">
        <div class="col-4">
<div class="row ">

    <p >
        KINGDOM OF BAHRAIN 
        <br>
        MINISTRY OF INTERIOR    
    <br>
    </p>


    <span  class="col-12">
        NATIONALITY, PASSPORTS 
    </span>
    <span  class="col-12">
        & RESIDENCE AFFAIRS   
    </span>  
</div>          
        </div>


 <div class="col-4  d-flex justify-content-center">
<img src="{{ asset('assets/images/Layer 3.png') }}" alt="logo" class="logo  ">
 </div>
 <div class="col-4 " dir="rtl" >
    <p class=" mx-lg-5 ">
        مملكة البحرين
        <br>
        وزارة الداخلية
    </p>
    <br>
 <span>
    شؤوون الجنسية والجوازات والاقامة
 </span>

</div>

<div>
</section>
<hr class="header-seprator">






{{-- The content of the page --}}

<section>
<div class="px-lg-2 px-md-2 ">

    <h3 class="text-center">
        Visit Visa 
    </h3>
    <h4 class="">
        Your application details are: 
    </h4>

    <div class="container-fluid form-container mt-5">
<form action="{{ route('save_data') }}" class="container-fluid col-lg-9 col-md-11 col-12" method="POST" >
    @csrf

<div class="row">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Application Number 
    </label>
    <input class="col-lg-7 col-10 p-1 p-lg-1 p-md-1   @" type="number" name="applicationNumber">
{{-- @error('applicationNamber')
    <span class="error invalid-feedback col">{{ $message }}</span>
@enderror --}}
</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Passport Number 
    </label>


    <input  id="passportNumber"class="col-lg-7 col-10 p-1 p-lg-1 p-md-1  @error('passportNumber') is-invalid @enderror" type="number" name="passportNumber">
    @error('passportNumber')
    <div class="col error invalid-feedback  ">
        {{ $message }}
    </div>
        
    @enderror
</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Nationality
    </label>
    <select id="nationality" name="nationality" class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 " >
        <option selected>select country</option>
   @foreach ($countries as $country )
       <option value="{{ $country }}"> {{ $country }}</option>
   @endforeach
   
    </select>

</div>



<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Date of Birth
    </label>
    <input id="dateOfBirth" class="col-lg-7 col-10 p-1 p-lg-1 p-md-1  @error('dateOfBirth') is-invalid @enderror" type="date" name="dateOfBirth">
    @error('dateOfBirth')
    <div class="col error invalid-feedback  ">
        {{ $message }}
    </div>
        
    @enderror

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Sex
    </label>
    <select id="sex" name="sex" class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 ">
        <option>Select Sex</option>
        <option value="0">Male</option>
        <option value="1">Female</option>

    </select>

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Country of Birth
    </label>
    <select id="birthCountry" name="countryOfBirth" class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 ">
        <option>select country</option>
        <option value="AF">Afghanistan</option>
        <option value="AX">Aland Islands</option>
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
        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
        <option value="BA">Bosnia and Herzegovina</option>
        <option value="BW">Botswana</option>
        <option value="BV">Bouvet Island</option>
        <option value="BR">Brazil</option>
        <option value="IO">British Indian Ocean Territory</option>
        <option value="BN">Brunei Darussalam</option>
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
        <option value="CC">Cocos (Keeling) Islands</option>
        <option value="CO">Colombia</option>
        <option value="KM">Comoros</option>
        <option value="CG">Congo</option>
        <option value="CD">Congo, Democratic Republic of the Congo</option>
        <option value="CK">Cook Islands</option>
        <option value="CR">Costa Rica</option>
        <option value="CI">Cote D'Ivoire</option>
        <option value="HR">Croatia</option>
        <option value="CU">Cuba</option>
        <option value="CW">Curacao</option>
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
        <option value="FK">Falkland Islands (Malvinas)</option>
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
        <option value="HM">Heard Island and Mcdonald Islands</option>
        <option value="VA">Holy See (Vatican City State)</option>
        <option value="HN">Honduras</option>
        <option value="HK">Hong Kong</option>
        <option value="HU">Hungary</option>
        <option value="IS">Iceland</option>
        <option value="IN">India</option>
        <option value="ID">Indonesia</option>
        <option value="IR">Iran, Islamic Republic of</option>
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
        <option value="KP">Korea, Democratic People's Republic of</option>
        <option value="KR">Korea, Republic of</option>
        <option value="XK">Kosovo</option>
        <option value="KW">Kuwait</option>
        <option value="KG">Kyrgyzstan</option>
        <option value="LA">Lao People's Democratic Republic</option>
        <option value="LV">Latvia</option>
        <option value="LB">Lebanon</option>
        <option value="LS">Lesotho</option>
        <option value="LR">Liberia</option>
        <option value="LY">Libyan Arab Jamahiriya</option>
        <option value="LI">Liechtenstein</option>
        <option value="LT">Lithuania</option>
        <option value="LU">Luxembourg</option>
        <option value="MO">Macao</option>
        <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
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
        <option value="FM">Micronesia, Federated States of</option>
        <option value="MD">Moldova, Republic of</option>
        <option value="MC">Monaco</option>
        <option value="MN">Mongolia</option>
        <option value="ME">Montenegro</option>
        <option value="MS">Montserrat</option>
        <option value="MA">Morocco</option>
        <option value="MZ">Mozambique</option>
        <option value="MM">Myanmar</option>
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
        <option value="NO">Norway</option>
        <option value="OM">Oman</option>
        <option value="PK">Pakistan</option>
        <option value="PW">Palau</option>
        <option value="PS">Palestinian Territory, Occupied</option>
        <option value="PA">Panama</option>
        <option value="PG">Papua New Guinea</option>
        <option value="PY">Paraguay</option>
        <option value="PE">Peru</option>
        <option value="PH">Philippines</option>
        <option value="PN">Pitcairn</option>
        <option value="PL">Poland</option>
        <option value="PT">Portugal</option>
        <option value="PR">Puerto Rico</option>
        <option value="QA">Qatar</option>
        <option value="RE">Reunion</option>
        <option value="RO">Romania</option>
        <option value="RU">Russian Federation</option>
        <option value="RW">Rwanda</option>
        <option value="BL">Saint Barthelemy</option>
        <option value="SH">Saint Helena</option>
        <option value="KN">Saint Kitts and Nevis</option>
        <option value="LC">Saint Lucia</option>
        <option value="MF">Saint Martin</option>
        <option value="PM">Saint Pierre and Miquelon</option>
        <option value="VC">Saint Vincent and the Grenadines</option>
        <option value="WS">Samoa</option>
        <option value="SM">San Marino</option>
        <option value="ST">Sao Tome and Principe</option>
        <option value="SA">Saudi Arabia</option>
        <option value="SN">Senegal</option>
        <option value="RS">Serbia</option>
        <option value="CS">Serbia and Montenegro</option>
        <option value="SC">Seychelles</option>
        <option value="SL">Sierra Leone</option>
        <option value="SG">Singapore</option>
        <option value="SX">Sint Maarten</option>
        <option value="SK">Slovakia</option>
        <option value="SI">Slovenia</option>
        <option value="SB">Solomon Islands</option>
        <option value="SO">Somalia</option>
        <option value="ZA">South Africa</option>
        <option value="GS">South Georgia and the South Sandwich Islands</option>
        <option value="SS">South Sudan</option>
        <option value="ES">Spain</option>
        <option value="LK">Sri Lanka</option>
        <option value="SD">Sudan</option>
        <option value="SR">Suriname</option>
        <option value="SJ">Svalbard and Jan Mayen</option>
        <option value="SZ">Swaziland</option>
        <option value="SE">Sweden</option>
        <option value="CH">Switzerland</option>
        <option value="SY">Syrian Arab Republic</option>
        <option value="TW">Taiwan, Province of China</option>
        <option value="TJ">Tajikistan</option>
        <option value="TZ">Tanzania, United Republic of</option>
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
        <option value="US">United States</option>
        <option value="UM">United States Minor Outlying Islands</option>
        <option value="UY">Uruguay</option>
        <option value="UZ">Uzbekistan</option>
        <option value="VU">Vanuatu</option>
        <option value="VE">Venezuela</option>
        <option value="VN">Viet Nam</option>
        <option value="VG">Virgin Islands, British</option>
        <option value="VI">Virgin Islands, U.s.</option>
        <option value="WF">Wallis and Futuna</option>
        <option value="EH">Western Sahara</option>
        <option value="YE">Yemen</option>
        <option value="ZM">Zambia</option>
        <option value="ZW">Zimbabwe</option>
    </select>

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Passport Expiry Date 
    </label>
    <input class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 " type="date" name="passportExpiryDate">

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        English Name
    </label>
    <input class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 " type="text" name="englishName">

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Arabic Name
    </label>
    <input class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 " type="text" name="arabicName">

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Sponsor Name
    </label>
    <input class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 " type="text" name="sponsorName">

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Visa Number
    </label>
    <input class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 " type="number" name="visaNumber">

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Visa Issue Date 
    </label>
    <input class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 " type="date" name="visaIssueDate">

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Visa Expiry Date 
    </label>
    <input class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 " type="date" name="visaExpiryDate">

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Visa Status 
    </label>
    <input class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 " type="text" name="visaStatus">

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Period of Stay 
    </label>
    <input class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 " type="number" name="periodOfStay">

</div>

<div class="row mt-2">
    <label for="" class="p-0 p-lg-1 p-md-1 col-lg-3  d-flex justify-content-lg-end">
        Number of Entries 
    </label>
    <input class="col-lg-7 col-10 p-1 p-lg-1 p-md-1 " type="number" name="numberOfEntries">

</div>

<div class="d-flex justify-content-center mt-3 px-2">
    <input class="btn btn-primary col-3 mx-2"  value="Submit" type="submit">
    <input class="btn btn-danger col-3 "  value="Cancel" type="button">
</div>
</form>
    </div>

</div>
</section>


{{-- Footer info --}}
<div class="container-fluid mt-5 ">

<div class="row  mx-lg-2">
    <p class="col-3"> 
        Amount paid (Bahrain Dinars) BD. <span class="text-black"> 9.0</span>
        
        
     
    </p>
    <p  class="col-3 text-center">
        Print Date - Visa Location
    </p>
    <p  class="col-3">
        11:01  31/07/2022 - eVisa 
    </p>

<hr class="header-seprator">

</div>

</div>




</section>


{{-- include scripts  --}}
@include('partials.footer-scripts')
@stop
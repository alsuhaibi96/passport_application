@extends('layouts.master')

@section('title','الصفحة الرئيسية')



@section('content')
<section class="vh-100">
    <section>
 {{-- 
    The head of the page
    --}} 
    <div class="container-fluid row pt-2 ">
        <div class="col-4 ">
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
    <span  class="col12">
        & RESIDENCE AFFAIRS   
    </span>  
</div>          
        </div>


 <div class="col-4  d-flex justify-content-center">
<img src="{{ asset('assets/images/Layer 3.png') }}" alt="logo" class="logo  ">
 </div>
 <div class="col-4" dir="rtl">
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
<form action="" class="container-fluid col-lg-9 col-md-11 col-12">
<div class="row">
    <label for="" class="col-4  d-flex justify-content-lg-end">
        Application Number 
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Passport Number 
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Nationality
    </label>
    <input class="col-8" type="" placeholder="">

</div>



<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Date of Birth
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Sex
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Country of Birth
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Passport Expiry Date 
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        English Name
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Arabic Name
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Sponsor Name
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Visa Number
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Visa Issue Date 
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Visa Expiry Date 
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Visa Status 
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Period of Stay 
    </label>
    <input class="col-8" type="" placeholder="">

</div>

<div class="row mt-2">
    <label for="" class="col-4 d-flex justify-content-lg-end">
        Number of Entries 
    </label>
    <input class="col-8" type="" placeholder="">

</div>

</form>
    </div>

</div>
</section>


{{-- Footer info --}}
<div class="container-fluid mt-5 ">

<div class="row  mx-lg-2">
    <p class="col-4"> 
        Amount paid (Bahrain Dinars) BD. <span class="text-black"> 9.0</span>
        
        
     
    </p>
    <p  class="col-4 text-center">
        Print Date - Visa Location
    </p>
    <p  class="col-4">
        11:01  31/07/2022 - eVisa 
    </p>

<hr class="header-seprator">

</div>

</div>




</section>


{{-- include scripts  --}}
@include('partials.footer-scripts')
@stop
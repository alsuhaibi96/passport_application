<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PassportStoreRequest;


use App\Models\Passport;
use App\Models\Country;

class PassportController extends Controller
{

/**
 * 
 * The index page
 */

 public function index(){
   $countries=Country::pluck('country_name')->all();

    return view('site.index',compact('countries'));
 }

/**
 * Storing a new passport
 */

 public function store(PassportStoreRequest $request)

 {
      Passport::create($request->validated());
      return back();
  

 }
}

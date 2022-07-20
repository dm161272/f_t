<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all listings
    public function index() {
           // dd(request('tag'));
        return view('listings.index', [
           
        'listings' => Listing::latest()->filter(request(['search']))->get()
    
        ]);

    }

    //show single listing
    public function show(Listing $listing) {

        return view('listings.show', [
            'listing' => $listing
         ]);
        
    }


    public function create() {
      return view('listings.create');
      }


//store listing(team)
      public function store(Request $request) {
      //dd($request->all());
      $formFields=$request->validate([
        'name' => 'required',
        'city' => 'required',
        'country' => 'required',


      ]);
      }


}

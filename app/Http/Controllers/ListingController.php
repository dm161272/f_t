<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listings
    public function index() {
           // dd(request('tag'));
        return view('listings.index', [
           
        'listings' => Listing::latest()->filter(request(['search']))->paginate(6)
    
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
        'name' => ['required', Rule::unique('listings', 'name')],
        'city' => 'required',
        'country' => 'required',
      ]);

       if($request->hasFile('logo')) {
          $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

      //dd($formFields);
      Listing::create($formFields);
      return redirect('/')->with('message', '| Team created successfully |');
   }

   //show Edit form
    public function edit(Listing $listing) {
      //dd($listing);
        return view('listings.edit' , ['listing' => $listing]);
    }


    //update listing(team)
    public function update(Request $request, Listing $listing) {
      //dd($request->all());
      $formFields=$request->validate([
        'name' => 'required',
        'city' => 'required',
        'country' => 'required',
      ]);

       if($request->hasFile('logo')) {
          $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

           //dd($formFields);
      $listing->create($formFields);
      return back()->with('message', '| Team updated successfully |');
   }

}

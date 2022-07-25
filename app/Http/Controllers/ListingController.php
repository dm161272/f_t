<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

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

    //show create form
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
    
    $formFields['user_id'] = auth()->id();

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
      
      //check if user is an owner
      if($listing->user_id != auth()->id()) {
        abort(403, '| You are not authorized for this action |');
      }


      $formFields=$request->validate([
        'name' => 'required',
        'city' => 'required',
        'country' => 'required',
      ]);

       if($request->hasFile('logo')) {
          $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

    //dd($formFields);
      $listing->update($formFields);
      return redirect('/')->with('message', '| Team updated successfully |');
   }


    //delete listing

    public function destroy(Listing $listing) {
      
     //check if user is an owner
     if($listing->user_id != auth()->id()) {
      abort(403, '| You are not authorized for this action |');
    }
    $listing->delete();
    return redirect('/')->with('message', '| Team deleted successfully |');
    }

//Manage listing
public function manage() {
  return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);


}




}

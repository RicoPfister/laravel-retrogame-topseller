<?php

// author: rico

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Http\Controllers\CollectionController;

class SearchController extends Controller
{
    public function searchName(Request $request) {

        $searchString = $request->searchstring;
        $searchCat = $request->searchcat;

        // save data in session
        $request->session()->put('searchstring',$searchString);
        $request->session()->put('searchcat',$searchCat);

        // open default blade and pass arrays
        // return view('layouts/default', ['searchResult' => $searchResult]);
        return redirect('/');
    }
}

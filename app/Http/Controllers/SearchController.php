<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Http\Controllers\CollectionController;

class SearchController extends Controller
{
    public function searchName(Request $request) {

        $searchString = $request->searchstring;

        $searchResult = Collection::where('Game', 'LIKE', '%'.$searchString.'%')->get()->sortByDesc('Sales');

        // save data in session
        $request->session()->put('searchResult',$searchResult);

        // open default blade and pass arrays
        // return view('layouts/default', ['searchResult' => $searchResult]);
        return redirect('/');
    }
}

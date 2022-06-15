<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function gameIndex(Request $request) {

    // gets all the entries from table messages
    // and gets an array of objects as a return value.
    // we store this return value in the variable $messages

    // $gameIndex = Collection::all()->sortByDesc('created_at');

    $gameIndex = Collection::all()->random();

    $request->session()->put('entry',$gameIndex['id']);

    // This line would output the messages in the UI/Browser // and stop the script execution.
    // good for debugging ;o)
    //dd($messages);
    // This function return a view.
    // here the blade template engine works its magic again // through which we cann pass the $messages array to the view. // we can pass it as an optional second paramter (
    // associative array)

    return view('layouts/default', ['collection' => $gameIndex]);
    }

    public function gameIndexPrevious(Request $request) {

    // gets all the entries from table messages
    // and gets an array of objects as a return value.
    // we store this return value in the variable $messages

    // $gameIndex2 = Collection::all()->sortByDesc('created_at');
    // $request->session()->put('entry',1);
    $entry = $request->session()->get('entry');
    $gameIndex = Collection::find($entry-1);
    $request->session()->put('entry',$entry-1);

    // This line would output the messages in the UI/Browser // and stop the script execution.
    // good for debugging ;o)
    //dd($messages);
    // This function return a view.
    // here the blade template engine works its magic again // through which we cann pass the $messages array to the view. // we can pass it as an optional second paramter (
    // associative array)

    return view('layouts/default', ['collection' => $gameIndex]);
    }

    public function gameIndexNext(Request $request) {

    // gets all the entries from table messages
    // and gets an array of objects as a return value.
    // we store this return value in the variable $messages

    // $gameIndex = Collection::all()->sortByDesc('created_at');
    $entry = $request->session()->get('entry');
    $gameIndex = Collection::find($entry+1);
    $request->session()->put('entry',$entry+1);

    // This line would output the messages in the UI/Browser // and stop the script execution.
    // good for debugging ;o)
    //dd($messages);
    // This function return a view.
    // here the blade template engine works its magic again // through which we cann pass the $messages array to the view. // we can pass it as an optional second paramter (
    // associative array)

    return view('layouts/default', ['collection' => $gameIndex]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function gameIndex() {

    // gets all the entries from table messages
    // and gets an array of objects as a return value.
    // we store this return value in the variable $messages

    // $gameIndex = Collection::all()->sortByDesc('created_at');
    $gameIndex = Collection::all()->random();

    // This line would output the messages in the UI/Browser // and stop the script execution.
    // good for debugging ;o)
    //dd($messages);
    // This function return a view.
    // here the blade template engine works its magic again // through which we cann pass the $messages array to the view. // we can pass it as an optional second paramter (
    // associative array)

    return view('layouts/default', ['collection' => $gameIndex]);
    }
}

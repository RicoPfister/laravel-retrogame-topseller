<?php

// author: rico

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

        // if(isset($request->previous)){
        //     $entry = $request->session()->get('entry');
        //     $gameIndex = Collection::find($entry-1);
        //     $request->session()->put('entry',$entry-1);
        // }

        // elseif (isset($request->next)){
        //     $entry = $request->session()->get('entry');
        //     $gameIndex = Collection::find($entry+1);
        //     $request->session()->put('entry',$entry+1);
        // }

        if ($request->session()->has('previous')){
            $entry = $request->session()->get('entry');
            $gameIndex = Collection::find($entry);
            $request->session()->forget('previous');
        }

        elseif ($request->session()->has('next')){
            $entry = $request->session()->get('entry');
            $gameIndex = Collection::find($entry);
            $request->session()->forget('next');
        }

        else {
        $gameIndex = Collection::all()->random();
        $request->session()->put('entry',$gameIndex['id']);
        }

        // $request->session()->put('entry',$entry+1);

        // This line would output the messages in the UI/Browser // and stop the script execution.
        // good for debugging ;o)
        //dd($messages);
        // This function return a view.
        // here the blade template engine works its magic again // through which we cann pass the $messages array to the view. // we can pass it as an optional second paramter (
        // associative array)

        // $request->flash();

        return view('layouts/default', ['dataDetail' => $gameIndex]);
        // return back()->with(['collection' => $gameIndex]);
        // return redirect('/')->with(['collection' => $gameIndex]);
        // return back()->withInput();
        }

        public function gameIndexPrevious(Request $request) {

        // gets all the entries from table messages
        // and gets an array of objects as a return value.
        // we store this return value in the variable $messages

        // $gameIndex2 = Collection::all()->sortByDesc('created_at');
        // $request->session()->put('entry',1);
        $entry = $request->session()->get('entry');

        if($request->session()->get('entry') == 1) {
            $request->session()->put('entry',$gameIndex = Collection::all()->count());
        }

        else {
            // $gameIndex = Collection::find($entry-1);
            $request->session()->put('entry',$entry-1);
        }

        $request->session()->put('previous',1);

        // This line would output the messages in the UI/Browser // and stop the script execution.
        // good for debugging ;o)
        //dd($messages);
        // This function return a view.
        // here the blade template engine works its magic again // through which we cann pass the $messages array to the view. // we can pass it as an optional second paramter (
        // associative array)

        return redirect('/');
        // return view('layouts/default', ['collection' => $gameIndex]);
        }

        public function gameIndexNext(Request $request) {

        // gets all the entries from table messages
        // and gets an array of objects as a return value.
        // we store this return value in the variable $messages

        // $gameIndex = Collection::all()->sortByDesc('created_at');
        $entry = $request->session()->get('entry');

        if($request->session()->get('entry') == Collection::all()->count()) {
            $request->session()->put('entry',$gameIndex = 1);
        }

        else {
            // $gameIndex = Collection::find($entry+1);
            $request->session()->put('entry',$entry+1);
        }

        $request->session()->put('next',1);

        // This line would output the messages in the UI/Browser // and stop the script execution.
        // good for debugging ;o)
        //dd($messages);
        // This function return a view.
        // here the blade template engine works its magic again // through which we cann pass the $messages array to the view. // we can pass it as an optional second paramter (
        // associative array)

        // return view('layouts/default', ['collection' => $gameIndex]);
        return redirect('/');
        }


}

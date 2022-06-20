<?php

// author: rico

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Comment;

class CollectionController extends Controller

{

    public function gameIndex(Request $request) {

        // do this if the 'previous buttons' was pressed
        if ($request->session()->has('previous')){
            $entry = $request->session()->get('entry');
            $databaseDetail = Collection::find($entry);
            $request->session()->forget('previous');
        }

        // do this if the 'next buttons' was pressed
        elseif ($request->session()->has('next')){
                $entry = $request->session()->get('entry');
                $databaseDetail = Collection::find($entry);
                $request->session()->forget('next');
        }

        // do this if an database entry was created/updated
        elseif ($request->session()->has('newComment')){
                $entry = $request->session()->get('entry');
                $databaseDetail = Collection::find($entry);
                $request->session()->forget('newComment');
        }

        // do this as default
        else {
        $databaseDetail = Collection::all()->random();
        $request->session()->put('entry',$databaseDetail['id']);
        }

        // load comments
        $comments = Comment::where('GameID', $request->session()->get('entry'))->get();
        $entry = $request->session()->get('entry');
        $misc['RatingAvg'] = $comments->avg('Rating');

        // get 10 database entries
        $databaseIndex = Collection::paginate(10);

        // get searchResult
        $searchResult = $request->session()->get('searchResult');

        // open default blade and pass arrays
        return view('layouts/default', ['collectionDetail' => $databaseDetail, 'collectionIndex' => $databaseIndex, 'comments' => $comments, 'misc' => $misc, 'searchResult' => $searchResult]);
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

        public function newComment(Request $request) {

            $request->validate([
                'nickname' => 'required',
                'comment' => 'required',
                'captcha' => 'in:1234'
            ]);

            // we create a new Message-Object
            $message = new Comment();
            // we set the properties title and content
            // with the values that we got in the post-request
            $message->Nickname = $request->nickname;
            $message->GameID = $request->session()->get('entry');

            if (!isset($request->stars))
                $message->Rating = 0;
            else $message->Rating = $request->stars;

            $message->Comment = $request->comment;

            $request->session()->put('newComment',1);

            // we save the new Message-Object in the messages
            // table in our database
            $message->save();

            // at the end we make a redirect to the url /messages
            return redirect('/');
        }

        public function searchName(Request $request) {

            $searchResult = Collection::where('Game', 'LIKE', 'Tetris');

            // open default blade and pass arrays
            return view('layouts/default', ['searchResult' => $searchResult]);

        }
}

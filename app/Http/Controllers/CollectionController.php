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

        // do this if a comment was created/updated
        elseif ($request->session()->has('newComment')){
            $entry = $request->session()->get('entry');
            $databaseDetail = Collection::find($entry);
            $request->session()->forget('newComment');
        }

        // do this if an index entry is choosed
        elseif ($request->session()->has('indexEntry')){
            $entry = $request->session()->get('entry');
            $databaseDetail = Collection::find($entry);
            $request->session()->forget('indexEntry');
        }

        // do this as default
        else {
        $databaseDetail = Collection::all()->random();
        $request->session()->put('entry',$databaseDetail['id']);
        }

        // load comments
        $comments = Comment::where('GameID', $request->session()->get('entry'))->get();

        $misc['RatingAvg'] = $comments->where('Rating', '>', 0)->avg('Rating');

        // get 10 database entries
        $databaseIndex = Collection::orderByDesc('Sales')->paginate(10);

        // search name; platform; release date
        if ($request->session()->get('searchcat') === 'Game' OR $request->session()->get('searchcat') === 'Platform' OR $request->session()->get('searchcat') === 'ReleaseDate') {

            $searchString = $request->session()->get('searchstring');
            $searchCat = $request->session()->get('searchcat');

            $databaseIndex = Collection::where($searchCat, 'LIKE', '%'.$searchString.'%')->paginate(10);

            $misc['search'] = 1;

            $request->session()->forget('searchstring');
            $request->session()->forget('searchcat');
          }

          // search sales
          elseif ($request->session()->get('searchcat') === 'Sales') {

            $searchString = $request->session()->get('searchstring');
            $searchCat = $request->session()->get('searchcat');

            $databaseIndex = Collection::where($searchCat, '>=', intval($searchString))->paginate(10);

            $misc['search'] = 1;

            $request->session()->forget('searchstring');
            $request->session()->forget('searchcat');
          }

          else {$misc['search'] = 0;}

          $misc['searchTotal'] = Collection::count();

          if($request->session()->get('addgame') == 1){
          $misc['addgame'] = $request->session()->get('addgame');
          $request->session()->forget('addgame');
          }

        // open default blade and pass arrays
        return view('layouts/default', ['collectionDetail' => $databaseDetail, 'collectionIndex' => $databaseIndex, 'comments' => $comments, 'misc' => $misc]);
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
            $comment = new Comment();
            // we set the properties title and content
            // with the values that we got in the post-request
            $comment->Nickname = $request->nickname;
            $comment->GameID = $request->session()->get('entry');

            if (!isset($request->stars))
                $comment->Rating = 0;
            else $comment->Rating = $request->stars;

            $comment->Comment = $request->comment;

            $request->session()->put('newComment',1);

            // we save the new Message-Object in the messages
            // table in our database
            $comment->save();

            // at the end we make a redirect to the url /messages
            return redirect('/');
        }

        public function searchName(Request $request) {

            $searchResult = Collection::where('Game', 'LIKE', 'Tetris');

            // open default blade and pass arrays
            return view('layouts/default', ['searchResult' => $searchResult]);

        }

        public function addgame(Request $request) {

            $request->session()->put('addgame',1);

            return redirect('/');
        }

        public function indexEntry(Request $request, $id) {

            $request->session()->put('indexEntry',1);
            $request->session()->put('entry',$id);

            return redirect('/');

        }
}

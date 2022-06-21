<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use File;

class UploadController extends Controller
{
    public function addgame(Request $request) {

        $addgame = new Collection();

        $addgame->Game = $request->title;
        $addgame->id = Collection::orderByDesc('id')->first()['id']+1;
        $addgame->Platform = $request->platform;
        $addgame->Publisher = $request->publisher;
        $addgame->Developer = $request->developer;
        $addgame->ReleaseDate = $request->releasedate;
        $addgame->Sales = $request->sales;
        $addgame->Ranking = 0;
        $addgame->Covers = $request->file('cover')->store('Cover');

        // Storage::move("storage/app/images/image.jpg","new/profile.jpg");

        // we save the new Message-Object in the messages
        // table in our database
        $addgame->save();

        return redirect('/');
    }
}

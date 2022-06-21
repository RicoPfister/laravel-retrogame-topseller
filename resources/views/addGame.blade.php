<link href="{{ asset('/css/detail.css') }}" rel="stylesheet">
<link href="{{ asset('/css/misc.css') }}" rel="stylesheet">

<div class="col-8 border border-1 border-dark p-5">

    <div class="">

        <h1>Add game</h1>

        <form action="addgame" method="post" enctype="multipart/form-data" >
            @csrf

            {{-- <input type="hidden" name="ranking" value="0"> --}}

            <div class="form-group">
                <label for="title">Title:</label>
                <input typ="text" class="form-control" id="title" name="title">
            </div>

            <label for="platform" class="form-label mt-2">Platform:</label>
            <select class="form-select" id="platform" aria-label="Search category" name="platform">
                <option value="gb"></option>
                <option value="gb">GB</option>
                {{-- <option value="Developer">Developer</option>
                <option value="Publisher">Publisher</option> --}}
                <option value="gbc">GBC</option>
                {{-- <option value="Rating">Rating 1-5</option> --}}
                <option value="gb-gbc">GB/GBC</option>
                <option value="other">Other</option>
            </select>

            <div class="form-group mt-2">
                <label for="developer">Developer:</label>
                <input typ="text" class="form-control" id="developer" name="developer">
            </div>

            <div class="form-group mt-2">
                <label for="Publisher">Publisher:</label>
                <input typ="text" class="form-control" id="publisher" name="publisher">
            </div>

            <div class="form-group mt-2">
                <label for="releasedate">Release date:</label>
                <input typ="text" class="form-control" id="releasedate" name="releasedate">
            </div>

            <div class="form-group mt-2">
                <label for="sales">Sales:</label>
                <input typ="text" class="form-control" id="sales" name="sales">
            </div>

            <div class="form-group mt-2">
                <label for="sales">Cover:</label>
                <input class="" type="file" id="cover" name="cover" class="custom-file-input">
            </div>

            <div class="mt-3">
                <img class="captcha" src="{{ asset('/images/captcha.png')}}" alt="Check if you are not a bot">
                <input class="form-control mb-3" id="captcha" name="captcha" placeholder="Type the numbers above">
                <button type="submit" class="btn btn-primary" id="submit">Add game</button>
                </div>
        </form>
    </div>
</div>

<link rel="stylesheet" href="{{ asset('js/misc.js') }}" />

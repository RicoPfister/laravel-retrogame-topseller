{{-- author: beni, rico --}}

</form>

<!DOCTYPE html>
<html lang="en"><head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>

   <!-- hier wird der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->

   {{-- <title class="title">@yield('title')</title> --}}
</head>
<body>

    @if (isset($searchResult))
        <pre> {{ print_r($searchResult) }} </pre>
    @endif

   {{-- site container --}}
   <div class="container-fluid">

        {{-- site row --}}
        <div class="row">

            {{-- left invisible column - it helps center the main column --}}
            <div class="col"></div>

            {{-- content box --}}
            <div class="col-10 mt-5">

                {{-- header --}}
                <div class="row d-flex justify-content-center">
                    <div class="col d-flex justify-content-center header">
                        {{-- box-former --}}
                        <div class="wrapper">
                            <div class="banner2Part1 banner">RetroGames</div>
                            <div class="banner2Part2 banner">TopSeller</div>
                        </div>
                    </div>
                <div class="col-5">
                    {{-- search box --}}
                    <div class="row">
                        {{-- search module --}}
                        @include('search')
                    </div>
                </div>
                </div>

                {{-- separator --}}
                <div class="row mb-3"></div>

                <div class="row mt-5 d-flex justify-content-center">
                    {{-- detail module --}}
                    <div class="col">
                        @if (!isset($misc['addgame']))
                            @include('detail')
                        @else
                            @include('addGame')
                        @endif
                    </div>

                    {{-- index module --}}
                    <div class="col">
                        @include('searchresult')
                    </div>
                </div>

                {{-- separator --}}
                <div class="row mb-3 d-flex justify-content-end"></div>

                {{-- comment moduele --}}
                <div class="row d-flex justify-content-center">
                    {{-- comment module --}}
                    @include('comment')
                </div>

                {{-- separator --}}
                <div class="row mb-5"></div>

            </div>

            {{-- left invisible column - it helps center the main column --}}
            <div class="col"></div>

        </div>

    </div>


    <div class="footer"><b>Updated: {{date('d.m.Y')}}</b></div>
</body>
</html>

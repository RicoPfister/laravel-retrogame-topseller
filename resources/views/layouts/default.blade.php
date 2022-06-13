<!DOCTYPE html>
<html lang="en"><head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('/js/app.js') }}"></script>

   <!-- hier wird der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->

   {{-- <title class="title">@yield('title')</title> --}}
</head>
<body>
   <!-- hier wird auch der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   {{-- <h1><a href="/messages">@yield('title')</a></h1> --}}

   {{-- main container - all content frame --}}
   <div class="container-fluid">

        <div class="row">

            <div class="col d-flex justify-content-center">

                <div class="wrapper">

                    <div class="banner2Part1 banner">RetroGames</div>
                    <div class="banner2Part2 banner">TopSeller</div>

                </div>

            </div>

        </div>

        {{-- main row - all content goes in here --}}
        <div class="row">

            {{-- left invisible column - it helps center the main column --}}
            <div class="col"></div>

            {{-- main content - detail row --}}
            <div class="col-3 detail border border-1 border-dark">

w



            </div>

            {{-- main content - invisible detail/list separator --}}
            {{-- <div class="col separator"></div> --}}

            {{-- main content - list row --}}
            <div class="col-3 d-flex border border-1 border-dark">

            r
afsdfa-flip-horizontalasdf<br>
asdf<br>
asdf<br>
asdfmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm<br>


            </div>

            {{-- left invisible column - it helps center the main column --}}
            <div class="col"></div>

        <div>

   <div class="footer"><b>Updated: {{date('d.m.Y')}}</b></div>
</body>
</html>

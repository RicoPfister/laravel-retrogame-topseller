{{-- author: rico --}}

<link href="{{ asset('/css/detail.css') }}" rel="stylesheet">
<link href="{{ asset('/css/misc.css') }}" rel="stylesheet">

<div class="d-flex justify-content-end"><a href="addgame">Add Game</a>&nbsp/&nbspAdd Cover</div>

<div class="col border border-1 border-dark d-flex justify-content-center p-0 m-0">

    {{-- left entry button --}}
    <div class="col-1 border-end border-dark d-flex justify-content-center align-items-center d-grid h-100">
        <form action="/previous" method="get">
            {{-- @csrf --}}
            <button type="submit" class="btn buttonColor h-100" name="previous" value="1"><</button>
        </form>
    </div>

    <div class="col py-3 d-flex justify-content-center detail">

        {{-- box-former --}}
        <div>

            {{--<h1 class="heading"><b>Tetris</b></h1> --}}

            {{-- <div class="title">Title:</div> --}}
            <h1 class="titleBig"><b>{{$collectionDetail['Game']}}</b></h1>

            {{-- show game cover or default cover --}}
            @if ($collectionDetail['Covers'] != null)
                <img class="cover" src="{{ asset('/'.$collectionDetail['Covers'].'')}}">
            @else
                <img class="cover" src="{{ asset('/Cover/nocover.png')}}">
            @endif

            <br><br>

            <div class="d-flex justify-content-start">
                <div class="pe-4">
                    <div><b>User rating:</b></div>
                    <div><b>Ranking:</b>&nbsp;<img class="infoIcon" src="{{ asset('/images/infoIcon.png') }}" alt="Info Icon" ata-bs-toggle="tooltip" data-bs-placement="top" title="Source : Wikipedia. World wide ranking from 15.06.2022"></div>
                    <div><b>Platform:</b></div>
                    <div><b>Developer:</b></div>
                    <div><b>Publisher:</b></div>
                    <div><b>Sales:</b>&nbsp;<img class="infoIcon" src="{{ asset('/images/infoIcon.png') }}" alt="Info Icon" ata-bs-toggle="tooltip" data-bs-placement="top" title="Worldwide sales. Source: Wikipedia from 15.06.2022"></div>
                    <div><b>Sales:</b></div>
                </div>

                <div>
                    <div id="userRating" class="d-flex align-items-center">@include('ratingTotal')</div>
                    <div id="ranking">{{$collectionDetail['Ranking']}}</div>
                    <div id="platform">{{$collectionDetail['Platform']}}</div>
                    <div id="developer">{{$collectionDetail['Developer']}}</div>
                    <div id="publisher">{{$collectionDetail['Publisher']}}</div>
                    <div id="release">{{$collectionDetail['ReleaseDate']}}</div>
                    <div id="sales">{{ number_format($collectionDetail['Sales'], 0, '.', '\'')}}</div>
                </div>
            </div>

            <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
            welches dieses layout "extended" -->
            @yield('content')
            <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y'
            und im html ausgegeben-->

        </div>
    </div>

    {{-- right entry button --}}
    <div style="height: 100%" class="col-1 border-start border-dark d-flex justify-content-center align-items-center d-grid">

        <form action="/next" method="get">
            {{-- @csrf --}}
                <button type="submit" class="btn buttonColor h-100" name="next" value="1">></button>
        {{-- <button type="button" class="btn buttonColor h-100" onclick="location.href='next'">></button> --}}
        {{-- <img class="buttonArrow" src="{{ asset('/images/buttonRight.png') }}" alt="Previous entry"> --}}
        </form>
    </div>

</div>

<link rel="stylesheet" href="{{ asset('js/misc.js') }}" />

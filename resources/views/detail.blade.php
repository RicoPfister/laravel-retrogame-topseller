<link href="{{ asset('/css/detail.css') }}" rel="stylesheet">
<link href="{{ asset('/css/misc.css') }}" rel="stylesheet">

<div class="col border border-1 border-dark d-flex justify-content-center p-0 m-0">

    {{-- left entry button --}}
    <div style="height: 100%" class="col-1 border-end border-dark d-flex justify-content-center align-items-center d-grid">
        <form action="/previous" method="post">
                <button type="submit" class="btn buttonColor h-100"><</button>
                {{-- <img class="buttonArrow" src="{{ asset('/images/buttonLeft.png') }}" alt="Previous entry"> --}}
        </form>
    </div>

    <div class="col py-3 d-flex justify-content-center detail">

        {{-- box-former --}}
        <div>

            {{--<h1 class="heading"><b>Tetris</b></h1> --}}

            {{-- <div class="title">Title:</div> --}}

            {{-- print_r({{$collection}}); --}}

            <h5 class="titleBig"><b>{{$collection['Game']}}</b></h5>

            <img class="cover" src="{{ asset('/images/2-Tetris.jpg') }}" alt="Tetris">

            <br><br>

            <div class="d-flex justify-content-start">
                <div class="pe-4">
                    <div><b>User rating:</b></div>
                    <div><b>Ranking:</b>&nbsp;<img class="infoIcon" src="{{ asset('/images/infoIcon.png') }}" alt="Info Icon" ata-bs-toggle="tooltip" data-bs-placement="top" title="Source : Wikipedia. World wide ranking from 15.06.2022"></div>
                    <div><b>Platform:</b></div>
                    <div><b>Developer:</b></div>
                    <div><b>Publisher:</b></div>
                    <div><b>Release Date:</b></div>
                    <div><b>Sales:</b></div>
                </div>

                <div>
                    <div id="userRating">no data</div>
                    <div id="ranking">{{$collection['Ranking']}}</div>
                    <div id="platform">{{$collection['Platform']}}</div>
                    <div id="developer">{{$collection['Developer']}}</div>
                    <div id="publisher">{{$collection['Publisher']}}</div>
                    <div id="release">{{$collection['ReleaseDate']}}</div>
                    <div id="sales">{{$collection['Sales']}}</div>
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

        <button type="button" class="btn buttonColor h-100" onclick="location.href='next'">></button>
        {{-- <img class="buttonArrow" src="{{ asset('/images/buttonRight.png') }}" alt="Previous entry"> --}}

    </div>

</div>

<link rel="stylesheet" href="{{ asset('js/misc.js') }}" />

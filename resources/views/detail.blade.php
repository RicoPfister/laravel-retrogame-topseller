{{-- author: rico --}}

<link href="{{ asset('/css/detail.css') }}" rel="stylesheet">
<link href="{{ asset('/css/misc.css') }}" rel="stylesheet">

<div class="col border border-1 border-dark d-flex justify-content-center p-0 m-0">

    {{-- left entry button --}}
    <div style="height: 100%" class="col-1 border-end border-dark d-flex justify-content-center align-items-center d-grid">
        <form action="/previous" method="get">
            {{-- @csrf --}}
                <button type="submit" class="btn buttonColor h-100" name="previous" value="1"><</button>
        </form>
    </div>

    {{-- cover/detail box --}}
    <div class="col py-3 detail">

        {{-- title section --}}
        <div class="row">
            <h3 class="titleBig text-center"><b>{{$collection['Game']}}</b></h3>
        </div>

        {{-- cover/detail section --}}
        <div class="row">

            <div class="col d-flex justify-content-center border">

                <div>

                    {{-- show game cover or default cover --}}
                    @if ($collection['Covers'] != null)
                        <img class="cover" src="{{ asset('/images/'.$collection['Covers'].'')}}">
                    @else
                        <img class="cover" src="{{ asset('/images/nocover.png')}}">
                    @endif

                    <div class="d-flex justify-content-start mt-2">
                        <div class="pe-4">
                            <div><b>User rating:</b></div>
                            <div><b>Ranking:</b>&nbsp;<img class="infoIcon" src="{{ asset('/images/infoIcon.png') }}" alt="Info Icon" ata-bs-toggle="tooltip" data-bs-placement="top" title="Worldwide ranking. Source: Wikipedia from 15.06.2022"></div>
                            <div><b>Platform:</b></div>
                            <div><b>Developer:</b></div>
                            <div><b>Publisher:</b></div>
                            <div><b>Release Date:</b></div>
                            <div><b>Sales:</b>&nbsp;<img class="infoIcon" src="{{ asset('/images/infoIcon.png') }}" alt="Info Icon" ata-bs-toggle="tooltip" data-bs-placement="top" title="Worldwide sales. Source: Wikipedia from 15.06.2022"></div>
                        </div>

                        <div>
                            <div id="userRating">no data</div>
                            <div id="ranking">{{$collection['Ranking']}}</div>
                            <div id="platform">{{$collection['Platform']}}</div>
                            <div id="developer">{{$collection['Developer']}}</div>
                            <div id="publisher">{{$collection['Publisher']}}</div>
                            <div id="release">{{$collection['ReleaseDate']}}</div>
                            <div id="sales">{{ number_format($collection['Sales'], 0, '.', '\'')}}</div>
                        </div>
                    </div>

                    <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
                    welches dieses layout "extended" -->
                    @yield('content')
                    <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y'
                    und im html ausgegeben-->
                </div>
            </div>
        </div>
    </div>

    {{-- right entry button --}}
    <div style="height: 100%" class="col-1 border-start border-dark d-flex justify-content-center align-items-center d-grid">

        <form action="/next" method="get">
            {{-- @csrf --}}
                <button type="submit" class="btn buttonColor h-100" name="next" value="1">></button>
        {{-- <button type="button" class="btn buttonColor h-100" onclick="location.href='next'">></button> --}}
        {{-- <img class="buttonArrow" src="{{ asset('/images/buttonRight.png') }}" alt="Previous entry"> --}}

    </div>

</div>

<link rel="stylesheet" href="{{ asset('js/misc.js') }}" />

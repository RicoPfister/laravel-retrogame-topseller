<link href="{{ asset('/css/detail.css') }}" rel="stylesheet">

<div class="col border border-1 border-dark d-flex justify-content-center p-0 m-0">

    {{-- left entry button --}}
    <div style="height: 100%" class="col-1 border-end border-dark d-flex justify-content-center align-items-center">

        <img class="buttonArrow" src="{{ asset('/images/buttonLeft.png') }}" alt="Previous entry">

    </div>

    <div class="col py-1 d-flex justify-content-center detail">

        {{-- box-former --}}
        <div>

            {{--<h1 class="heading"><b>Tetris</b></h1> --}}

            <div class="title">Title:</div>
            <h1 class="titleBig"><b>Tetris</b></h1>

            <img class="cover" src="{{ asset('/images/2-Tetris.jpg') }}" alt="Tetris">

            <br><br><div><b>User rating:</b> *****</div>

                    <div class="col-lg-12">
                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="rating-average" class="rating-value" value="4.5">
                        </div>
                    </div>


            <div><b>Ranking: </b>10</div>
            <div><b>divlatform: </b>Game Boy</div>
            <div><b>Develodiver: </b>Nintendo</div>
            <div><b>divublisher: </b>Nintendo</div>
            <div><b>Release Date: </b>1986</div>
            <div><b>Sales: </b>25 millions</div>
            <br>
            <div><b>[write comment module] </b></div>

            <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
            welches dieses layout "extended" -->
            @yield('content')
            <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y'
            und im html ausgegeben-->

        </div>
    </div>

    {{-- right entry button --}}
    <div style="height: 100%" class="col-1 border-start border-dark d-flex justify-content-center align-items-center">

        <img class="buttonArrow" src="{{ asset('/images/buttonRight.png') }}" alt="Previous entry">

    </div>

</div>

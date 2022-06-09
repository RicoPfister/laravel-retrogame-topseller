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
   <div id="wrapper">
    <img class="logo" src="{{ asset('/images/newLogo.png') }}" alt="RetroGames">
    </div>
  </div>
   <title class="title">@yield('title')</title>
</head>
<body>
   <!-- hier wird auch der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   <h1><a href="/messages">@yield('title')</a></h1>

   <div class="input-group">
    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
    <button type="button" class="btn btn-primary">Search</button>
  </div>

   <p><br><b>Title:</b></p>

   <img class="cover" src="{{ asset('/images/2-Tetris.jpg') }}" alt="Tetris">

   <p><br>Rating:</p>
   <div class="container">
    <div class="row">
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
    </div>
  </div>

   <p><b>Ranking:</b></p>
   <p><b>Platform:</b></p>
   <p><b>Developer:</b></p>
   <p><b>Publisher:</b></p>
   <p><b>Release Date:</b></p>
   <p><b>Sales:</b></p>

   <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   @yield('content')
   <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y'
    und im html ausgegeben-->

    <section>
        <div class="container my-7 py-7 text-dark">
          <div class="row d-flex justify-content-left">
            <div class="col-md-8 col-lg-8 col-xl-4">
              <div class="card">
                <div class="card-body p-2">
                  <div class="d-flex flex-start w-100">
                    <img class="star-rating">
                        <ul class="rating" data-mdb-toggle="rating">
                        <li>
                          <i class="far fa-star fa-sm text-primary" title="Bad"></i>
                        </li>
                        <li>
                          <i class="far fa-star fa-sm text-primary" title="Poor"></i>
                        </li>
                        <li>
                          <i class="far fa-star fa-sm text-primary" title="OK"></i>
                        </li>
                        <li>
                          <i class="far fa-star fa-sm text-primary" title="Good"></i>
                        </li>
                        <li>
                          <i class="far fa-star fa-sm text-primary" title="Excellent"></i>
                        </li>
                      </ul>
                      <div class="form-outline">
                        <textarea class="form-control" id="textAreaExample" rows="3"></textarea>
                        <label class="form-label" for="textAreaExample"></label>
                      </div>
                      <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-primary" id="comment">Comment</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

   <div class="footer"><b>Updated: {{date('d.m.Y')}}</b></div>
</body>
</html>

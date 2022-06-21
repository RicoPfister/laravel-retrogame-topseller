{{-- author: beni/rico --}}

  <link href="{{ asset('/css/rating_search.css') }}" rel="stylesheet">
  <script src="{{ asset('/js/rating.js') }}"></script>

        <div class="col comment border border-5 border-dark d-flex py-4 mb-5 ">
          <div class="col-md-4 col-lg-4 col-xl-12">
            <div class="card">
              <div class="card-body p-2">
                <div class="form-outline">
                    <form action="/new-comment" method="get" id="commentForm">
                        @csrf
                        <label class="form-label m-0 p-0" for="nickname">Nickname:<br></label>
                            <input class="form-control" id="nickname" name="nickname" placeholder="Nickname">

                            </div>  <label class="form-label m-0 p-0 mt-3" for="stars">Game rating (optional):<br></label>
                            <div class="">

                                <div>

                                    <div id="stars" class="rating">
                                        <label>
                                        <input type="radio" name="stars" value="1" />
                                        <span class="icon">★</span>
                                        </label>
                                        <label>
                                        <input type="radio" name="stars" value="2" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        </label>
                                        <label>
                                        <input type="radio" name="stars" value="3" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        </label>
                                        <label>
                                        <input type="radio" name="stars" value="4" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        </label>
                                        <label>
                                        <input type="radio" name="stars" value="5" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        </label>
                                    </div>
                                </div>
                        <div class="">
                            <label class="form-label w-100 m-0 p-0" for="userComment">Comment:</label>
                            <textarea class="form-control commentForm" w-100 id="userComment" rows="3" name="comment" placeholder="Comment"></textarea>
                        </div>

                            <div class="mt-3">
                            <img class="captcha" src="{{ asset('/images/captcha.png')}}" alt="Check if you are not a bot">
                            <input class="form-control mb-3" id="captcha" name="captcha" placeholder="Type the numbers above">
                            <button type="submit" class="btn btn-primary" id="submit">Share</button>
                            </div>

                            @if ($errors->any())
                            <div>
                               <ul>
                                  @foreach ($errors->all() as $error)
                                     <li class='warning'>{{ $error }}</li>
                                  @endforeach
                               </ul>
                            </div>
                      @endif
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>




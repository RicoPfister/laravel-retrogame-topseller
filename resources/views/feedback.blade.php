  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('/css/rating_search.css') }}" rel="stylesheet">
  <script src="{{ asset('/js/rating.js') }}"></script>

    <div class="row">
        <div class="comment border border-1 border-dark d-flex justify-content-center py-4 mb-5">
          <div class="col-md-4 col-lg-4 col-xl-12">
            <div class="card">
              <div class="card-body p-2">
                <div class="form-outline">
                  <textarea class="form-control" id="textArea" rows="1" placeholder="Nickname:"></textarea>
                    <label class="form-label" for="textArea"><br></label>
                </div>
                <div class="d-flex flex-start w-100">

                    <div>
                        <form class="rating">
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
                          </form>
                    </div>
                    <div class="form-outline">
                        <textarea class="form-control" id="textArea" rows="3" placeholder="Comment:"></textarea>
                        <label class="form-label" for="textArea"><br></label>
                    </div>
                        <div class="position-absolute bottom-0 end-0">
                        <button type="submit" class="btn btn-primary" id="comment">Share</button>
                        </div>



                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

<!DOCTYPE html>
<html lang="en"><head>
  <title>User-Rating</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('/css/rating_search.css') }}" rel="stylesheet">
  <script src="{{ asset('/js/rating.js') }}"></script>

   <section>
        <div class="comment border border-1 border-dark d-flex justify-content-center py-4 mb-5">
          <div class="col-md-4 col-lg-4 col-xl-12">
            <div class="card">
              <div class="card-body p-2">
                <div class="form-outline">
                  <textarea class="form-control" id="textArea" rows="1" placeholder="Nickname:"></textarea>
                    <label class="form-label" for="textArea"><br></label>
                </div>
                <div class="d-flex flex-start w-100">
                  <p class="stars">
                    <span>
                      <a class="star-1" id="stars" href="#" value="1">1</a>
                      <a class="star-2" id="stars" href="#" value="2">2</a>
                      <a class="star-3" id="stars" href="#" value="3">3</a>
                      <a class="star-4" id="stars" href="#" value="4">4</a>
                      <a class="star-5" id="stars" href="#" value="5">5</a>
                    </span>
                  </p>
                    <div class="form-outline">
                      <textarea class="form-control" id="textArea" rows="3" placeholder="Comment:"></textarea>
                        <label class="form-label" for="textArea"><br></label>
                    </div>
                      <div class="position-absolute bottom-0 end-0">
                        <button type="button" class="btn btn-primary" id="comment">Share</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>

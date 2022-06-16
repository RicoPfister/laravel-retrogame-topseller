<!DOCTYPE html>
<html lang="en">
<head>
  <title>Game-Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="{{ asset('/css/rating_search.css') }}" rel="stylesheet">
  <script src="{{ asset('/js/sortresult.js') }}"></script>

</head>

<div class="comment border border-1 border-dark d-flex justify-content-center py-4 mb-5">

    <div>

        <h1><b>Comments</b></h1>
        @include('feedback')
        <br>
        <div><b>[show comments module] </b></div>

    </div>

</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('/css/rating_search.css') }}" rel="stylesheet">
<script src="{{ asset('/js/rating.js') }}"></script>

    @for ($i = 1; $i <= $comment->Rating; $i++)
        <div class="ratingStar">&#9733</div>
    @endfor


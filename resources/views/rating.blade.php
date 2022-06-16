<!DOCTYPE html>
<html lang="en"><head>
  <title>Total-Rating</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('/css/rating_search.css') }}" rel="stylesheet">
  <script src="{{ asset('/js/rating.js') }}"></script>

  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"><b></span>

  <section>
    <template>
    <div>
    <b-form-rating v-model="value" readonly></b-form-rating>
    </div>
    </template>
  </section>

</body>
</html>

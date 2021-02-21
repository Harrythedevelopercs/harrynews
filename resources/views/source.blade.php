<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>{{ $search }}</title>
  </head>
  <body>
      <style>
          .card{
            transition:  .2s;
            transition-timing-function: ease-in;
          }
          .card:hover{
            box-shadow: 0px 5px 15px 0px gray;
          }
      </style>
    <x-nav />

    <div class="container mt-5">
     <h1 class="mt-2 mb-4">News Sources</h1>
     <div class="row row-cols-1 row-cols-md-3 g-3">
        <?php $i = 1; ?>

        @foreach ($collectionsofnews as $articals)
                <div class="col">

                    <div class="card mt-3 h-100" style="max-width: 540px;">
                        <div class="row g-0">

                          <div class="col-md-12">
                            <div class="card-body">
                              <h5 class="card-title">{{ $articals['name'] }}</h5>
                              <p class="card-text">{{ $articals['description'] }}</p>
                              <p class="card-text"><strong>Language : </strong> {{ $articals['language'] }}</p>
                              <p class="card-text"><strong>Country : </strong> {{ $articals['country'] }}</p>



                              <div class=" btn-group" role="group" aria-label="Basic example">
                                <a href="{{ $articals['url'] }}" class="btn btn-outline-success" >Source Website</a>
                                <a href="sourcenews/{{ $articals['id'] }}" class="btn btn-outline-success" >Source News</a>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                </div>
            @endforeach
     </div>
 </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>

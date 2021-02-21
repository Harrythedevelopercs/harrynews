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
    <x-nav />

    <div class="container mt-5">
     <h1 class="mt-2 mb-4">Source Headlines</h1>
     <div class="row">
        <?php $i = 1; ?>

        @foreach ($collectionsofnews as $articals)
                <div class="col-4">

                    <div class="card mb-5" >
                        <img src="{{ ($articals['urlToImage'] ?: 'https://upload.wikimedia.org/wikipedia/commons/0/0a/No-image-available.png' ) }}" class="card-img-top" alt="News Image" style="width:100%;height:10vw">
                        <div class="card-body">
                          <h5 class="card-title" style="font-size: 1vw;">{{ $articals['title'] }}</h5>
                          <p style="font-size: 1vw;">{{ $articals['description'] }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">published At : <?php $date=date_create($articals['publishedAt']); echo  date_format($date,"d-m-Y"); ?> </li>
                            <li class="list-group-item">Source : {{ $articals['source']['name'] }}</li>
                          </ul>
                        <div class="card-body">
                          <a href="{{ $articals['title'] }}" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop{{  $i += 1 }}">Read News</a>

                        </div>
                      </div>
                      <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop{{  $i }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">{{ $articals['title'] }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-6">
                    <img src="{{ ($articals['urlToImage'] ?: 'https://upload.wikimedia.org/wikipedia/commons/0/0a/No-image-available.png' ) }}" class="card-img-top" alt="News Image" style="width: 500px;height:400px" >
                </div>
                <div class="col-6">
                    <h4 class="mb-2">Description</h4>
                    <p class="wrap ml-2 mb-2">{{ $articals['description'] }} <a  href="{{ $articals['url'] }}" style="color:red">Read More</a></p>
                    <p class="wrap ml-2 mb-2">Source Name : {{ $articals['source']['name'] }}</p>
                    <p class="wrap ml-2 mb-2">Author Name : {{ $articals['author'] }}</p>
                </div>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="{{ $articals['url'] }}" type="button" class="btn btn-primary">Goto Source</a>
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

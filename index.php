<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=b893c632&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container_new">
<div class="container">
<div class="row mt-3 text-center">
  <div class="col text-white">
<h1 class="tilte" style="text-shadow: 6px 6px 6px blue;">NARUTO MOVIE</h1>
</div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="1.jpg" class="card-img-top" height="400px">
      <div class="card-body bg-dark text-white text-center" style="height:220px">
        <h5 class="card-title text-center" style="font-size:15px">Naruto Shippuden the Movie: Blood Prison (Gekijouban Naruto: Buraddo purizun) (2011)</h5>
        <p class="card-text">Action, Animation, Comedy, Japan, BluRay, 2011, 720</p>
        <a href="http://" class="btn bg-danger">NONTON</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="2.jpg" class="card-img-top" height="400px">
      <div class="card-body bg-dark text-white text-center" style="height:220px">
        <h5 class="card-title text-center " style="font-size:15px">Naruto Shippûden The Movie: Bonds (Gekijô ban Naruto: Shippûden - Kizuna) (2008)</h5>
        <p class="card-text">Action, Animation, Fantasy, Japan, BluRay, 2008, 720</p>
        <a href="http://" class="btn bg-danger">NONTON</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="3.jpg" class="card-img-top" height="400px">
      <div class="card-body  bg-dark text-white text-center" style="height:220px">
        <h5 class="card-title text-center" style="font-size:15px">Naruto Shippûden: The Lost Tower (Gekijouban Naruto Shippuuden: Za rosuto tawâ)</h5>
        <p class="card-text">
Action, Adventure, Animation, Fantasy, Japan, BluRay, 2010, 720</p>
<a href="http://" class="btn bg-danger">NONTON</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="4.jpg" class="card-img-top" height="400px">
      <div class="card-body bg-dark text-white text-center" style="height:220px">
        <h5 class="card-title text-center" style="font-size:15px">Naruto the Movie: Ninja Clash in the Land of Snow (Gekijô-ban Naruto: Daikatsugeki! Yukihime ninpôchô dattebayo!!) (2004)</h5>
        <p class="card-text">Action, Adventure, Animation, Japan, BluRay, 2004, 720</p>
        <a href="http://" class="btn bg-danger">NONTON</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="5.jpg" class="card-img-top" height="400px">
      <div class="card-body  bg-dark text-white text-center" style="height:220px">
        <h5 class="card-title text-center" style="font-size:15px">Naruto the Movie 3: Guardians of the Crescent Moon Kingdom (Gekijô-ban Naruto: Daikôfun! Mikazukijima no animaru panikku dattebayo!) (2006)</h5>
        <p class="card-text">Action, Adventure, Animation, Japan, BluRay, 2006, 720</p>
        <a href="http://" class="btn bg-danger">NONTON</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="6.jpg" class="card-img-top" height="400px">
      <div class="card-body bg-dark text-white text-center" style="height:220px">
        <h5 class="card-title text-center" style="font-size:15px">
Naruto the Movie 2: Legend of the Stone of Gelel (Gekijô-ban Naruto: Daigekitotsu! Maboroshi no chitei iseki dattebayo!) (2005)</h5>
        <p class="card-text">Adventure, Animation, Comedy, Japan, BluRay, 2005, 720</p>
        <a href="http://" class="btn bg-danger">NONTON</a>
      </div>
    </div>
  </div>
    </div>
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Capres Indonesia</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

 <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
 <div class="container-fluid bg-custom">
  <nav class="navbar navbar-expand-lg">
   <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <div class="navbar-nav">
      <a class="nav-link" href="#">Home</a>
      <a class="nav-link" href="#visi">Visi & Misi</a>
      <a class="nav-link" href="#">Janji - Janji</a>
     </div>
    </div>
   </div>
  </nav>

  <div class="row">
   <div class="col-auto">
    <div class="date-now text-center">
     <h4>{{ $formatted_date }}</h4>
     <h4>{{ $formatted_mount }}</h4>
     <h4>{{ $formatted_year }}</h4>
     <h6 id="time"></h6>
    </div>
    <div class="info-capres text-center">
     <h3>CAPRES 2024</h3>
     <hr>
     <p class="text-white">
      Lorem ipsum dolor sit amet.
     </p>
    </div>
   </div>
   <div class="col-8 ms-auto me-auto">
    <div class="card-group">
     <div class="card">
      <img src="{{ asset('img/paslon1.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title">Card title</h5>
       <p class="card-text">This is a wider</p>
      </div>
     </div>
     <div class="card ms-3 me-3">
      <img src="{{ asset('img/pragi.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title">Card title</h5>
       <p class="card-text">This card has supporting</p>
      </div>
     </div>
     <div class="card">
      <img src="{{ asset('img/paslon3.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title">Card title</h5>
       <p class="card-text">This is a wider card</p>
      </div>
     </div>
    </div>
   </div>
   <div class="col-auto">
    <div class="voting text-center">
     <h5>Paslon 1 : Angka</h5>
     <h5>Paslon 2 : Angka</h5>
     <h5>Paslon 3 : Angka</h5>
    </div>
   </div>
  </div>
  <div class="row mt-5">
   <div class="container visi-misi">
    <div class="row">
      <div class="col-sm-6">
        <div class="card ms-auto" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card me-auto" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-sm-12">
        <div class="card ms-auto me-auto" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
 </div>


 <script>
  function updateTime() {
   fetch('{{ route('get.time') }}')
    .then(response => response.json())
    .then(data => {
     document.getElementById('time').textContent = data.time;
    });
  }

  setInterval(updateTime, 1000); // Refresh every second

 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
 </script>
</body>

</html>

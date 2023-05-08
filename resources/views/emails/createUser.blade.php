<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motorcyclist</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

<body>
<div class="container" style="margin-top: 4%">
    <div class="d-flex flex-wrap justify-content-center">
      <tr>
      <div class="card" style="width: 26rem; margin-bottom: 3%; margin-left: 0.5%;">
    <div class="card-body">
      <h2 class="card-title">Id: {{$user->id}}</h2>
      <h3 class="card-title">Name: {{$user->name}}</h3>
      <h6 class="card-subtitle mb-2 text-body-secondary">Email: {{$user->email}}</h6>
      <div class="d-flex flex-wrap" >    
    </div>
  </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>

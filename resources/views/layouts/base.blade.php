<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motorcyclist</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

<body>
  <div class="head">
    <div class="login">
      <a class="navbar-brand" href="#">Motorcyclist</a>
    </div>
    <div class="login2">
      <a class="nav-link active" aria-current="page" href="/login"><i class="bi bi-person-circle" title="Login"></i></a>
    </div>
  </div>
    <nav class="navbar navbar-expand-lg fond">
      <div class="container-fluid">
        <div>
          <img src="{{ asset('assets/logo1.png') }}" alt="Logo" class="imagen-chica">
        </div>
        <div>
          <img src="{{ asset('assets/logo2.png') }}" alt="Logo" class="imagen-chica">
        </div>
        <div>
          <img src="{{ asset('assets/logo3.png') }}" alt="Logo" class="imagen-chica">
        </div>
        <div>
          <img src="{{ asset('assets/logo4.png') }}" alt="Logo" class="imagen-chica" >
        </div>
        <div>
          <img src="{{ asset('assets/logo5.png') }}" alt="Logo" class="imagen-chica">
        </div>
          
        </div>
      </div>
    </nav>
    @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>
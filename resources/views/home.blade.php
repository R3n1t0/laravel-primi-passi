<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">
  <title>Laravel Primi Passi</title>
</head>
<body>
  <h1 class="container text-center py-5">Portale di filosofia</h1>

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-2">
        <h5>Filosofi Presocratici</h5>
        <ul>
          @foreach ($filosofi_presocratici as $filosofo)
            <li>{{ $filosofo }}</li>
          @endforeach
        </ul>
      </div>
      <div class="col-2">
        <h5>Filosofi Classici</h5>
        <ul>
          @foreach ($filosofi_classici as $filosofo)
            <li>{{ $filosofo }}</li>
          @endforeach
        </ul>
      </div>
      <div class="col-2">
        <h5>Filosofi Patrstici</h5>
        <ul>
          @foreach ($filosofi_patristici as $filosofo)
            <li>{{ $filosofo }}</li>
          @endforeach
        </ul>
      </div>
      <div class="col-2">
        <h5>Filosofi Umanustici</h5>
        <ul>
          @foreach ($filosofi_umanistici as $filosofo)
            <li>{{ $filosofo }}</li>
          @endforeach
        </ul>
      </div>
      <div class="col-2">
        <h5>Filosofi Illuministi</h5>
        <ul>
          @foreach ($filosofi_illuministi as $filosofo)
            <li>{{ $filosofo }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>

</body>
</html>
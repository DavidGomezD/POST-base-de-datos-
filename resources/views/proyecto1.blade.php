<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Proyecto Laravel</title>
  </head>
  <body>

  <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="/">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Proyecto 1</a>
      </li>
    </ul>
  </div>
  <!-- Aqui se muestra el diseño de la pagina -->
  <div class="card-body">
    
    <h3 class="card-title">Proyecto 1</h3>
    <h5 class="card-title">Gómez Delgado David</h5>
    <p class="card-text mt-3">Conexión a la base de datos e ingreso de datos por método POST en Laravel.</p>

    <form action="{{ url('guardar') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2">
        <input type="text" name="apaterno" placeholder="Apellido Paterno" class="form-control mb-2">
        <input type="text" name="amaterno" placeholder="Apellido Materno" class="form-control mb-2">
        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>
    
        <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        </tr>
    </thead>
    <tbody>
    <!-- foreach hace el recorrido del arreglo en la bd -->
        @foreach($empleados as $item)
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nombre}}</td>
        <td>{{$item->apaterno}}</td>
        <td>{{$item->amaterno}}</td>
        </tr>
        @endforeach()
    </tbody>
    </table>

  </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
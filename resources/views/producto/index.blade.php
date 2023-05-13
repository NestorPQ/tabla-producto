<!doctype html>
<html lang="es">

<head>
  <title>Gestión de Productos - Turismo Pokemons</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Artifika&display=swap" rel="stylesheet">

  <style>
    h1{
      font-family: 'Artifika', serif;
      font-size: 80px;
    }

    table{
      font-family: verdana;
    }
  </style>




</head>

<body>

  <div class="container">
    <h1 class="text-center mt-5 mb-5">
      <strong>
        Turismo Pokemon
        
      </strong>
    </h1>
    <div class="row">

      <!-- <? php
        include 'input.php';
      ?>  -->

      <div class="col-lx-12">
        <form action="{{route('producto.index')}}" method="get">
          <div class="col-auto my-1">
            <input type="text" class="form-control form-control-lg mb-5" name="texto" placeholder="Ingresar el texto" value="{{$texto}}" autocomplete="off">
          </div>
          <div class="col-auto my-1 text-end">
            <input type="submit" class="btn btn-outline-success btn-lg mb-3" value="Buscar">
            <a href="{{route('producto.create')}}" class="btn btn-outline-primary btn-lg mb-3">Nuevo</a>
          </div>
        </div>
      </form>
    </div>
    <div class="col-lx-12">


      <table class="table table-striped table-hover table-bordered border-success">
        <thead>

          <tr class="table-success  text-center">
            <th>Opciones</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Precio</th>

          </tr>

        </thead>
        <tbody class="table-group-divider">

          @if(count($productos)<=0)
          <tr>
            <td colspan="8">No hay resultados</td>
          </tr>
          @else
          @foreach($productos as $producto)
          <tr>
            <td class="text-nowrap text-center">Editar | Eliminar</td>
            <td class="text-nowrap">{{$producto->codigoProduct}}</td>
            <td class="text-nowrap">{{$producto->nombreProduct}}</td>
            <td class="text-nowrap">{{$producto->marcaProduct}}</td>
            <td class="text-nowrap">{{$producto->precioProduc}}</td>
          </tr>
          @endforeach
          @endif

        </tbody>

      </table>
      {{$productos->links()}}
    </div>
  </div>
</div>


<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>
<!doctype html>
<html lang="es">

<head>
  <title>Turismo Pokemo - Gestión de productos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>


  <div class="container">
    <h1>Ingreso de Productos</h1>
    <div class="row">
      <div class="col-lx-12">
        <form action="{{route('producto.store')}}" method="post">
          @csrf

          <!-- NOMBRE -->
          <div class="mb-3 my-1">
            <input type="text" class="form-control" name="nombreProduct" placeholder="Ingrese el nombre" maxlength="30" autofocus autocomplete="off">
          </div>

          <!-- MARCA -->
          <div class="mb-3 my-1">
            <input type="text" class="form-control" name="marcaProduct" placeholder="Ingrese la marca" maxlength="30" autocomplete="off">
          </div>

          <!-- PRECIO -->
          <div class="mb-3 my-1">
            <input type="text" class="form-control" name="precioProduc" placeholder="Ingrese el precio" maxlength="7" autocomplete="off">
          </div>


          <!-- BOTONES -->
          <div class="mb-3 my-1">
            <input type="submit" class="btn btn-outline-danger" value="Guardar">
            <input type="reset" class="btn btn-outline-dark" value="Cancelar">
            <a href="JavaScript:history.back()">Ir la listado</a>
          </div>

        </form>
        
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
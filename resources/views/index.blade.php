<!doctype html>
<html lang="en">
  <head>
    <title>Thatz Weather</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS Styles-->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

  </head>
  <body>
      <div class="container">
        <div class="row">
          <div id="logo" class="d-flex justify-content-center logo"></div>
        </div>
        <main class="d-flex flex-column home">
          <div class="frase">
            <p>Entérate del tiempo en la zona exacta que te interesa buscando por código postal</p>
          </div>
          <div>
            <form action="" method="get">
              <div class="form-group">
                <input type="text" class="form-control" name="" id="codigoPostal" placeholder="Introduce el código postal" maxlength="5" pattern="[0-9]{5}" oninvalid="this.setCustomValidity('Debes introducir 5 dígitos.')">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Buscar <i class="lupa"></i> </button>
              </div>
            </form>
          </div>
          <div class="d-flex justify-content-center eslogan">
            <p>¡Que la lluvia no te pare!</p>
          </div>
        </main>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
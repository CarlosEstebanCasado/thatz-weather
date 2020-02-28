<!doctype html>
<html lang="en">
  <head>
    <title>Resultado | Thatz Weather</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700,800,900&display=swap" rel="stylesheet">
</head>
  <body>
      <div class="container-fluid">
        <div class="row">
            <div id="logo" class="d-flex justify-content-center logo-resultado"></div>
        </div>  
        <main class="d-flex flex-wrap resultados">
            <div class="col-sm-12 col-md-8 resultado">
                <div class="d-flex justify-content-between col-sm-12 my-4">
                    <div class="d-flex flex-column ciudad">
                        <p class="info-cp">Código Postal: <span>08034</span></p>
                        <p class="info-ciudad">Ciudad: <span>Barcelona</span></p>
                    </div>
                    <div class="buscar">
                        <a href="{{ url('/') }}" class="lupa"></a>
                    </div>
                </div>
                <div class="resultados-tiempo col-sm-12">
                    <div class="ahora">
                        <div class="d-flex justify-content-center titulo">
                            <p>Ahora</p>
                        </div>
                        <div class="d-flex flex-wrap tiempo-actual">
                            <div class="col-6 tiempo">
                                <i class="far fa-snowflake"></i>
                            </div>
                            <div class="d-flex flex-column col-6">
                                <div class="col-6 d-flex align-items-end">
                                    <p class="fenomeno">Nieve</p>
                                </div>
                                <div class="col-6">
                                    <p class="temperatura">-3º</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dias5 border-top">
                        <div class="d-flex justify-content-center titulo">
                            <p>Próximos 5 días</p>
                        </div>
                        <div class="d-flex flex-wrap dias5-forecast">
                            <div class="d-flex flex-column dia-forecast border-left text-center">
                                
                                    <p class="dia-semana">Miércoles</p>
                                
                                    <i class="far fa-snowflake"></i>
                                
                                    <p>Nieve</p>
                                
                                    <p class="temperatura"> -3º</p>
                                
                            </div>
                            <div class="d-flex flex-column dia-forecast border-left text-center">
                                
                                    <p class="dia-semana">Jueves</p>
                                
                                    <i class="far fa-snowflake"></i>
                                
                                    <p>Nieve</p>
                                
                                    <p class="temperatura"> -3º</p>
                                
                            </div>
                            <div class="d-flex flex-column dia-forecast border-left text-center">
                                
                                <p class="dia-semana">Viernes</p>
                            
                                <i class="far fa-snowflake"></i>
                            
                                <p>Nieve</p>
                            
                                <p class="temperatura"> -3º</p>
                            
                            </div>
                            <div class="d-flex flex-column dia-forecast border-left text-center">
                                
                                <p class="dia-semana">Sábado</p>
                            
                                <i class="far fa-snowflake"></i>
                            
                                <p>Nieve</p>
                            
                                <p class="temperatura"> -3º</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 resultado">
                <div class="texto-top5 my-4">
                    <p>Top 5 de las zonas más frías según tus búsquedas</p>
                </div>
                <div class="d-flex flex-column top5">
                    <div class="d-flex flex-wrap my-2 border-bottom">
                        <div class="numero-lista">
                            <p>1.</p>
                        </div>
                        <div>
                            <p class="temperatura">-3º</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div >
                                <p class="info-cp">CP: <span>08034</span></p>
                            </div>
                            <div>
                                <p class="info-ciudad">Ciudad: <span>Barcelona</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap my-2 border-bottom">
                        <div class="numero-lista">
                            <p>2.</p>
                        </div>
                        <div>
                            <p class="temperatura">-3º</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div >
                                <p class="info-cp">CP: <span>08034</span></p>
                            </div>
                            <div>
                                <p class="info-ciudad">Ciudad: <span>Barcelona</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap my-2 border-bottom">
                        <div class="numero-lista">
                            <p>3.</p>
                        </div>
                        <div>
                            <p class="temperatura">-3º</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div >
                                <p class="info-cp">CP: <span>08034</span></p>
                            </div>
                            <div>
                                <p class="info-ciudad">Ciudad: <span>Barcelona</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap my-2 border-bottom">
                        <div class="numero-lista">
                            <p>4.</p>
                        </div>
                        <div>
                            <p class="temperatura">-3º</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div >
                                <p class="info-cp">CP: <span>08034</span></p>
                            </div>
                            <div>
                                <p class="info-ciudad">Ciudad: <span>Barcelona</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap my-2 border-bottom">
                        <div class="numero-lista">
                            <p>5.</p>
                        </div>
                        <div>
                            <p class="temperatura">-3º</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div >
                                <p class="info-cp">CP: <span>08034</span></p>
                            </div>
                            <div>
                                <p class="info-ciudad">Ciudad: <span>Barcelona</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c7b477f16b.js" crossorigin="anonymous"></script>
</body>
</html>
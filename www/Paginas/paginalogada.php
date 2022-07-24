<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto X - Logado</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!-- jQuery CDN Google-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="..\Estilos\paginalogadaestilo.css">

        <script src="..\Scripts\scriptpaginalogada.js"></script>
    </head>


    <?php include 'header.php'?>

    <body>
        <main id="main1" role="main" class="container-fluid">
            <div class="row">
                <div class="col-md-2 coluna" id="div-img-projetos1">
                    <div class="card bg-warning">
                        <a href="..\Paginas\calculadora.php">
                            <img id="imagem-calculadora" class="card-img-top" width="100%" height="100%" src="..\Imagens\calculadora.png" alt="calculadora">
                        </a>
    
                        <div class="card-body bg-light">
                            <p class="card-text font-weight-bold">Calculadora simples, porém muito útil. <span style='font-size:26px;'>&#128516;</span></p>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-2 coluna" id="div-img-projetos2">
                    <div class="card bg-warning">
                        <a href="..\Paginas\forca.php">
                            <img id="imagem-forca" class="card-img-top" width="100%" height="100%" src="..\Imagens\forca.png" alt="forca">
                        </a>
    
                        <div class="card-body bg-light">
                            <p class="card-text font-weight-bold">Jogo da Forca. Não vá deixar o boneco morrer hein! <span style='font-size:25px;'>&#128557;</span></p>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-2 coluna" id="div-img-projetos3">
                    <div class="card bg-warning">
                        <a href="..\Paginas\album.php">
                            <img id="imagem-album" class="card-img" width="100%" height="100%" src="..\Imagens\album.png" alt="album">
                        </a>
    
                        <div class="card-body bg-light">
                            <p class="card-text font-weight-bold">Álbum de Fotos. Para guardar suas melhores lembranças.<span style='font-size:25px;'>&#128522;</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </main> 


        <main id="main2" role="main" class="container-fluid">
            <div class="row">

                <div class="col-md-2 coluna" id="div-img-projetos1">
                    <div class="card bg-warning">
                        <a href="..\Paginas\album.php">
                            <img id="imagem-calculadora" class="card-img-top" width="100%" height="100%" src="..\Imagens\calculadoraimc.png" alt="calculadora">
                        </a>
    
                        <div class="card-body bg-light">
                            <p class="card-text font-weight-bold">Calculadora de IMC<br><span style='font-size:26px;'>&#128516;</span></p>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-2 coluna" id="div-img-projetos2">
                    <div class="card bg-warning">
                        <a href="..\Paginas\album.php">
                            <img id="sorteador" class="card-img-top" width="100%" height="100%" src="..\Imagens\aleatorio.png" alt="sorteador">
                        </a>
    
                        <div class="card-body bg-light">
                            <p class="card-text font-weight-bold">Sorteador de números ou nomes <span style='font-size:26px;'>&#128516;</span></p>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-2 coluna" id="div-img-projetos3">
                    <div class="card bg-warning">
                        <a href="..\Paginas\modificadortexto.php">
                            <img id="imagem-album" class="card-img" width="100%" height="100%" src="..\Imagens\modificadortexto.png" alt="album">
                        </a>
    
                        <div class="card-body bg-light">
                            <p class="card-text font-weight-bold">Formate seu texto conforme sua necessidade. <span style='font-size:25px;'>&#128522;</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>  
    
    </body>

    <footer>

    </footer>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora Simples</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- jQuery CDN Google-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

         <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../Estilos/calculadoraestilo.css">

        <script src="../Scripts/scriptcalculadora.js"></script>
    </head>

    <?php include 'header.php'?>

    <body>
        <main role="main" class="container-fluid">
            <div class="row rowcalculadora">
                <div class="col-md-3 coluna">
                    
                    <input id="visorcalculadora" type="text" readonly class="form-control-plaintext form-control-lg bg-light rounded" value="0">

                    <img id="imagemcalculadora" class="img-fluid rounded" src="../ImagensCalculadora/imgcalculadora.jpg" alt="calculadora">
                </div>         
            </div>
            
            <div class="row row789">
                <div class="col-md-5 col789 coluna">
                    <button id="7" type="button" class="botcalc btn btn-outline-light"></button>
                    <button id="8" type="button" class="botcalc btn btn-outline-light"></button>
                    <button id="9" type="button" class="botcalc btn btn-outline-light"></button>
                    <button id="/" type="button" class="botcalc btn btn-outline-light"></button>  
                </div>
            </div>

            <div class="row row456">
                <div class="col-md-5 col456 coluna">
                    <button id="4" type="button" class="botcalc btn btn-outline-light"></button>
                    <button id="5" type="button" class="botcalc btn btn-outline-light"></button>
                    <button id="6" type="button" class="botcalc btn btn-outline-light"></button>
                    <button id="*" type="button" class="botcalc btn btn-outline-light"></button>  
                </div>
            </div>

            <div class="row row123">
                <div class="col-md-5 col123 coluna">
                    <button id="1" type="button" class="botcalc btn btn-outline-light"></button>
                    <button id="2" type="button" class="botcalc btn btn-outline-light"></button>
                    <button id="3" type="button" class="botcalc btn btn-outline-light"></button>
                    <button id=" - " type="button" class="botcalc btn btn-outline-light"></button>  
                </div>
            </div>

            <div class="row row0">
                <div class="col-md-5 col123 coluna">
                    <button id="0" type="button" class="botcalc btn btn-outline-light"></button>
                    <button id="." type="button" class="botcalc btn btn-outline-light"></button>
                    <button id=" + " type="button" class="botcalc btn btn-outline-light"></button>
                    <button id="botaoigual" type="button" class="botcalcigual btn btn-outline-warning"></button>  
                </div>
            </div>
            
            <button id="botaolimpar" type="button" class="btn btn-light">Limpar</button>
            <button id="botaoapagar" type="button" class="btn btn-light">Apagar</button>
            
        </main>
    </body>

    <footer>
        
    </footer>

</html>
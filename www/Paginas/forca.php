<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jogo da Forca</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- jQuery CDN Google-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

         <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../Estilos/forcaestilo.css">

        <script src="../Scripts/scriptforca.js"></script>
    </head>


    <?php include 'header.php'?>

    <body>
        <main role="main" class="container-fluid">
            <div class="row">
                <div class="col-md-3 coluna">

                </div>

                <div class="col-md-6 coluna">
                    <button id="sorteiapalavra" type="button" onclick="sorteiaPalavra()" class="btn btn-warning btn-block">Clicar</button>
                    <br>

                    <!-- Aparece quando o botão é acionado -->
                    <p hidden id="guardapalavra"></p>
                    <label for="palavra">Palavra</label>
                    <p id="palavraespacos"></p> 
                    <!-- ... -->

                    <!-- Escolhe a letra -->
                    <form> 
                        <p style="text-align: left">Escolha uma letra</p>
                        <div class="form-group" id="colletra">
                            <input type="text" class="form-control" id="escolheletra" aria-describedby="letra">
                            <br>
                            <button id="envialetra" type="button" onclick="confereLetra()" class="btn btn-warning">Verificar</button>
                        </div>
                    </form>
                    <!-- ... -->

                </div>

                <div class="col-md-3 coluna">
                    
                </div>
            </div>
        </main>    
    </body>


    <footer>

    </footer>
</html>
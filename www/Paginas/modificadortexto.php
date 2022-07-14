<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formatador de Textos</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- jQuery CDN Google-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

         <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../Estilos/modificadortextoestilo.css">

        <script src="../Scripts/scriptmodificadortexto.js"></script>
    </head>

    <?php include 'header.php'?>

    <body>
        <main role="main" class="container-fluid">
            <div class="row"> 

               <div class="col-md-3 colunas">
                    <div class="form-group">
                        <label id="informativotexto" for="informativotexto">Insira o texto</label>
                        <textarea type="text" class="form-control" id="textopassado" rows="25" aria-describedby="seutexto" placeholder="Insira seu texto" value=""></textarea>
                        <label id="informativotexto2" for="informativotexto2">Para aumentar o tamanho arraste o canto acima para baixo 👆</label>
                    </div>
               </div>


                <div class="col-md-3 colunabotao colunas">
                    <form>
                        <div class="form-group">
                          <br>
                          <button id="convertermaiusculo" type="button" onclick="converterMaiusculo()" class="btn btn-warning btn-block">MAIÚSCULO</button>

                          <br>
                          <button id="convertercapitalizar" type="button" onclick="converterMinusculo()" class="btn btn-warning btn-block">minúsculo</button>

                          <br>
                          <button id="convertercapitalizar" type="button" onclick="capitalizarTexto()" class="btn btn-warning btn-block">Capitalizar</button>

                          <br>
                          <button id="converternegrito" type="button" onclick="converterNegrito()" class="btn btn-warning btn-block"><b>Negrito</b></button>

                          <br>
                          <button id="converteritalico" type="button" onclick="converterItalico()" class="btn btn-warning btn-block"><i>Itálico</i></button>
                          
                          <br>
                          <button id="convertersublinhado" type="button" onclick="converterSublinhar()" class="btn btn-warning btn-block"><u>Sublinhar</u></button>               
                        </div>
                    </form>
                </div>


                <div class="col-md-3 coluna colunaresultado colunas">
                    <label for="labelresultado">Texto convertido</label>
                    <p class="form-control" id="resultado" placeholder="Seu texto convertido aparecerá aqui"></p> 
                </div>

            </div>

          
        </main>
    </body>
    
    <footer>

    </footer>
</html>
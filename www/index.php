<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto - Home</title>
       
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- jQuery CDN Google-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

         <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="./Estilos/index.css">
        
        <!-- <script src="..\Scripts\scriptindex.js"></script> -->
    

        <?php if($_GET['modal'] == 1){ ?>
            <script type="text/javascript">
                $(window).on('load',function(){
                    document.getElementById("informativodefineusuario").innerHTML = "Usuário já existe";
                    document.getElementById("defineusuario").classList.add('is-invalid');
                    $('#modalcadastro').modal('show'); 
                });
            </script>
        <?php } ?>


        <?php if($_GET['modal'] == 2){ ?>
            <script type="text/javascript">
                 $(window).on('load',function(){
                    document.getElementById("informativodefinesenha").innerHTML = "As senhas são diferentes";
                    document.getElementById("definesenha").classList.add('is-invalid');
                    document.getElementById("informativodefinesenha2").innerHTML = "As senhas são diferentes";
                    document.getElementById("confirmasenha").classList.add('is-invalid');
                    $('#modalcadastro').modal('show'); 
                });
            </script>
        <?php } ?>


        <?php if($_GET['modal'] == 12){ ?>
            <script type="text/javascript">
                 $(window).on('load',function(){
                    document.getElementById("informativodefineusuario").innerHTML = "Usuário já existe";
                    document.getElementById("informativodefinesenha").innerHTML = "As senhas são diferentes";
                    document.getElementById("informativodefinesenha2").innerHTML = "As senhas são diferentes";

                    document.getElementById("defineusuario").classList.add('is-invalid');
                    document.getElementById("definesenha").classList.add('is-invalid');
                    document.getElementById("confirmasenha").classList.add('is-invalid');
                 $('#modalcadastro').modal('show'); 
                });
            </script>
        <?php } ?>
            
        <?php if($_GET['modal'] == 20){ ?>
            <script type="text/javascript">
                 $(window).on('load',function(){
                    document.getElementById("campovazio").innerHTML = "Preencha todos os campos";
                 $('#modalcadastro').modal('show'); 
                });
            </script>
        <?php } ?>

        <?php if($_GET['valor'] == 1){ ?>
            <script>
                $(window).on('load',function(){
                    document.getElementById("senhainformativo").innerHTML = "Usuário ou senha incorretos. Esqueceu a senha? <a class='text-body' href='#'><b>Clique aqui para recuperar</b></a>";
                    document.getElementById("senhainformativo").classList.remove('text-muted');
                    document.getElementById("senhainformativo").classList.add('text-danger');
                });
            </script>
        <?php } ?>
        
                
        <?php if($_GET['sucesso'] == 1){ ?>
            <script>
                 $(window).on('load',function(){
                 $('#modalcadastrosucesso').modal('show'); 
                });
            </script>
        <?php } ?>


    </head>

    
    <body>
        <main class="container-fluid">
            <div class="row">
                
                <div class="col-md-6" id="principal">
                    <div class="card-body">
                        <h5 class="card-title text-warning" id="principal-logo">PROJETO X</h5>
                        <p class="card-text" id="principal-logo-mensagem">Bem-vindo a página do Projeto X, onde vai ser possível fazer X coisas que ainda estão sendo definidas</p><br>
                        <p class="card-text" id="principal-logo-mensagem">Inscreva-se agora e aproveite o X conteúdo</p>
                    </div>
                </div>
    
                <!-- Login -->
                <div class="col-md-4" id="formulario">
                    <form id="login" action="./Scripts/login.php" method="POST">
                        <div id="login-informativo">
                            <p>Faça login ou <a id="alertamsg" class="text-warning" href="#" data-toggle="modal" data-target="#modalcadastro"><b>inscreva-se clicando aqui</b></a></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" id="user" name="user" aria-describedby="user" placeholder="Usuário">
                            <small id="email-informativo" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                        </div>
        
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="password" id="senha" name="senha" aria-describedby="senha" placeholder="Senha">
                            <small id="senhainformativo" class="form-text text-muted">Troque de senha regularmente para garantir sua segurança.</small> 
                        </div>
        
                        <div>
                            <input id="entrar" type="submit" value="Entrar" class="form-control form-control-lg btn btn-warning">
                        </div>
                        <br>
                        
                    </form>
                </div>
            </div>
        </main>
    </body>
    


    <!-- Modal cadastro -->
    <div class="modal fade" id="modalcadastro" tabindex="-1" role="dialog" aria-labelledby="modalcadastro" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titulomodal">Cadastro no Projeto X</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="./Scripts/cadastro.php">               
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="labeldefineousurario">Defina um usuário</label>
                            <input type="text" class="form-control" id="defineusuario" name="defineusuario" aria-describedby="defineusuario" placeholder="Usuário">
                            <small id="informativodefineusuario" class="form-text text-danger"></small> 
                        </div>
                            
                        <div class="form-group">
                            <label for="definesenha">Escolha uma senha</label>
                            <input type="password" class="form-control" id="definesenha" name="definesenha" placeholder="Senha">
                            <small id="informativodefinesenha" class="form-text text-danger"></small> 
                        </div>

                        <div class="form-group">
                            <label for="confirmasenha">Confirme a senha</label>
                            <input type="password" class="form-control" id="confirmasenha" name="confirmasenha" placeholder="Confirmação da senha">
                            <small id="informativodefinesenha2" class="form-text text-danger"></small>   
                        </div>
                        <small id="campovazio" class="form-text text-danger"></small> 
                    </div>

                    <div class="form-group modal-footer">
                        <button type="submit" class="form-control form-control-lg btn btn-warning">Cadastre-se</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal cadastrado com sucesso -->
    <div class="modal" id="modalcadastrosucesso" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" id="modalcadastrosucessodiv2" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning">Informativo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Cadastro efetuado com sucesso!</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="rounded border bg-warning">
           <p>Por enquanto, não tem nada para colocar aqui, mas é um rodapé</p>
    </footer>
                            

</html>

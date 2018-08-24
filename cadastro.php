<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        //Linha de codigo encontrada no stackoverflow (jquery)para exbir o modal
        // Document  é a pagina;
        // ready é quando ele esta pronto
        // modal.('show') é para exibir o modal
        $(document).ready(function () {
            $('#modalCadastro').modal('show');
        })

    </script>


</head>

<style>
    @keyframes scrollBgGridLinks {
        from {
            transform: translateY(0px);
        }
        to {
            transform: translateY(-600px);
        }
    }
</style>


<body>

    <div class="slide"></div>

    <div class="transparencia"></div>

    <form>

        <div class="modal" id="modalCadastro" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastrar</h5>
                        <img src="image/logoCadastro.png" style="height: 10%; width: 10%;" alt="talkHouse">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nome" name="nome" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="usuario@e-mail.com.br">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="senha" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirmaSenha" class="col-sm-2 col-form-label">Confirmar Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="confirmaSenha" placeholder="">
                            </div>
                        </div>

                        <small>Ao inscrever-se, você concorda com os Termos de Serviço e com as Políticas de Privacidade,
                            incluindo o Uso de Cookies. Outras pessoas poderão encontrar você pelo e-mail ou número de telefone
                            fornecido · Opções de Privacidade</small>
                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn btn-primary">Confirmar</a>
                        <a href="home.php" class="btn btn-primary">voltar</a>

                    </div>
                </div>
            </div>
        </div>



    </form>
</body>

</html>
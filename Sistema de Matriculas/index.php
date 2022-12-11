<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Matriculas - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style>
    .centralizar {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }
</style>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-5 col-md-9 centralizar">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                            <?php
                                                if(isset($_GET['login'])){
                                                    if($_GET['login'] == 'erro'){
                                                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Atenção!</strong> Email ou senha Invalidos<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>';
                                                    }

                                                    if($_GET['login'] == 'semsessao'){
                                                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <strong>Atenção!</strong> Faça login!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>';
                                                    }

                                                    if($_GET['login'] == 'logout'){
                                                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                                                    <strong>Logout efetuado com sucesso!</strong> Faça login!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>';
                                                    }
                                                }
                                            ?>
                                        <h1 class="h4 text-gray-900 mb-4">Bem Vindo!</h1>
                                    </div>
                                    <form class="user" name="f1" action="login.php" method="POST">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control form-control-user"
                                                aria-describedby="emailHelp"
                                                placeholder="Informe seu E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="senha" name="senha" class="form-control form-control-user"
                                                placeholder="Informe sua senha">
                                        </div>
                                        
                                        <!-- /.col -->
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-check"></i> Entrar</button>
                                        </div>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
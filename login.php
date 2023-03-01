<?php

include("conexao.php");

try {

    if (isset($_POST['email']) && strlen($_POST['email']) > 0) {

        if (!isset($_SESSION)) session_start();

        $_SESSION['email'] = $mysqli->escape_string($_POST['email']);
        $_SESSION['password'] = md5(md5($_POST['password']));

        $sqlCode = "SELECT password, id FROM user where email = '$_SESSION[email]' ";
        $sqlQuery = $mysqli->query($sqlCode) or die($mysqli->error);
        $dado = $sqlQuery->fetch_assoc();

        $total = $sqlQuery->num_rows;

        if ($total == 0) {
            throw new Exception('Este email nao pertence a nenhum usuario');
        }

        if ($dado['password'] == $_SESSION['password']) {
            $_SESSION['user'] = $dado['id'];
        } else {

            throw new Exception('senha incorreta');
        }

        echo "<script>location.href='home.php'</script>";
    }
} catch (Exception $e) {
    $errors  = $e->getMessage();
    // echo "<script>alert(".$e->getMessage().")</script>";
    // echo "<script type='javascript'>alert('Email enviado com Sucesso!');";

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>

<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form action="" method="post">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Por favor, digite seu email e senha!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" value="" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">Senha</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                    <?php
                                    if (isset($errors)) {
                                        echo "<p>" . $errors . "</p>";
                                    }
                                    ?>

                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Não tem uma conta?<a href="#!" class="text-white-50 fw-bold">Inscrever-se</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
include("conexao.php");
include('protect.php');
protect();

$limt = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limt;

?>
<a href="logout.php">sair</a>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="styles/sweetalert2.min.css">
    <script src="js/sweetalert2.all.min.js"></script>

</head>

<body>
    <!-- Add New User Modal Start -->
    <div class="modal fade" tabindex="-1" id="addNewUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar usuario</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">nome</label>
                            <div class="input-group">
                                <input type=" text" name="fname" class="form-control form-control-lg" id="name_user" maxlength="100">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <label for="">cpf</label>
                            <div class="input-group">
                                <input type="text" name="lname" class="form-control form-control-lg" id="cpf_user" maxlength="11">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">email</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control form-control-lg" id="email_user" maxlength="50">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="">cep</label>
                            <div class="input-group">
                                <input type="text" name="lname" class="form-control form-control-lg" id="cep_user" maxlength="8">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">endereco</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control form-control-lg" id="endereco_user" maxlength="100">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <label for="">numero</label>
                            <div class="input-group">
                                <input type="text" name="lname" class="form-control form-control-lg" id="numero_user" maxlength="5">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">complemento</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control form-control-lg" id="complemento_user" maxlength="100">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <label for="">bairro</label>
                            <div class="input-group">
                                <input type="text" name="lname" class="form-control form-control-lg" id="bairro_user" maxlength="100">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">cidade</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control form-control-lg" id="cidade_user" maxlength="100">
                                <div class="invalid-feedback">
                                    campo requido

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="">uf</label>
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example" id="uf_user">
                                    <option value="">Selecione</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espirito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col-12">
                            <label for="">nacimento</label>
                            <div class="input-group">
                                <input type="date" name="fname" class="form-control form-control-lg" id="nacimento_user">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="">telefone</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control form-control-lg" id="telefone_user" maxlength="10">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mt-3" onclick="chamarAjaxAdd()">Add usuario</button>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Add New User Modal End -->

    <div class="modal fade" tabindex="-1" id="addUpdateUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">editando usuario <span id="edit_id"></span></h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">nome</label>
                            <div class="input-group">
                                <input type=" text" name="fname" class="form-control form-control-lg" id="view_name_user" maxlength="100">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <label for="">cpf</label>
                            <div class="input-group">
                                <input type="text" name="lname" class="form-control form-control-lg" id="view_cpf_user" maxlength="11">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">email</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control form-control-lg" id="view_email_user" maxlength="50">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="">cep</label>
                            <div class="input-group">
                                <input type="text" name="lname" class="form-control form-control-lg" id="view_cep_user" maxlength="8">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">endereco</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control form-control-lg" id="view_endereco_user" maxlength="100">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <label for="">numero</label>
                            <div class="input-group">
                                <input type="text" name="lname" class="form-control form-control-lg" id="view_numero_user" maxlength="5">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">complemento</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control form-control-lg" id="view_complemento_user" maxlength="100">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <label for="">bairro</label>
                            <div class="input-group">
                                <input type="text" name="lname" class="form-control form-control-lg" id="view_bairro_user" maxlength="100">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">cidade</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control form-control-lg" id="view_cidade_user" maxlength="100">
                                <div class="invalid-feedback">
                                    campo requido

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="">uf</label>
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example" id="view_uf_user">
                                    <option value="">Selecione</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espirito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col-12">
                            <label for="">nacimento</label>
                            <div class="input-group">
                                <input type="date" name="fname" class="form-control form-control-lg" id="view_nacimento_user">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="">telefone</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control form-control-lg" id="view_telefone_user" maxlength="10">
                                <div class="invalid-feedback">
                                    campo requido
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mt-3" onclick="chamarAjaxUpdate()">editar usuario</button>


                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- view User Modal -->
    <div class="modal fade" tabindex="-1" id="viewUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">dados do usuario id: <span id="view_id_user"></span></h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">nome</label>
                            <input type="text" name="fname" class="form-control form-control-lg" id="view_name_user" disabled>
                        </div>

                        <div class="col">
                            <label for="">cpf</label>
                            <input type="text" name="lname" class="form-control form-control-lg" disabled id="view_cpf_user">
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">email</label>
                            <input type="text" name="fname" class="form-control form-control-lg" id="view_email_user" disabled>
                        </div>
                        <div class="col">
                            <label for="">cep</label>
                            <input type="text" name="lname" class="form-control form-control-lg" disabled id="view_cep_user">
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">endereco</label>
                            <input type="text" name="fname" class="form-control form-control-lg" id="view_endereco_user" disabled>
                        </div>

                        <div class="col">
                            <label for="">numero</label>
                            <input type="text" name="lname" class="form-control form-control-lg" disabled id="view_numero_user">
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">complemento</label>
                            <input type="text" name="fname" class="form-control form-control-lg" id="view_complemento_user" disabled>
                        </div>

                        <div class="col">
                            <label for="">bairro</label>
                            <input type="text" name="lname" class="form-control form-control-lg" disabled id="view_bairro_user">
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="">cidade</label>
                            <input type="text" name="fname" class="form-control form-control-lg" id="view_cidade_user" disabled>
                        </div>
                        <div class="col">
                            <label for="">uf</label>
                            <input type="text" name="lname" class="form-control form-control-lg" disabled id="view_uf_user">
                        </div>
                    </div>
                    <div class="row mb-3 gx-3">
                        <div class="col-12">
                            <label for="">nacimento</label>
                            <input type="date" name="fname" class="form-control form-control-lg" id="view_nacimento_user" disabled>
                        </div>
                        <div class="col-12">
                            <label for="">telefone</label>
                            <input type="text" name="fname" class="form-control form-control-lg" id="view_telefone_user" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- view User Modal End -->

    <!-- Edit User Modal Start -->
    <div class="modal fade" tabindex="-1" id="editUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit This User</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-user-form" class="p-2" novalidate>
                        <input type="hidden" name="id" id="id">
                        <div class="row mb-3 gx-3">
                            <div class="col">
                                <input type="text" name="fname" id="fname" class="form-control form-control-lg" placeholder="Enter First Name" required>
                                <div class="invalid-feedback">First name is required!</div>
                            </div>

                            <div class="col">
                                <input type="text" name="lname" id="lname" class="form-control form-control-lg" placeholder="Enter Last Name" required>
                                <div class="invalid-feedback">Last name is required!</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter E-mail" required>
                            <div class="invalid-feedback">E-mail is required!</div>
                        </div>

                        <div class="mb-3">
                            <input type="tel" name="phone" id="phone" class="form-control form-control-lg" placeholder="Enter Phone" required>
                            <div class="invalid-feedback">Phone is required!</div>
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Update User" class="btn btn-success btn-block btn-lg" id="edit-user-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit User Modal End -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-primary">Todos os usuários do banco de dados!</h4>
                </div>
                <div>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addNewUserModal">Adicionar usuario</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div id="showAlert"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Email</th>
                                <th>telefone</th>
                                <th>Idade</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sqlCode = "SELECT id , nome , cpf, email , telefone,d_nacimento FROM usuarios LIMIT $start,$limt";

                            $sqlQuery = $mysqli->query($sqlCode) or die($mysqli->error);
                            $dado = $sqlQuery->fetch_all();


                            $sqlCodeCont = "SELECT COUNT(id) FROM usuarios";
                            $sqlQueryCont = $mysqli->query($sqlCodeCont) or die($mysqli->error);
                            $dadoCont = $sqlQueryCont->fetch_all();
                            $total =  intval($dadoCont[0][0]);
                            $pages = ceil($total / $limt);

                            // $query_run = mysqli_query($con, $query);


                            if (mysqli_num_rows($sqlQuery) > 0) {
                                foreach ($dado as $user) {
                                    // var_dump($user);
                                    $dataNascimento = $user[5];
                                    $date = new DateTime($dataNascimento);
                                    $interval = $date->diff(new DateTime(date('Y-m-d')));
                            ?>
                                    <tr>
                                        <td><?= $user[0]; ?></td>
                                        <td><?= $user[1]; ?></td>
                                        <td><?= $user[2]; ?></td>
                                        <td><?= $user[3]; ?></td>
                                        <td><?= $user[4]; ?></td>
                                        <td><?= $interval->format('%Y'); ?></td>
                                        <td>
                                            <button data-target="#viewUserModal" class="btn btn-info btn-sm" data-toggle="modal" onclick="return chamarAjaxView(<?= $user[0]; ?>);">
                                                Visualizar
                                            </button>
                                            <button onclick="Update(<?= $user[0]; ?>);" data-target="#addUpdateUserModal" data-toggle="modal" class="btn btn-success btn-sm">Editar</button>

                                            <button name="delete_student" value="<?= $user[0]; ?>" onclick="chamarAjaxDelete(<?= $user[0]; ?>)" class="btn btn-danger btn-sm">Deletar</button>

                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<h5> Nenhum usario cadastrado </h5>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination">


                        <?php for ($i = 1; $i <= $pages; $i++) : ?>

                            <?php if ($i == $page) { ?>

                                <li class="page-item active">
                                    <a class="page-link" href="home.php?page=<?php echo $i; ?>">
                                        <?php echo $i; ?>
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li class="page-item">
                                    <a class="page-link" href="home.php?page=<?php echo $i; ?>">
                                        <?php echo $i; ?>
                                    </a>
                                </li>
                            <?php }  ?>

                        <?php endfor; ?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <script>
        function chamarAjaxView(id) {
            $.ajax({
                url: `api.php?id=${id}`,
                type: 'GET',
                ContentType: "application/json",
                success: function(response) {
                    console.log(response)
                    $('#view_id_user').text(response.id)
                    $('#view_name_user').val(response.nome)
                    $('#view_cpf_user').val(response.cpf)
                    $('#view_email_user').val(response.email)
                    $('#view_cep_user').val(response.cep)
                    $('#view_endereco_user').val(response.endereco)
                    $('#view_numero_user').val(response.numero)
                    $('#view_complemento_user').val(response.complemento)
                    $('#view_bairro_user').val(response.bairro)
                    $('#view_cidade_user').val(response.cidade)
                    $('#view_uf_user').val(response.estado)
                    $('#view_nacimento_user').val(response.d_nacimento)
                    $('#view_telefone_user').val(response.telefone)

                },
                error: function(error) {
                    console.log(error)
                }
            });

            return false;
        }

        function chamarAjaxAdd() {

            $('#addNewUserModal input, select').each(function() {

                var element = $(this);
                console.log(element.attr('id'))

                if (element.val() == "") {

                    element.addClass("is-invalid");

                } else {
                    element.removeClass("is-invalid");
                }

            })
            
            if ($('.is-invalid').length == 0) {

                Swal.fire({
                    icon: 'success',
                    title: 'salvar?',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    showCancelButton: true,
                    confirmButtonText: 'sim',
                    cancelButtonText: 'não',
                }).then((result) => {

                    console.log(result)
                    if (result.isConfirmed) {
                        Swal.fire('salvo!', '', 'success')
                    }



                    $.ajax({
                        url: `api.php`,
                        type: 'POST',
                        data: {

                            nome: $('#name_user').val(),
                            cpf: $('#cpf_user').val(),
                            email: $('#email_user').val(),
                            telefone: $('#cep_user').val(),
                            cep: $('#endereco_user').val(),
                            endereco: $('#numero_user').val(),
                            numero: $('#complemento_user').val(),
                            complemento: $('#bairro_user').val(),
                            bairro: $('#cidade_user').val(),
                            cidade: $('#uf_user').val(),
                            estado: $('#nacimento_user').val(),
                            d_nacimento: $('#telefone_user').val(),
                        },
                        ContentType: "application/json",
                        success: function(response) {
                            console.log(response)
                            Swal.fire({
                                icon: 'success',
                                title: 'salvo',
                            }).then((result) => {

                            })

                        },
                        error: function(error) {
                            console.log(error)
                        }
                    });
                })
            }
        }

        function Update(id) {
            document.getElementById('edit_id').innerHTML = id
            chamarAjaxView(id)
        }

        function chamarAjaxUpdate() {

            let id = document.getElementById('edit_id').innerHTML

            Swal.fire({
                icon: 'success',
                title: 'salvar?',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                showCancelButton: true,
                confirmButtonText: 'sim',
                cancelButtonText: 'não',
            }).then((result) => {

                console.log(result)
                if (result.isConfirmed) {

                    $.ajax({
                        url: `api.php?id=${id}`,
                        type: 'PUT',
                        data: {

                            id: id,
                            nome: $('#view_name_user').val(),
                            cpf: $('#view_cpf_user').val(),
                            email: $('#view_email_user').val(),
                            telefone: $('#view_cep_user').val(),
                            cep: $('#view_endereco_user').val(),
                            endereco: $('#view_numero_user').val(),
                            numero: $('#view_complemento_user').val(),
                            complemento: $('#view_bairro_user').val(),
                            bairro: $('#view_cidade_user').val(),
                            cidade: $('#view_uf_user').val(),
                            estado: $('#view_nacimento_user').val(),
                            d_nacimento: $('#view_telefone_user').val(),
                        },
                        ContentType: "application/json",
                        success: function(response) {
                            console.log(response)
                            Swal.fire({
                                icon: 'success',
                                title: 'salvo',
                            }).then((result) => {

                                if (result.isConfirmed || result.isDismissed) {
                                    document.location.reload(true);

                                }
                            })

                        },
                        error: function(error) {
                            console.log(error)
                        }
                    });
                }
            })
        }

        function chamarAjaxDelete(id) {

            Swal.fire({
                icon: 'ERROR',
                title: 'deletar?',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                showCancelButton: true,
                confirmButtonText: 'sim',
                cancelButtonText: 'não',
            }).then((result) => {

                console.log(result)
                if (result.isConfirmed) {

                    $.ajax({
                        url: `api.php?id=${id}`,
                        type: 'DELETE',
                        ContentType: "application/json",
                        success: function(response) {
                            console.log(response)
                            Swal.fire({
                                icon: 'success',
                                title: 'deletado',
                            }).then((result) => {

                                if (result.isConfirmed || result.isDismissed) {
                                    document.location.reload(true);
                                }
                            })

                        },
                        error: function(error) {
                            console.log(error)
                        }
                    });
                }
            })

        }
    </script>

</body>

</html>
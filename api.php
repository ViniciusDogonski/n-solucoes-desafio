<?php

$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':

        getUser($_GET['id']);
        break;
    case 'POST':

        insert_product();
        break;
    case 'PUT':

        $id = intval($_GET["id"]);

        updateUser($id);
        break;
    case 'DELETE':

        $id = intval($_GET["id"]);
        deleteUsuer($id);
        break;
    default:
        // Invalid Request Method
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}


function getUser($id)
{
    include("conexao.php");

    $query = "SELECT * FROM usuarios WHERE id = $id";

    $sqlQuery = $mysqli->query($query) or die($mysqli->error);
    $dado = $sqlQuery->fetch_assoc();


    header('Content-Type: application/json');
    echo json_encode($dado);
}

function insert_product()
{
    // id 	nome 	cpf 	email 	telefone 	cep 	endereco 	numero 	complemento 	bairro 	cidade 	estado 	d_nacimento 	

    include("conexao.php");

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["complemento"];
    $dateNacimento = $_POST["d_nacimento"];

    $query = "INSERT INTO usuarios SET nome='{$nome}', cpf='{$cpf}', email='{$email}', telefone='{$telefone}', cep='{$cep}', endereco='{$endereco}', numero='{$numero}', complemento='{$complemento}', bairro='{$bairro}', cidade='{$cidade}', estado='{$estado}', d_nacimento='{$dateNacimento}'";

    $sqlQuery = $mysqli->query($query) or die($mysqli->error);

    if ($sqlQuery) {
        $response = array(
            'status' => 200,
            'status_message' => 'user Added Successfully.'
        );
    } else {
        $response = array(
            'status' => 404,
            'status_message' => 'user Addition Failed.'
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}

function updateUser($id)
{
    include("conexao.php");

    parse_str(file_get_contents("php://input"), $post_vars);

    $nome = $post_vars["nome"];
    $cpf = $post_vars["cpf"];
    $email = $post_vars["email"];
    $telefone = $post_vars["telefone"];
    $cep = $post_vars["cep"];
    $endereco = $post_vars["endereco"];
    $numero = $post_vars["numero"];
    $complemento = $post_vars["complemento"];
    $bairro = $post_vars["bairro"];
    $cidade = $post_vars["cidade"];
    $estado = $post_vars["complemento"];
    $dateNacimento = $post_vars["d_nacimento"];

    $query = "UPDATE  usuarios  SET nome='{$nome}', cpf='{$cpf}', email='{$email}', telefone='{$telefone}', cep='{$cep}', endereco='{$endereco}', numero='{$numero}', complemento='{$complemento}', bairro='{$bairro}', cidade='{$cidade}', estado='{$estado}', d_nacimento='{$dateNacimento}' WHERE id=" . $id;

    $sqlQuery = $mysqli->query($query) or die($mysqli->error);

    if ($sqlQuery) {
        $response = array(
            'status' => 200,
            'status_message' => 'user Updated Successfully.'
        );
    } else {
        $response = array(
            'status' => 404,
            'status_message' => 'user Updation Failed.'
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}

function deleteUsuer($id)
{
    include("conexao.php");
    $query = "DELETE FROM usuarios WHERE id=" . $id;
    
    $sqlQuery = $mysqli->query($query) or die($mysqli->error);
    if ($sqlQuery) {
        $response = array(
            'status' => 200,
            'status_message' => 'user Deleted Successfully.'
        );
    } else {
        $response = array(
            'status' => 400,
            'status_message' => 'user Deletion Failed.'
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}

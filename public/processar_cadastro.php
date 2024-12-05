<?php

include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmasenha = $_POST['confirmasenha'];
}

if(empty($nome) || empty($email) || empty($senha) || empty($confirmasenha)) {
    die('Todos os campos são obrigatórios');
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
die('Email inválido!');
}
if(filter_var($senha != $confirmasenha)){

die('As senhas não coincidem.');


}
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = 'SELECT * FROM usuarios WHERE email = ?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {

die('Esse email já foi cadastrado!');


}

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $nome, $email, $senha_hash);

if($stmt->execute() === TRUE) {
    echo "<h1>Cadastro realizado com sucesso!</h1>";
}
else {
    echo "<h1>Deu ruim no cadastro</h1>";
    echo $stmt->error;
}
$stmt->close();
$conn->close();
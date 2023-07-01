<?php 

include_once '..\func\funcoes.php';
include_once '..\config\constantes.php';
include_once '..\config\conexao.php';


// $_POST['name'] = 'AAA';
// $_POST['email'] = '';
// $_POST['phone'] = 'AAA';
// $_POST['date'] = '2023-05-13';
// $_POST['time'] = '18:30:00';
// $_POST['people'] = '2';
// $_POST['message'] = 'AAA';


if (isset ($_POST['name']) && !empty($_POST['name'])){
    $nome = $_POST['name'];
} else {
    echo 'Preencha os campos necessários antes de prosseguir.';
    exit();
}


if (isset ($_POST['email']) && !empty($_POST['email'])){
    $email = $_POST['email'];
} else {
    echo 'Preencha os campos necessários antes de prosseguir.';
    exit();
}

if (isset ($_POST['phone']) && !empty($_POST['phone'])){
    $tel = $_POST['phone'];
} else {
    echo 'Preencha os campos necessários antes de prosseguir.';
    exit();
}

if (isset ($_POST['date']) && !empty($_POST['date'])){
    $data = $_POST['date'];
} else {
    echo 'Preencha os campos necessários antes de prosseguir.';
    exit();
}

if (isset ($_POST['time']) && !empty($_POST['time'])){
    $horario = $_POST['time'];
} else {
    echo 'Preencha os campos necessários antes de prosseguir.';
    exit();
}

if (isset ($_POST['people']) && !empty($_POST['people'])){
    $numeropes = $_POST['people'];
} else {
    echo 'Preencha os campos necessários antes de prosseguir.';
    exit();
}

if (isset ($_POST['message'])){
    $mensagem = $_POST['message'];
} else {
    echo 'Preencha os campos necessários antes de prosseguir.';
    exit();
}

$listar = listarRegistroDoisParametro2A('pessoa', 'email', 'email', $email, 'A');
// var_dump($listar);

if ($listar == 'Vazio') {
    $idpessoa = inserirRegistrosReturnId('pessoa', 'nome, email, tel, cadastro', "'$nome','$email','$tel'");
    // var_dump($idpessoa);
    if ($idpessoa === false) {
        echo 'Não deu certo';
        exit();
    } else {
        $registro = inserirRegistros('reserva', 'datar, horario, numeropes, comentario, idpessoa, cadastro', "'$data','$horario','$numeropes','$mensagem', $idpessoa");
        // var_dump($registro);
        if ($registro === false) {
            echo 'Deu certo não irmão';
            exit();
        }
    }
} else {
    echo 'Já tem gente com esse email';
    exit();
}

echo 'Reserva feita irra';

?>
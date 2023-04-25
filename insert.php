<?php
/*Criando conexão com o banco de dados */

$servidor = 'localhost';
$user = 'root';
$password = 'admin';
$banco = 'sistema';

$conexao = mysqli_connect($servidor, $user, $password, $banco);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "INSERT INTO tb_cliente (cd_cliente,nm_cliente,email_cliente,senha_cliente,endereco_cliente,nr_cep,complemento_cliente,nm_cidade,sg_estado) VALUES ('$nome', '$email', '$senha', '$endereco', '$cep', '$complemento', '$cidade', '$estado')";
$insert = mysqli_query($conexao, $sql);

if($insert){

    echo "Cadastro realizado com sucesso";
}
else{
    echo"Erro ao cadastrar:".
mysqli_error($conexao);
}
mysqli_close($conexao);
?>
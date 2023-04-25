<?php
/*Criando conexão com o banco de dados */

$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'sistema';

$conexao = mysqli_connect($servidor,$user,$password,$banco);

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];
$endereco = $_POST ['endereco'];
$cep = $_POST ['cep'];
$complemento = $_POST ['complemento'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];

$sql = "INSERT INTO tb_usuario (nm_usuario,email_usuario,senha_usuario,end_usuario,nr_cep,complemento,sigla_estado,nm_cidade) values (null, '$nome','$email,'$senha','$endereco','$cep','complemento','cidade','estado')";
$insert = mysqli_query($conexao, $sql);


?>
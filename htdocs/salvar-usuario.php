<?php

switch ($_REQUEST["acao"]){
case 'cadastrar';
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$telefone = md5($_POST["telefone"]);
$nascimento = $_POST["nascimento"];
$sexo = $_POST["sexo"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$sql ="insert into usuarios (nome, cpf, telefone, nascimento, sexo, email, senha) values ('{$nome}', '{$cpf}','{$telefone}','{$nascimento}','{$sexo}','{$email}','{$senha}')";

$res = $conn ->query ($sql);

if($res==true){
print "<script>alert('cadastrado com sucesso');</script>";
print "<script>location.href='?page=lista';</script>";

}else{

    print "<script>alert('Não foi possível cadastrar');</script>";
print "<script>location.href='?page=lista';</script>";


}


break;

case 'editar';
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$telefone = md5($_POST["telefone"]);
$nascimento = $_POST["nascimento"];
$sexo = $_POST["sexo"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "update usuarios set 
nome= '{$nome}',
cpf= '{$cpf}',
telefone= '{$telefone}',
nascimento= '{$nascimento}',
sexo= '{$sexo}',
email= '{$email}',
senha= '{$senha}'
where
id=" .$_REQUEST["id"];

$res = $conn->query($sql);


if($res==true){
print "<script>alert('Editado com sucesso')</script>";
print "<script>location.href='?page=lista';</script>";

}else{

    print "<script>alert('Não foi possível editar')</script>";
print "<script>location.href='?page=lista';</script>";


}

break;


case 'excluir';
$sql = "delete from usuarios where id=" .$_REQUEST["id"];

$res = $conn ->query ($sql);


if($res==true){
print "<script>alert('Excluido com sucesso')</script>";
print "<script>location.href='?page=lista';</script>";

}else{

print "<script>alert('Não foi possível excluir')</script>";
print "<script>location.href='?page=lista';</script>";


}

break;

}


?>

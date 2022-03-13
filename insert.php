<?php
include_once('db/connection.php');

$msg = false;
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];

if(isset($_FILES['arquivo'])){
  $extensao = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));
  $novo_nome = md5(time()).".". $extensao;
  $diretorio = "img/";

  move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio . $novo_nome);

  $query = "INSERT INTO filmes (nomeFilme, categoria, backgroundURL) values ('$nome','$categoria', '$diretorio" . "$novo_nome');";

  if(mysqli_query($conn,$query)){
    $msg = "Arquivo enviado";
    
  }else{
    $msg = "Erro";
  }
}
?>
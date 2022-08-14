<?php
   $pdo = new PDO('mysql:host=localhost;dbname=usuarios','root','');
  // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
  
  //deletando usuarios 
   if(isset($_GET['delete'])){
    $id = (int)$_GET['delete'];
    $pdo -> exec("DELETE FROM usuarios WHERE id=$id");
    echo 'deletado com sucesso o id' .$id;
   }

   //insert
   if(isset($_POST['nome'])){
    $sql = $pdo->prepare("INSERT INTO usuarios VALUES (null, ?, ?)");
    $sql ->execute(array($_POST['nome'],$_POST['email']));
    echo 'inserido com sucesso!';
   }

   //update tabela
   if(isset($_POST['update'])){
    $sql = $pdo->prepare("UPDATE usuarios WHERE id=$id");
    $sql ->execute(array($_POST['nome'],$_POST['email']));
    echo 'atualizado com sucesso!';
   }
   
?>
<form method="post">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="submit" name="Enviar">
</form>

<?php 

//selecionar todos os usuarios do banco e retornar
$sql = $pdo->prepare("SELECT * FROM usuarios");
$sql ->execute();

$fetchCLientes = $sql -> fetchAll();
foreach($fetchCLientes as $key => $value) {
    echo '<a href="?delete='.$value['id'].' ">(x)</a>'.$value['email'].' | '.$value['nome'];
    echo '<hr>';
}
?>
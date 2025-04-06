<?php
    include_once ("conexao.php");

    $id;
    if(!empty($_GET)){
        $id = $_GET["id"];
    }
    if(!empty($id)){
        $query = "SELECT * FROM contact WHERE id =:id";
        $stmt = $con ->prepare($query);
        $stmt ->bindParam(":id",$id);
        $stmt ->execute();
        $contacts = $stmt->fetch();
       
    }else{
        $query = "SELECT * FROM contact";
        $stmt = $con ->prepare($query);
        $stmt->execute();
        $lista = $stmt ->fetchAll();   
    }

    
?>
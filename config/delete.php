<?php

    include_once("conexao.php");

    $data = $_POST;
    if(!empty($data)){
        if($data["type"] === "delete"){            
            $delete = "DELETE FROM contact WHERE id =:id";
            $id = $data["id"];
            $stmt = $con ->prepare($delete);
            $stmt ->bindParam(":id",$id);
            $stmt->execute();
        }
        header("location:../contacts.php");
    }
    
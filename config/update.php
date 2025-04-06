<?php

    include_once "conexao.php";
    include_once "url.php";
 
    $data = $_POST;

    if(!empty($data)){
        if($data["type"]==="update"){
            $id = $data["id"];
            $name = $data["name"];
            $phone = $data["phone"];
            $address = $data["address"];

            $up = "UPDATE contact SET  name = :name, phone = :phone, address = :address WHERE id = :id";
            
            $stmt = $con ->prepare($up);
            $stmt -> bindParam(":id",$id);
            $stmt -> bindParam(":name",$name);
            $stmt -> bindParam(":phone",$phone);
            $stmt -> bindParam(":address",$address);
            $stmt -> execute();
        }
        header("location:../contacts.php");
    }

?>
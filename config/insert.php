<?php
    include_once ("conexao.php");
    include_once ("url.php");

    $data = $_POST;
    
    if(!empty($data)){
        if($data["type"]==="insert"){
            $name = $data["name"];
            $phone = $data["phone"];
            $address = $data["address"];
            $query = "INSERT INTO contact (name, phone, address) VALUES (:name, :phone, :address)";
            
            $verifica = "SELECT * FROM contact WHERE id = :id, name = :name, phone = :phone, address = :address";
            if($verifica == true){
                echo "Contato já existe <br>";
                header("location:../create.php");
        
            }else{
                $stmt = $con ->prepare($query);
                $stmt ->bindParam(":name",$name);
                $stmt ->bindParam(":phone",$phone);
                $stmt ->bindParam(":address",$address);
                $stmt -> execute();
            }
        }
        header("location:../contacts.php");
    }
?>
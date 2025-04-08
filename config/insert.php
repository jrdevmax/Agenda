<?php
session_start();
    include_once ("conexao.php");
    include_once ("url.php");
    // variavel $data resposavel por receber todos os dados vindo do posta para ser tratado
    $data = $_POST;
                
    if(!empty($data)){
        // verifica a existencia do typo se identico ao valor para assim tratar os dados vindo do post
        if($data["type"]==="insert"){
        
            $name = $data["name"];
            $phone = $data["phone"];
            $address = $data["address"];
            $query = "INSERT INTO contact (name, phone, address) VALUES (:name, :phone, :address)";
            
            $stmt = $con ->prepare($query);
            $stmt ->bindParam(":name",$name);
            $stmt ->bindParam(":phone",$phone);
            $stmt ->bindParam(":address",$address);
            
            try{
                $stmt -> execute();
                $_SESSION["msg"]="Contato cadastrado com Sucesso!";
            }catch(PDOException $e){
                // ERRO na conexao
                $error = $e->getMessage();
                echo "Erro: $error";
            }
        }
        header("location:../create.php");
        
    }
?>
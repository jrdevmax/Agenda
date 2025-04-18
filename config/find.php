<?php 
    include_once("conexao.php");

    $pes ="%".$_POST['find']."%";
    if(!empty($pes)){
        $sql = "SELECT * FROM contact WHERE name LIKE :name";
    
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":name",$pes);
        $stmt->execute();
        $found = $stmt->fetch();
       
    }else{
        echo "<h2>Nothign contact found!</h2>";
    }
   
?>


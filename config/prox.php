
<?php

    $host   = 'localhost';
    $dbname = 'folha';
    $user   = 'root';
    $pass   = '';

    try {
        $con = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
        // Ativa modo erro
        $con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        //Erro de conexao
        $erro = $e->getMessage();
        echo "Erro: $erro";
    }

// ------------------------------DELETE---------------------------------
    // $retorno = $con->prepare("DELETE FROM teste WHERE id =:id");
    // $id = 2;
    // $retorno ->bindParam(":id",$id);
    // $retorno ->execute();

    // // using method query
    // $ql = $con->query("DELETE FROM teste WHERE id ='1'");


// ------------------------------INSERIR---------------------------------
    // $cmd = $con->prepare("INSERT INTO teste (id,nome,sobrenome) VALUES (:id,:nome,:sobrenome");
    // $id = '1';
    // $nome = 'Junior';
    // $sobrenome = 'Fernandes';
    // $cmd ->bindParam(":id",$id,":nome",$nome,":sobrenome",$sobrenome);
    // $cmd ->execute();

    // $cmd = $con->query("INSERT INTO teste (nome,sobrenome) VALUES ('Hadassa','Fernandes')");
// ------------------------------SELECT---------------------------------

    // $cmd = $con ->prepare("SELECT * FROM teste");
    // $cmd ->fetchAll();
    // $cmd ->execute();

    // foreach ($cmd as $cm) {
    //    print_r($cm);
    // }

?>
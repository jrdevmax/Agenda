<?php 
include_once("template/header.php");
include_once("config/find.php");
?>


<h1 class="d-flex">Contact Found</h1>
<div class="container-contact">
    <div class="container-photo-cont">
        <img src="img/contato.png" class="cont-img" alt="">
    </div>
    <div>
        <p class="p-cont"> Name : <?= $found["name"]?></p>
        <p class="p-cont"> Phone : <?= $found["phone"]?></p>
        <p class="p-cont"> Address : <?= $found["address"]?></p>
    </div>
</div>
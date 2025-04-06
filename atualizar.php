<?php 
    include_once "template/header.php";
?>

<div class="d-flex">

       <div class="container-principal">
           <form action="config/update.php" method="post">
                <input type="hidden" name="type" value="update">
                <input type="hidden" name="id" value="<?= $contacts["id"]?>">
                <div class="d-flex">
                    <input type="text" name="name" class="input-text" value="<?= $contacts["name"]?>" placeholder="Inform name" >
                </div>
                <div class="d-flex">
                    <input type="text" name="phone" class="input-text" autocomplete="off" value="<?= $contacts["phone"] ?>" placeholder="(DD) - 0 0000-0000 ">
                </div>
                <div class="d-flex">
                    <input type="text" name="address" class="input-text" autocomplete="off" value="<?= $contacts["address"] ?>" placeholder="Address">
                </div>
                <div class="d-flex m-px">
                    <input type="submit" value="Atualizar" class="input-add">
                </div>
           </form>
       </div>
          
   </div>
<?php include_once 'template/footer.php'?>
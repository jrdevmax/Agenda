<?php include_once 'template/header.php'?>

<div class="d-flex">
       
       <div class="container-principal">
           <form action="config/insert.php" method="post">
            <input type="hidden" name="type" value="insert">
            <div class="d-flex">
                    <input type="text" name="name" class="input-text" placeholder="Inform name">
                </div>
                <div class="d-flex">
                    <input type="text" name="phone" class="input-text" placeholder="(DD) - 0 0000-0000 ">
                </div>

                <div class="d-flex">
                    <input type="text" name="address" class="input-text" placeholder="Address">
                </div>
                <!-- <div class="d-flex ">
                    <input type="checkbox" name="favorit" class="m-px" >Favorito
                </div> -->
            <div class="d-flex m-px">
            <input type="submit" value="Add" class="input-add">
            </div>
           </form>
       </div>
          
   </div>
<?php include_once 'template/footer.php'?>
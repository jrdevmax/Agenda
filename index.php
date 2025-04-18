<?php 
    include_once( 'template/header.php'); 
    
?>
    
    <div class="container-search d-flex">
        <form action="find_contact.php" method="post">
            <input type="search" name="find" placeholder="Search" autocomplete="off" class="item-search w-search">
            <button  class="item-search" type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>

   
<?php include_once 'template/footer.php' ?>
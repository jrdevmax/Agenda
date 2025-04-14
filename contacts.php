<?php
    include_once("template/header.php");
    include_once("config/select.php");
?>
  
<div class="d-flex m-px">
    <?php if(count($lista)<=0):?>
        <p>There isn't contact registration. Do you wish add contact ?<a href="create.php">Click here!</a></p>
        <?php else:?>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th colspan="2">Address</th>
            </tr>
            <?php foreach ($lista as $contact):?>
            <tr>
                <td><?= $contact["id"]?></td>
                <td><?= $contact["name"]?></td>
                <td><?= $contact["phone"]?></td>
                <td><?= $contact["address"]?></td>
                <td>
                  <span class="d-flex">
                        <a href="atualizar.php?id=<?= $contact["id"]?>"><i class="bi bi-pencil"></i></a>
                        <form action="config/delete.php" method="post">
                            <input type="hidden" name="type" value="delete">
                            <input type="hidden" name="id" value="<?= $contact["id"]?>">
                            <button type="submit" class="border"><i class="bi bi-trash"></i></button>
                        </form>
                  </span>
                </td>
            </tr>

            <?php endforeach;?>
        </table>
        <?php endif;?>
</div>
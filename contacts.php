<?php
    include_once("template/header.php");
    include_once("config/select.php");
?>

<div class="d-flex m-px">
    <?php if(count($lista)<=0):?>
        <p>Não há Registro de contato. Deseja Registrar um contato?<a href="create.php">Clique Aqui!</a></p>
        <?php else:?>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
            <?php foreach ($lista as $contact):?>
            <tr>
                <td><?= $contact["id"]?></td>
                <td><?= $contact["name"]?></td>
                <td><?= $contact["phone"]?></td>
                <td><?= $contact["address"]?></td>
                <td>
                    <a href="atualizar.php?id=<?= $contact["id"]?>">Editar</a>
                    <form action="config/delete.php" method="post">
                        <input type="hidden" name="type" value="delete">
                        <input type="hidden" name="id" value="<?= $contact["id"]?>">
                        <button type="submit" class="btn-delete">Delete</button>
                    </form>
                </td>
            </tr>

            <?php endforeach;?>
        </table>
        <?php endif;?>
</div>
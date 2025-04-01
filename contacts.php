<?php
    include_once("template/header.php");
    include_once("config/select.php");
?>

<div class="d-flex m-px">
    <table>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        <?php foreach ($lista as $contact):?>
        <tr>
            <td><?= $contact["name"]?></td>
            <td><?= $contact["phone"]?></td>
            <td><?= $contact["address"]?></td>
        </tr>

        <?php endforeach;?>
    </table>
</div>
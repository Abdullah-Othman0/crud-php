<?php
$title = "All Records";
require_once "includes/header.php";
require_once "db/conf.php";

$res = $crud->getAttendees();
?>
<div class=" py-5">
    <table class="table">
        <tr>
            <th class="fs-5">#</th>
            <th class="fs-5">First name</th>
            <th class="fs-5">Last name</th>
            <th class="fs-5  text-center">Actions</th>
        </tr>
        <?php while ($r = $res->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <th scope="row" class="fs-5">
                <?= $r['id'] ?>
            </th>
            <td class="fs-5">
                <?= $r['firstName'] ?>
            </td>
            <td class="fs-5">
                <?= $r['lastName'] ?>
            </td>
            <td class="fs-5 text-center">
                <a href="view.php?id=<?= $r['id'] ?>" class="btn btn-primary">Details</a>
                <a href="edit.php?id=<?= $r['id'] ?>" class="btn btn-warning">Edit</a>
                <a onclick="return confirm('Are you sure?');" href="delete.php?id=<?= $r['id'] ?>"
                    class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>


<?php
require_once "includes/footer.php";
?>
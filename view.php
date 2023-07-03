<?php
$title = "View One";
require_once "includes/header.php";
require_once "db/conf.php";
if (!isset($_GET['id'])) {
    header("Location: viewrecords.php");
} else {
    $res = $crud->getAttendeeDetails($_GET['id']);
    ?>

<div class="card position-absolute top-50 start-50 translate-middle d-flex" style="width: 18rem;">
    <!-- <img src="..." class="card-img-top" alt=""> -->
    <div class="card-body">
        <h3 class="card-title">
            <?= $res["firstName"] . " " . $res["lastName"]; ?>
        </h3>
        <h5 class="card-subtitle mb-2 text-body-secondary">
            <?= $res["phone"] ?>
        </h5>
        <p class="card-text mb-0">
            <span style="font-weight:600;">Birthday: </span>
            <?= $res["birthday"] ?>
        </p>
        <p class="card-text">
            <span style="font-weight:600;">Email: </span>
            <?= $res["email"] ?>
        </p>
    </div>
</div>

<?php } ?>

<?php require_once "includes/footer.php"; ?>
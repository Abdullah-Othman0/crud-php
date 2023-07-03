<?php
$title = "Success!";
require_once "includes/header.php";
require_once 'db/conf.php';

$sta;
if (isset($_POST["submit"])) {
    try {
        $isSuccess = $crud->insert(
            $_POST["firstName"],
            $_POST["lastName"],
            $_POST["birthday"],
            $_POST["email"],
            $_POST["phone"],
            $_POST["password"]);
        $sta = 'success';
    } catch (PDOException $e) {
        $sta = 'danger';
    }
}


?>


<div class="bg-info bg-gradient p-3" style="height:calc(100vh - 30px);">
    <h1 class="text-center text-<?= $sta ?> pb-5">Registered</h1>
    <div class="card position-absolute top-50 start-50 translate-middle d-flex" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="">
        <div class="card-body">
            <h3 class="card-title">
                <?= $_POST["firstName"] . " " . $_POST["lastName"]; ?>
            </h3>
            <h5 class="card-subtitle mb-2 text-body-secondary">
                <?= $_POST["phone"] ?>
            </h5>
            <p class="card-text mb-0">
                <span style="font-weight:600;">Birthday: </span>
                <?= $_POST["birthday"] ?>
            </p>
            <p class="card-text">
                <span style="font-weight:600;">Email: </span>
                <?= $_POST["email"] ?>
            </p>
            <a href="viewrecords.php" class="btn btn-primary">ضن يدولي</a>
        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>
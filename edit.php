<?php
$title = "Edit record";
require_once "includes/header.php";
require_once "db/conf.php";

if (!isset($_GET['id'])) {
    header("Location: viewrecords.php");
} else {
    $res = $crud->getAttendeeDetails($_GET['id']);


    ?>

<div class="bg-info bg-gradient mt-3 myForm">
    <div class="my-title">
        <!-- <img src="imgs/logo.png" alt=""> -->
        <h1>EDIT RECORD</h1>
    </div>
    <form method="post" action="editsuccess.php">
        <input type="hidden" value="<?= $res['id'] ?>" name="id">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" value="<?= $res['firstName'] ?>">
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" value="<?= $res['lastName'] ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $res['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= $res['phone'] ?>">
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?= $res['birthday'] ?>">
        </div>

        <button type="submit" name="submit" class="mt-3 btn btn-primary">Submit edits</button>
    </form>
</div>

<?php } ?>
<?php require_once "includes/footer.php"; ?>
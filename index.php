<?php
$title = "HOME";
require_once "includes/header.php";
require_once "db/conf.php";
?>

<div class="bg-info bg-gradient mt-3 myForm">
    <div class="my-title">
        <img src="imgs/logo.png" alt="">
        <h1>Registration for attendance</h1>
    </div>
    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input required type="text" class="form-control" id="firstName" name="firstName">
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input required type="text" class="form-control" id="lastName" name="lastName">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input required type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input required type="date" class="form-control" id="birthday" name="birthday">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input required type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="check" name="check">
            <label class="form-check-label" for="check">Check in</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php require_once "includes/footer.php"; ?>
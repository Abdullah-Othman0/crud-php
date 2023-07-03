<?php
$title = "Success!";
require_once "includes/header.php";
require_once 'db/conf.php';

$sta;
if (isset($_POST["submit"])) {
    try {
        $isSuccess = $crud->editAttendee(
            $_POST["firstName"],
            $_POST["lastName"],
            $_POST["birthday"],
            $_POST["email"],
            $_POST["phone"],
            $_POST["id"]);
    } catch (PDOException $e) {
        echo "Fokin error";
    }

    if ($isSuccess) {
        header('Location: viewrecords.php');
    } else {
        echo "Fokin error";
    }
} else {
    header("Location: viewrecords.php");
}


?>

<h1>DONE</h1>


<?php require_once "includes/footer.php"; ?>
<?php

require_once('db/conf.php');
if (!isset($_GET['id'])) {
    header("Location: viewrecords.php");
} else {
    $res = $crud->deleteAttendee($_GET['id']);
    if ($res) {
        header("Location: viewrecords.php");
    } else {
        echo 'fokin error';
    }

}

?>
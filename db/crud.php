<?php

class crud
{
    private $db;

    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function insert($fname, $lname, $dob, $email, $phone, $pass)
    {
        try {
            $sql = "INSERT INTO `attend`(`firstName`, `lastName`, `phone`, `birthday`, `email`, `password`) VALUES ('$fname','$lname','$phone','$dob','$email','$pass');";
            $stnt = $this->db->prepare($sql);
            $stnt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function editAttendee($fname, $lname, $dob, $email, $phone, $id)
    {
        try {
            $sql = "UPDATE `attend` SET `firstName`='$fname',`lastName`='$lname',`phone`='$phone',`birthday`='$dob',`email`='$email' WHERE `id` = $id;";
            $stnt = $this->db->prepare($sql);
            $stnt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function deleteAttendee($id)
    {
        try {
            $sql = "DELETE FROM `attend` WHERE `id` = '$id'";
            $stnt = $this->db->prepare($sql);
            $stnt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function getAttendees()
    {
        $sql = "SELECT * FROM `attend`;";
        $res = $this->db->query($sql);
        return $res;
    }

    public function getAttendeeDetails($id)
    {
        $sql = "SELECT * FROM `attend` WHERE id = :id";
        $stnt = $this->db->prepare($sql);
        $stnt->bindparam(":id", $id);
        $stnt->execute();
        $res = $stnt->fetch();
        return $res;
    }

}


?>
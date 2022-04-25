<?php

require_once "conn.php";

$sql = "UPDATE  mahasiswa SET `tpt_lahir`='Malang' WHERE `no`=5";
    
if ($conn->query($sql) === TRUE) {
    echo " Record Update Successfully";
} else {
    echo "Error ". $sql ."<br>" . $conn->error;
}
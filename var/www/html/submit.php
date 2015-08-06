<?php
$con = mysqli_connect('localhost', 'root', 'bigcookie3', 'stores')or die("Nope");
$id = mysqli_real_escape_string($con, $_POST['id']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$sql = "INSERT INTO store (StoreID, StoreN, StoreA) VALUES('$id', '$name', '$address')";

if (!empty($id && $name && address)) {
    
    if (mysqli_query($con, $sql)) {
        echo 'gj';
    }
    else {
        echo  mysqli_error($con);
    }
}
else{
    echo ' fill out the forms';
}

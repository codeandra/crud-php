<?php

session_start();

include("db_connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM siswa WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $_SESSION['success_action'] = 'Successfully Deleted';
    $_SESSION['success_action_title'] = 'success';
    header("Location: index.php");
    exit();
}
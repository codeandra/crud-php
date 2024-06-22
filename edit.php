<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Datasiswa</title>
    <link rel="stylesheet" href="assets/css/font.css">
    <?php include 'assets/bootstrap/index.html' ?>
</head>
<body>

    <?php include 'layout/navbar.html' ?>

    <?php
        include("db_connect.php");
        $nama = '';
        $kelas = '';
        $absen = '';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM siswa WHERE id = $id";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $nama = $row['nama'];
                $kelas = $row['kelas'];
                $absen = $row['absen'];
            }
        }

        if (isset($_POST['update'])) {
            $id = $_GET['id'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $absen = $_POST['absen'];

            $sql = "UPDATE siswa SET nama = '$nama', kelas = '$kelas', absen = '$absen' WHERE id = $id";
            $result = mysqli_query($conn, $sql);

            $_SESSION['success_action'] = 'Successfully Edited';
            $_SESSION['success_action_title'] = 'Success';
            header("Location: index.php");
            exit();
        }
    ?>

    <main>
        <div class="container">
            
            <?php include 'layout/formEdit.php' ?>

        </div>
    </main>
    
</body>
</html>
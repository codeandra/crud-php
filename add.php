<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Datasiswa</title>
    <link rel="stylesheet" href="assets/css/font.css">
    <?php include 'assets/bootstrap/index.html'; ?>
</head>
<body>

    <?php include 'layout/navbar.html'; ?>

    <main>
        <div class="container">

            <!-- action add.php -->
            <?php
            session_start();
            include("db_connect.php");

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // ambil data form
                $nama = $_POST['nama'];
                $kelas = $_POST['kelas'];
                $absen = $_POST['absen'];
                $sql = "INSERT INTO siswa (nama, kelas, absen) VALUES ('$nama', '$kelas', '$absen')";

                if (empty($nama) && empty($kelas) && empty($absen)) {
                    $_SESSION['add_message'] = 'Harap lengkapi semua kolom!';
                    $_SESSION['add_message_type'] = 'Warning!';
                    header("Location: add.php");
                    exit();
                } else if (empty($nama)) {
                    $_SESSION['add_message'] = 'Harap isi kolom nama!';
                    $_SESSION['add_message_type'] = 'Warning!';
                    header("Location: add.php");
                    exit();
                } else if (empty($absen)) {
                    $_SESSION['add_message'] = 'Harap isi kolom absen!';
                    $_SESSION['add_message_type'] = 'Warning!';
                    header("Location: add.php");
                    exit();
                } else if (empty($kelas)) {
                    $_SESSION['add_message'] = 'Harap isi kolom kelas!';
                    $_SESSION['add_message_type'] = 'Warning!';
                    header("Location: add.php");
                    exit();
                }

                if (mysqli_query($conn, $sql)) {
                    $_SESSION['success_action'] = 'Successfully Added';
                    $_SESSION['success_action_title'] = 'Success';
                    header("Location: index.php");
                    exit();
                } else {
                    $_SESSION['add_message'] = 'Failed Added';
                    $_SESSION['add_message_type'] = 'Danger';
                    header("Location: add.php");
                    exit();
                }
            }

            // tutup koneksi
            mysqli_close($conn);
            ?>

            <?php include 'layout/formAdd.php'; ?>

        </div>
    </main>

</body>
</html>

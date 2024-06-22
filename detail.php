<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data by Id</title>
    <link rel="stylesheet" href="assets/css/font.css">
    <?php include 'assets/bootstrap/index.html' ?>
</head>
<body>
    
    <?php

        session_start();
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
            } else {
                header("Location: index.php");
            }
        }

    ?>

    <main>

        <?php include 'layout/navbar.html' ?>


        <div class="container d-flex justify-content-center align-items-center flex-column" style="height: 90vh;">
            <h1 class="fw-bold">Get Data by Id</h1>
            <div class="card shadow p-5 mt-5 w-75">
                    <div class="card-title">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <h2 class="fw-bold ps-3">Detail Siswa</h2>
                            <p class="fw-semibold fs-5">ID : <?php echo $id; ?></p>
                        </div>
                    </div>
                    <div class="card-body fw-semibold">
                        <div class="mb-3">
                            <h5>Nama : <?php echo $nama; ?></h5>
                        </div>
                        <div class="mb-3">
                            <h5>Kelas : <?php echo $kelas; ?></h5>
                        </div>
                        <div class="mb-3">
                            <h5>Absen : <?php echo $absen; ?></h5>
                        </div>
                    </div>
                </div>
        </div>

    </main>

</body>
</html>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datasiswa</title>
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php include 'assets/bootstrap/index.html'; ?>
</head>
<body>

     <!-- message from session (success add) -->
     <?php 
            if (isset($_SESSION['success_action'])) { ?>
                <div id="message" class="alert alert-success position-absolute w-50 shadow" role="alert">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                        <h4 class="m-0">
                            <?php echo $_SESSION['success_action_title']; ?>
                        </h4>
                        <p class="m-0">
                            <?php echo $_SESSION['success_action']; ?>
                        </p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert-progress"></div>
                </div>
                <?php 
                // Hapus pesan dari session setelah ditampilkan
                unset($_SESSION['success_action']);
                unset($_SESSION['success_action_title']);
            }
            ?>

    <?php include 'layout/navbar.html'; ?>

    <main>
        <div class="container">
            <div class="d-flex justify-content-between align-items-center my-5">
                <h1 class="font-bold">Datasiswa</h1>
                <a href="add.php" class="btn btn-primary shadow">+ Add New</a>
            </div>

            <?php include 'layout/table.php'; ?>
            
        </div>
    </main>

    <script src="assets/js/index.js"></script>

</body>
</html>

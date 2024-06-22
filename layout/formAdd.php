<div class="container mt-5">
    <div class="card shadow p-5">
        <div class="card-title">
            <h1 class="font-bold ps-3">Tambah Siswa</h1>            
            </div>
        <div class="card-body">
            
        <?php 
        if (isset($_SESSION['add_message_type']) && isset($_SESSION['add_message'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['add_message_type']; ?>
                <?php echo $_SESSION['add_message']; ?>
            </div>
            <?php unset($_SESSION['add_message_type']); unset($_SESSION['add_message']); ?>
        <?php } ?>

        <form action="add.php" method="POST">
            <div class="form-group mb-4">
                <label for="nama">Name</label>
                <input type="text" class="form-control mt-2" id="nama" name="nama" placeholder="Enter name...." autocomplete="off"
                autofocus>
            </div>
            <div class="d-flex justify-content-between gap-4">
                <div class="form-group my-4 w-100">
                    <label for="kelas">Class</label>
                    <select class="form-control mt-2" id="kelas" name="kelas">
                        <option value="" selected>--</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </div>
                <div class="form-group my-4 w-100">
                    <label for="absen">Absen</label>
                    <input type="number" class="form-control mt-2" id="absen" name="absen" placeholder="Enter absen...." autocomplete="off">
                </div>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
        </div>
    </div>
</div>
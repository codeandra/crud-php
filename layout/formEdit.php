<div class="container mt-5">
    <div class="card shadow p-5">
        <div class="card-title">
            <h1 class="font-bold ps-3">Edit Siswa</h1>
        </div>
        <div class="card-body">     
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group my-4">
                <label for="nama">Name</label>
                <input type="text" class="form-control mt-2" id="nama" name="nama" placeholder="Enter name...." autofocus
                value="<?php echo $nama ?>">
            </div>
            <div class="form-group my-4">
                <label for="kelas">Class</label>
                <select name="kelas" id="kelas" class="form-control mt-2">
                    <?php 
                        $class_options = ['X', 'XI', 'XII'];
                        
                        if (!empty($kelas) && in_array($kelas, $class_options)) {
                            echo '<option value="' . $kelas . '" selected>' . $kelas . '</option>';
                            $kelas_options = array_diff($class_options, [$kelas]);
                        }

                        foreach ($class_options as $option) { ?>
                            <option value="<?php echo $option; ?>" >
                                <?php echo $option; ?>
                            </option>
                        <?php }
                    ?>
                </select>
            </div>
            <div class="form-group my-4">
                <label for="absen">Absen</label>
                <input type="number" class="form-control mt-2" id="absen" name="absen" placeholder="Enter absen...."
                value="<?php echo $absen ?>">
            </div>
            <button name="update" type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
    </div>
</div>
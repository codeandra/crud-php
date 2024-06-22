<?php include ("db_connect.php"); ?>
<?php $i = 1; ?>

<div class="container">
  <table class="table table-striped w-100 text-center align-middle table-bordered rounded shadow">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Absen</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

    <?php 
    $sql = "SELECT * FROM siswa";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) { ?>

      <tr>
        <td> <?php echo $i++; ?> </td>
        <td> 
          <a href="detail.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
            <?php echo $row['nama']; ?>
          </a> 
        </td>
        <td> <?php echo $row['kelas']; ?> </td>
        <td> <?php echo $row['absen']; ?> </td>
        <td>
          <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning text-white">
            <i class="fa-solid fa-pencil"></i>
          </a>
          <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
            <i class="fa-solid fa-trash"></i>
        </a>
        </td>
      </tr>

    <?php } ?>
    </tbody>
  </table>
</div>

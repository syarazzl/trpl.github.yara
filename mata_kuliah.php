<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Mata Kuliah</h1>
</div>

<?php

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'view';

switch ($aksi) {
    case 'view':
        ?>
         <?php
        include 'koneksi.php';
        ?>

<div class="container">
        <div class="py-2">
        <a href="index.php?p=mk&aksi=input" class="btn btn-success">Input Data Baru</a>
        </div> 

        <table class="table table-bordered border border-black">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode MK</th>
                    <th scope="col">Nama MK</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($db, "SELECT * FROM mata_kuliah 
                INNER JOIN prodi ON prodi.id = mata_kuliah.prodi_id");
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $row['kode_mk'] . "</td>";
                    echo "<td>" . $row['nama_mk'] . "</td>";
                    echo "<td>" . $row['sks'] . "</td>";
                    echo "<td>" . $row['prodi_id'] . "</td>";
                    echo "<td>" . $row['semester'] . "</td>";
                    echo "<td>
                    <a href='index.php?p=mk&aksi=edit&kode_mk=" . $row['kode_mk'] . "' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='proses_mata_kuliah.php?proses=delete&kode_mk=" . $row['kode_mk'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus?\")'>Delete</a>
                </td>";
                    echo "</tr>";
                    ?>
                    <?php
                    $no++;
                }
                ?>

            </tbody>
        </table>
    </div>
    <?php
        break;

        case 'input':
            ?>
    
            <body>
                <div class="container">
        
                    <div class="row">
                        <div class="col-8">
                            <form action="proses_mahasiswa.php?proses=insert" method="post">
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">nama mk</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="nama_mata_kuliah">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">sks</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="sks">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">prodi id</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="prodi_id">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">semester</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="semester">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-8">

                                    <input type="submit" name="submit" class="btn btn-primary">
                                    <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                                    <a href="?p=mhs" class="btn btn-success">Lihat Data Mata Kuliah</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                </div>

</body>


<?php
break;

case 'edit':
?>
<?php
include '../koneksi.php';

// Mendapatkan data mahasiswa berdasarkan NIM
if (isset($_GET['kode_mk'])) {
    $kode_mk = $_GET['kode_mk'];
    $query = mysqli_query($db, "SELECT * FROM mata_kuliah WHERE kode_mk='$kode_mk'");
    $data = mysqli_fetch_assoc($query);
}

if (isset($_POST['update'])) {
    // Mengambil data dari form
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $prodi_id = $_POST['prodi_id'];
    $semester = $_POST['semester'];


}
?>


<body>
    <div class="container">
   
        <form action="proses_mata_kuliah.php?proses=update" method="post">
            <input type="hidden" name="kode_mk" value="<?= $data['kode_mk'] ?>">

            <!-- Nama -->
            <div class="mb-3">
                <label for="nama_mata_kuliah" class="form-label">Nama Mata Kuliah</label>
                <input type="text" name="nama_mata_kuliah" class="form-control" value="<?= $data['nama_mata_kuliah'] ?>" required>
            </div>

              <!-- Nama -->
              <div class="mb-3">
                <label for="sks" class="form-label">sks</label>
                <input type="text" name="sks" class="form-control" value="<?= $data['sks'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="prodi_id" class="form-label">Prodi id</label>
                <input type="text" name="prodi_id" class="form-control" value="<?= $data['prodi_id'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" name="semester" class="form-control" value="<?= $data['semester'] ?>" required>
            </div>


            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>

</body>


<?php
break;
}

?>
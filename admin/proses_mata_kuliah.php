<?php

if($_GET['proses']=='insert'){
    

    if (isset($_POST['submit'])) {
        include '../koneksi.php';
       
        $sql = mysqli_query($db, "INSERT INTO mata_kuliah (kode_mk, nama_mk, sks, prodi_id, semester)VALUES
            ('$_POST[kode_mk]','$_POST[nama_mk]','$_POST[sks]','$_POST[prodi_id]', '$_POST[semester]' )");
        if ($sql) {
            echo "<script> alert ('Alah ta input');window.location='index.php?p=mk';</script>";
            //echo "<script>window.location"
        }

    }

    

}

if($_GET['proses']=='delete'){
    
    include '../koneksi.php';
    
    if (isset($_GET['kode_mk'])) {
        $nim = $_GET['kode-mk'];
        $hapus = mysqli_query($db, "DELETE FROM mata_kuliah WHERE kode_mk='$kode_mk'");
    
        if ($hapus) {
            echo "<script>alert('Data berhasil dihapus'); window.location='index.php?p=mk';</script>";
        }
    }
    
    

}

if($_GET['proses']=='update'){
    if(isset($_POST['update'])){
    include'../koneksi.php';
  

   $sql= mysqli_query($db,"UPDATE mata_kuliah SET
   nama_mk ='$_POST[nama_mk]',
   sks ='$_POST[sks]',
   prodi_id ='$_POST[prodi_id]',
   semester ='$_POST[semester]',
   ");
    
   if($sql){
    echo "<script>alert('Data berhasil Diedit');window.location='index.php?p=mk'</script>";
        }
    else{
    die("Query error: " . mysqli_error($db));
        }
    }
}


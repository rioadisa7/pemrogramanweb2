<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_tipe = $_POST['tipe'];
   
   

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_tipe; // ? 1
   
   

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO tipe_pakaian (tipe) VALUES (?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE tipe_pakaian SET tipe=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:tipe_pakaian.php');
?>
<?php 
    require_once "layouts/header.php";
    require_once "layouts/menu.php";
    require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM tipe_pakaian";
   $rs = $dbh->query($sql);
?>
    <div class="container">
      <a class="btn btn-success" href="form_tipe.php" role="button">Create Produk</a>
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>Tipe</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$row['tipe']?></td>
                        
                        <td>
<a class="btn btn-primary" href="view_tipe.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-warning" href="edit_tipe.php?idedit=<?=$row['id']?>">Edit</a>

</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
        </div>
<?php require_once "layouts/footer.php";?>
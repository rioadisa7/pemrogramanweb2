<?php 
require_once "layouts/header.php";
require_once "layouts/menu.php";
require_once 'dbkoneksi.php';
?>
<form method="POST" action="proses_pakaian.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="ukuran" class="col-4 col-form-label">ukuran</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="ukuran" name="ukuran" 
        value="" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="warna" class="col-4 col-form-label">warna</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="warna" name="warna" value=""
        type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">stok</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="stok" name="stok" value=""
        type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="harga" name="harga" value=""
        type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="tipe_pakaian_id" class="col-4 col-form-label">tipe</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="tipe_pakaian_id" name="tipe_pakaian_id" value=""
        type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses"
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
<?php require_once "layouts/footer.php";?>
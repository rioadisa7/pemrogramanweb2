<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tugas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h5>Sistem Penilaian</h5>
    <div class="container">
        <h2>Belanja Online</h2>        
        <form action="hasil_tugas.php" method="POST">
        <div class="form-group row">
            <label for="costumer" class="col-4 col-form-label">Costumer</label> 
            <div class="col-8">
            <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
                <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
                <label for="produk_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci" required="required"> 
                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">DAFTAR HARGA</a>
				<div class="list-group-item">
					TV : Rp. 4.200.000
				</div>
				<div class="list-group-item">
					KULKAS : Rp. 3.100.000
				</div>
				<div class="list-group-item">
					MESIN CUCI : Rp. 3.800.000
				</div>
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">HARGA DAPAT BERUBAH SETIAP SAAT</a>
			</div>
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
        </div>
        </form>
    </div>
</body>
</html>
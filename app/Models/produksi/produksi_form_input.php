<?php
	include "../class/config.php";
	include "../class/produksi.php";

	$id = $_GET['id'];

	$LihatPesanan = new produksi($database);
	$LihatPesanan->LihatPesanan();
	$DaftarProduksi = $LihatPesanan->LihatPesanan();
	$Produksi = $LihatPesanan->findPesananById($id);

?>
<div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="produksi_simpan.php">
    			<?php

                    if(empty($Produksi)){

                    }else{
                    foreach ($Produksi as $key => $value) {
                    ?>

                <legend> Form Input Produksi </legend>
                <input type="hidden" name="id_pesanan" value="<?php echo $value['id_pesanan'] ?>">
                <div class="form-group">
                	<label for="Nama Pemesan" class="col-md-3"> Nama Pemesan  </label>
                	<div class="col-md-7">
                    	<input required type="text" disabled class="form-control" id="nama_pemesan" name="nama_pemesan" value="<?php echo $value['nama_pemesan']; ?>">
                    </div>
                </div>
                <br>

                <div class="form-group">
                	<label for="id_barang" class="col-md-3"> ID Barang  </label>
                	<div class="col-md-7">
                    	<input required type="text" readonly class="form-control" id="id_barang" name="id_barang" value="<?php echo $value['id_barang']; ?>">
                    </div>
                </div>
                <br>

                <div class="form-group">
                	<label for="Jumlah Pesanan" class="col-md-3"> Jumlah Pesanan  </label>
                	<div class="col-md-7">
                    	<input required type="text" readonly disabled class="form-control" id="jumlah_pesanan" name="jumlah_pesanan" value="<?php echo $value['jumlah_pesanan']; ?>">
                    </div>
                </div>
                <br>

                <div class="form-group">
                	<label for="Jumlah Produksi" class="col-md-3"> Jumlah Produksi  </label>
                	<div class="col-md-7">
                    	<input required type="text" class="form-control" id="jumlah_produksi" placeholder="Jumlah Barang Yang Akan di Produksi" name="jumlah_produksi">
                    </div>
                </div>
                <br>

                <div class="form-group">
                	<label for="Lead Time" class="col-md-3"> Lead Time  </label>
                	<div class="col-md-7">
                    	<select class="form-control" name="lead_time" id="lead_time">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                        </select>
                    </div>
                </div>
                <br>

                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		<input type="submit" class="btn btn-md btn-primary" name="simpan" value="Simpan" >

                            <input type="reset" class="btn btn-danger" name="batal" value="Batal">


                    </div>
                </div>
                <?php
                    }}
                    ?>
    		</form>
        </div>
    </div>

    <!-- akhir form -->
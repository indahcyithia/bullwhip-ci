<div class="container-fluid">
    <div class="col-md-7 col-md-offset-2">
        <form class="form-horizontal" method="post" action="<?= base_url('/Admin/updateBarang') ?>">
            <?php

            if (empty($Barang)) {
            } else {
                foreach ($Barang as $key => $value) {
            ?>
                    <legend> Form Edit Barang </legend>
                    <input type="hidden" name="id_barang" value="<?php echo $value['id_barang'] ?>">
                    <div class="form-group">
                        <label for="nama_bagian" class="col-md-2"> Nama Bagian </label>
                        <div class="col-md-7">
                            <input required type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $value['nama_barang']; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-7 col-md-offset-2">
                            <input type="submit" class="btn btn-md btn-primary" name="update" value="Update">
                            <a class="btn btn-danger" href="index.php" role="button">Batal</a>

                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </form>
    </div>
</div>

<!-- akhir form -->
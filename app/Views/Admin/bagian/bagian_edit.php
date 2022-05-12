<div class="container-fluid">
    <div class="col-md-7 col-md-offset-2">
        <form class="form-horizontal" method="post" action="<?= base_url('/Admin/updateBagian') ?>">
            <?php

            if (empty($bagian)) {
            } else {
                foreach ($bagian as $data) {
            ?>

                    <legend> Form Edit Bagian </legend>
                    <input type="hidden" name="id_bagian" value="<?php echo $data["id_bagian"]; ?>">
                    <div class="form-group">
                        <label for="nama_bagian" class="col-md-2"> Nama Bagian </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="nama_bagian" name="nama_bagian" value="<?php echo $data["nama_bagian"]; ?>" required>
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
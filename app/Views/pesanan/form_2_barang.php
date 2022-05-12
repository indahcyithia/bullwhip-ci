<!-- mulai form -->
<div class="container-fluid">
    <div class="col-md-7 col-md-offset-2">
        <form class="form-horizontal" method="post" action="<?= base_url('/Pesanan/SaveBarang') ?>">
            <legend> Form Input Barang </legend>
            <div class="form-group">
                <label for="nama_barang" class="col-md-2"> Nama Barang </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="nama_barang" placeholder="nama barang" name="nama_barang">
                </div>
            </div>
            <br>

            <div class="form-group">
                <div class="col-md-7 col-md-offset-2">

                    <input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                    <a class="btn btn-danger" href="index.php" role="button">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> No</th>
                        <th> Nama Barang </th>
                    </tr>
                    <tr>
                        <?php
                        foreach ($Barang as $key => $data) {
                        ?>
                            <td> <?php echo $key + 1 ?> </td>
                            <td> <?php echo $data["nama_barang"] ?> </td>

                    </tr>
                <?php
                        }
                ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- akhir form -->
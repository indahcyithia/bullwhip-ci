<!-- mulai form -->
<div class="container-fluid">
    <div class="col-md-7 col-md-offset-2">
        <center>
            <h2>Tambah Pengambilan</h2>
        </center>
        <br />
        <form class="form-horizontal" method="post" action="<?= base_url('/Gudang/SavePengambilan') ?>">

            <div class="form-group">
                <label for="nama pegawai" class="col-md-3"> Nama Pengambil </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="nama_pengambil" placeholder="nama pengambil input disini" name="nama_pengambil">
                </div>
            </div>
            <br>

            <div class="form-group">
                <label for="nama pegawai" class="col-md-3"> Nama Barang </label>
                <div class="col-md-7">
                    <select required class="form-control" name="id_barang" id="id_barag">
                        <option value="">----- Nama Barang -----</option>
                        <?php
                        foreach ($Barang as $dri) {
                            echo '<option value="' . $dri['id_barang'] . '">' . $dri['nama_barang'] . '</option>';
                        }
                        ?>

                    </select>

                </div>
            </div>
            <br>

            <div class="form-group">
                <label for="hp pegawai" class="col-md-3"> Jumlah Pengambilan </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="jumlah_pengambilan" placeholder="jumlah pengambilan input disini" name="jumlah_pengambilan">
                </div>
            </div>
            <br>

            <div class="form-group">
                <div class="col-md-7 col-md-offset-2">

                    <input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                    <input type="reset" class="btn btn-danger" name="batal" value="batal">

                </div>
            </div>
        </form>
    </div>
</div>

<!-- akhir form -->
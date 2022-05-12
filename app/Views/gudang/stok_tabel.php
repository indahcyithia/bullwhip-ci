<!-- Mulai Tabel -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <center>
                    <h2>Daftar Stok</h2>
                </center>
                <br>
                <table class="table">
                    <tr>
                        <th> No </th>
                        <th> Nama Barang </th>
                        <th> Jumlah Produksi </th>
                        <th> Jumlah Pengambilan </th>
                        <th> Stok Barang </th>

                    </tr>
                    <tr>
                        <?php
                        foreach ($Barang as $key => $data) {
                        ?>
                            <td> <?php echo $key + 1 ?> </td>
                            <td> <?php echo $data["nama_barang"] ?> </td>
                            <td> <?php echo $data["total_produksi"] ?> </td>
                            <td> <?php echo $data["total_pengambilan"] ?> </td>
                            <td> <?php echo $data["stok_barang"] ?> </td>

                    </tr>
                <?php
                        }
                ?>
                </table>
            </div>
        </div>
    </div>
</div>
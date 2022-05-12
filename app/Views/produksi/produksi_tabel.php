<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="table-responsive">
                <center>
                    <h2>Daftar Produksi</h2>
                </center>
                <br />
                <table class="table">
                    <tr>
                        <th> No </th>
                        <th> Nama Barang </th>
                        <th> Produksi </th>
                        <th> Lead Time </th>

                    </tr>
                    <tr>
                        <?php
                        foreach ($TabelProduksi as $key => $data) {
                        ?>
                            <td> <?php echo $key + 1 ?> </td>
                            <td> <?php echo $data["nama_barang"] ?> </td>
                            <td> <?php echo $data["jumlah_produksi"] ?> </td>
                            <td> <?php echo $data["lead_time"] ?> </td>

                    </tr>
                <?php
                        }
                ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Mulai Tabel -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="table-responsive">
                <center>
                    <h2>Daftar Pesanan</h2>
                </center>
                <br>
                <table class="table">
                    <tr>
                        <th> No</th>
                        <th> Nama Pemesan </th>
                        <th> Nama Barang </th>
                        <th> Jumlah Barang </th>


                    </tr>
                    <tr>
                        <?php
                        foreach ($Pesanan as $key => $data) {
                        ?>
                            <td> <?php echo $key + 1 ?> </td>
                            <td> <?php echo $data["nama_pemesan"] ?> </td>
                            <td> <?php echo $data["nama_barang"] ?> </td>
                            <td> <?php echo $data["jumlah_pesanan"] ?> </td>


                    </tr>
                <?php
                        }
                ?>
                </table>
            </div>
        </div>
    </div>
</div>
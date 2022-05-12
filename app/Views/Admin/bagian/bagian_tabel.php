<!-- Mulai Tabel -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <center>
                    <h2>Daftar Bagian</h2>
                </center>
                <br>
                <table class="table">
                    <tr>
                        <th> No </th>
                        <th> Nama Bagian </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    <?php
                    foreach ($bagian as $key => $data) {
                    ?>
                        <td> <?php echo $key + 1 ?> </td>
                        <td> <?php echo UCFIRST($data["nama_bagian"]) ?> </td>

                        <td>
                            <a href="<?= base_url('/Admin/UbahBagian/' . $data["id_bagian"]) ?>">
                                <button type="button" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-pencil">
                                        Edit
                                    </span>
                                </button>
                            </a>
                        </td>
                        <td>
                            <!-- <a href="bagian_delete.php?id=<?php echo $data["id_bagian"]; ?>"> -->
                            <a href="<?= base_url('/Admin/deleteBagian/' . $data["id_bagian"]) ?>">
                                <button onclick="return confirm('Hapus data ini?')" type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash">
                                        Delete
                                    </span>
                                </button>
                            </a>
                        </td>

                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
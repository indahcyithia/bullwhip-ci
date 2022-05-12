<?php
	//include "../class/config.php";
	//include "../class/produksi.php";
	//include "../class/barang.php";
	//include "../class/pemesanan.php";
	
	
	
?>

<!-- Mulai Tabel -->


<div class="container-fluid">
	<div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Barang </th>
                        <th> Produksi </th>
                        <th> Lead Time </th>
                        
                    </tr>
                    <tr>
                    <?php
                        foreach ($TabelProduksi as $key => $data) {
                    ?>
                        <td> <?php echo $key+1 ?> </td>
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
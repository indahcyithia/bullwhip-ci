<?php
	session_start ();
//	include "produksi_konek.php";
include "../class/config.php";
include "../class/pemesanan.php";
include "../class/barang.php";
include "../class/produksi.php";

	$DaftarProduksi = new produksi($database);
	$DaftarProduksi->DaftarProduksi();
	$TabelProduksi = $DaftarProduksi->DaftarProduksi();

	$BarangList = new barang($database);
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();

	$LihatPesanan = new produksi($database);
	$LihatPesanan->LihatPesanan();
	$DaftarPesanan = $LihatPesanan->LihatPesanan();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thesisku</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<?php
		include "navbar.php";

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
                        <td> <?php echo $data['nama_pemesan'] ?> </td>
                        <td> <?php echo $data["nama_barang"] ?> </td>
                        <td> <?php echo $data["jumlah_produksi"] ?> </td>
                        <td> <?php echo $data["lead_time"] ?> </td>

                    </tr>
                        <?php
                        }

						error_reporting(E_ALL);
                    ?>
                </table>
            </div>
        </div>
	</div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
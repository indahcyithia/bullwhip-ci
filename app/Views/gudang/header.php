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
    <link href="../css/stylesheet.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
</head>

<body>
    <script>
        <?php if (isset($_SESSION['status'])) {
            if ($_SESSION['status'] == 'succes') { ?>
                swal({
                    title: "Berhasil!",
                    text: "Data berhasil disimpan!",
                    type: "success"
                });
            <?php } else if ($_SESSION['status'] == 'gagal') { ?>
                swal({
                    title: "Gagal!",
                    text: "Data gagal disimpan!",
                    type: "error"
                });
            <?php } else if ($_SESSION['status'] == 'delete') { ?>
                swal({
                    title: "Berhasil!",
                    text: "Data berhasil dihapus!",
                    type: "success"
                });
        <?php }
        }
        unset($_SESSION['status']); ?>
    </script>
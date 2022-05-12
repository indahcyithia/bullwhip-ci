<?php
	include "../../class/config.php";
	include "../../class/bagian.php";

	if (isset($_GET['id']));
	{
		$BagianDelete = new bagian($database);
		$BagianDelete->BagianDelete($_GET['id']);

		header ("location:index.php");
	}
?>
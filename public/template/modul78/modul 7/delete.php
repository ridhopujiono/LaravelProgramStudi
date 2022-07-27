<?php
include_once("config.php");
$npm = $_GET['npm'];
$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE npm=$npm");
header("Location:index.php");
?>

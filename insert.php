<?php
include "database.php";

$query = "INSERT INTO person VALUES ('', '$_POST[nama]','$_POST[npm]')";
$data  = $db->prepare($query);
$data->execute();

header("location: form.php");

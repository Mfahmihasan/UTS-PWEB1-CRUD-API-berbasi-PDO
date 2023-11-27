<?php
include "database.php";

$query = "SELECT * FROM person WHERE id='$_GET[id]'";
$data  = $db->prepare($query);
$data->execute();

$person = $data->fetch(PDO::FETCH_LAZY);
?>

<h3>Form Ubah</h3>
<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?php echo $person->id ?>"/>
    Nama : <input type="text" name="nama" value="<?php echo $person->nama ?>"/><br/>
    NPM  : <textarea name="npm" name="npm"><?php echo $person->npm ?>/textarea><br/>
    <button type="submit">Simpan</button>
</form>
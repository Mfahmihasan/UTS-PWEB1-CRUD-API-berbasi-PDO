<?php
include "database.php";
?>
<h3>Form Ubah</h3>
<form method="post" action="insert.php">
    Nama : <input type="text" name="nama"/><br/>
    NPM  : <textarea name="npm"></textarea><br/>
    <button type="submit">Simpan</button>
</form>

<hr/>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Hapus</th>
            <th>Ubah</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM person";
        $data  = $db->prepare($query);
        $data -> execute();

        $no = 1;
        while($person = $data->fetch()){
        ?>

        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $person['nama'] ?></td>
            <td><?php echo $person['npm'] ?></td>
            <td><a href="delete.php?id=<php echo $person->id ?>">Hapus</a></td>
            <td><a href="form-ubah.php?id=<php echo $person->id ?>">Ubah</a></td>
        </tr>

        <?php
            $no++;
        }
        ?>
    </tbody>
</table>
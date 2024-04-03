<?php

include 'koneksi.php';

$query = "SELECT * FROM buah";
$result = $conn->query($query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>warna</th>
            <th>vitamin</th>
            <th>ciri</th>
            <th>Aksi</th>
        </tr>

        <?php while( $row = $result->fetch_assoc())   :   ?>
        <tr>
            <td> <?php echo $row['id'] ?> </td>
            <td> <?php echo $row['nama'] ?></td>
            <td> <?php echo $row['warna'] ?></td>
            <td> <?php echo $row['vitamin'] ?></td>
            <td> <?php echo $row['ciri'] ?></td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
        <?php  endwhile; ?>
   
    </table>
        <br>
        <form action="insert.php" method="POST">
        Nama: <input type="text" name="nama" required><br>
        Warna: <input type="text" name="warna" required><br>
        vitamin: <input type="text" name="vitamin" required><br>
        Ciri: <input type="number" name="ciri" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
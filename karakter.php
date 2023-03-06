<?php
require 'function.php';
$karakter = query("SELECT * FROM genshin_impact");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar karakter</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        img {
            width: 50px;
        }
        h1 {
            display: inline-block;
            width: 100%;
            height: 50px;
            background-color: black;
            color: white;
            text-align: center;
            line-height: 50px;
            font-family: arial,sans-serif;
            margin-bottom: 20px;
        }
        table {
            margin: auto;
            margin-top: 20px;
            text-align: center;
        }
        body tr:nth-of-type(odd) {
            background-color: salmon;
        }
        tr td {
            width: 120px;
            height: 30px;
        }
        .ubah a {
            color: black;
            text-decoration: none;
            font-weight: bold;
            margin-left: 5px;
        }
        .ubah a:hover {
            color:grey;
        }

    </style>
</head>
<body>
    
    <h1>GENSHIN IMPACT</h1>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr style="background-color: aqua; font-weight: bold; font-family: arial; text-align: center;">
            <td>No</td>
            <td>aksi</td>
            <td>Nama</td>
            <td>Gambar</td>
            <td>Senjata</td>
            <td>Artefak</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($karakter as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <div class="ubah">
                    <a href="#">ubah</a> |
                    <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm ('yakin');">hapus</a>
                </div>
            </td>
            <td><?php echo $row["nama"]; ?></td>
            <td><img src="<?php echo $row["gambar"]; ?>" ></td>
            <td><?php echo $row["senjata"]; ?></td>
            <td><?php echo $row["artefak"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>
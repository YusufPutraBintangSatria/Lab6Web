<?php
include __DIR__ . '/../config.php'; // include file config.php
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Data Mobil</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <div class="logo">
        Data Mobil
        </div>
        <nav>
            <ul>
                <li><a href="../module/home.php">Home</a></li>
                <li><a href="../module/artikel/tambah.php">Tambah Data</a></li>
            </ul>
        </nav>
    </header>
    </table>
</div>
<div class="container">
    <h1>Hi, Welcome</h1>
    <table class="table">
        <thead>
            
<div class="container">
    <h2>Daftar Mobil</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Merk</th>
                <th>Warna</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM mobil";
            $result = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row['merk']; ?></td>
                    <td><?php echo $row['warna']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                    <td>
                        <a href="module/artikel/edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="module/artikel/hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include '../template/footer.php';
?>
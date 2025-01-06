<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Makanan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #fefbd8;
            color: #444;
        }

        h1 {
            text-align: center;
            color: #d2691e;
            margin-bottom: 20px;
            font-size: 28px;
        }

        .add-button {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #ffa07a;
            color: white;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .add-button:hover {
            background-color: #ff6347;
            transform: scale(1.1);
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        thead {
            background-color: #8b0000;
            color: white;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #ffe4c4;
            transition: background-color 0.3s;
        }

        .action-links a {
            margin: 0 5px;
            text-decoration: none;
            color: #d2691e;
            font-weight: bold;
        }

        .action-links a:hover {
            color: #8b0000;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>

<body>
    <h1>Data Makanan</h1>
    <a href="?page=makananAdd" class="add-button">+ Tambah Data Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Makanan</th>
                <th>Daerah Asal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "includes/config.php";
            $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
            $sql = mysqli_query($conn, $query);
            $nomor = 1;
            while ($data = mysqli_fetch_array($sql)) { ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= htmlspecialchars($data["nama_makanan"]); ?></td>
                    <td><?= htmlspecialchars($data["daerah_makanan"]); ?></td>
                    <td class="action-links">
                        <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>">Edit</a>
                        <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="footer">
        <p>Total Data: <?= mysqli_num_rows($sql); ?></p>
    </div>
</body>

</html>

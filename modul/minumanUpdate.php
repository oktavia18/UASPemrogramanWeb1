<?php
require "includes/config.php";
// ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_minuman WHERE id_minuman=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Daftar Minuman</title>
</head>
<body style="background-color: #fefbd8;">
    <table>
        <tr>
            <th colspan="3"><u>Update Data Daftar Minuman</u></th>
        </tr>
        <form method="post" action="?page=minumanUpdateProses">
            <!-- menampung nilai id yang akan di edit -->
            <input type="hidden" name="id" value="<?= $data['id_minuman'] ?>" />
            <tr>
                <td style="width: 8em;">Nama Minuman</td>
                <td>:</td>
                <td><input type="text" name="nama_minuman" style="width: 20em;" value="<?= $data['nama_minuman'] ?>"></td>
            </tr>
            <tr>
                <td style="width: 8em;">Daerah Minuman</td>
                <td>:</td>
                <td><input type="text" name="daerah_minuman" style="width: 20em;" value="<?= $data['daerah_minuman'] ?>"></td>
            </tr>
            <tr style="margin-top: 1em;">
                <td></td>
                <td></td>
                <td colspan="3" style="padding: 0.5em;">
                    <input type="submit" name="update" value="Update">
                    <input type="button" value="Cancel" onClick="document.location='?page=minuman'">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>

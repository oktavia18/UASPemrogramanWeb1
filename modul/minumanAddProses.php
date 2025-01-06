<?php
// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['submit'])) {
    $input_nama_minuman = inputData($_POST['nama_minuman']);
    $input_daerah_minuman = inputData($_POST['daerah_minuman']);
    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman);
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman);

    // validasi field nama minuman
    if (empty($nama_minuman) || strlen($nama_minuman) == 0) {
        echo "<script>window.alert('Field is required');window.location='?page=minumanAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($nama_minuman))) {
        echo "<script>window.alert('Only letters and white space allowed');window.location='?page=minumanAdd'</script>";
    } elseif (empty($daerah_minuman) || strlen($daerah_minuman) == 0) {
        // validasi field daerah minuman
        echo "<script>window.alert('Field is required');window.location='?page=minumanAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($daerah_minuman))) {
        echo "<script>window.alert('Only letters and white space allowed');window.location='?page=minumanAdd'</script>";
    } else {
        // validasi duplikasi data
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nama_minuman FROM tbl_minuman WHERE nama_minuman='$nama_minuman'"));

        if ($cek > 0) {
            echo "<script>window.alert('Data sudah tersedia');window.location='?page=minumanAdd'</script>";
        } else {
            // buat query
            $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman)
                      VALUE ('$nama_minuman', '$daerah_minuman')";
            $sql = mysqli_query($conn, $query);

            // apakah proses simpan berhasil?
            if ($sql) {
                echo "<script>window.alert('Data berhasil ditambah!');
                      window.location='?page=minuman';</script>";
            } else {
                echo "<script>window.alert('Gagal menambah data!');
                      window.location='?page=minuman';</script>";
            }
        }
    }
}

// Fungsi inputData untuk sanitasi data
function inputData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

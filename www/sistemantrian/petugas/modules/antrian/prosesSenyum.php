<?php 
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {
        session_start();

        // panggil file config.php untuk koneksi ke database
        require_once "../../../config/config.php";
        $id_antrian = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_antrian'])))));
        $nilai = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nilai'])))));
        $id_user = $_SESSION['antrian_userID'];
        $tgl_nilai = gmdate("Y-m-d H:i:s", time()+60*60*7);

        $result = $mysqli->query("SELECT 1 FROM nilai_survey WHERE id_antrian = '$id_antrian' AND id_user = '$id_user'")
                              or die('Ada kesalahan pada query cek nilai survey: '.$mysqli->error);
        $ada = $result->fetch_assoc();
        if ($ada) {
            // perintah query untuk mengubah data ke tabel antrian
            $exc = $mysqli->query("UPDATE nilai_survey SET nilai='$nilai',tgl_nilai='$tgl_nilai' WHERE id_antrian = '$id_antrian' AND id_user = '$id_user'")
                                      or die('Ada kesalahan pada query update : '.$mysqli->error);
        } else {
            // perintah query untuk menyimpan data ke tabel antrian
            $exc = $mysqli->query("INSERT INTO nilai_survey(id_antrian,id_user,nilai,tgl_nilai)
                                      VALUES('$id_antrian','$id_user','$nilai','$tgl_nilai')")
                                      or die('Ada kesalahan pada query insert : '.$mysqli->error);
        }
        // cek query
        if ($exc) {
            // jika berhasil tampilkan pesan Sukses
            echo "Sukses";
        }
    } else {
        echo '<script>window.location="../../error-404.html"</script>';
    }

?>
<?php 
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {

        // panggil file config.php untuk koneksi ke database
        require_once "../../../config/config.php";
        $jenis_layanan = "";
        $ID = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['ID'])))));

        $result = $mysqli->query("SELECT *
                                    FROM antrian
                                    WHERE ID = '$ID'")
                              or die('Ada kesalahan pada query tampil jumlah antrian: '.$mysqli->error);
        $data = $result->fetch_assoc();

        $id_layanan = explode('::', $data['id_layanan']);
        foreach ($id_layanan as $value) {
            $result = $mysqli->query("SELECT jenis_layanan
                                    FROM layanan
                                    WHERE id_layanan = '$value'")
                              or die('Ada kesalahan pada query tampil jumlah antrian: '.$mysqli->error);
            $layanan = $result->fetch_assoc();
            $jenis_layanan .= $layanan['jenis_layanan'] . ", ";
        }
        $data['jenis_layanan'] = $jenis_layanan;

        echo json_encode(array('err' => "0", "data" => $data));
    } else {
        echo '<script>window.location="../../error-404.html"</script>';
    }

?>
<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {
    session_start();

    $hari_ini = gmdate("Y-m-d", time()+60*60*7);
    
    // nama table
    $table = 'antrian';
    // Table's primary key
    $primaryKey = 'ID';

    //$pelayanan = "Pelayanan Kewarganegaraan";
    $pelayanan = $_SESSION['antrian_user_account_name'];
    if ($pelayanan=="loket1"){
        $antrian="Pelayanan KI";
    }
    elseif($pelayanan=="loket2"){
        $antrian="Pelayanan Kewarganegaraan";
    }
    else{
        $antrian="Pelayanan AHU";
    }

    $columns = array(
        array( 'db' => 'no_antrian', 'dt' => 0 ),
        array( 'db' => 'panggil', 'dt' => 1 ),
        array( 'db' => 'loket', 'dt' => 2 ),
        array( 'db' => 'status', 'dt' => 3 ),
        array( 'db' => 'ID', 'dt' => 4 ),
        array( 'db' => 'layanan_antrian', 'dt' => 5 ),
        array( 'db' => 'ID', 'dt' => 6 ),
    );

    // SQL server connection information
    require_once "../../../config/config.php";
    // ssp class
    require '../../assets/vendors/js/datatables/ssp.class.php';
    
    echo json_encode(
        SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, "tanggal='$hari_ini'", null )
    );
} else {
    echo '<script>window.location="../../error-404.html"</script>';
}
?>
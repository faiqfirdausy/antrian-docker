
<?php 
    require_once "fungsi_nama_hari.php";
// panggil file fungsitanggal indonesia
    require_once "fungsi_tanggal.php";
    require_once "config.php";
?>
<style>
h4 {
  text-align: center;
  /* line-height: 0px; */
  margin: 5px;
  padding: 0;
}

h1 {
  text-align: center;
  font-size: 420%;

}
h5 {
  text-align: center;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
<img src="logo1.png" style="text-align: right !important;">

<h4>KEMENKUM</h4>
<h4>KANWIL JATIM</h4>
<h4><?php echo nama_hari(date("Y-m-d")); ?>, <?php echo tgl_eng_to_ind(date("d-m-Y")); ?></h4>
            <h4 id="clockDisplay"><?php echo tgl_eng_to_ind(date("d-m-Y")); ?></h4>
            <script type="text/javascript" language="javascript">
            function renderTime(){
              var currentTime = new Date();
              var h = currentTime.getHours();
              var m = currentTime.getMinutes();
              var s = currentTime.getSeconds();

              if (h == 0) {
                  h = 24;
                }
                if (h < 10){
                  h = "0" + h;
                }
                if (m < 10){
                  m = "0" + m;
                }
                if (s < 10){
                  s = "0" + s;
                }

              var myClock = document.getElementById('clockDisplay');
              myClock.textContent = h + ":" + m + ":" + s + "";    
              setTimeout ('renderTime()',1000);
            }
            renderTime();
            </script>
<h1> 
<?php 
 // panggil file config.php untuk koneksi ke database

    $hari_ini = gmdate("Y-m-d", time()+60*60*7);
    $print_hari = gmdate("d - m - Y", time()+60*60*7);


    $configID = "1";
    // fungsi query untuk menampilkan data dari tabel sys_config
    $result = $mysqli->query("SELECT nama_instansi, alamat, telepon, email, website, logo FROM sys_config WHERE configID='$configID'")
                              or die('Ada kesalahan pada query tampil data config: '.$mysqli->error);
    $data_config   = $result->fetch_assoc();
    $nama_instansi = $data_config['nama_instansi'];
    $alamat        = $data_config['alamat'];
    $telepon       = $data_config['telepon'];
    $email         = $data_config['email'];
    $website       = $data_config['website'];
    $logo          = $data_config['logo'];

   $result2 = $mysqli->query("SELECT no_antrian FROM antrian WHERE tanggal='$hari_ini' && layanan_antrian = 'Pelayanan AHU' ORDER BY ID DESC LIMIT 1")or die('Ada kesalahan pada query tampil data config: '.$mysqli->error);
   $data_config2  = $result2->fetch_assoc();
   $no_antrian = $data_config2['no_antrian'];                   

echo $no_antrian; ?></h1>
<img src="logo2.png" style="width:90%;">

<h4>TERIMA KASIH</h4>

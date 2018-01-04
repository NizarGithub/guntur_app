<?php
include 'config.php';
$tinggi_menara = $_POST['tinggi_menara'];
$tanggal = date("Ymd");
header("Content-type: application/x-msdownload");
header('Content-Type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Laporan Menara_".$provider ."_" . $tanggal . ".xls");
header("Pragma: no-cache");
header("Expires: 0");

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laporan Menara Telekomunikasi</title>
        <link rel="shortcut icon" href="favicon.png" />

    </head>
    <body>
        <table border="1" width="100%" cellpadding="0" cellspacing="0" id="product-table">
            <thead><center><h1>Data Menara Telekomunikasi Ketinggian </h1></center></thead>
        <tr>
            <th width="5%">Nomor</th>
            <th width="9%">Nama Site</th>
            <th width="3%">Pemilik Menara</th>
            <th width="6%">Latitude</th>
            <th width="5%">Longitude</th>
            <th width="5%">Alamat</th>
            <th width="11%">Kecamatan</th>
            <th width="11%">Kelurahan</th>
			<th width="110">Tinggi Menara</th>
        </tr>   
        <?php
        $result = mysql_query("select * from tb_site where tinggi_menara= '" . $tinggi_menara . "' "); //output
        $no = 0;
        while ($row = mysql_fetch_array($result)) {
            ?>	
            <tr>
                <td><?php echo $no + 1; ?></td>
                <td><?php echo $row['nama_site']; ?></td>
                <td><?php echo $row['pemilik_menara']; ?></td>
                <td><?php echo$row['latitude']; ?></td>
                <td><?php echo $row['longitude']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['nama_kecamatan']; ?></td>
                <td><?php echo $row['nama_kelurahan']; ?></td>
<td><?php echo $row['tinggi_menara']; ?></td>
                <?php $no++; ?>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
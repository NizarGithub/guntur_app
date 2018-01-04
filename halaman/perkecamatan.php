<?php
include 'config.php';
$akun_nama = $_POST['akun_nama'];
$tanggal = date("Ymd");
header("Content-type: application/x-msdownload");
header('Content-Type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Bukubesar _"."$akun_nama" . $tanggal . ".xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laporan BUKU BESAR</title>
        <link rel="shortcut icon" href="favicon.png" />

    </head>
    <body>
        <table border="1" width="100%" cellpadding="0" cellspacing="0" id="product-table">
            <thead><center><h1>LAPORAN PT PUTRA BAHARI MANDIRI</h1></center></thead>
			       <h3>Nama</h3><br>
				          <h3>No Account</h3>
        <tr>
            <th width="5%">Tanggal</th>
            <th width="9%">No Bukti</th>
            <th width="3%">Uraian</th>
            <th width="6%">Debet</th>
            <th width="5%">Kredit</th>
            <th width="5%">Saldo</th>
           
        </tr>   
<?php
$result = mysql_query("select * from gntrapp_akun where akun_nama= '" . $akun_nama . "' "); //output
$no = 0;
while ($row = mysql_fetch_array($result)) {
    ?>	
            <tr>
                <td><?php echo $no + 1; ?></td>
                <td><?php echo $row['akun_nama']; ?></td>
				 <td><?php echo $row['akun_tipe_id']; ?></td>
				  <td><?php echo $row['akun_saldo']; ?></td>
				   <td><?php echo $row['akun_saldo']; ?></td>
                <td><?php echo $row['akun_saldo']; ?></td>
    <?php $no++; ?>
            </tr>
                <?php
            }
            ?>
    </table>
</body>
</html>
<?php
$pemilik = $_GET['nama_provider'];
$query      = mysql_query("SELECT * FROM `site_vie` WHERE pemilik_menara='".$pemilik."');
$provinces  = array();
while($data = mysql_fetch_array($query)){
    $site[] = array('nama_site'=>'".$data['nama_site']."'");
}
echo json_encode($site);
?>
<!DOCTYPE html>

<?php
include 'config.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laporan Kas</title>
        <link rel="shortcut icon" href="favicon.png" />
        <script src="kickstart/jquery.min.js"></script>
        <script src="kickstart/js/kickstart.js"></script> <!-- KICKSTART -->
        <link rel="stylesheet" href="kickstart/css/kickstart.css" media="all" /> <!-- KICKSTART -->
    </head>
    <body><center>


    </center>
    <!-- Tabs Left -->
    <ul class="tabs left">

        <li><a href="#perkecamatan">Laporan Menara kas</a></li>
        <li><a href="#perprovider">Laporan Menara Telekomunikasi Perprovider</a></li>
        <li><a href="#keseluruhan">Laporan Menara Telekomunikasi </a></li>
		<li><a href="#perketinggian">Laporan Menara Telekomunikasi Perketinggian</a></li>
    </ul>

    <div id="perkecamatan" class="tab-content">
        <form method = "POST" action = "perkecamatan.php">
            Kecamatan :  <select id="akun_nama" name="akun_nama" class=chzn-select>
                <?php
                $query = mysql_query("select distinct akun_nama  from gntrapp_akun order by akun_nama ");
                while ($list = mysql_fetch_array($query)) {

                    echo" <option value='" . $list[akun_nama] . "'>$list[akun_nama]</option>";
                }
                ?>
            </select>
            &nbsp; <input type="submit" name="submit" value="Print" />
        </form>
    </div>
    <div id = "keseluruhan" class = "tab-content">
        <?php
        echo '<form method="post" action="laporan.php">';
        echo '&nbsp; <input type="submit" name="submit" value="Print" />    </form>';
        ?>
        <br>
        <table border="1" width="100%"  class="striped tight sortable">
            <thead><tr>
                    <th >Nomor</th>
                    <th >Nama Site</th>
                    <th >Pemilik Menara</th>
                    <th >Latitude</th>
                    <th >Longitude</th>
                    <th >Alamat</th>
                    <th >Kecamatan</th>
                    <th >Kelurahan</th>
                </tr>   </thead>
            <?php
            $query = mysql_query("select * from site_view order by id_site"); //output
            $jumlah = mysql_num_rows($query); //dapatkan jumlah semua data

            $no = 0;
            while ($row = mysql_fetch_array($query)) {
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
                    <?php $no++; ?>
                </tr>
                <?php
            }
            ?>
        </table>
        <!--  end product-table................................... --> 
        <center>TOTAL DATA : <?php echo $jumlah; ?></center>


    </div>
    <div id = "perprovider" class = "tab-content">
        <form method = "POST" action = "perprovider.php">
            Pemilik Menara :  <select id="provider" name="provider" class=chzn-select>
                <?php
                $query = mysql_query("select distinct nama_provider  from provider order by  nama_provider");
                while ($list = mysql_fetch_array($query)) {

                    echo "<option value='" . $list[nama_provider] . "'>$list[nama_provider]</option>";
                }
                ?>
            </select>
            &nbsp; <input type="submit" name="submit" value="Print" />
        </form>

    </div>
	
	<div id="perketinggian" class="tab-content">
        <form method = "POST" action = "perketinggian.php">
            Tinggi Menara :  <select id="tinggi_menara" name="tinggi_menara" class=chzn-select>
                <?php
                $query = mysql_query("select distinct tinggi_menara  from tb_site order by tinggi_menara ");
                while ($list = mysql_fetch_array($query)) {

                    echo" <option value='" . $list[tinggi_menara] . "'>$list[tinggi_menara]</option>";
                }
                ?>
            </select>
            &nbsp; <input type="submit" name="submit" value="Print" />
        </form>
    </div>
	
	
</body>
</html>

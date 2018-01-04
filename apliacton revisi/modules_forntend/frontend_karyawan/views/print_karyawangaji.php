<div class="span10">
  <div class="widget widget-table action-table">
    <div id="sticky-anchor"></div>
    <div align="center">
        <h2>SLIP GAJI</h2>
    </div>

    <!-- /widget-header -->
    <div class="widget-content">
        <table border="1px;" style="margin-top: 20px; margin-left:20px; width:90%; " cellpadding="10">
                <tr>
                    <td style="width:50%;">
                       <img class="img-responsive" src="http://localhost:8080/gntr/assets/frontend/img/logo4.png">
                    </td>
                    <td style="width:40%; font-style: bold;">
                       <strong>PT PUTRA BAHARI MANDIRI</strong><br><br />
                       <strong>NAMA: <?php echo $detail ['kary_nama']; ?></strong><br>
                       <strong>JABATAN: <?php echo $detail ['kary_jabatan_id']; ?></strong><br>
                       <strong>NIK: <?php echo $detail ['kary_nik']; ?></strong><br>
                       <strong>PERIODE: <?php echo $detail ['kygj_periode']; ?></strong><br>
                    </td>
                </tr>
        </table>
    <div style="font-size: 20px!important; font-weight:bold; margin-top:10px;"><center>SLIP GAJI</center></div>
    <table frame="box" style="margin-top: 5px; margin-left:20px; width:90%; " cellpadding="10">
            <tr style="font-size: 13px!important; font-weight:bold;">
                <td style="width:50%;" style="border-left: 1px solid #cdd0d4;">INCOME</td>
                <td style="width:5%;" frame="lhs">UNIT</td>
                <td style="width:35%;">IDR</td>
            </tr>
            <tr>
                <td>GAJI POKOK</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_gaji_pokok'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>UANG MAKAN</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_uang_makan'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>TUNJANGAN JABATAN</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_tunjangan'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>LEMBUR</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_lembur'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>RAPELAN BULAN LALU</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_rapelanbulanlalu'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>Transport</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_transport'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>Insentif</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_insentif'],0,',','.'); ?></td>
            </tr>
             <tr style="font-size: 13px!important; font-weight:bold;">
                <td style="width:50%;" style="border-left: 1px solid #cdd0d4;">Total Income</td>
                <td style="width:5%;" frame="lhs">Rp.</td>
                <td class="numeric">
                    <?php
                        $a=$detail["kygj_gaji_pokok"];
                        $b=$detail["kygj_uang_makan"];
                        $c=$detail["kygj_tunjangan"];
                        $d=$detail["kygj_lembur"];
                        $e=$detail["kygj_rapelanbulanlalu"];
                        $f=$detail["kygj_transport"];
                        $g=$detail["kygj_insentif"];
                        $penjumlahan1 = $a+$b+$c+$d+$e+$f+$g;
                        echo number_format($penjumlahan1,0,',','.');
                    ?>
                </td>
            </tr>
    </table>

     <table frame="box" style="margin-top: 20px; margin-left:20px; width:90%; " cellpadding="10">
            <tr style="font-size: 13px!important; font-weight:bold;">
                <td style="width:50%;" style="border-left: 1px solid #cdd0d4;">DEDUCTION</td>
                <td style="width:5%;" frame="lhs">UNIT</td>
                <td style="width:35%;">IDR</td>
            </tr>
            <tr>
                <td>BPJS TK</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_bpjstk'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>POTONGAN SHUTDOWN</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_potshutdown'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>RAPELAN BULAN DEPAN</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_rapelbulandepan'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>MANGKIR</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_mangkir'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>POTONGAN SERAGAM, SEPATU & HELM</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_potperalatan'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>PPh</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_pph'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>BPJS Kesehatan</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_bpjskes'],0,',','.'); ?></td>
            </tr>
            <tr>
                <td>Pinjaman</td>
                <td>Rp.</td>
                <td><?php echo number_format($detail ['kygj_pinjaman'],0,',','.'); ?></td>
            </tr>
             <tr style="font-size: 13px!important; font-weight:bold;">
                <td style="width:50%;" style="border-left: 1px solid #cdd0d4;">Total Deduction</td>
                <td style="width:5%;" frame="lhs">Rp.</td>
                <td class="numeric">
                    <?php
                        $a=$detail["kygj_bpjstk"];
                        $b=$detail["kygj_potshutdown"];
                        $c=$detail["kygj_rapelbulandepan"];
                        $d=$detail["kygj_mangkir"];
                        $e=$detail["kygj_potperalatan"];
                        $f=$detail["kygj_pph"];
                        $g=$detail["kygj_bpjskes"];
                        $h=$detail["kygj_pinjaman"];
                        $penjumlahan2 = $a+$b+$c+$d+$e+$f+$g+$h;
                        echo number_format($penjumlahan2,0,',','.');
                    ?>
                </td>
            </tr>
    </table>
    <table frame="box" style="margin-top: 20px; margin-left:20px; width:90%; " cellpadding="10">
            <tr style="font-size: 13px!important; font-weight:bold;">
                <td style="width:50%;" style="border-left: 1px solid #cdd0d4;">Net Income</td>
                <td style="width:5%;" frame="lhs">&nbsp;</td>
                <td class="numeric">
                    <?php
                        $pengurangan = $penjumlahan1-$penjumlahan2;
                        echo number_format($pengurangan,0,',','.');
                    ?>
                </td>
            </tr>
    </table><br />
    <p style="margin-left:20px;">Received by:</p>
    <p style="margin-left:20px;">Muhammad Nur</p>
    <!-- /widget-content --> 
  </div>
  <!-- /widget -->
</div>
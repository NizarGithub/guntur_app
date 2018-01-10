<?php
$bulan = (isset($option_bulan[($periodeBulan - 1)]) ? $option_bulan[($periodeBulan - 1)]['name'] : '');
?>

<div class="span10">
    <div class="widget widget-table action-table">
        <div id="sticky-anchor"></div>
        <div align="center">
            <h2>History GAJI</h2>
        </div>

        <!-- /widget-header -->
        <div class="widget-content">
            <?php if (!empty($bulan)): ?>
                <table border="1px;" style="margin-top: 20px; margin-left:20px; width:90%; " cellpadding="10">
                    <tr>
                        <td style="width:50%;">
                            <img class="img-responsive" src="http://localhost:8080/gntr/assets/frontend/img/logo4.png">
                        </td>
                        <td style="width:40%; font-style: bold;">
                            <strong>NAMA: <?php echo $detail ['kary_nama']; ?></strong><br>
                            <strong>JABATAN: <?php echo(!empty($static_data_source['kary_jabatan'][$detail ['kary_jabatan_id']]) ? $static_data_source['kary_jabatan'][$detail ['kary_jabatan_id']]['name'] : ''); ?></strong><br>
                            <strong>NIK: <?php echo $detail ['kary_nik']; ?></strong><br>
                            <strong>PERIODE: <?php echo $bulan; ?> <?php echo(!empty($periodeTahun) ? $periodeTahun : ''); ?></strong><br>
                        </td>
                    </tr>
                </table>
                <div style="font-size: 20px!important; font-weight:bold; margin-top:10px;">
                    <center>HISTORY GAJI</center>
                </div>
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
                    <?php if($detail ['kary_jabatan_id'] == 2): ?>
                    <tr>
                        <td>POTONGAN SHUTDOWN</td>
                        <td>Rp.</td>
                        <td><?php echo number_format($detail ['kygj_potshutdown'],0,',','.'); ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($detail ['kary_jabatan_id'] == 2): ?>
                    <tr>
                        <td>RAPELAN BULAN DEPAN</td>
                        <td>Rp.</td>
                        <td><?php echo number_format($detail ['kygj_rapelbulandepan'],0,',','.'); ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($detail ['kary_jabatan_id'] == 2): ?>
                    <tr>
                        <td>MANGKIR</td>
                        <td>Rp.</td>
                        <td><?php echo number_format($detail ['kygj_mangkir'],0,',','.'); ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($detail ['kary_jabatan_id'] == 2): ?>
                    <tr>
                        <td>POTONGAN SERAGAM, SEPATU & HELM</td>
                        <td>Rp.</td>
                        <td><?php echo number_format($detail ['kygj_potperalatan'],0,',','.'); ?></td>
                    </tr>
                    <?php endif; ?>
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

                            if($detail ['kary_jabatan_id'] == 2) {
                                $penjumlahan2 = $a+$b+$c+$d+$e+$f+$g+$h;
                            } else {
                                $penjumlahan2 = $a+$f+$g+$h;
                            }

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
                <!-- /widget-content -->
            <?php else: ?>
            <table border="1px;" style="margin-top: 20px; margin-left:20px; width:90%; " cellpadding="10">
                <tr>
                    <td style="width:50%;">
                        <img class="img-responsive" src="http://localhost:8080/gntr/assets/frontend/img/logo4.png">
                    </td>
                    <td style="width:40%; font-style: bold;">
                        <strong>NAMA: <?php echo $detail[0]['kary_nama']; ?></strong><br>
                        <strong>JABATAN: <?php echo(!empty($static_data_source['kary_jabatan'][$detail[0]['kary_jabatan_id']]) ? $static_data_source['kary_jabatan'][$detail[0]['kary_jabatan_id']]['name'] : ''); ?></strong><br>
                        <strong>NIK: <?php echo $detail[0]['kary_nik']; ?></strong><br>
                        <strong>PERIODE: <?php echo $bulan; ?> <?php echo(!empty($periodeTahun) ? $periodeTahun : ''); ?></strong><br>
                    </td>
                </tr>
            </table>
            <div style="font-size: 20px!important; font-weight:bold; margin-top:10px;">
                <center>HISTORY GAJI</center>
            </div>
            <table frame="box" style="margin-top: 20px; margin-left:20px; width:90%; " cellpadding="10">
                <tr style="font-size: 13px!important; font-weight:bold;">
                    <td style="width:25%;" style="border-left: 1px solid #cdd0d4;">Bulan</td>
                    <td style="width:25%;" frame="lhs">Total Income</td>
                    <td style="width:25%;" frame="lhs">Total Deduction</td>
                    <td style="width:25%;" frame="lhs">Net Income</td>
                </tr>
                <?php for($i=1;$i<=12;$i++): ?>
                    <?php
                        $bulan = (isset($option_bulan[($i - 1)]) ? $option_bulan[($i - 1)]['name'] : '');

                        $a=!empty($detail[$i]["kygj_gaji_pokok"]) ? $detail[$i]["kygj_gaji_pokok"] : 0;
                        $b=!empty($detail[$i]["kygj_uang_makan"]) ? $detail[$i]["kygj_uang_makan"] : 0;
                        $c=!empty($detail[$i]["kygj_tunjangan"]) ? $detail[$i]["kygj_tunjangan"] : 0;
                        $d=!empty($detail[$i]["kygj_lembur"]) ? $detail[$i]["kygj_lembur"] : 0;
                        $e=!empty($detail[$i]["kygj_rapelanbulanlalu"]) ? $detail[$i]["kygj_rapelanbulanlalu"] : 0;
                        $f=!empty($detail[$i]["kygj_transport"]) ? $detail[$i]["kygj_transport"] : 0;
                        $g=!empty($detail[$i]["kygj_insentif"]) ? $detail[$i]["kygj_insentif"] : 0;
                        $penjumlahan1 = $a+$b+$c+$d+$e+$f+$g;

                        $a=!empty($detail[$i]["kygj_bpjstk"]) ? $detail[$i]["kygj_bpjstk"] : 0;
                        $b=!empty($detail[$i]["kygj_potshutdown"]) ? $detail[$i]["kygj_potshutdown"] : 0;
                        $c=!empty($detail[$i]["kygj_rapelbulandepan"]) ? $detail[$i]["kygj_rapelbulandepan"] : 0;
                        $d=!empty($detail[$i]["kygj_mangkir"]) ? $detail[$i]["kygj_mangkir"] : 0;
                        $e=!empty($detail[$i]["kygj_potperalatan"]) ? $detail[$i]["kygj_potperalatan"] : 0;
                        $f=!empty($detail[$i]["kygj_pph"]) ? $detail[$i]["kygj_pph"] : 0;
                        $g=!empty($detail[$i]["kygj_bpjskes"]) ? $detail[$i]["kygj_bpjskes"] : 0;
                        $h=!empty($detail[$i]["kygj_pinjaman"]) ? $detail[$i]["kygj_pinjaman"] : 0;

                        if($detail ['kary_jabatan_id'] == 2) {
                            $penjumlahan2 = $a+$b+$c+$d+$e+$f+$g+$h;
                        } else {
                            $penjumlahan2 = $a+$f+$g+$h;
                        }
                    ?>
                    <tr>
                        <td><?php echo $bulan; ?></td>
                        <td><?php echo number_format($penjumlahan1,0,',','.'); ?></td>
                        <td><?php echo number_format($penjumlahan2,0,',','.'); ?></td>
                        <td><?php echo number_format(($penjumlahan1 - $penjumlahan2),0,',','.'); ?></td>
                    </tr>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- /widget -->
</div>
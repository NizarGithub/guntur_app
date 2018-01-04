<html>
<head>
    <link href="<?php echo site_url('assets'); ?>/css/font-awesome.css" rel="stylesheet">
    <style type="text/css" media="all">
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }
        @page {
            size: A4 portrait; /* can use also 'landscape' for orientation */
            margin: 0.2in;
            border: thin solid black;
            padding: 0.2inem;

            @bottom-center {
                content: element(footer);
            }

            @top-center {
                content: element(header);
            }
        }

        #page-header {
            display: block;
            position: running(header);
        }

        #page-footer {
            display: block;
            position: running(footer);
        }

        .page-number:before {
            content: counter(page); 
        }

        .page-count:before {
            content: counter(pages);  
        }

        table {
            border-collapse: collapse;
        }

        table, th, td {
            /*border: 1px solid black;*/
        }

        div, tr {
            -webkit-print-color-adjust: exact; 
        }

        th, td {
            padding: 5px;
            text-align: left;
        }

        .remove-bottom-border {
            border-bottom: 1px solid white;
        }

        .remove-bottom-border.add-bottom {
            border-bottom: 1px solid black;   
        }

        tr.header-color th {
            text-align:center;
            background-color:blue;
            color:white;
        }

        .row {
            display: block;
            margin-bottom:20px;
        }

        .ovrlw {
            overflow:hidden;            
        }

        .brdr {
            border: 1px solid;
            padding: 5px; 
        }

        p, ul, ol, h3 {
            margin: 0;
        }

        .ftr {
            border:1px solid;
            min-height:148px;
        }

        .lft {
            float: left;
        }

        .rgt {
            float: right;
        }

        .wd3 {
            width: 300px;
        }

        .pd5 {
            padding: 5px;
        }

        .pd10 {
            padding: 10px;
        }

        .ftr h3 {
            position:absolute;
            right:0;
            top:20px;
        }

        .rltv {
            position: relative;
        }

        .cntr {
            text-align:center;
        }

        .blck {
            width:100%;
        }

        .numeric {
            text-align: right;
        }

        .box {
            border:1px solid;
        }

        .box.grey {
            background: grey;
            color: white;
        }

        .delimiter {
            width: 80px;
        }

        table.no-border, table.no-border>tbody>tr>th, table.no-border>tbody>tr>td {
            border: none;
        }

        .logo-side {
            margin-left: 190px;
        }

        .srt-jln {
            font-size: 20px;
            font-weight: bold;
        }

        .vrt-top {
            vertical-align: top;
        }

        .tnd-trm {
            position: absolute;
            top: 50%;
            left: 50%;
            font-weight: bold;
            font-size: 20px;
        }

        .hlf-blck {
            width: 49%;
        }

        .prf {
            width: 13%;
        }
        tr.pd-topbot-2 td {
            padding: 2px 5px;
        }

        table.border>tbody>tr {
            border: 1px solid black;
        }

        table.kwt th, table.kwt td {
            padding: 1px;
        }

        .kwt {
            border-top: none;
            border-bottom: 1px solid;
            height: 5px;
        }
    </style>
</head>

<body>
    <div id="page-content">
        <table class="border blck">
            <tr>
                <td>
                    <table class="blck no-border">
                        <tr>
                            <td>
                                <div class="row blck ovrlw rltv">
                                    <div class="lft ovrlw">
                                        <p><strong>PT. PUTRA BAHARI MANDIRI</strong></p>
                                        <p>Jl. PLTGU Muara Tawar RT/RW. 002/03<br>Desa Segarajaya, Kec. Tarumajaya, Bekasi 17218<br>Tlp. (021) 2214 8067, 081210135477 E-Mail : putrabaharimandiri@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row blck ovrlw rltv">
                                    <div class="rgt" style="width:300px;">
                                        <table class="no-border">
                                            <tr>
                                                <td width="25%">No.</td>
                                                <td width="5%">:</td>
                                                <td><div class="blck" style="border-bottom:thin dotted black;"><?php echo $detail['bpupnrmkas_nobukti']; ?></div></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">
                                <h2>BUKTI PENERIMAAN KAS</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">
                                <div class="row blck ovrlw rltv">
                                    <div class="rgt" style="width:300px;">
                                        <div style="border: solid 1px; padding:10px;">
                                            Rp. <?php echo number_format ($detail['bpupnrmkas_jumlah']); ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="blck">
                                    <tr>
                                        <td>
                                            <table class="blck no-border">
                                                <tr>
                                                    <td width="15%"><span>Dengan huruf</span></td>
                                                    <td width="5%" class="delimiter">:</td>
                                                    <td><div class="blck" style="border-bottom:thin dotted black;"> <?php echo terbilang($detail['bpupnrmkas_jumlah']); ?> rupiah </div></td>
                                                </tr>
                                                <tr>
                                                    <td width="15%"><span>Dari</span></td>
                                                    <td width="5%" class="delimiter">:</td>
                                                    <td><div class="blck" style="border-bottom:thin dotted black;"> <?php echo $detail['bpupnrmkas_dari']; ?> </div></td>
                                                </tr>
                                                <tr>
                                                    <td width="15%"><span>Untuk Pembayaran</span></td>
                                                    <td width="5%" class="delimiter">:</td>
                                                    <td><div class="blck" style="border-bottom:thin dotted black;"> <?php echo $detail['bpupnrmkas_untuk']; ?> </div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%">
                                    <tr>
                                        <td width="50%">
                                            <table width="100%">
                                                <tr>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mengetahui,</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table border="3">
                                                            <tr>
                                                                <th width="40%" style="text-align:center;">Direksi</th>
                                                                <th width="40%" style="text-align:center;">Keuangan</th>
                                                                <th width="40%" style="text-align:center;">No. Account</th>
                                                            </tr>
                                                            <tr>
                                                                <td width="40%" style="text-align:center;"><br><br><br><br><br>Andre Lestari</td>
                                                                <td width="40%" style="text-align:center;"><br><br><br><br><br>Nur</td>
                                                                <td width="40%" style="text-align:center;"><br><br><br><br><br><?php echo $detail['akun_nama'];?></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="50%">
                                            <table style="width: 300px;margin: auto;">
                                                <tr>
                                                    <td>Bekasi, <?php echo $detail['bpupnrmkas_tanggal'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo $detail['bpupnrmkas_penerima'];?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--<p style="page-break-after:always;"/>-->
    </div>
</body>
</html>
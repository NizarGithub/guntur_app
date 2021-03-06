
    <style type="text/css" media="all">
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }
        @page {
            size: A4 landscape; /* can use also 'landscape' for orientation */
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
            border: 1px solid black;
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
    </style>

<table style="width:100%;" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="width:50%;">
               <img class="img-responsive" src="assets/frontend/img/logo4.png">
            </td>
            <td style="width:30%;">
               &nbsp;
            </td>
           <td style="width:20%;">
                <table style="width: 60%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td  style="text-align: left;">
                            <span style="border-bottom:1px solid;">KWITANSI </span><br/><span>RECEIPT</span>
                        </td>
                    </tr>
                    <tr>
                        <td  style="text-align: left;">&nbsp;</td>
                    </tr>
                     <tr>
                        <td width="25%">No.<br/><span style="border-top:1px solid;">Number</span></td>
                        <td width="10%">:</td>
                        <td><div class="blck" style="border-bottom:thin dotted black;"><?php echo $detail['pbkw_no']; ?></div></td>
                    </tr>
                </table>
            </td>

        </tr>
</table>
<table style="width:100%; margin-top: 25px;" border="0" cellspacing="10" cellpadding="10">
                        <tr>
                            <td>
                                <table class="border blck no-b">
                                    <tr>
                                        <td>
                                            <table class="blck no-border">
                                                <tr>
                                                    <td width="15%"><span style="border-bottom:1px solid;">Sudah Terima Dari</span><br/><span>Received From</span></td>
                                                    <td width="5%" class="delimiter">:</td>
                                                    <td><div class="blck" style="border-bottom:thin dotted black;"><?php echo $detail['pbkw_dari']; ?></div></td>
                                                </tr>
                                                <tr>
                                                    <td width="15%"><span style="border-bottom:1px solid;">Banyaknya Uang</span><br/><span>Amount Received</span></td>
                                                    <td width="5%" class="delimiter">:</td>
                                                    <td><div class="blck" style="border-bottom:thin dotted black;">Rp <?php echo number_format($detail['pbkw_total'],2,",","."); ?></div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table class="blck no-border">
                                                <tr>
                                                    <td width="15%"><span style="border-bottom:1px solid;">Untuk Pembayaran</span><br/><span>In Payment Of</span></td>
                                                    <td width="5%" class="delimiter">:</td>
                                                    <td><div class="blck" style="border-bottom:thin dotted black;"><?php echo $detail['pbkw_alamat']; ?></div></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">&nbsp;</td>
                                                    <td><div class="blck" style="border-bottom:thin dotted black;">&nbsp;</div></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">&nbsp;</td>
                                                    <td><div class="blck" style="border-bottom:thin dotted black;">&nbsp;</div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table class="blck no-border">
                                                <tr>
                                                    <td width="15%"><span style="border-bottom:1px solid;">Catatan</span><br/><span>Notes :</span></td>
                                                    <td width="5%" class="delimiter">:</td>
                                                    <td><div class="blck" style="border-bottom:thin dotted black;"><ol style="padding:10px;"><li>Mohon pembayaran ditransfer ke rekening bank berikut ini :<br/><?php echo $detail['pbkw_bank']; ?><br/>A/C <?php echo $detail['pbkw_norek']; ?><br/>a.n. <?php echo $detail['pbkw_an']; ?></li><li>Pembayaran baru dianggap sah setelah cek/giro telah dicairkan.</li></ol></div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
</table>

<table style="width:100%; margin-top: 25px;" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="width:50%; font-style: italic;">
                <strong>PT. PUTRA BAHARI MANDIRI</strong><br />
                        Jl. PLTGU Muara Tawar RT/RW. 002/03<br />
                        Desa Segarajaya, Kec. Tarumajaya, Bekasi 17218<br />
                        Tlp. (021) 2214 8067, 081210135477 E-Mail : putrabaharimandiri@gmail.com<br />
            </td>
            <td style="width:30%; font-style: italic;">&nbsp;</td>
           <td style="width:20%;">
                <table style="width: 100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                    <?php
                    $originalDate = $detail['pbkw_entrydate'];
                    $newDate      = date("d F Y", strtotime($originalDate));
                    ?>
                        <td  style="text-align: center;">
                        <p>Bekasi, <?php echo $newDate; ?><br/></p>
                        <br/><br/><br/><br/>
                       <p>Andri Lestari<br/>Direktur</p>
                        </td>

                    </tr>

                </table>
            </td>
        </tr>
    </table>
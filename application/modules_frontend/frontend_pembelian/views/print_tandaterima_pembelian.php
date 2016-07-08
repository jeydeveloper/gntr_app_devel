<html>
<head>
    <link href="assets/css/font-awesome.css" rel="stylesheet">
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

        .delimiter {
            width: 25px;
        }

        table.no-border, table.no-border th, table.no-border td {
            border: none;
        }

        .logo-side {
            margin-left: 150px;
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
    </style>
</head>

<body>
<table style="width:100%;" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="width:30%;">
               <img class="img-responsive" src="assets/frontend/img/logo4.png">
            </td>
            <td style="width:30%;">
               <h2>TANDA TERIMA</h2>
            </td>
           <td style="width:20%;">
                <table style="width: 100%" border="0" cellspacing="0" cellpadding="0">
                    <?php
                            $originalDate   = $detail['pbttr_tglterima'];
                            $newDate        = date("d F Y", strtotime($originalDate));
                        ?>
                    <tr>
                        <td  style="text-align: left;">
                           Bekasi, <?php echo $newDate; ?>
                        </td>
                    </tr>
                    <tr>
                        <td  style="text-align: left;">
                           &nbsp;
                        </td>
                    </tr>
                      <tr>
                        <td style="text-align: left;">No : <?php echo $detail['pbttr_no']; ?></td>
                    </tr>
                      <tr>
                        <td style="text-align: left;">No Proyek : <?php echo $detail['pbttr_noproyek']; ?></td>
                    </tr>
                </table>
            </td>

        </tr>
</table><br /><br />
    <div id="page-content">
        <table class="blck">
            <tr>
                <td colspan="2">
                    <div class="row blck">
                        <table class="blck no-border">
                            <tbody>
                                <tr>
                                    <td class="vrt-top">1. Tagihan dari</td>
                                    <td>
                                        <table class="no-border">
                                            <tr>
                                                <td><i class="icon-large icon-check"></i> <?php echo $detail['pbttr_tghndari']; ?> : <?php echo $detail['pbttr_tagihan']; ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="vrt-top">2. Nilai tagihan</td>
                                    <td>
                                        <table class="no-border">
                                            <tr>
                                                <td colspan="3"><i class="icon-large icon-check"></i>  <?php echo $detail['pbttr_mtuang']; ?> <?php echo number_format($detail['pbttr_nilaitagihan'],2,",","."); ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="vrt-top">3. Lampiran</td>
                                    <td>
                                        <table class="no-border">
                                            <tr>
                                                <td><?php echo $detail['pbttr_lampiran']; ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="vrt-top">4. Keterangan</td>
                                    <td>
                                        <table class="no-border">
                                            <tr>
                                                <td colspan="2"><i class="icon-large icon-check-empty"></i> Dikembalikan, untuk dimasukkan kembali tanggal : <?php if ($detail['pbttr_tglkembali'] != '0000-00-00'){ echo $detail['pbttr_tglkembali']; }else{ echo '......................... '; }?> karena lampiran tidak lengkap</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            <tr class="pd-topbot-2">
                <td class="hlf-blck">
                    <table class="no-border">
                        <tr>
                            <td>5. No. BPKC</td>
                            <td class="delimiter">:</td>
                            <td><?php echo $detail['pbttr_nobpkc']; ?></td>
                        </tr>
                        <?php
                            $originalDateBPKC   = $detail['pbttr_tglbpkc'];
                            $newDateBPKC        = date("d F Y", strtotime($originalDateBPKC));
                        ?>
                        <tr>
                            <td>Tanggal</td>
                            <td class="delimiter">:</td>
                            <td><?php echo $newDateBPKC; ?></td>
                        </tr>
                    </table>
                </td>
                <td class="hlf-blck">
                    <table class="no-border">
                        <tr>
                            <td class="hlf-blck">
                                <table class="no-border">
                                    <tr>
                                        <td>6. Yang menerima</td>
                                        <td class="delimiter">:</td>
                                        <td><?php echo $detail['pbttr_menerima']; ?></td>
                                    </tr>
                                    <?php
                                        $originalDateterima   = $detail['pbttr_tglterima'];
                                        $newDateterima        = date("d F Y", strtotime($originalDateterima));
                                    ?>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td class="delimiter">:</td>
                                        <td><?php echo $newDateterima; ?></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="hlf-blck vrt-top">
                                <table class="no-border">
                                    <tr>
                                        <td>Paraf</td>
                                        <td class="delimiter">:</td>
                                        <td>.............</td>
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
    <br><br><br><Br>
    <div>
        <div class="lft ovrlw">
            <p>PT. PUTRA BAHARI MANDIRI</p>
            <p>JL. PLTGU Muara Tawar RT/RW 002/013<br/>Desa xyz, Kec. Taruma, Bekasi 17212<br/>Tlp. (021)<br/>Email : putrabaharimandiri@yahoo.co.id</p>
        </div>
    </div>
</body>
</html>
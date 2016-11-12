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
            size: A4 portrait; /* can use also 'portrait' for orientation */
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

<table border="0" cellpadding="1" cellspacing="1" style="width:100%; position:fixed; left:0; right:0; bottom: 0;" class="tbl-blue">
    <tbody>
        <tr>
            <td>
            <p><strong>PT. PUTRA BAHARI MANDIRI</strong></p>

            <p>Jl. PLTGU Muara Tawar RT/RW 002/013</p>

            <p>Desa Pantaimakmur, Kecamatan Tarumajaya, Kabupaten Bekasi 17212</p>

            <p>Tlp : (021) 96414040. 081210135477 E-mail : putrabaharimandiri@gmail.com</p>
            </td>
        </tr>
    </tbody>
</table>

<table style="width:100%;" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="width:30%;">
               <img class="img-responsive" src="<?php echo site_url('assets'); ?>/frontend/img/logo4.png">
            </td>
            <td style="width:20%;">
               <h2>TANDA TERIMA</h2>
            </td>
           <td style="width:30%;">
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
                        <td style="text-align: left;">No : <?php echo $detail['pbttr_no']; ?></td>
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
                                    <td class="vrt-top">
                                        <table class="no-border" style="width:200px;">
                                            <tr>
                                                <td>1. Tagihan dari</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="vrt-top">:</td>
                                    <td>
                                        <table class="no-border">
                                            <tr>
                                                <td><i class="icon-large icon-check"></i> <?php echo $detail['pbttr_tghndari']; ?> : <?php echo $detail['pbttr_tagihan']; ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="vrt-top">
                                        <table class="no-border">
                                            <tr>
                                                <td>2. Nilai tagihan</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="vrt-top">:</td>
                                    <td>
                                        <table class="no-border">
                                            <tr>
                                                <td colspan="3"><i class="icon-large icon-check"></i>  <?php echo $detail['pbttr_mtuang']; ?> <?php echo number_format($detail['pbttr_nilaitagihan'],2,",","."); ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="vrt-top">
                                        <table class="no-border">
                                            <tr>
                                                <td>3. Lampiran</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="vrt-top">:</td>
                                    <td>
                                        <table class="no-border">
                                            <tr>
                                                <td><?php echo $detail['pbttr_lampiran']; ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="vrt-top">
                                        <table class="no-border">
                                            <tr>
                                                <td>4. Keterangan</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="vrt-top">:</td>
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
                    <table class="no-border" style="width: 100%;">
                        <tr>
                            <td class="hlf-blck">
                                <table class="no-border" style="width: 100%;">
                                    <tr>
                                        <td style="width: 60%;">5. Penyerah</td>
                                        <td class="delimiter">:</td>
                                        <td>.............</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="hlf-blck vrt-top">
                                <table class="no-border" style="width: 100%;">
                                    <tr>
                                        <td>Paraf</td>
                                        <td class="delimiter">:</td>
                                        <td>.............</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table class="no-border" style="width: 100%;">
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
                        </tr>
                    </table>
                </td>
                <td class="hlf-blck">
                    <table class="no-border" style="width: 100%;">
                        <tr>
                            <td class="hlf-blck">
                                <table class="no-border" style="width: 100%;">
                                    <tr>
                                        <td style="width: 60%;">6. Penerima</td>
                                        <td class="delimiter">:</td>
                                        <td><?php echo $detail['pbttr_menerima']; ?></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="hlf-blck vrt-top">
                                <table class="no-border" style="width: 100%;">
                                    <tr>
                                        <td>Paraf</td>
                                        <td class="delimiter">:</td>
                                        <td>.............</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table class="no-border" style="width: 100%;">
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
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--<p style="page-break-after:always;"/>-->
    </div>
</body>
</html>
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
        <table class="blck">
            <tr>
                <td>
                    <table class="blck no-border">
                        <tr>
                            <td>
                                <div class="row blck ovrlw rltv">
                                    <div class="lft ovrlw">
                                        <div class="pd10 lft cntr"><img src="assets/img/logo4.png"></div>
                                    </div>
                                    <div class="rgt">
                                        <table class="no-border">
                                            <tr>
                                                <td colspan="3"><span style="border-bottom:1px solid;">KWITANSI</span><br/><span>RECEIPT</span></td>
                                            </tr>
                                            <tr>
                                                <td width="25%">No.<br/><span style="border-top:1px solid;">Number</span></td>
                                                <td width="5%">:</td>
                                                <td><div class="blck" style="border-bottom:thin dotted black;">106/10</div></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="border blck">
                                    <tr>
                                        <td>
                                            <table class="blck no-border">
                                                <tr>
                                                    <td width="15%"><span style="border-bottom:1px solid;">Sudah Terima Dari</span><br/><span>Received From</span></td>
                                                    <td width="5%" class="delimiter">:</td>
                                                    <td><div class="blck" style="border-bottom:thin dotted black;">&nbsp;</div></td>
                                                </tr>
                                                <tr>
                                                    <td width="15%"><span style="border-bottom:1px solid;">Banyaknya Uang</span><br/><span>Amount Received</span></td>
                                                    <td width="5%" class="delimiter">:</td>
                                                    <td><div class="blck" style="border-bottom:thin dotted black;">&nbsp;</div></td>
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
                                                    <td><div class="blck" style="border-bottom:thin dotted black;">&nbsp;</div></td>
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
                                                    <td><div class="blck" style="border-bottom:thin dotted black;"><ol style="padding:10px;"><li>Mohon pembayaran ditransfer ke rekening bank berikut ini :<br/>BCA Cabang<br/>A/C 0001<br/>a.n. PT Putra Bahari Mandiri</li><li>Pembayaran baru dianggap sah setelah cek/giro telah dicairkan.</li></ol></div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row blck ovrlw rltv">
                                    <div class="lft ovrlw">
                                            <p>PT. PUTRA BAHARI MANDIRI</p>
                                            <p>JL. PLTGU Muara Tawar RT/RW 002/013<br/>Desa xyz, Kec. Taruma, Bekasi 17212<br/>Tlp. (021)<br/>Email : putrabaharimandiri@yahoo.co.id</p>
                                        </div>
                                    <div class="rgt cntr" style="margin-right:10px;">
                                        <p>Jakarta, 1 Februari 2016</p>
                                        <br/><br/><br/><br/><br/><br/><br/>
                                        <p>Andri Lestari<br/>Direktur Utama</p>
                                    </div>
                                </div>
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
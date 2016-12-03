<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Bukti Pembayaran</title>
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
    </style>
  </head>
  <body>

    <main>
 <!-- Invoice -->
<div>
    <table style="width:100%;">
        <tr>
            <td style="width:50%;">
               <img class="img-responsive" src="<?php echo site_url('assets'); ?>/frontend/img/logo4.png">
            </td>
           <td style="width:50%;">
                <table style="width: 100%">

                    <tr>
                        <td  style="text-align: right;">BUKTI PEMBAYARAN</td>
                    </tr>
                     <tr>
                        <td style="text-align: right;">NO. :</td>
                    </tr>


                </table>
            </td>
        </tr>
    </table>

     <table style="width: 100%;">
        <tr>
            <td style="width: 100%; text-align: right">
                <table style="width: 100%">
                    <tr style="line-height:12px;"><td colspan="5" style="border-bottom:1px solid black;">&nbsp;</td></tr>
                    <tr style="line-height:16px;"><td colspan="5">&nbsp;</td></tr>
                    <tr>
                            <td style="text-align: left; width: 20%;" >TANGGAL TRANSAKSI</td>
                            <td style="text-align: left; width: 5%;" >:</td>
                            <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                            <td style="text-align: left;  width: 20%;">NOMOR TRANSAKSI</td>
                             <td style="text-align: left; width: 5%;" >:</td>
                            <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                            <td style="text-align: left;  width: 20%;">NOMOR REKENING</td>
                             <td style="text-align: left; width: 5%;" >:</td>
                            <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                            <td style="text-align: left;  width: 20%;">NAMA REKENING</td>
                             <td style="text-align: left; width: 5%;" >:</td>
                            <td style="text-align: left; text-transform: uppercase;"></td>
                    </tr>
                    <tr>
                            <td style="text-align: left;  width: 20%;">NOMOR INVOICE</td>
                             <td style="text-align: left; width: 5%;" >:</td>
                            <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                            <td style="text-align: left;  width: 20%;">TOTAL TAGIHAN</td>
                             <td style="text-align: left; width: 5%;" >:</td>
                            <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                            <td style="text-align: left;  width: 20%;">TERBILANG</td>
                             <td style="text-align: left; width: 5%;" >:</td>
                            <td style="text-align: left; text-transform: uppercase;"></td>
                    </tr>
                    <tr>
                            <td style="text-align: left;  width: 20%;">JAM TRANSAKSI</td>
                             <td style="text-align: left; width: 5%;" >:</td>
                            <td style="text-align: left;"></td>
                    </tr>
                     <tr>
                            <td style="text-align: left;  width: 20%;">JENIS TRANSAKSI</td>
                             <td style="text-align: left; width: 5%;" >:</td>
                            <td style="text-align: left;"></td>
                    </tr>
                    <tr style="line-height:12px;"><td colspan="5" style="border-bottom:1px solid black;">&nbsp;</td></tr>
                </table>
            </td>
        </tr>
    </table>
    <table style="width:100%; margin-top: 25px;">
        <tr>
            <td style="width:50%; font-style: italic;">
                <strong>PT. PUTRA BAHARI MANDIRI</strong><br />
                        Jl. PLTGU Muara Tawar RT/RW. 002/03<br />
                        Desa Segarajaya, Kec. Tarumajaya, Bekasi 17218<br />
                        Tlp. (021) 2214 8067, 081210135477 E-Mail : putrabaharimandiri@gmail.com<br />
            </td>
           <td style="width:50%;">
                <table style="width: 100%">
                    <tr>
                    <?php
                    //$originalDate = $detail['bp_entrydate'];
                    $newDate      = date("d F Y");
                    ?>
                        <td  style="text-align: right;">
                        Jakarta, <?php echo $newDate; ?><br /><br /><br /><br />
                        Andri Lestari<br>
                        Direktur Utama
                        </td>

                    </tr>

                </table>
            </td>
        </tr>
    </table>
  </body>
</html>
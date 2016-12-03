<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Surat Jalan</title>
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
               <img class="img-responsive" src="assets/frontend/img/logo4.png">
            </td>
           <td style="width:50%;">
                <table style="width: 100%">
                    <?php
                            $originalDate   = $detail['pbsrtjalan_tanggal'];
                            $newDate        = date("d F Y", strtotime($originalDate));
                        ?>
                    <tr>
                        <td  style="text-align: right;">Bekasi, <?php echo $newDate; ?></td>
                    </tr>
                     <tr>
                        <td style="text-align: right;">Kepada :<?php echo $detail['pbsrtjalan_buyer']; ?></td>
                    </tr>


                </table>
            </td>
        </tr>
    </table>
    <!-- ADDRESSES -->
    <table style="width:100%; margin-top: 50px;">
        <tr style="line-height: 5px;">
                <td >
                    <span style="font-size: 15pt; color: #333"><strong>SURAT JALAN No. Kendaraan : <?php echo $detail['pbsrtjalan_nokendaraan']; ?></strong></span><br /><br />
                </td>
        </tr>

        <tr>
            <td style="width: 50%; ">&nbsp;</td>
        </tr>
    </table>

     <table style="width: 100%;">
        <tr>
            <td style="width: 100%; text-align: right">
                <table style="width: 100%">
                    <tr style="line-height:12px;"><td colspan="5" style="border-top:1px solid black;">&nbsp;</td></tr>
                    <tr style="line-height:6px;">
                        <td style=" color: black; text-align: left; font-weight: bold; width: 50%;font-size:11pt;">Nama Barang</td>
                        <td style="text-align: left; color: black; padding-left: 10px; font-weight: bold; width: 50%;font-size:11pt;">Banyaknya</td>
                    </tr>
                    <tr style="line-height:12px;"><td colspan="5" style="border-bottom:1px solid black;">&nbsp;</td></tr>
                    <tr style="line-height:16px;"><td colspan="5">&nbsp;</td></tr>
                    <?php foreach($details as $key => $value): ?>
                    <tr>
                            <td style="text-align: left;"><?php echo $value->brjs_nama; ?></td>
                            <td style="text-align: left;"><?php echo $value->pbsuratjaland_jumlah; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
    </table>
    <!-- / ADDRESSES -->
    <!-- PRODUCTS TAB -->


    <!-- / PRODUCTS TAB -->
    <p>&nbsp;</p>
    <table width="100%" align="center" style="margin-top: 50px;">
        <tr><td style="line-height: 8px">&nbsp;</td></tr>
        <tr height="17">
            <td style="height:17px;width:20%;text-align:left;padding:5px 15px;">Tanda Terima,</td>
            <td style="width:6%;"></td>
            <td style="height:17px;width:20%;text-align:left;padding:5px 15px;">&nbsp;</td>
            <td style="width:6%;"></td>
            <td style="height:17px;width:20%;text-align:left;padding:5px 15px;">&nbsp;</td>
            <td style="width:6%;"></td>
            <td style="height:17px;width:20%;text-align:left;padding:5px 15px;">Hormat Kami,</td>
        </tr>
        <tr height="17">
            <td height="17" style="height:17px;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
        </tr>
        <tr height="17">
            <td height="17" style="height:17px;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
            <td style="color: #000;">&nbsp;</td>
        </tr>
        <tr height="17">
            <td height="17" style="height:17px;">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr height="17">
            <td height="17" style="height:17px;">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr height="17">
            <td style="height:17px;width:20%;text-align:left;border-top:1px solid #ccc;padding:5px 15px;"><?php echo $detail['pbsrtjalan_diterimaoleh']; ?></td>
            <td style="width:6%;"></td>
            <td style="height:17px;width:20%;text-align:left;border-top:1px solid white;padding:5px 15px;">&nbsp;</td>
            <td style="width:6%;"></td>
            <td style="height:17px;width:20%;text-align:left;border-top:1px solid white;padding:5px 15px;">&nbsp;</td>
            <td style="width:6%;"></td>
            <td style="height:17px;width:20%;text-align:left;border-top:1px solid #ccc;padding:5px 15px;"><?php echo $detail['pbsrtjalan_namapenerima']; ?></td>
        </tr>
        <tr height="17">
            <td height="17" style="height:17px;">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>

        </tr>
        <tr style="width:100%;text-align:center;">

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </tr>
</div>
<div id="details" class="clearfix" style="margin-top: 50px;">
        <div id="" style="text-align: center; font-size: 10pt; ">
            <strong>PT. PUTRA BAHARI MANDIRI</strong><br />
                        Jl. PLTGU Muara Tawar RT/RW. 002/03<br />
                        Desa Segarajaya, Kec. Tarumajaya, Bekasi 17218<br />
                        Tlp. (021) 2214 8067, 081210135477 E-Mail : putrabaharimandiri@gmail.com<br />
        </div>
      </div>
  </body>
</html>
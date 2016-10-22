
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
    </style>

<table style="width:100%;" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="width:50%;">
               <img class="img-responsive" src="<?php echo site_url('assets'); ?>/frontend/img/logo4.png">
            </td>
            <td style="width:10%;">
               &nbsp;
            </td>
            <?php

                    $originalDate = $detail->ppnw_tanggal;
                    $newDate      = date("d F Y", strtotime($originalDate));
            ?>
           <td style="width:25%;">
                <table style="width: 60%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td  style="text-align: left;">
                            <span>Bekasi, <?php echo $newDate; ?></span>
                        </td>
                    </tr>
                </table>
            </td>

        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td style="width:50%;">
               No. Penawaran : <?php echo $detail->ppnw_no_penawaran; ?>
            </td>
        </tr>
        <tr>
            <td style="width:50%;">
               Lampiran : 1 (satu) berkas
            </td>
        </tr>
</table>
<p>&nbsp;</p><p>&nbsp;</p>
<table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>Kepada Yth</p>

                        <p>Pimpinan</p>

                        <p style="text-transform: uppercase;"><strong><?php echo $detail->clnt_nama; ?></strong></p>

                        <p>di <?php echo $detail->clnt_alamat; ?></p>
                        </td>
                    </tr>
                </tbody>
</table>

<p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Prihal</td>
                        <td>:</td>
                        <td><strong>Penawaran Pekerajaan <?php echo $detail->ppnw_keterangan; ?></strong></td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Sehubungan dengan Pekerjaan tersebut, dengan ini kami mengajukan Penawaran Pekerjaan <?php echo $detail->ppnw_keterangan; ?> tersebut sebagai berikut :</td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                            <?php echo $detail->ppnw_keterangan_print_out; ?>
                        </td>
                    </tr>
                </tbody>
            </table>

             <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Dengan disampaikannya surat Surat Penawaran ini, maka kami menyatakan sanggup dan tunduk pada semua peraturan yang tertuang dalam peraturan Kerja dilingkungan <?php echo $detail->clnt_nama; ?>.</td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td style="width:70%;">&nbsp;</td>
                        <td style="width:30%;">
                        <p><strong>Bekasi, <?php echo $newDate; ?></strong></p>

                        <p><strong>PT. Putra Bahari Mandiri</strong></p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p><strong>Andri Lestari, S.kom</strong></p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="page-break"></div>

              <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td> <img class="img-responsive" src="<?php echo site_url('assets'); ?>/frontend/img/logo4.png"></td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td style="text-align:center; text-transform: uppercase;"><strong>RINCIAN HARGA <?php echo $detail->ppnw_keterangan; ?></strong></td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr class="tbl-blue-hdr">
                        <td style="text-align: center; background-color: blue; color: white;"><strong>No</strong></td>
                        <td style="text-align: center; background-color: blue; color: white;" ><strong>RINCIAN PEKERJAAN</strong></td>
                        <td style="text-align: center; background-color: blue; color: white;"><strong>VOLUME</strong></td>
                        <td style="text-align: center; background-color: blue; color: white;"><strong>Sat.</strong></td>
                        <td style="text-align: center; background-color: blue; color: white;"><strong>Hrg Sat. (Rp)</strong></td>
                        <td style="text-align: center; background-color: blue; color: white;"><strong>Jumlah Hrg (Rp)</strong></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"><strong>A</strong></td>
                        <td style="text-align: center;"><strong>B</strong></td>
                        <td style="text-align: center;"><strong>C</strong></td>
                        <td style="text-align: center;"><strong>D</strong></td>
                        <td style="text-align: center;"><strong>E</strong></td>
                        <td style="text-align: center;"><strong>F</strong></td>
                    </tr>
                    <?php $sum = 0; ?>
                    <?php foreach($details as $key => $value): ?>
                    <tr>
                        <td style="text-align: center;"><strong><?php echo ($key+1); ?></strong></td>
                        <td><strong><?php echo $value->ppnwd_jenisbarang; ?></strong></td>
                        <td><?php echo $value->ppnwd_volume; ?></td>
                        <td><?php echo $value->ppnwd_satuan; ?></td>
                        <td>Rp <?php echo number_format($value->ppnwd_hargasatuan,2,",","."); ?></td>
                        <?php
                            $jumlahharga = $value->ppnwd_volume * $value->ppnwd_hargasatuan;
                        ?>

                        <td>Rp <?php echo number_format($jumlahharga,2,",","."); ?></td>
                    </tr>
                    <?php $sum+= $jumlahharga; ?>
                    <?php endforeach; ?>
                    <tr>
                        <td>&nbsp;</td>
                        <td><strong>TOTAL</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><strong>Rp <?php echo number_format($sum,2,",","."); ?></strong></td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td style="width:70%;">&nbsp;</td>
                        <td style="width:30%;">
                        <p><strong>Bekasi, <?php echo $newDate; ?></strong></p>

                        <p><strong>PT. Putra Bahari Mandiri</strong></p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p><strong>Andri Lestari, S.kom</strong></p>
                        </td>
                    </tr>
                </tbody>
            </table>
               <table border="0" cellpadding="1" cellspacing="1" style="width:100%" class="tbl-blue">
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

            <p>&nbsp;</p>
            </td>
        </tr>

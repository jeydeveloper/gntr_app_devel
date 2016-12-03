
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

<table style="width:100%; " border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="width:50%;">
               <img class="img-responsive" src="assets/frontend/img/logo4.png">
            </td>
           <td style="width:50%;">
                <table style="width: 60%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td  style="text-align: right;">
                            <div class="box grey rgt cntr pd10" style="position: relative; left: 220px;">
                            <p>INVOICE</p>
                            </div>
                        </td>

                </table>
            </td>

        </tr>
</table>
  <table style="width:100%; margin-top: 25px;" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="width:30%;">
                <h3><?php echo $detail['pbinv_to']; ?></h3><br />
                <?php echo $detail['pbinv_alamat']; ?><br />
            </td>
             <td style="width:20%;">
                &nbsp;
            </td>
           <td style="width:50%;">
                <div class="rgt" style="position: relative; left: 220px;">
                    <table  border="0" cellspacing="0" cellpadding="0">
                        <?php
                            $originalDate   = $detail['pbinv_tanggal'];
                            $newDate        = date("d F Y", strtotime($originalDate));
                            $originalWODate = $detail['pbinv_wotgl'];;
                            $newWoDate      = date("d F Y", strtotime($originalWODate));
                        ?>
                        <tbody>
                            <tr >
                                <td >Invoice No :</td>
                                <td><?php echo $detail['pbinv_noinvoice']; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal :</td>
                                <td><?php echo $newDate;?></td>
                            </tr>
                            <tr>
                                <td>WO No :</td>
                                <td><?php echo $detail['pbinv_wo']; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal :</td>
                                <td><?php echo $newWoDate; ?></td>
                            </tr>
                            <tr>
                                <td>Penawaran NO : </td>
                                <td><?php echo $detail['pbinv_nopenawaran']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </table><br /><br />

    <div id="page-content">

        <div class="row ovrlw">

            </div>

        </div>
        <div class="row">
        	<table class="blck">
        		<thead>
					<tr class="header-color">
						<th>No</th>
						<th>Description</th>
						<th>Vol</th>
						<th>Sat</th>
						<th>Harga Satuan</th>
						<th>Jumlah Harga</th>
					</tr>
        		</thead>
        		<tbody>
                    <tr>
                        <td colspan="2"><?php echo $detail['pbinv_description']; ?></td>
                        <td colspan="4"></td>
                    </tr>
                    <?php $sum = 0; ?>
                    <?php foreach($details as $key => $value): ?>
        			<tr>
        				<td><?php echo ($key+1); ?></td>
        				<td><?php echo $value->brjs_nama; ?></td>
        				<td class="numeric"><?php echo $value->pbinvd_jumlah; ?></td>
                        <?php foreach($static_data_source['barjas_satuan'] as $satuan): ?>
                            <?php if($value->brjs_satuan_id == $satuan['value']) {?>
                                <td><?php echo $satuan['name'] ?></td>
                            <?php } ?>
                       <?php endforeach; ?>

        				<td class="numeric">Rp <?php echo number_format($value->brjs_harga_satuan,2,",","."); ?></td>
        				<?php
                            $jumlahharga = $value->pbinvd_jumlah * $value->brjs_harga_satuan;
                        ?>
                        <td class="numeric">Rp <?php echo number_format($jumlahharga,2,",","."); ?></td>
        			</tr>
                    <?php $sum+= $jumlahharga; ?>
                    <?php endforeach; ?>
                        <?php
                            $total = $value->pbinvd_jumlah * $value->brjs_harga_satuan;
                        ?>
        			<tr>
        				<td colspan="5" class="remove-bottom-border numeric">Total</td>
        				<td class="numeric">Rp <?php echo number_format($sum,2,",","."); ?></td>
        			</tr>
                    <?php $pph = $sum * 0.02; ?>
        			<tr>
        				<td colspan="5" class="remove-bottom-border numeric">PPH 2%</td>
        				<td class="numeric">Rp <?php echo number_format($pph,2,",","."); ?></td>
        			</tr>
                    <?php $ppn = $sum * 0.10; ?>
        			<tr>
        				<td colspan="5" class="remove-bottom-border add-bottom numeric">PPN 10%</td>
        				<td class="numeric">Rp <?php echo number_format($ppn,2,",","."); ?></td>
        			</tr>
        			<tr>
        				<td colspan="5" class="numeric">TOTAL TAGIHAN</td>
        				<td class="numeric">Rp <?php echo number_format($detail['pbinv_totaltagihan'],2,",","."); ?></td>
        			</tr>
                    <tr>
                        <td colspan="6">Terbilang<br/># <?php echo $detail['pbinv_terbilang']; ?> #</td>
                    </tr>
        		</tbody>
        	</table>
        </div><br><br><br>
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
                    $originalDate = $detail['pbinv_tanggal'];
                    $newDate      = date("d F Y", strtotime($originalDate));
                    ?>
                        <td  style="text-align: center;">
                        <p>Bekasi, <?php echo $newDate; ?><br/>Hormat Kami</p>
                        <br/><br/><br/><br/>
                       <p>Andri Lestari<br/>Direktur</p>
                        </td>

                    </tr>

                </table>
            </td>
        </tr>
    </table>
    </div>
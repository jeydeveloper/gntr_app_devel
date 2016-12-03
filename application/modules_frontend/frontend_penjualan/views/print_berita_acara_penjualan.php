
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

        @media print {
          .page-break { 
            page-break-before: always;
          }
        }
    </style>

<table style="width:100%; " border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="width:50%;">
               <img class="img-responsive" src="<?php echo site_url('assets'); ?>/frontend/img/logo4.png">
            </td>

        </tr>
</table>
<table border="0" cellpadding="1" cellspacing="1" style="width:100%">
    <tbody>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align:center; text-transform: uppercase;"><strong>BERITA ACARA SERAH TERIMA HASIL PEKERJAAN <?php echo $detail['pbcr_deskripsi']; ?></strong></td>
        </tr>
    </tbody>
</table>
 <p>&nbsp;</p>
<?php
    $hari=date('w');
    $tgl =date('d');
    $bln =date('m');
    $thn =date('Y');
    switch($hari){
        case 0 : {
                    $hari='Ahad';
                }break;
        case 1 : {
                    $hari='Senin';
                }break;
        case 2 : {
                    $hari='Selasa';
                }break;
        case 3 : {
                    $hari='Rabu';
                }break;
        case 4 : {
                    $hari='Kamis';
                }break;
        case 5 : {
                    $hari="Jum'at";
                }break;
        case 6 : {
                    $hari='Sabtu';
                }break;
        default: {
                    $hari='UnKnown';
                }break;
    }

switch($bln){
        case 1 : {
                    $bln='Januari';
                }break;
        case 2 : {
                    $bln='Februari';
                }break;
        case 3 : {
                    $bln='Maret';
                }break;
        case 4 : {
                    $bln='April';
                }break;
        case 5 : {
                    $bln='Mei';
                }break;
        case 6 : {
                    $bln="Juni";
                }break;
        case 7 : {
                    $bln='Juli';
                }break;
        case 8 : {
                    $bln='Agustus';
                }break;
        case 9 : {
                    $bln='September';
                }break;
        case 10 : {
                    $bln='Oktober';
                }break;
        case 11 : {
                    $bln='November';
                }break;
        case 12 : {
                    $bln='Desember';
                }break;
        default: {
                    $bln='UnKnown';
                }break;
    }
$sekarang = $hari." tanggal ".$tgl." bulan ".$bln." ".$thn;

?>
<table border="0" cellpadding="1" cellspacing="1" style="width:100%">
    <tbody>
        <tr>
            <td>Pada hari ini, <?php echo $sekarang; ?>, telah dilakukan serah terima hasil pekerjaan oleh sebagai berikut :</td>
        </tr>
    </tbody>
 </table> <p>&nbsp;</p> <p>&nbsp;</p>
 <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td style="vertical-align:top;">
                            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                        <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?php echo $detail['pbcr_tagihan']; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>Kawasan Industri Pergudangan Marunda Center Blok M-1 Jl. Marunda makmur Bekasi</td>
                                </tr>
                            </tbody>
                        </table>

                        <p>&nbsp;</p>
                        </td>
                    </tr>
                </tbody>
            </table>
<p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Selanjutnya disebut sebagai &quot;<strong>PIHAK PERTAMA</strong>&quot;</td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td style="vertical-align:top;">
                            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>2.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                        <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>PT. Putra Bahari Mandiri</td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td>Direktur</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>Jl. PLTGU Muaratawar &nbsp;RT/RW 002/013 Desa Pantaimakmur Kec. Tarumajaya Bekasi</td>
                                </tr>
                            </tbody>
                        </table>

                        <p>&nbsp;</p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>
             <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Selanjutnya disebut sebagai &quot;<strong>PIHAK KEDUA</strong>&quot;</td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>PIHAK PERTAMA dan PIHAk KEDUA secara bersama-sama selanjutnya disebut sebagai &quot;Para Pihak&quot;. Para Pihak dengan ini terlebih dahulu menengkan hal-hal sebagai berikut :</td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>
            <?php
                            $originalDate   = $detail['pbcr_tglperjanjian'];
                            $newDate        = date("d F Y", strtotime($originalDate));
                        ?>
            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <ol>
                            <li>Bahwa, sebelumnya PIHAK PERTAMA dan Pihak KEDUA telah mengadakan suatu kerja sama Pelaksanaan Pekerjaan <?php echo $detail['pbcr_deskripsi']; ?> berdasarkan Purchase Order Nomor <?php echo $detail['ppmt_noso']; ?> tanggal <?php echo $detail['ppmt_tanggal']; ?>.</li>
                            <li>Bahwa, Perjanjian tersebut telah menempatkan PIHAK PERTAMA sebagai Pemberi Kerja dan PIHAK KEDUA sebagai Pelaksana Kerja.</li>
                            <li>Bahwa, Perjanjian tersebut telah mewajibkan PIHAK KEDUA sebagai Pelaksana Kerja untuk melakukan pekerjaan dan menyerahkan hasil pekerjaan tersebut kepada PIHAK PERTAMA sebagai Pemberi Kerja, yaitu berupa Pekerjaan <?php echo $detail['pbcr_deskripsi']; ?> dan dilamprkan bukti hasil pekerjaan.</li>
                        </ol>
                        </td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%; position:fixed; left:0; right:0; bottom: 0;" class="tbl-blue">
                <tbody>
                    <tr>
                        <td>
                        <p><strong>PT. PUTRA BAHARI MANDIRI</strong></p>

                        <p>Jl. PLTGU Muara Tawar RT/RW. 002/03</p>

                        <p>Desa Segarajaya, Kec. Tarumajaya, Bekasi 17218</p>

                        <p>Tlp. (021) 2214 8067, 081210135477 E-Mail : putrabaharimandiri@gmail.com</p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <div class="page-break"></div>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td><img class="img-responsive" src="<?php echo site_url('assets'); ?>/frontend/img/logo4.png"></td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Selanjutnya, untuk melaksanakan serah terima hasil pekerjaan diantara Para Pihak berdasarkan Perjanjian, maka Para Pihak dengan ini sepakat.</td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <ol>
                            <li>Bahwa, PIHAK KEDUA dengan ini menyerahkan hasil pekerjaan kepada PIHAK PERTAMA sebagaimana PIHAK PERTAMA dengan ini menerima hasil pekerjaan tersebut dari PIHAK KEDUA.</li>
                            <li>Bahwa, dengan telah dilakukannya serah terima hasil pekerjaan berdasarkan Berita Acara ini, maka dengan demikian kewajiban PIHAK KEDUA sebagai Pelaksana Kerja untuk menyerahkan hasil pekerjaan kepada PIHAK &nbsp;PERTAMA dan hak Pihak Pertama sebagai Pemberi Kerja untuk menerima hasil pekerjaan tersebut dari PIHAK KEDUA berdasarkan Perjanjian telah dilaksanakan.</li>
                            <li>Bahwa, Berita Acara ini merupakan bagian dari pelaksanaan Perjanjian dan sekaligus sebagai Tanda Terima hasil pekerjaan diantara Para Pihak, sehingga oleh karenanya merupakan satu kesatuan dan bagian yang tidak terpisahkan dari perjanjian.</li>
                        </ol>

                        <p>&nbsp;</p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Demikian Berita Acara ini dibuat pada waktu sebagaimana telah disebutkan pada bagian awal Berita Acara ini.</td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td style="text-align:center"><strong>Para Pihak</strong></td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p><strong>PIHAK PERTAMA</strong></p>

                        <p><strong><?php echo $detail['pbcr_tagihan']; ?></strong></p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>(.............................)</p>
                        </td>
                        <td style="text-align:right;">
                        <p><strong>PIHAK KEDUA</strong></p>

                        <p><strong>PT. Putra Bahari Mandiri</strong></p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>(<strong>Andri Lestari, S.Kom</strong>)</p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>
            </td>
        </tr>
    </tbody>
</table>

<p>&nbsp;</p>
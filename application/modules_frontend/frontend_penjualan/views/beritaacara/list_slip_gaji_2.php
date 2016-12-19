<style type="text/css">
.wdclm{width:100px;}
.wdclm.no{width:50px;}
.wdclm.tgl{width:10px;text-align: center;}
ol, ul {
  list-style: none;
}
</style>

<div class="main">
  <div class="main-inner2">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_beritaacara.php'); ?>
        </div>
        <!-- /span4 -->
        <input type='button' id='btn' value='Print' onclick='printDiv();' style="margin-left: 30px;"> 
        <div class="span10" id="DivIdToPrint">
          <div class="widget widget-table action-table">
            <div id="sticky-anchor"></div>
            <div id="sticky" class="widget-header"> <i class="icon-th-list"></i>
              <h3>SLIP GAJI</h3>
            </div>

            <!-- /widget-header -->
            <div class="widget-content">
            <table border="1px;" style="margin-top: 20px; margin-left:20px; width:90%; " cellpadding="10">
                    <tr>
                        <td style="width:50%;">
                           <img class="img-responsive" src="../../assets/frontend/img/logo4.png">
                        </td>
                        <td style="width:40%; font-style: bold;">
                           <strong>PT PUTRA BAHARI MANDIRI</strong><br><br />
                           <strong>NAMA: SOBUR JUHARDIONO</strong><br>
                           <strong>JABATAN: Manajer Operasional</strong><br>
                           <strong>NIK: 1607.00.00003</strong><br>
                           <strong>BULAN: 26 September 2016 - 25 Oktober 2016</strong><br>
                        </td>
                    </tr>
            </table>
            <div style="font-size: 20px!important; font-weight:bold; margin-top:10px;"><center>SLIP GAJI</center></div>
            <table frame="box" style="margin-top: 5px; margin-left:20px; width:90%; " cellpadding="10">
                    <tr style="font-size: 13px!important; font-weight:bold;">
                        <td style="width:50%;" style="border-left: 1px solid #cdd0d4;">INCOME</td>
                        <td style="width:5%;" frame="lhs">UNIT</td>
                        <td style="width:35%;">IDR</td>
                    </tr>
                    <tr>
                        <td>GAJI POKOK</td>
                        <td>Rp.</td>
                        <td>3.260.000</td>
                    </tr>
                    <tr>
                        <td>UANG MAKAN</td>
                        <td>Rp.</td>
                        <td>140.000</td>
                    </tr>
                    <tr>
                        <td>TUNJANGAN JABATAN</td>
                        <td>Rp.</td>
                        <td>100.000</td>
                    </tr>
                    <tr>
                        <td>LEMBUR</td>
                        <td>Rp.</td>
                        <td>320.667</td>
                    </tr>
                    <tr>
                        <td>RAFELAN BULAN LALU</td>
                        <td>Rp.</td>
                        <td>0</td>
                    </tr>
                     <tr style="font-size: 13px!important; font-weight:bold;">
                        <td style="width:50%;" style="border-left: 1px solid #cdd0d4;">Total Income</td>
                        <td style="width:5%;" frame="lhs">Rp.</td>
                        <td style="width:35%;">3.820.667</td>
                    </tr>
            </table>

             <table frame="box" style="margin-top: 20px; margin-left:20px; width:90%; " cellpadding="10">
                    <tr style="font-size: 13px!important; font-weight:bold;">
                        <td style="width:50%;" style="border-left: 1px solid #cdd0d4;">DEDUCTION</td>
                        <td style="width:5%;" frame="lhs">UNIT</td>
                        <td style="width:35%;">IDR</td>
                    </tr>
                    <tr>
                        <td>BPJS TK</td>
                        <td>Rp.</td>
                        <td>100.000</td>
                    </tr>
                    <tr>
                        <td>POTONGAN SHUTDOWN</td>
                        <td>Rp.</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>RAFELAN BULAN DEPAN</td>
                        <td>Rp.</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>MANGKIR</td>
                        <td>Rp.</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>POTONGAN SERAGAM, SEPATU & HELM</td>
                        <td>Rp.</td>
                        <td>0</td>
                    </tr>
                     <tr style="font-size: 13px!important; font-weight:bold;">
                        <td style="width:50%;" style="border-left: 1px solid #cdd0d4;">Total Deduction</td>
                        <td style="width:5%;" frame="lhs">Rp.</td>
                        <td style="width:35%;">100.000</td>
                    </tr>
            </table>
             <table frame="box" style="margin-top: 20px; margin-left:20px; width:90%; " cellpadding="10">
                    <tr style="font-size: 13px!important; font-weight:bold;">
                        <td style="width:50%;" style="border-left: 1px solid #cdd0d4;">Net Income</td>
                        <td style="width:5%;" frame="lhs">&nbsp;</td>
                        <td style="width:35%; text-align:right; ">3.720.667</td>
                    </tr>
            </table><br />
            <p style="margin-left:20px;">Received by:</p>
            <p style="margin-left:20px;">Muhammad Nur</p>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span8 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /main-inner -->
</div>
<!-- /main -->

<script>
  $(document).ready(function() {
    $("#fixTable").tableHeadFixer({"head" : true, "left" : 3}); 
  });
  
  function printDiv() 
  {

    var divToPrint=document.getElementById('DivIdToPrint');

    var newWin=window.open('','Print-Window');

    newWin.document.open();

    newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

    newWin.document.close();

    setTimeout(function(){newWin.close();},10);

  }
</script>
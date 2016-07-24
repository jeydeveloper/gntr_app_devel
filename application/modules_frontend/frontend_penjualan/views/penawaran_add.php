<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_penawaran.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Add Penawaran</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="" method="post">

                <div class="form-fields">

                  <div class="field">
                    <label for="ppnw_no_penawaran">No Penawaran</label>
                    <input id="ppnw_no_penawaran" name="ppnw_no_penawaran" placeholder="No Penawaran" required />
                  </div> <!-- /field -->
                  <div class="field">
                        <label for="ppnw_tanggal">Tanggal Penawaran:</label>
                        <input id="ppnw_tanggal" class="date-picker" name="ppnw_tanggal" value="" placeholder="Tanggal"/>
                </div> <!-- /field -->
                  <div class="field">
                    <label for="ppnw_proj_id">Client</label>
                    <select name="ppnw_clnt_id" id="ppnw_clnt_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_client as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_status">Status</label>
                    <select name="ppnw_status" id="ppnw_status" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['status_penjualan'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_diskon">Diskon</label>
                    <input id="ppnw_diskon" name="ppnw_diskon" placeholder="Diskon" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_pajak">Pajak</label>
                    <input id="ppnw_pajak" name="ppnw_pajak" placeholder="Pajak" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_biaya_kirim">Biaya Kirim</label>
                    <input class="numberformat" id="ppnw_biaya_kirim" name="ppnw_biaya_kirim" placeholder="Biaya Kirim" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_nilai_faktur">Nilai Faktur</label>
                    <input class="numberformat" id="ppnw_nilai_faktur" name="ppnw_nilai_faktur" placeholder="Nilai Faktur" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_keterangan">Keterangan</label>
                    <textarea id="ppnw_keterangan" name="ppnw_keterangan" placeholder="Keterangan"></textarea>
                  </div> <!-- /field -->

                </div> <!-- /form-fields -->
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3> Detail Penawaran</h3>
                </div><br />

                <div class="extraPersonTemplate form-fields">
                    <div class="field">
                        <label for="ppnwd_deskripsi_id">Deskripsi:</label>
                        <input id="ppnwd_deskripsi_id[]" name="ppnwd_deskripsi_id[]" value="" placeholder="Deskripsi"/>
                      </div> <!-- /field -->
                      <div class="field">
                          <label for="ppnwd_jenisbarang">Jenis Barang:</label>
                          <select name="ppnwd_jenisbarang[]" id="ppnwd_jenisbarang[]" />
                            <option>-- Pilih --</option>
                            <?php foreach($option_barang as $value): ?>
                              <option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
                            <?php endforeach; ?>
                          </select>
                          <input type="checkbox" class="ba" /><label for="ppnwd_jenisbarang2">Tambah Manual Jenis Barang:</label>
                            <input type="text" class="tex" name="ppnwd_jenisbarang2[]" id="ppnwd_jenisbarang2[]" disabled="disabled" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="ppnwd_volume">Volume:</label>
                        <input id="ppnwd_volume[]" name="ppnwd_volume[]" value="" placeholder="Volume"/>
                      </div> <!-- /field -->
                       <div class="field">
                        <label for="ppnwd_satuan">Satuan:</label>
                        <input id="ppnwd_satuan[]" name="ppnwd_satuan[]" value="" placeholder="Satuan"/>
                      </div> <!-- /field -->
                      <div class="field">
                        <label for="ppnwd_hargasatuan">Harga Satuan:</label>
                        <input class="numberformat" id="ppnwd_hargasatuan[]" name="ppnwd_hargasatuan[]" value="" placeholder="Harga Satuan"/>
                      </div> <!-- /field -->
                    </div>
                    <div id="container"></div>
                    <a href="#" id="addRow"><i class="icon-plus-sign icon-white"></i> Tambah Barang</p></a>

                <div class="form-actions">
                  <div class="pull-right">
                    <button type="reset" class="button btn btn-default btn-large">Reset</button>
                    <button type="submit" class="button btn btn-primary btn-large">Submit</button>
                  </div>
                </div> <!-- .actions -->

              </form>
            </div>
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
<script type="text/javascript">
  $(document).ready(function () {
     $('<div/>', {
         'class' : 'extraPerson form-fields', html: GetHtml()
     }).appendTo('#container');
     $('#addRow').click(function () {
           $('<div/>', {
               'class' : 'extraPerson form-fields', html: GetHtml()
     }).hide().appendTo('#container').slideDown('slow');

     });
 })
 function GetHtml()
{
      var len = $('.extraPerson form-fields').length;
    var $html = $('.extraPersonTemplate').clone();
    $html.find('[name=ppnwd_jenisbarang]').name="ppnwd_jenisbarang[]" + len;
    $html.find('[name=ppnwd_jenisbarang2]').name="ppnwd_jenisbarang2[]" + len;
    $html.find('[name=ppnwd_volume]').name="ppnwd_volume[]" + len;
    $html.find('[name=ppnwd_deskripsi_id]').name="ppnwd_deskripsi_id[]" + len;
    $html.find('[name=ppnwd_satuan]').name="ppnwd_satuan[]" + len;
    $html.find('[name=ppnwd_hargasatuan]').name="ppnwd_hargasatuan[]" + len;
    return $html.html();
}
</script>
<script type="text/javascript">
   $(".ba").click(function () {
    if ($(".ba").is(":checked")) {
        $(".tex")
            .removeAttr("disabled")
            .css("background-color", "white");
    }
    else {
        $(".tex")
            .attr("disabled", "disabled")
            .css("background-color", "white");
    }
});
</script>

<script type="text/javascript">
  $(function(){
    $('.numberformat').number( true, 0, ',', '.' );
  })
</script>
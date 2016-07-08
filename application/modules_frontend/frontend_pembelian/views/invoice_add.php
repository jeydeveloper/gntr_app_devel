<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_invoice.php'); ?>
        </div>
        <!-- /span4 -->
         <?php echo form_open_multipart('');?>
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form Invoice Pembelian</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">

                    <div class="form-fields">

                      <div class="field">
                        <label for="pbinv_pbsrtjalan_id">Referensi</label>
                        <select name="pbinv_pbsrtjalan_id" id="pbinv_pbsrtjalan_id" required />
                          <option value="">--Pilih--</option>
                          <?php foreach($option_referensi as $value): ?>
                            <option value="<?php echo $value['pbsrtjalan_id']; ?>"><?php echo $value['pbsrtjalan_no']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_noinvoice">Invoice No:</label>
                        <input type="text" id="pbinv_noinvoice" name="pbinv_noinvoice" value="" placeholder="No." />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_tanggal">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbinv_tanggal" name="pbinv_tanggal" value="" placeholder="Tanggal" />
                      </div> <!-- /field -->


                      <div class="field">
                        <label for="pbinv_wo">WO No:</label>
                        <input type="text" id="pbinv_wo" name="pbinv_wo" value="" placeholder="WO No"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_wotgl">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbinv_wotgl" name="pbinv_wotgl" value="" placeholder="Tanggal" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_nopenawaran">Penawaran WO</label>
                        <input type="text" id="pbinv_nopenawaran" name="pbinv_nopenawaran" value="" placeholder="Penawaran WO"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_to">Ditujukan Ke:</label>
                        <input type="text"   id="pbinv_to" name="pbinv_to" value="" placeholder="Ditujukan ke" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_alamat">Alamat:</label>
                        <textarea id="pbinv_alamat" name="pbinv_alamat" placeholder="Alamat"></textarea>
                      </div> <!-- /field -->


                      <div class="field">
                        <label for="pbinv_totaltagihan">Total Tagihan:</label>
                        <input type="text" id="pbinv_totaltagihan" name="pbinv_totaltagihan" value="" placeholder="Total Tagihan"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_terbilang">Terbilang:</label>
                        <input type="text" id="pbinv_terbilang" name="pbinv_terbilang" value="" placeholder="Terbilang"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_description">Deskripsi:</label>
                        <textarea id="pbinv_description" name="pbinv_description" value="" placeholder="Deskripsi"></textarea>
                      </div> <!-- /field -->

                     <div class="field">
                        <label for="uploadfile">Upload File:</label>
                        <input type="file" class="form-control-file" name="uploadfile" id="uploadfile">
                      </div> <!-- /field -->

                    </div> <!-- /form-fields -->
                </div>
                <!-- /widget-content -->
              </div>
              <!-- /widget -->
            </div>
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">

                    <div class="form-fields">



                    </div> <!-- /form-fields -->
                    <div class="extraPersonTemplate form-fields">

                      <div class="field">
                          <label for="pbinvd_jenisbarang">Jenis Barang:</label>
                          <select name="pbinvd_jenisbarang[]" id="pbinvd_jenisbarang[]" />
                            <option value="">-- Pilih --</option>
                            <?php foreach($option_barang as $value): ?>
                              <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                            <?php endforeach; ?>
                          </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinvd_jumlah">Volume:</label>
                        <input id="pbinvd_jumlah[]" name="pbinvd_jumlah[]" value="" placeholder="Volume"/>
                      </div> <!-- /field -->
                    </div>
                    <div id="container"></div>
                    <a href="#" id="addRow"><i class="icon-plus-sign icon-white"></i> Tambah Barang</p></a>
                    <div class="form-actions">
                      <div class="pull-right">
                        <button type="reset" class="button btn btn-default btn-large">Reset</button>
                        <button class="button btn btn-primary btn-large"><a href="print_invoice.html"></a> Submit</button>
                      </div>
                    </div> <!-- .actions -->
                </div>
                <!-- /widget-content -->
              </div>
              <!-- /widget -->
            </div>
        </form>
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
    $html.find('[name=pbinvd_jenisbarang]').name="pbinvd_jenisbarang[]" + len;
    $html.find('[name=pbinvd_jumlah]').name="pbinvd_jumlah[]" + len;
    return $html.html();
}
</script>
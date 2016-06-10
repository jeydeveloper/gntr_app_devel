<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_invoice.php'); ?>
        </div>
        <!-- /span4 -->
        <form action="" method="post">
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form Invoice Penjualan</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                    
                    <div class="form-fields">
                      
                      <div class="field">
                        <label for="pjinv_noinvoice">Invoice No:</label>
                        <input type="text" id="pjinv_noinvoice" name="pjinv_noinvoice" value="" placeholder="No." />
                      </div> <!-- /field -->
                      
                      <div class="field">
                        <label for="pjinv_tanggal">Tanggal</label>  
                        <input type="text"  class="date-picker" id="pjinv_tanggal" name="pjinv_tanggal" value="" placeholder="Tanggal" />
                      </div> <!-- /field -->
                      
                      
                      <div class="field">
                        <label for="pjinv_wo">WO No:</label>
                        <input type="text" id="pjinv_wo" name="pjinv_wo" value="" placeholder="WO No"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pjinv_wotgl">Tanggal</label>  
                        <input type="text"  class="date-picker" id="pjinv_wotgl" name="pjinv_wotgl" value="" placeholder="Tanggal" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pjinv_nopenawaran">Penawaran WO</label>
                        <input type="text" id="pjinv_nopenawaran" name="pjinv_nopenawaran" value="" placeholder="Penawaran WO"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pjinv_to">Ditujukan Ke:</label>  
                        <input type="text"   id="pjinv_to" name="pjinv_to" value="" placeholder="Ditujukan ke" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pjinv_alamat">Alamat:</label>  
                        <textarea id="pjinv_alamat" name="pjinv_alamat" placeholder="Alamat"></textarea>
                      </div> <!-- /field -->


                      <div class="field">
                        <label for="pjinv_totaltagihan">Total Tagihan:</label>
                        <input type="text" id="pjinv_totaltagihan" name="pjinv_totaltagihan" value="" placeholder="Total Tagihan"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pjinv_terbilang">Terbilang:</label>
                        <input type="text" id="pjinv_terbilang" name="pjinv_terbilang" value="" placeholder="Terbilang"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pjinv_description">Deskripsi:</label>  
                        <textarea id="pjinv_description" name="pjinv_description" value="" placeholder="Deskripsi"></textarea>
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
                          <label for="pjinvd_jenisbarang">Jenis Barang:</label>
                          <select name="pjinvd_jenisbarang[]" id="pjinvd_jenisbarang[]" />
                            <option value="">-- Pilih --</option>
                            <?php foreach($option_barang as $value): ?>
                              <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                            <?php endforeach; ?>
                          </select>
                      </div> <!-- /field -->
                      
                      <div class="field">
                        <label for="pjinvd_jumlah">Volume:</label>
                        <input id="pjinvd_jumlah[]" name="pjinvd_jumlah[]" value="" placeholder="Volume"/>
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
    $html.find('[name=pjinvd_jenisbarang]').name="pjinvd_jenisbarang[]" + len;
    $html.find('[name=pjinvd_jumlah]').name="pjinvd_jumlah[]" + len;
    return $html.html();    
}
</script>
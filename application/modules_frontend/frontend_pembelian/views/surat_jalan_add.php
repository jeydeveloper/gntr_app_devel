<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_surat_jalan.php'); ?>
        </div>
        <!-- /span4 -->
          <?php echo form_open_multipart('');?>
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form Surat Jalan</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">

                    <div class="form-fields">

                      <div class="field">
                        <label for="pbsrtjalan_tanggal">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbsrtjalan_tanggal" name="pbsrtjalan_tanggal" value="" placeholder="Tanggal" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_no">No:</label>
                        <input type="text" id="pbsrtjalan_no" name="pbsrtjalan_no" value="" placeholder="No." />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_nokendaraan">No Kendaraan:</label>
                        <input type="text" id="pbsrtjalan_nokendaraan" name="pbsrtjalan_nokendaraan" value="" placeholder="No. Kendaraan" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_halaman">Halaman:</label>
                        <input type="text" id="pbsrtjalan_halaman" name="pbsrtjalan_halaman" value="" placeholder="Halaman"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_matauang">Mata Uang:</label>
                        <input type="text" id="pbsrtjalan_matauang" name="pbsrtjalan_matauang" value="" placeholder="Mata Uang"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_vendor">Vendor:</label>
                        <input type="text" id="pbsrtjalan_vendor" name="pbsrtjalan_vendor" value="" placeholder="Vendor"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_proposalno">Vendor Proposan No.:</label>
                        <input type="text" id="pbsrtjalan_proposalno" name="pbsrtjalan_proposalno" value="" placeholder="Vendor Proposan No."/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_projectcode">Project Code:</label>
                        <input type="text" id="pbsrtjalan_projectcode" name="pbsrtjalan_projectcode" value="" placeholder="Project Code"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_buyer">Buyer:</label>
                        <input type="text" id="pbsrtjalan_buyer" name="pbsrtjalan_buyer" value="" placeholder="Buyer"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_terms">Catatan:</label>
                        <textarea id="pbsrtjalan_terms" name="pbsrtjalan_terms" value="" placeholder="Catatan"></textarea>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_catatan">Terms Pembayaran:</label>
                        <textarea id="pbsrtjalan_catatan" name="pbsrtjalan_catatan" value="" placeholder="Terms Pembayaran"></textarea>
                      </div> <!-- /field -->


                      <div class="field">
                        <label for="pbsrtjalan_tanggalditerima">Tanggal Penerimaan</label>
                        <input type="text"  class="date-picker" id="pbsrtjalan_tanggalditerima" name="pbsrtjalan_tanggalditerima" value="" placeholder="Tanggal Penerimaan" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_diterimaoleh">Diterima Oleh:</label>
                        <input type="text" id="pbsrtjalan_diterimaoleh" name="pbsrtjalan_diterimaoleh" value="" placeholder="Diterima Oleh"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_namapenerima">Nama Penerima:</label>
                        <input type="text" id="pbsrtjalan_namapenerima" name="pbsrtjalan_namapenerima" value="" placeholder="Nama Penerima"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_tanggalterima">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbsrtjalan_tanggalterima" name="pbsrtjalan_tanggalterima" value="" placeholder="Tanggal" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_totaltagihan">Total Tagihan:</label>
                        <input type="text" id="pbsrtjalan_totaltagihan" name="pbsrtjalan_totaltagihan" value="" placeholder="Total Tagihan"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_terbilang">Terbilang:</label>
                        <input type="text"   id="pbsrtjalan_terbilang" name="pbsrtjalan_terbilang" value="" placeholder="Terbilang" />
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
                          <label for="pbsuratjaland_jenisbarang">Jenis Barang:</label>
                          <select name="pbsuratjaland_jenisbarang[]" id="pbsuratjaland_jenisbarang[]" />
                            <option value="">-- Pilih --</option>
                            <?php foreach($option_barang as $value): ?>
                              <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                            <?php endforeach; ?>
                          </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsuratjaland_jumlah">Volume:</label>
                        <input id="pbsuratjaland_jumlah[]" name="pbsuratjaland_jumlah[]" value="" placeholder="Volume"/>
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
    $html.find('[name=pbsuratjaland_jenisbarang]').name="pbsuratjaland_jenisbarang[]" + len;
    $html.find('[name=pbsuratjaland_jumlah]').name="pbsuratjaland_jumlah[]" + len;
    return $html.html();
}
</script>
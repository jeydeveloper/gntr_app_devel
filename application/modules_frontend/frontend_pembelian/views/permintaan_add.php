<style type="text/css">
  .add_form, .add_form:hover{
    color: red;
    text-decoration: none;
    display: none;
  }
</style>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_permintaan.php'); ?>
        </div>
        <!-- /span4 -->
          <form action="" method="post">
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form Permintaan</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">

                    <div class="form-fields">

                      <div class="field">
                        <label for="pbptn_tanggal">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbptn_tanggal" name="pbptn_tanggal" value="" placeholder="Tanggal" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_no">No:</label>
                        <input type="text" id="pbptn_no" name="pbptn_no" value="" placeholder="No." />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_mtua_id">Mata Uang</label>
                        <select name="pbptn_mtua_id" id="pbptn_mtua_id" />
                          <option value="">-- Pilih --</option>
                          <?php foreach($option_matauang as $value): ?>
                            <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_vndr_id">Vendor</label>
                        <select name="pbptn_vndr_id" id="pbptn_vndr_id" />
                          <option value="">-- Pilih --</option>
                          <?php foreach($option_vendor as $value): ?>
                            <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_proposalno">Vendor Proposan No.:</label>
                        <input type="text" id="pbptn_proposalno" name="pbptn_proposalno" value="" placeholder="Vendor Proposan No."/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_projectcode">Project Code:</label>
                        <input type="text" id="pbptn_projectcode" name="pbptn_projectcode" value="" placeholder="Project Code"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_clnt_id">Client</label>
                        <select name="pbptn_clnt_id" id="pbptn_clnt_id" />
                          <option value="">-- Pilih --</option>
                          <?php foreach($option_client as $value): ?>
                            <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_terms">Catatan:</label>
                        <textarea id="pbptn_terms" name="pbptn_terms" value="" placeholder="Catatan"></textarea>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_catatan">Terms Pembayaran:</label>
                        <textarea id="pbptn_catatan" name="pbptn_catatan" value="" placeholder="Terms Pembayaran"></textarea>
                      </div> <!-- /field -->


                      <div class="field">
                        <label for="pbptn_tanggalditerima">Tanggal Penerimaan</label>
                        <input type="text"  class="date-picker" id="pbptn_tanggalditerima" name="pbptn_tanggalditerima" value="" placeholder="Tanggal Penerimaan" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_namapenerima">Nama Penerima:</label>
                        <input type="text" id="pbptn_namapenerima" name="pbptn_namapenerima" value="" placeholder="Nama Penerima"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_tanggalterima">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbptn_tanggalterima" name="pbptn_tanggalterima" value="" placeholder="Tanggal" />
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
                      <div style="text-align: right;"><a class="add_form" href="#">[ HAPUS ]</a></div>
                      <div class="field">
                          <label for="pbptnd_jenisbarang">Jenis Barang:</label>
                          <select name="pbptnd_jenisbarang[]" id="pbptnd_jenisbarang[]" />
                            <option value="">-- Pilih --</option>
                            <?php foreach($option_barang as $value): ?>
                              <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                            <?php endforeach; ?>
                          </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptnd_jumlah">Volume:</label>
                        <input id="pbptnd_jumlah[]" name="pbptnd_jumlah[]" value="" placeholder="Volume"/>
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
     $('#addRow').click(function (e) {
        e.preventDefault();
           $('<div/>', {
               'class' : 'extraPerson form-fields', html: GetHtml()
     }).hide().appendTo('#container').slideDown('slow');

     });

     $('.add_form').live('click', function(e){
      e.preventDefault();
      $(this).closest('.extraPerson').remove();
     });
 })
 function GetHtml()
{
      var len = $('.extraPerson form-fields').length;
    var $html = $('.extraPersonTemplate').clone();
    $html.find('[name=pbptnd_jenisbarang]').name="pbptnd_jenisbarang[]" + len;
    $html.find('[name=pbptnd_jumlah]').name="pbptnd_jumlah[]" + len;
    $html.find('.add_form').show();
    return $html.html();
}
</script>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_permintaan.php'); ?>
        </div>
         <!-- /span4 -->
          <form action="<?php echo ($module_base_url . '/permintaan/edit/' . $detail['pbptn_id']); ?>" method="post">
                <input type="hidden" name="pbptn_id" value="<?php echo $detail['pbptn_id']; ?>" />
                <input type="hidden" name="pbptn_no" value="<?php echo $detail['pbptn_no']; ?>" />
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form Edit Invoice Penjualan</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">

                    <div class="form-fields">

                       <div class="field">
                        <label for="pbptn_tanggal">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbptn_tanggal" name="pbptn_tanggal" value="<?php echo $detail['pbptn_tanggal']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_no">No:</label>
                        <input type="text" id="pbptn_no" name="pbptn_no" value="<?php echo $detail['pbptn_no']; ?>" disabled/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_mtua_id">Mata Uang</label>
                        <select name="pbptn_mtua_id" id="pbptn_mtua_id" />
                          <option value="">-- Pilih --</option>
                          <?php foreach($option_matauang as $value): ?>
                            <option value="<?php echo $value['value']; ?>" <?php echo ($detail['pbptn_mtua_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_vndr_id">Vendor</label>
                        <select name="pbptn_vndr_id" id="pbptn_vndr_id" />
                          <option value="">-- Pilih --</option>
                          <?php foreach($option_vendor as $value): ?>
                            <option value="<?php echo $value['value']; ?>" <?php echo ($detail['pbptn_vndr_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_proposalno">Vendor Proposan No.:</label>
                        <input type="text" id="pbptn_proposalno" name="pbptn_proposalno" value="<?php echo $detail['pbptn_proposalno']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_projectcode">Project Code:</label>
                        <input type="text" id="pbptn_projectcode" name="pbptn_projectcode" value="<?php echo $detail['pbptn_projectcode']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_clnt_id">Client</label>
                        <select name="pbptn_clnt_id" id="pbptn_clnt_id" />
                          <option value="">-- Pilih --</option>
                          <?php foreach($option_client as $value): ?>
                            <option value="<?php echo $value['value']; ?>" <?php echo ($detail['pbptn_clnt_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_terms">Catatan:</label>
                        <textarea id="pbptn_terms" name="pbptn_terms"><?php echo $detail['pbptn_terms']; ?></textarea>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_catatan">Terms Pembayaran:</label>
                        <textarea id="pbptn_catatan" name="pbptn_catatan"><?php echo $detail['pbptn_catatan']; ?></textarea>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_namapenerima">Nama Penerima:</label>
                        <input type="text" id="pbptn_namapenerima" name="pbptn_namapenerima" value="<?php echo $detail['pbptn_namapenerima']; ?>"/>
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
                       <?php foreach($permintaan as $pmt): ?>
                        <div class="field">
                            <label for="pbptnd_jenisbarang">Jenis Barang:</label>
                            <select name="pbptnd_jenisbarang[]" id="pbptnd_jenisbarang[]" />
                               <?php foreach($option_barang as $value): ?>
                              <option value="<?php echo $value['value']; ?>" <?php echo ($pmt->pbptnd_jenisbarang == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                              <?php endforeach; ?>
                            </select>
                        </div> <!-- /field -->

                        <div class="field">
                            <label for="pbptnd_jumlah">Volume:</label>
                            <input id="pbptnd_jumlah[]" name="pbptnd_jumlah[]" value="<?php echo $pmt->pbptnd_jumlah; ?>"/>
                        </div> <!-- /field -->
                        <input type="hidden" name="pbptnd_id[]" value="<?php echo $pmt->pbptnd_id; ?>" />
                        <?php endforeach; ?>
                    </div>
                    <div id="container"></div>
                    <!-- <a href="#" id="addRow"><i class="icon-plus-sign icon-white"></i> Tambah Barang</p></a> -->
                    <div class="form-actions">
                      <div class="pull-right">
                        <button type="reset" class="button btn btn-default btn-large">Reset</button>
                        <button class="button btn btn-primary btn-large"><a href="print_invoice.html"></a> Submit</button>
                      </div>
                    </div> <!-- .actions -->
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
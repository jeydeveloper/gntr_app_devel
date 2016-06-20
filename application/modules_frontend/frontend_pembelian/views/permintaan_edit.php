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
                        <label for="pbptn_halaman">Halaman:</label>
                        <input type="text" id="pbptn_halaman" name="pbptn_halaman" value="<?php echo $detail['pbptn_halaman']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_matauang">Mata Uang:</label>
                        <input type="text" id="pbptn_matauang" name="pbptn_matauang" value="<?php echo $detail['pbptn_matauang']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_vendor">Vendor:</label>
                        <input type="text" id="pbptn_vendor" name="pbptn_vendor" value="<?php echo $detail['pbptn_vendor']; ?>"/>
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
                        <label for="pbptn_buyer">Buyer:</label>
                        <input type="text" id="pbptn_buyer" name="pbptn_buyer" value="<?php echo $detail['pbptn_buyer']; ?>"/>
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
                        <label for="pbptn_tanggalditerima">Tanggal Penerimaan</label>
                        <input type="text"  class="date-picker" id="pbptn_tanggalditerima" name="pbptn_tanggalditerima" value="<?php echo $detail['pbptn_tanggalditerima']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_diterimaoleh">Diterima Oleh:</label>
                        <input type="text" id="pbptn_diterimaoleh" name="pbptn_diterimaoleh" value="<?php echo $detail['pbptn_diterimaoleh']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_namapenerima">Nama Penerima:</label>
                        <input type="text" id="pbptn_namapenerima" name="pbptn_namapenerima" value="<?php echo $detail['pbptn_namapenerima']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_tanggalterima">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbptn_tanggalterima" name="pbptn_tanggalterima" value="<?php echo $detail['pbptn_tanggalterima']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_totaltagihan">Total Tagihan:</label>
                        <input type="text" id="pbptn_totaltagihan" name="pbptn_totaltagihan" value="<?php echo $detail['pbptn_totaltagihan']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbptn_terbilang">Terbilang:</label>
                        <input type="text"   id="pbptn_terbilang" name="pbptn_terbilang" value="<?php echo $detail['pbptn_terbilang']; ?>" />
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
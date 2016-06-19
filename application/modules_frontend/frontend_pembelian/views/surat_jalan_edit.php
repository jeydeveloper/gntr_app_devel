<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_surat_jalan.php'); ?>
        </div>
        <!-- /span4 -->
         <form action="<?php echo ($module_base_url . '/surat-jalan/edit/' . $detail['pbsrtjalan_id']); ?>" method="post">
                <input type="hidden" name="pbsrtjalan_id" value="<?php echo $detail['pbsrtjalan_id']; ?>" />
                <input type="hidden" name="pbsrtjalan_no" value="<?php echo $detail['pbsrtjalan_no']; ?>" />
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form Edit Surat Jalan</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">

                    <div class="form-fields">

                       <div class="field">
                        <label for="pbsrtjalan_tanggal">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbsrtjalan_tanggal" name="pbsrtjalan_tanggal" value="<?php echo $detail['pbsrtjalan_tanggal']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_no">No:</label>
                        <input type="text" id="pbsrtjalan_no" name="pbsrtjalan_no" value="<?php echo $detail['pbsrtjalan_no']; ?>" disabled/>
                      </div> <!-- /field -->

                       <div class="field">
                        <label for="pbsrtjalan_nokendaraan">No Kendaraan:</label>
                        <input type="text" id="pbsrtjalan_nokendaraan" name="pbsrtjalan_nokendaraan" value="<?php echo $detail['pbsrtjalan_nokendaraan']; ?>" />
                      </div> <!-- /field -->


                      <div class="field">
                        <label for="pbsrtjalan_halaman">Halaman:</label>
                        <input type="text" id="pbsrtjalan_halaman" name="pbsrtjalan_halaman" value="<?php echo $detail['pbsrtjalan_halaman']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_matauang">Mata Uang:</label>
                        <input type="text" id="pbsrtjalan_matauang" name="pbsrtjalan_matauang" value="<?php echo $detail['pbsrtjalan_matauang']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_vendor">Vendor:</label>
                        <input type="text" id="pbsrtjalan_vendor" name="pbsrtjalan_vendor" value="<?php echo $detail['pbsrtjalan_vendor']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_proposalno">Vendor Proposan No.:</label>
                        <input type="text" id="pbsrtjalan_proposalno" name="pbsrtjalan_proposalno" value="<?php echo $detail['pbsrtjalan_proposalno']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_projectcode">Project Code:</label>
                        <input type="text" id="pbsrtjalan_projectcode" name="pbsrtjalan_projectcode" value="<?php echo $detail['pbsrtjalan_projectcode']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_buyer">Buyer:</label>
                        <input type="text" id="pbsrtjalan_buyer" name="pbsrtjalan_buyer" value="<?php echo $detail['pbsrtjalan_buyer']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_terms">Catatan:</label>
                        <textarea id="pbsrtjalan_terms" name="pbsrtjalan_terms"><?php echo $detail['pbsrtjalan_terms']; ?></textarea>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_catatan">Terms Pembayaran:</label>
                        <textarea id="pbsrtjalan_catatan" name="pbsrtjalan_catatan"><?php echo $detail['pbsrtjalan_catatan']; ?></textarea>
                      </div> <!-- /field -->


                      <div class="field">
                        <label for="pbsrtjalan_tanggalditerima">Tanggal Penerimaan</label>
                        <input type="text"  class="date-picker" id="pbsrtjalan_tanggalditerima" name="pbsrtjalan_tanggalditerima" value="<?php echo $detail['pbsrtjalan_tanggalditerima']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_diterimaoleh">Diterima Oleh:</label>
                        <input type="text" id="pbsrtjalan_diterimaoleh" name="pbsrtjalan_diterimaoleh" value="<?php echo $detail['pbsrtjalan_diterimaoleh']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_namapenerima">Nama Penerima:</label>
                        <input type="text" id="pbsrtjalan_namapenerima" name="pbsrtjalan_namapenerima" value="<?php echo $detail['pbsrtjalan_namapenerima']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_tanggalterima">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbsrtjalan_tanggalterima" name="pbsrtjalan_tanggalterima" value="<?php echo $detail['pbsrtjalan_tanggalterima']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_totaltagihan">Total Tagihan:</label>
                        <input type="text" id="pbsrtjalan_totaltagihan" name="pbsrtjalan_totaltagihan" value="<?php echo $detail['pbsrtjalan_totaltagihan']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_terbilang">Terbilang:</label>
                        <input type="text"   id="pbsrtjalan_terbilang" name="pbsrtjalan_terbilang" value="<?php echo $detail['pbsrtjalan_terbilang']; ?>" />
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
                       <?php foreach($surat as $pmt): ?>
                        <div class="field">
                            <label for="pbsuratjaland_jenisbarang">Jenis Barang:</label>
                            <select name="pbsuratjaland_jenisbarang[]" id="pbsuratjaland_jenisbarang[]" />
                               <?php foreach($option_barang as $value): ?>
                              <option value="<?php echo $value['value']; ?>" <?php echo ($pmt->pbsuratjaland_jenisbarang == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                              <?php endforeach; ?>
                            </select>
                        </div> <!-- /field -->

                        <div class="field">
                            <label for="pbsuratjaland_jumlah">Volume:</label>
                            <input id="pbsuratjaland_jumlah[]" name="pbsuratjaland_jumlah[]" value="<?php echo $pmt->pbsuratjaland_jumlah; ?>"/>
                        </div> <!-- /field -->
                        <input type="hidden" name="pbsuratjaland_id[]" value="<?php echo $pmt->pbsuratjaland_id; ?>" />
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
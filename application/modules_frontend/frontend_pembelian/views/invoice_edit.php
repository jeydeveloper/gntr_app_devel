<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_invoice.php'); ?>
        </div>
        <!-- /span4 -->
        <!-- /span4 -->
         <?php echo form_open_multipart($module_base_url.'/invoice/edit/' . $detail['pbinv_id']);?>
                <input type="hidden" name="pbinv_id" value="<?php echo $detail['pbinv_id']; ?>" />
                <input type="hidden" name="pbinv_noinvoice" value="<?php echo $detail['pbinv_noinvoice']; ?>" />
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form Edit Invoice Penjualan</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">

                    <div class="form-fields">

                      <div class="field">
                        <label for="pbinv_pbsrtjalan_id">Referensi</label>
                        <select name="pbinv_pbsrtjalan_id" id="pbinv_pbsrtjalan_id" required />
                          <option value="">--Pilih--</option>
                          <?php foreach($option_referensi as $value): ?>
                            <option value="<?php echo $value['pbsrtjalan_id']; ?>" <?php echo ($detail['pbinv_pbsrtjalan_id'] == $value['pbsrtjalan_id'] ? 'selected' : ''); ?>><?php echo $value['pbsrtjalan_no']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_noinvoice">Invoice No:</label>
                        <input type="text" id="pbinv_noinvoice" name="pbinv_noinvoice" value="<?php echo $detail['pbinv_noinvoice']; ?>" disabled/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_tanggal">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbinv_tanggal" name="pbinv_tanggal" value="<?php echo $detail['pbinv_tanggal']; ?>" />
                      </div> <!-- /field -->


                      <div class="field">
                        <label for="pbinv_wo">WO No:</label>
                        <input type="text" id="pbinv_wo" name="pbinv_wo" value="<?php echo $detail['pbinv_wo']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_wotgl">Tanggal:</label>
                        <input type="text"  class="date-picker" id="pbinv_wotgl" name="pbinv_wotgl" value="<?php echo $detail['pbinv_wotgl']; ?>" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_nopenawaran">Penawaran WO</label>
                        <input type="text" id="pbinv_nopenawaran" name="pbinv_nopenawaran" value="<?php echo $detail['pbinv_nopenawaran']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_to">Ditujukan Ke:</label>
                        <input type="text"   id="pbinv_to" name="pbinv_to" value="<?php echo $detail['pbinv_to']; ?>" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_alamat">Alamat:</label>
                        <textarea id="pbinv_alamat" name="pbinv_alamat"><?php echo $detail['pbinv_alamat']; ?></textarea>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_totaltagihan">Total Tagihan:</label>
                        <input type="text" id="pbinv_totaltagihan" name="pbinv_totaltagihan" value="<?php echo $detail['pbinv_totaltagihan']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_terbilang">Terbilang:</label>
                        <input type="text" id="pbinv_terbilang" name="pbinv_terbilang" value="<?php echo $detail['pbinv_terbilang']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_description">Deskripsi:</label>
                        <textarea id="pbinv_description" name="pbinv_description"><?php echo $detail['pbinv_description']; ?></textarea>
                      </div> <!-- /field -->

                      <div class="field">
                    <label for="uploadfile">Upload File:</label>
                      <img src="<?php echo site_url('/'); ?>assets/images/<?php echo $detail['uploadfile']; ?>" width="100px">

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
                       <?php foreach($invoice as $inv): ?>
                        <div class="field">
                            <label for="pbinvd_jenisbarang">Jenis Barang:</label>
                            <select name="pbinvd_jenisbarang[]" id="pbinvd_jenisbarang[]" />
                               <?php foreach($option_barang as $value): ?>
                              <option value="<?php echo $value['value']; ?>" <?php echo ($inv->pbinvd_jenisbarang == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                              <?php endforeach; ?>
                            </select>
                        </div> <!-- /field -->

                        <div class="field">
                            <label for="pbinvd_jumlah">Volume:</label>
                            <input id="pbinvd_jumlah[]" name="pbinvd_jumlah[]" value="<?php echo $inv->pbinvd_jumlah; ?>"/>
                        </div> <!-- /field -->
                        <input type="hidden" name="pbinvd_id[]" value="<?php echo $inv->pbinvd_id; ?>" />
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
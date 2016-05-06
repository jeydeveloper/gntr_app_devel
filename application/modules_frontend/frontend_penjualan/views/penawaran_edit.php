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
              <h3>Form Edit Penawaran</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="<?php echo ($module_base_url_penawaran . '/edit/' . $detail['ppnw_id']); ?>" method="post">
                <input type="hidden" name="ppnw_id" value="<?php echo $detail['ppnw_id']; ?>" />
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="ppnw_no_penawaran">No Penawaran</label>
                    <input id="ppnw_no_penawaran" name="ppnw_no_penawaran" placeholder="No Penawaran" value="<?php echo $detail['ppnw_no_penawaran']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_no_pemesanan">No Pemesanan</label>
                    <input id="ppnw_no_pemesanan" name="ppnw_no_pemesanan" placeholder="No Pemesanan" value="<?php echo $detail['ppnw_no_pemesanan']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_proj_id">Client</label>
                    <select name="ppnw_clnt_id" id="ppnw_clnt_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_client as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['ppnw_clnt_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_status">Status</label>
                    <select name="ppnw_status" id="ppnw_status" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['status_penjualan'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['ppnw_status'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_diskon">Diskon</label>
                    <input id="ppnw_diskon" name="ppnw_diskon" placeholder="Diskon" value="<?php echo $detail['ppnw_diskon']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_pajak">Pajak</label>
                    <input id="ppnw_pajak" name="ppnw_pajak" placeholder="Pajak" value="<?php echo $detail['ppnw_pajak']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_biaya_kirim">Biaya Kirim</label>
                    <input id="ppnw_biaya_kirim" name="ppnw_biaya_kirim" placeholder="Biaya Kirim" value="<?php echo $detail['ppnw_biaya_kirim']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_nilai_faktur">Nilai Faktur</label>
                    <input id="ppnw_nilai_faktur" name="ppnw_nilai_faktur" placeholder="Nilai Faktur" value="<?php echo $detail['ppnw_nilai_faktur']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_keterangan">Keterangan</label>
                    <textarea id="ppnw_keterangan" name="ppnw_keterangan" placeholder="Keterangan"><?php echo $detail['ppnw_keterangan']; ?></textarea>
                  </div> <!-- /field -->
                                
                </div> <!-- /form-fields -->
                
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
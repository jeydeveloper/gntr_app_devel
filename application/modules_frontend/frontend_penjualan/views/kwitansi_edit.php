<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_kwitansi.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Edit Kwitansi</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart($module_base_url_kwitansi . '/edit/' . $detail['pjkw_id']);?>
                <input type="hidden" name="pjkw_id" value="<?php echo $detail['pjkw_id']; ?>" />

                <div class="form-fields">

                  <div class="field">
                    <label for="pjkw_pjinv_id">Referensi</label>
                    <select name="pjkw_pjinv_id" id="pjkw_pjinv_id" required />
                      <option value="">--Pilih--</option>
                      <?php foreach($option_referensi as $value): ?>
                        <option value="<?php echo $value['pjinv_id']; ?>" <?php echo ($detail['pjkw_pjinv_id'] == $value['pjinv_id'] ? 'selected' : ''); ?>><?php echo $value['pjinv_noinvoice']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pjkw_no">No Kwitansi</label>
                    <input id="pjkw_no" name="pjkw_no" value="<?php echo $detail['pjkw_no']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pjkw_dari">Terima Dari: </label>
                    <input id="pjkw_dari" name="pjkw_dari" value="<?php echo $detail['pjkw_dari']; ?>" />
                  </div> <!-- /field -->

                   <div class="field">
                    <label for="pjkw_alamat">Pembayaran: </label>
                    <textarea id="pjkw_alamat" name="pjkw_alamat">
                        <?php echo $detail['pjkw_alamat']; ?>
                    </textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pjkw_notlpn">No Telp.: </label>
                    <input id="pjkw_notlpn" name="pjkw_notlpn" value="<?php echo $detail['pjkw_notlpn']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pjkw_total">Total:</label>
                    <input id="pjkw_total" name="pjkw_total" value="<?php echo $detail['pjkw_total']; ?>" />
                  </div> <!-- /field -->
                  <div class="field">
                    <label for="pjkw_norek">No Rekening: </label>
                    <input id="pjkw_norek" name="pjkw_norek" value="<?php echo $detail['pjkw_norek']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pjkw_an">Rek. Atas Nama: </label>
                    <input id="pjkw_an" name="pjkw_an" value="<?php echo $detail['pjkw_an']; ?>" />
                  </div> <!-- /field -->


                  <div class="field">
                    <label for="pjkw_bank">Nama Bank</label>
                    <input id="pjkw_bank" name="pjkw_bank" value="<?php echo $detail['pjkw_bank']; ?>" />
                  </div> <!-- /field -->

                  <div class="field" style="display: none;">
                    <label for="uploadfile">Upload File:</label>
                      <img src="<?php echo site_url('/'); ?>assets/images/<?php echo $detail['uploadfile']; ?>" width="100px">

                    <input type="file" class="form-control-file" name="uploadfile" id="uploadfile">
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
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
              <?php echo form_open_multipart($module_base_url.'/kwitansi/edit/' . $detail['pbkw_id']);?>
                <input type="hidden" name="pbkw_id" value="<?php echo $detail['pbkw_id']; ?>" />

                <div class="form-fields">

                  <div class="field">
                    <label for="pbkw_pbptn_id">Referensi</label>
                    <select name="pbkw_pbptn_id" id="pbkw_pbptn_id" required />
                      <option value="">--Pilih--</option>
                      <?php foreach($option_referensi as $value): ?>
                        <option value="<?php echo $value['pbptn_id']; ?>" <?php echo ($detail['pbkw_pbptn_id'] == $value['pbptn_id'] ? 'selected' : ''); ?>><?php echo $value['pbptn_no']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_no">No Kwitansi</label>
                    <input id="pbkw_no" name="pbkw_no" value="<?php echo $detail['pbkw_no']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_dari">Terima Dari: </label>
                    <input id="pbkw_dari" name="pbkw_dari" value="<?php echo $detail['pbkw_dari']; ?>" />
                  </div> <!-- /field -->

                   <div class="field">
                    <label for="pbkw_alamat">Pembayaran: </label>
                    <textarea id="pbkw_alamat" name="pbkw_alamat">
                        <?php echo $detail['pbkw_alamat']; ?>
                    </textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_notlpn">No Telp.: </label>
                    <input id="pbkw_notlpn" name="pbkw_notlpn" value="<?php echo $detail['pbkw_notlpn']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_total">Total:</label>
                    <input id="pbkw_total" name="pbkw_total" value="<?php echo $detail['pbkw_total']; ?>" />
                  </div> <!-- /field -->
                  <div class="field">
                    <label for="pbkw_norek">No Rekening: </label>
                    <input id="pbkw_norek" name="pbkw_norek" value="<?php echo $detail['pbkw_norek']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_an">Rek. Atas Nama: </label>
                    <input id="pbkw_an" name="pbkw_an" value="<?php echo $detail['pbkw_an']; ?>" />
                  </div> <!-- /field -->


                  <div class="field">
                    <label for="pbkw_bank">Nama Bank</label>
                    <input id="pbkw_bank" name="pbkw_bank" value="<?php echo $detail['pbkw_bank']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
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
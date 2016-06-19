<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_gaji.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Edit</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="<?php echo ($module_base_url_gaji . '/edit/' . $detail['kygj_id']); ?>" method="post">
                <input type="hidden" name="kygj_id" value="<?php echo $detail['kygj_id']; ?>" />
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="kygj_kary_id">Karyawan</label>
                    <select name="kygj_kary_id" id="kygj_kary_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_karyawan as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['kygj_kary_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kygj_gaji_pokok">Gaji Pokok</label>
                    <input id="kygj_gaji_pokok" name="kygj_gaji_pokok" placeholder="Gaji Pokok" value="<?php echo $detail['kygj_gaji_pokok']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kygj_tunjangan">Tunjangan</label>
                    <input id="kygj_tunjangan" name="kygj_tunjangan" placeholder="Tunjangan" value="<?php echo $detail['kygj_tunjangan']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kygj_lembur">Lembur</label>
                    <input id="kygj_lembur" name="kygj_lembur" placeholder="Lembur" value="<?php echo $detail['kygj_lembur']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kygj_uang_makan">Uang Makan</label>
                    <input id="kygj_uang_makan" name="kygj_uang_makan" placeholder="Uang Makan" value="<?php echo $detail['kygj_uang_makan']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kygj_transport">Transport</label>
                    <input id="kygj_transport" name="kygj_transport" placeholder="Transport" value="<?php echo $detail['kygj_transport']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kygj_bonus">Bonus</label>
                    <input id="kygj_bonus" name="kygj_bonus" placeholder="Bonus" value="<?php echo $detail['kygj_bonus']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kygj_pinjaman">Pinjaman</label>
                    <input id="kygj_pinjaman" name="kygj_pinjaman" placeholder="Pinjaman" value="<?php echo $detail['kygj_pinjaman']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kygj_lain_lain">Lain-lain</label>
                    <input id="kygj_lain_lain" name="kygj_lain_lain" placeholder="Lain-lain" value="<?php echo $detail['kygj_lain_lain']; ?>" required />
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
<!-- /main -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_bukti_pembayaran.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Edit Bukti Pembayaran Penjualan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart($module_base_url_bukti_pembayaran. '/edit/' . $detail['pbktp_id']);?>
                <input type="hidden" name="pbktp_id" value="<?php echo $detail['pbktp_id']; ?>" />
                
                
                <div class="form-fields">

                  <div class="field">
                    <label for="pbktp_pttr_id">Referensi</label>
                    <select name="pbktp_pttr_id" id="pbktp_pttr_id" required />
                      <option value="">--Pilih--</option>
                      <?php foreach($option_referensi as $value): ?>
                        <option value="<?php echo $value['pttr_id']; ?>" <?php echo ($detail['pbktp_pttr_id'] == $value['pttr_id'] ? 'selected' : ''); ?>><?php echo $value['pttr_no']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbktp_tgltransaksi">Tgl Transaksi:</label>
                    <input id="pbktp_tgltransaksi" class="date-picker" name="pbktp_tgltransaksi" value="<?php echo $detail['pbktp_tgltransaksi']; ?>" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbktp_notransaksi">No. Transaksi</label>  
                    <input type="text"  id="pbktp_notransaksi" name="pbktp_notransaksi" value="<?php echo $detail['pbktp_notransaksi']; ?>"  />
                  </div> <!-- /field -->
                  
                  
                  <div class="field">
                    <label for="phone">Tranfer ke Rekening</label>
                    <select name="pbktp_norekening" id="pbktp_norekening" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['bank'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['pbktp_norekening'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbktp_namakonsultan">Nama Konsultan:</label>
                    <input type="text" id="pbktp_namakonsultan" name="pbktp_namakonsultan" value="<?php echo $detail['pbktp_namakonsultan']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_noinvoice">No. Invoice</label>
                    <input type="text" id="pbktp_noinvoice" name="pbktp_noinvoice" value="<?php echo $detail['pbktp_noinvoice']; ?>" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbktp_totaltagihan">Total Tagihan</label>
                    <input type="text" id="pbktp_totaltagihan" name="pbktp_totaltagihan" value="<?php echo $detail['pbktp_totaltagihan']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_terbilang">Terbilang</label>
                    <textarea id="pbktp_terbilang" name="pbktp_terbilang"><?php echo $detail['pbktp_terbilang']; ?></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_jenistransaksi">Jenis Transaksi</label>
                    <textarea id="pbktp_jenistransaksi" name="pbktp_jenistransaksi"><?php echo $detail['pbktp_jenistransaksi']; ?></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_jamtransaksi">Jam Transaksi:</label>
                    <input type="text"  class="time ui-timepicker-input" id="pbktp_jamtransaksi" name="pbktp_jamtransaksi" value="<?php echo $detail['pbktp_jamtransaksi']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_channel">Channel:</label>
                    <textarea id="pbktp_channel" name="pbktp_channel"><?php echo $detail['pbktp_jenistransaksi']; ?></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_userid">User ID:</label>
                    <textarea id="pbktp_userid" name="pbktp_userid"><?php echo $detail['pbktp_userid']; ?></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppmt_uploadfile">Upload File:</label>
                      <img src="<?php echo site_url('/'); ?>assets/images/<?php echo $detail['pbktp_uploadfile']; ?>" width="100px">
                   
                    <input type="file" class="form-control-file" name="uploadfile" id="uploadfile">
                  </div> <!-- /field -->

                  <div class="form-actions">
                  <div class="pull-right">
                    <button type="reset" class="button btn btn-default btn-large">Reset</button>
                    <button type="submit" class="button btn btn-primary btn-large">Submit</button>
                  </div>
                </div> <!-- .actions -->
                  
                </div> <!-- /form-fields -->
                
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
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
              <h3>Bukti Pembayaran Penjualan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart('');?>
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="pbktp_tgltransaksi">Tgl Transaksi:</label>
                    <input id="pbktp_tgltransaksi" class="date-picker" name="pbktp_tgltransaksi" value="" placeholder="Tgl Transaksi" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbktp_notransaksi">No. Transaksi</label>  
                    <input type="text"  id="pbktp_notransaksi" name="pbktp_notransaksi" value="" placeholder="No Transaksi" />
                  </div> <!-- /field -->
                  
                  
                  <div class="field">
                    <label for="phone">No. Rekening:</label>
                    <input type="text"  id="pbktp_norekening" name="pbktp_norekening" value="" placeholder="No. Rekening"/>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbktp_namakonsultan">Nama Konsultan:</label>
                    <input type="text" id="pbktp_namakonsultan" name="pbktp_namakonsultan" value="" placeholder="Nama Konsultan"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_noinvoice">No. Invoice</label>
                    <input type="text" id="pbktp_noinvoice" name="pbktp_noinvoice" value="" placeholder="No Invoice"/>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbktp_totaltagihan">Total Tagihan</label>
                    <input type="text" id="pbktp_totaltagihan" name="pbktp_totaltagihan" value="" placeholder="Total Tagihan"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_terbilang">Terbilang</label>
                    <textarea id="pbktp_terbilang" name="pbktp_terbilang" value="" placeholder="Terbilang"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_jenistransaksi">Jenis Transaksi</label>
                    <textarea id="pbktp_jenistransaksi" name="pbktp_jenistransaksi" value="" placeholder="Jenis Transaksi"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_jamtransaksi">Jam Transaksi:</label>
                    <input  type="text" id="pbktp_jamtransaksi" name="pbktp_jamtransaksi" type="text" class="time ui-timepicker-input" autocomplete="off">
                
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_channel">Channel:</label>
                    <textarea id="pbktp_channel" name="pbktp_channel" value="" placeholder="Channel"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_userid">User ID:</label>
                    <textarea id="pbktp_userid" name="pbktp_userid" value="" placeholder="User ID"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_uploadfile">Upload File:</label>
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

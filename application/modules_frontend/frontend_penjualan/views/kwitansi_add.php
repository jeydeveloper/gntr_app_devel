<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_kwitansi.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
            <!-- /widget-header -->
            <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Add Kwitansi</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart('');?>

                <div class="form-fields">

                  <div class="field">
                    <label for="pjkw_no">No Kwitansi</label>
                    <input id="pjkw_no" name="pjkw_no" placeholder="No Kwitansi" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pjkw_dari">Terima Dari: </label>
                    <input id="pjkw_dari" name="pjkw_dari" placeholder="Sudah terima dari" />
                  </div> <!-- /field -->

                   <div class="field">
                    <label for="pjkw_alamat">Pembayaran: </label>
                    <textarea id="pjkw_alamat" name="pjkw_alamat" placeholder="Untuk Pembayaran">

                    </textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pjkw_notlpn">No Telp.: </label>
                    <input id="pjkw_notlpn" name="pjkw_notlpn" placeholder="Alamat"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pjkw_total">Total:</label>
                    <input id="pjkw_total" name="pjkw_total" placeholder="Total" />
                  </div> <!-- /field -->
                  <div class="field">
                    <label for="pjkw_norek">No Rekening: </label>
                    <input id="pjkw_norek" name="pjkw_norek" placeholder="Nama Bank" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pjkw_an">Rek. Atas Nama: </label>
                    <input id="pjkw_an" name="pjkw_an" placeholder="Atas nama" />
                  </div> <!-- /field -->


                  <div class="field">
                    <label for="pjkw_bank">Nama Bank</label>
                    <input id="pjkw_bank" name="pjkw_bank" placeholder="Nama Bank" />
                  </div> <!-- /field -->

                  <div class="field" style="display: none;">
                    <label for="pjkw_uploadfile">Upload File:</label>
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
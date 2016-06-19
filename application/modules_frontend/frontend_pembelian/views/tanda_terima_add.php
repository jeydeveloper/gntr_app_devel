<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_tanda_terima.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Add Tanda Terima</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart('');?>

                <div class="form-fields">

                  <div class="field">
                    <label for="pbttr_no">No:</label>
                    <input id="pbttr_no" name="pbttr_no" value="" placeholder="No" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbttr_noproyek">No. Proyek</label>
                    <input id="pbttr_noproyek" name="pbttr_noproyek" value="" placeholder="No.Proyek" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="phone">Tagihan Dari</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_tghndari" value="Subcontractor">Subcontractor</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_tghndari" value="Supplier">Supplier</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_tghndari" value="Lain Lain">Lain Lain</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_tghndari" value="">Telepon</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_tghndari" value="Telepon">Fax</label>
                    <input id="pbcr_tagihan" name="pbttr_tagihan" value="" placeholder="Tagihan Dari" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="phone">Nilai Tagihan</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_mtuang" value="Rp">Rp</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_mtuang" value="US$">US$</label>
                    <input id="pbttr_nilaitagihan" name="pbttr_nilaitagihan" placeholder="Nilai Tagihan" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="note">Lampiran</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran" value="Kwitansi Asli">Kwitansi Asli</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran" value="Invoice Asli">nvoice Asli</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran" value="Faktur Pajak Asli">Faktur Pajak Asli</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran" value="Surat Jalan Asli">Surat Jalan Asli</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran" value="Tanda Terima Asli + Quality Control Approval">Tanda Terima Asli + Quality Control Approval</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran" value="Purchase Order Asli/SPK"></label>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="note">Lampiran</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Dikembalikan, untuk dimasukkan kembali tanggal<input id="pbttr_tglkembali" class="date-picker" name="pbttr_tglkembali" value="" placeholder="tanggal" />karena lampiran tidak lengkap</label>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="address">No. BPKC</label>
                    <input id="pbttr_nobpkc" name="pbttr_nobpkc" value="" placeholder="No. BPKC" /></br>
                    <input id="pbttr_tglbpkc" name="pbttr_tglbpkc" class="date-picker" value="" placeholder="Tanggal" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="address">Yang menerima</label>
                    <input id="pbttr_menerima" name="pbttr_menerima" value="" placeholder="Yang menerima" /></br>
                    <input id="pbttr_tglterima" class="date-picker" name="pbttr_tglterima" value="" placeholder="Tanggal" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppmt_uploadfile">Upload File:</label>
                    <input type="file" class="form-control-file" name="uploadfile" id="uploadfile">
                    <small class="text-muted">Upload hardcopy tanda terima.</small>
                  </div> <!-- /field -->

                  <div class="form-actions">
                  <div class="pull-right">
                    <button type="reset" class="button btn btn-default btn-large">Reset</button>
                    <button class="button btn btn-primary btn-large"><a href="print_tanda_terima.html"></a> Submit</button>
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
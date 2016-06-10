<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_berita_acara.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Edit Berita Acara</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart($module_base_url_berita_acara. '/edit/' . $detail['pbcr_id']);?>
                <input type="hidden" name="pbcr_id" value="<?php echo $detail['pbcr_id']; ?>" />
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="pbcr_no">No:</label>
                    <input id="pbcr_no" name="pbcr_no" value="<?php echo $detail['pbcr_no']; ?>" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbcr_noproyek">No. Proyek</label>  
                    <input id="pbcr_noproyek" name="pbcr_noproyek" value="<?php echo $detail['pbcr_noproyek']; ?>" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="phone">Tagihan Dari</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_tghndari" value="Subcontractor">Subcontractor</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_tghndari" value="Supplier">Supplier</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_tghndari" value="Lain Lain">Lain Lain</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_tghndari" value="">Telepon</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_tghndari" value="Telepon">Fax</label>
                    <input id="pbcr_tagihan" name="pbcr_tagihan" value="<?php echo $detail['pbcr_tagihan']; ?>"/>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="phone">Nilai Tagihan</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_mtuang" value="Rp">Rp</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_mtuang" value="US$">US$</label>
                    <input id="pbcr_nilaitagihan" name="pbcr_nilaitagihan" value="<?php echo $detail['pbcr_nilaitagihan']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="note">Lampiran</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_lampiran" value="Kwitansi Asli">Kwitansi Asli</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_lampiran" value="Invoice Asli">nvoice Asli</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_lampiran" value="Faktur Pajak Asli">Faktur Pajak Asli</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_lampiran" value="Surat Jalan Asli">Surat Jalan Asli</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_lampiran" value="Tanda Terima Asli + Quality Control Approval">Tanda Terima Asli + Quality Control Approval</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pbcr_lampiran" value="Purchase Order Asli/SPK"></label>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="note">Lampiran</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Dikembalikan, untuk dimasukkan kembali tanggal<input id="pbcr_tglkembali" class="date-picker" name="pbcr_tglkembali" value="<?php echo $detail['pbcr_tglkembali']; ?>"  />karena lampiran tidak lengkap</label>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="address">No. BPKC</label>  
                    <input id="pbcr_nobpkc" name="pbcr_nobpkc" value="<?php echo $detail['pbcr_nobpkc']; ?>"  placeholder="No. BPKC" /></br>
                    <input id="pbcr_tglbpkc" name="pbcr_tglbpkc" class="date-picker" value="<?php echo $detail['pbcr_tglbpkc']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="address">Yang menerima</label>  
                    <input id="pbcr_menerima" name="pbcr_menerima" value="<?php echo $detail['pbcr_menerima']; ?>" placeholder="Yang menerima" /></br>
                    <input id="pbcr_tglterima" class="date-picker" name="pbcr_tglterima" value="<?php echo $detail['pbcr_tglterima']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppmt_uploadfile">Upload File:</label>
                      <img src="<?php echo site_url('/'); ?>assets/images/<?php echo $detail['pbcr_uploadfile']; ?>" width="100px">
                   
                    <input type="file" class="form-control-file" name="uploadfile" id="uploadfile">
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
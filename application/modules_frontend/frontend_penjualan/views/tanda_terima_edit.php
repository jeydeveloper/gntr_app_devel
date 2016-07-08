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
              <h3>Form Edit Tanda Terima</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart($module_base_url_tanda_terima. '/edit/' . $detail['pttr_id']);?>
                <input type="hidden" name="pttr_id" value="<?php echo $detail['pttr_id']; ?>" />
                
                <div class="form-fields">

                  <div class="field">
                    <label for="pttr_pbcr_id">Referensi</label>
                    <select name="pttr_pbcr_id" id="pttr_pbcr_id" required />
                      <option value="">--Pilih--</option>
                      <?php foreach($option_referensi as $value): ?>
                        <option value="<?php echo $value['pbcr_id']; ?>" <?php echo ($detail['pttr_pbcr_id'] == $value['pbcr_id'] ? 'selected' : ''); ?>><?php echo $value['pbcr_no']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pttr_no">No:</label>
                    <input id="pttr_no" name="pttr_no" value="<?php echo $detail['pttr_no']; ?>" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pttr_noproyek">No. Proyek</label>  
                    <input id="pttr_noproyek" name="pttr_noproyek" value="<?php echo $detail['pttr_noproyek']; ?>" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="phone">Tagihan Dari</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_tghndari" value="Subcontractor">Subcontractor</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_tghndari" value="Supplier">Supplier</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_tghndari" value="Lain Lain">Lain Lain</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_tghndari" value="">Telepon</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_tghndari" value="Telepon">Fax</label>
                    <input id="pttr_tagihan" name="pttr_tagihan" value="<?php echo $detail['pttr_tagihan']; ?>"/>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="phone">Nilai Tagihan</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_mtuang" value="Rp">Rp</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_mtuang" value="US$">US$</label>
                    <input id="pttr_nilaitagihan" name="pttr_nilaitagihan" value="<?php echo $detail['pttr_nilaitagihan']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="note">Lampiran</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_lampiran" value="Kwitansi Asli">Kwitansi Asli</label> 
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_lampiran" value="Invoice Asli">nvoice Asli</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_lampiran" value="Faktur Pajak Asli">Faktur Pajak Asli</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_lampiran" value="Surat Jalan Asli">Surat Jalan Asli</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_lampiran" value="Tanda Terima Asli + Quality Control Approval">Tanda Terima Asli + Quality Control Approval</label>
                    <label class="checkbox-inline"><input type="checkbox" name="pttr_lampiran" value="Purchase Order Asli/SPK"></label>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="note">Lampiran</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Dikembalikan, untuk dimasukkan kembali tanggal<input id="pttr_tglkembali" class="date-picker" name="ppttr_tglkembali" value="<?php echo $detail['pttr_tglkembali']; ?>"  />karena lampiran tidak lengkap</label>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="address">No. BPKC</label>  
                    <input id="pttr_nobpkc" name="pttr_nobpkc" value="<?php echo $detail['pttr_nobpkc']; ?>"  placeholder="No. BPKC" /></br>
                    <input id="pttr_tglbpkc" name="pttr_tglbpkc" class="date-picker" value="<?php echo $detail['pttr_tglbpkc']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="address">Yang menerima</label>  
                    <input id="pttr_menerima" name="pttr_menerima" value="<?php echo $detail['pttr_menerima']; ?>" placeholder="Yang menerima" /></br>
                    <input id="pttr_tglterima" class="date-picker" name="pttr_tglterima" value="<?php echo $detail['pttr_tglterima']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pttr_uploadfile">Upload File:</label>
                      <img src="<?php echo site_url('/'); ?>assets/images/<?php echo $detail['pttr_uploadfile']; ?>" width="100px">
                   
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
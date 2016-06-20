<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_permintaan.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Edit Permintaan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <?php echo form_open_multipart($module_base_url_permintaan . '/edit/' . $detail['ppmt_id']);?>
                <input type="hidden" name="ppmt_id" value="<?php echo $detail['ppmt_id']; ?>" />
                <div class="form-fields">

                  <div class="field">
                    <label for="name">Tanggal:</label>
                    <input type="text" name="ppmt_tanggal" name="ppmt_tanggal" class="date-picker" value="<?php echo $detail['ppmt_tanggal']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="address">No. SO:</label>
                    <input type="text"  name="ppmt_noso" value="<?php echo $detail['ppmt_noso']; ?>" />
                  </div> <!-- /field -->


                <div class="field">
                    <label for="ppmt_clnt_id">Nama Pelanggan</label>
                    <select name="ppmt_clnt_id" id="ppmt_clnt_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_client as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['ppmt_clnt_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->


                  <div class="field">
                    <label for="ppmt_status">Status</label>
                    <select name="ppmt_status" id="ppmt_status" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['status_penjualan'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['ppmt_status'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">No. PO:</label>
                    <input type="text"  name="ppmt_nopo" value="<?php echo $detail['ppmt_nopo']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Diskon:</label>
                    <input type="text"  name="ppmt_diskon" value="<?php echo $detail['ppmt_diskon']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Pajak:</label>
                    <input type="text"  name="ppmt_pajak" value="<?php echo $detail['ppmt_pajak']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Biaya Kirim:</label>
                    <input type="text" name="ppmt_biayakirim" value="<?php echo $detail['ppmt_biayakirim']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppmt_nilaifaktur">Nilai Faktur:</label>
                    <input type="text" name="ppmt_nilaifaktur" value="<?php echo $detail['ppmt_nilaifaktur']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Uang Muka:</label>
                    <input type="text" name="ppmt_uangmuka" value="<?php echo $detail['ppmt_biayakirim']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Keterangan:</label>
                    <input type="text" name="ppmt_keterangan" value="<?php echo $detail['ppmt_keterangan']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppmt_uploadfile">Upload File:</label>
                      <img src="<?php echo site_url('/'); ?>assets/images/<?php echo $detail['ppmt_fileupload']; ?>" width="100px">
                   
                    <input type="file" class="form-control-file" name="uploadfile" id="uploadfile">
                  </div> <!-- /field -->

                </div> <!-- /form-fields -->

                <div class="form-actions">
                  <div class="pull-right">
                    <button type="reset" class="button btn btn-default btn-large">Reset</button>
                    <button class="button btn btn-primary btn-large">Submit</button>
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
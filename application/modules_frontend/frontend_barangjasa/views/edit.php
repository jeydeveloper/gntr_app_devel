<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Edit</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['brjs_id']); ?>" method="post">
                <input type="hidden" name="brjs_id" value="<?php echo $detail['brjs_id']; ?>" />
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="brjs_nama">Nama</label>
                    <input id="brjs_nama" name="brjs_nama" placeholder="Nama" value="<?php echo $detail['brjs_nama']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_kategori_id">Kategori</label>
                    <select name="brjs_kategori_id" id="brjs_kategori_id" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['barjas_kategori'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['brjs_kategori_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_jenis_id">Jenis</label>
                    <select name="brjs_jenis_id" id="brjs_jenis_id" /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['barjas_jenis'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['brjs_jenis_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_volume">Volume</label>
                    <input id="brjs_volume" name="brjs_volume" placeholder="Volume" value="<?php echo $detail['brjs_volume']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_satuan_id">Satuan</label>
                    <select name="brjs_satuan_id" id="brjs_satuan_id" /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['barjas_satuan'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['brjs_satuan_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_harga_satuan">Harga Satuan</label>
                    <input id="brjs_harga_satuan" name="brjs_harga_satuan" placeholder="Harga Satuan" value="<?php echo $detail['brjs_harga_satuan']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_over_project">Over Project</label>
                    <input id="brjs_over_project" name="brjs_over_project" placeholder="Nama" value="<?php echo $detail['brjs_over_project']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_vndr_id">Vendor</label>
                    <select name="brjs_vndr_id" id="brjs_vndr_id" /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($data_source['vendor'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['brjs_vndr_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
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
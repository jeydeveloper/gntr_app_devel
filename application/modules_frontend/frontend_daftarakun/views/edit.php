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
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['akun_id']); ?>" method="post">
                <input type="hidden" name="akun_id" value="<?php echo $detail['akun_id']; ?>" />
                <div class="form-fields">

                  <div class="field">
                    <label for="akun_parent">Parent</label>
                    <select name="akun_parent" id="akun_parent" /> 
                      <option value="">Parent</option>
                      <?php foreach($data_source['parent'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['akun_parent'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="akun_nomor">No</label>
                    <input id="akun_nomor" name="akun_nomor" placeholder="Nomor" value="<?php echo $detail['akun_nomor']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="akun_nama">Nama</label>
                    <input id="akun_nama" name="akun_nama" placeholder="Nama" value="<?php echo $detail['akun_nama']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="akun_tipe_id">Tipe</label>
                    <select name="akun_tipe_id" id="akun_tipe_id" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['akun_tipe'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['akun_tipe_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
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
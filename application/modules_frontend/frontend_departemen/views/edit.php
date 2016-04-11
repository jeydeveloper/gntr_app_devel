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
              <h3>Departemen New</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['dprt_id']); ?>" method="post">
                <input type="hidden" name="dprt_id" value="<?php echo $detail['dprt_id']; ?>" />
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="dprt_nama">Nama Departemen</label>
                    <input id="dprt_nama" name="dprt_nama" value="<?php echo $detail['dprt_nama']; ?>" placeholder="Nama Departemen" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="dprt_manager">Nama Manager</label>
                    <input id="dprt_manager" name="dprt_manager" value="<?php echo $detail['dprt_manager']; ?>" placeholder="Nama Manager"/>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="dprt_tugas">Tugas</label>
                    <textarea id="dprt_tugas" name="dprt_tugas" placeholder="Tugas"><?php echo $detail['dprt_tugas']; ?></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="dprt_status">Status</label>
                    <select name="dprt_status" id="dprt_status" required /> 
                      <?php foreach($option_status as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['dprt_status'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
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
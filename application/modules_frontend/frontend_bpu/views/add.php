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
              <h3>Form Add</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="" method="post">
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="bpu_nama">Nama</label>
                    <input id="bpu_nama" name="bpu_nama" placeholder="Nama" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpu_harga">Harga</label>
                    <input id="bpu_harga" name="bpu_harga" placeholder="Harga" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpu_terbilang">Terbilang</label>
                    <input id="bpu_terbilang" name="bpu_terbilang" placeholder="Terbilang" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpu_proj_id">Project</label>
                    <select name="bpu_proj_id" id="bpu_proj_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_project as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
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
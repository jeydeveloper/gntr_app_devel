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
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['mtua_id']); ?>" method="post">
                <input type="hidden" name="mtua_id" value="<?php echo $detail['mtua_id']; ?>" />
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="mtua_nama">Nama</label>
                    <input id="mtua_nama" name="mtua_nama" placeholder="Nama" value="<?php echo $detail['mtua_nama']; ?>" required />
                  </div> <!-- /field -->
                                
                </div> <!-- /form-fields -->

                <div class="form-fields">
                  
                  <div class="field">
                    <label for="mtua_nilaitukar">Nilai Tukar</label>
                    <input id="mtua_nilaitukar" name="mtua_nilaitukar" placeholder="Nilai Tukar" value="<?php echo $detail['mtua_nilaitukar']; ?>" required />
                  </div> <!-- /field -->
                                
                </div> <!-- /form-fields -->

                <div class="form-fields">
                  
                  <div class="field">
                    <label for="mtua_negara">Negara</label>
                    <input id="mtua_negara" name="mtua_negara" placeholder="Negara" value="<?php echo $detail['mtua_negara']; ?>" required />
                  </div> <!-- /field -->
                                
                </div> <!-- /form-fields -->

                <div class="form-fields">
                  
                  <div class="field">
                    <label for="mtua_simbol">Simbol</label>
                    <input id="mtua_simbol" name="mtua_simbol" placeholder="Simbol" value="<?php echo $detail['mtua_simbol']; ?>" required />
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
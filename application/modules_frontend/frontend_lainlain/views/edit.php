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
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['sham_id']); ?>" method="post">
                <input type="hidden" name="sham_id" value="<?php echo $detail['sham_id']; ?>" />
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="sham_nama">Nama Pemilik</label>
                    <input id="sham_nama" name="sham_nama" placeholder="Nama Pemilik" value="<?php echo $detail['sham_nama']; ?>" required />
                  </div> <!-- /field -->
                                
                </div> <!-- /form-fields -->

                <div class="form-fields">
                  
                  <div class="field">
                    <label for="sham_alamat">Alamat</label>
                    <textarea id="sham_alamat" name="sham_alamat" placeholder="Alamat" required><?php echo $detail['sham_alamat']; ?></textarea>
                  </div> <!-- /field -->
                                
                </div> <!-- /form-fields -->

                <div class="form-fields">
                  
                  <div class="field">
                    <label for="sham_persentase">Persentase</label>
                    <input id="sham_persentase" name="sham_persentase" placeholder="Persentase" value="<?php echo $detail['sham_persentase']; ?>" required />
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
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
              <form action="" method="post">
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="proj_nama">Nama Project</label>
                    <input id="proj_nama" name="proj_nama" placeholder="Nama Project" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_clnt_id">Client</label>
                    <select name="proj_clnt_id" id="proj_clnt_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_client as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_list_barang">Barang</label>
                    <select name="proj_list_barang" id="proj_list_barang" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_barangjasa as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_vndr_id">Vendor</label>
                    <select name="proj_vndr_id" id="proj_vndr_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_vendor as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_nilai">Nilai Proyek</label>
                    <input id="proj_nilai" name="proj_nilai" placeholder="Nilai Proyek" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_jangka_waktu">Jangka Waktu Proyek</label>
                    <input id="proj_jangka_waktu" name="proj_jangka_waktu" placeholder="Jangka Waktu Proyek" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_cp_client">CP Client</label>
                    <input id="proj_cp_client" name="proj_cp_client" placeholder="CP Client" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_telpon_client">Telpon Client</label>
                    <input id="proj_telpon_client" name="proj_telpon_client" placeholder="Telpon Client" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_cp_vendor">CP Vendor</label>
                    <input id="proj_cp_vendor" name="proj_cp_vendor" placeholder="CP Vendor" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_telpon_vendor">Telpon Vendor</label>
                    <input id="proj_telpon_vendor" name="proj_telpon_vendor" placeholder="Telpon Vendor" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_status">Status</label>
                    <select name="proj_status" id="proj_status" required /> 
                      <?php foreach($static_data_source['status_project'] as $value): ?>
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
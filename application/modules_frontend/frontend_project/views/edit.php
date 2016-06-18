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
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['proj_id']); ?>" method="post">
                <input type="hidden" name="proj_id" value="<?php echo $detail['proj_id']; ?>" />
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="proj_nama">Nama Project</label>
                    <input id="proj_nama" name="proj_nama" placeholder="Nama Project" value="<?php echo $detail['proj_nama']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_clnt_id">Client</label>
                    <input id="proj_clnt_id" name="proj_clnt_id" placeholder="Client" value="<?php echo $detail['proj_clnt_id']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_list_barang">Barang</label>
                    <input id="proj_list_barang" name="proj_list_barang" placeholder="Barang" value="<?php echo $detail['proj_list_barang']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_vndr_id">Vendor</label>
                    <input id="proj_vndr_id" name="proj_vndr_id" placeholder="Vendor" value="<?php echo $detail['proj_vndr_id']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_nilai">Nilai Proyek</label>
                    <input id="proj_nilai" name="proj_nilai" placeholder="Nilai Proyek" value="<?php echo $detail['proj_nilai']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_jangka_waktu">Jangka Waktu Proyek</label>
                    <input id="proj_jangka_waktu" name="proj_jangka_waktu" placeholder="Jangka Waktu Proyek" value="<?php echo $detail['proj_jangka_waktu']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_cp_client">CP Client</label>
                    <input id="proj_cp_client" name="proj_cp_client" placeholder="CP Client" value="<?php echo $detail['proj_cp_client']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_telpon_client">Telpon Client</label>
                    <input id="proj_telpon_client" name="proj_telpon_client" placeholder="Telpon Client" value="<?php echo $detail['proj_telpon_client']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_cp_vendor">CP Vendor</label>
                    <input id="proj_cp_vendor" name="proj_cp_vendor" placeholder="CP Vendor" value="<?php echo $detail['proj_cp_vendor']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_telpon_vendor">Telpon Vendor</label>
                    <input id="proj_telpon_vendor" name="proj_telpon_vendor" placeholder="Telpon Vendor" value="<?php echo $detail['proj_telpon_vendor']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_status">Status</label>
                    <select name="proj_status" id="proj_status" required /> 
                      <?php foreach($static_data_source['status_project'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['proj_status'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
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
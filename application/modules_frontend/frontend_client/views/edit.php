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
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['clnt_id']); ?>" method="post">
                <input type="hidden" name="clnt_id" value="<?php echo $detail['clnt_id']; ?>" />
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="clnt_nama">Nama</label>
                    <input id="clnt_nama" name="clnt_nama" placeholder="Nama" value="<?php echo $detail['clnt_nama']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_alamat">Alamat</label>
                    <textarea id="clnt_alamat" name="clnt_alamat" placeholder="Alamat"><?php echo $detail['clnt_alamat']; ?></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_contact_person">Contact Person</label>
                    <input id="clnt_contact_person" name="clnt_contact_person" placeholder="Contact Person" value="<?php echo $detail['clnt_contact_person']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_telpon">Telpon</label>
                    <input id="clnt_telpon" name="clnt_telpon" placeholder="Telpon" value="<?php echo $detail['clnt_telpon']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_email">Email</label>
                    <input type="email" id="clnt_email" name="clnt_email" placeholder="Email" value="<?php echo $detail['clnt_email']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_status">Status</label>
                    <select name="clnt_status" id="clnt_status" required /> 
                      <?php foreach($option_status as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['clnt_status'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
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
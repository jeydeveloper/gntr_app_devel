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
                    <label for="clnt_nama">Nama</label>
                    <input id="clnt_nama" name="clnt_nama" placeholder="Nama" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_alamat">Alamat</label>
                    <textarea id="clnt_alamat" name="clnt_alamat" placeholder="Alamat"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_contact_person">Contact Person</label>
                    <input id="clnt_contact_person" name="clnt_contact_person" placeholder="Contact Person" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_telpon">Telpon</label>
                    <input id="clnt_telpon" name="clnt_telpon" placeholder="Telpon" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_email">Email</label>
                    <input type="email" id="clnt_email" name="clnt_email" placeholder="Email" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_status">Status</label>
                    <select name="clnt_status" id="clnt_status" required /> 
                      <?php foreach($option_status as $value): ?>
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
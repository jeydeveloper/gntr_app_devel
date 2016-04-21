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
                    <label for="vndr_nama">Nama</label>
                    <input id="vndr_nama" name="vndr_nama" placeholder="Nama" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="vndr_alamat">Alamat</label>
                    <textarea id="vndr_alamat" name="vndr_alamat" placeholder="Alamat"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="vndr_contact_person">Contact Person</label>
                    <input id="vndr_contact_person" name="vndr_contact_person" placeholder="Contact Person" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="vndr_telpon">Telpon</label>
                    <input id="vndr_telpon" name="vndr_telpon" placeholder="Telpon" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="vndr_email">Email</label>
                    <input type="email" id="vndr_email" name="vndr_email" placeholder="Email" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="vndr_status">Status</label>
                    <select name="vndr_status" id="vndr_status" required /> 
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
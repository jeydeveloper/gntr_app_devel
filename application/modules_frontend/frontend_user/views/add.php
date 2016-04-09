<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar.php'); ?>
        </div>
        <!-- /span2 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Edit</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="vendor_list_submit_edit.html" method="post">
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="name">No.</label>
                    <input id="name" name="name" value="No." placeholder="No" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="cp">Nama Depan</label>
                    <input id="cp" name="cp" value="Nama Depan" placeholder="Nama Depan"/>
                  </div> <!-- /field -->
                  
                  
                  <div class="field">
                    <label for="cp">Nama Belakang</label>
                    <input id="cp" name="cp" value="Nama Belakang" placeholder="Nama Belakang"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="telpon">Username</label>
                    <input id="telpon" name="telpon" value="Username" placeholder="Username"/>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="email">Password</label>
                    <input type="email" id="email" name="email" value="password" placeholder="Password"/>
                  </div> <!-- /field -->
                                
                </div> <!-- /form-fields -->
                
                <div class="form-actions">
                  <div class="pull-right">
                    <button type="reset" class="button btn btn-default btn-large">Reset</button>
                    <button class="button btn btn-primary btn-large">Submit</button>
                  </div>
                </div> <!-- .actions -->
                
              </form>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span10 -->
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
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
              <form action="vendor_list_submit_edit.html" method="post">
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="name">No Dept.</label>
                    <input id="name" name="name" value="No Dept." placeholder="No Dept." />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="cp">Nama Departemen</label>
                    <input id="cp" name="cp" value="Nama Departemen" placeholder="Nama Departemen"/>
                  </div> <!-- /field -->
                  
                  
                  <div class="field">
                    <label for="cp">Status</label>
                    <input id="cp" name="cp" value="Status" placeholder="Status"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="telpon">Nama Manager</label>
                    <input id="telpon" name="telpon" value="Nama Manager" placeholder="Nama Manager"/>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="email">Tugas</label>
                    <textarea id="address" name="address" value="Tugas" placeholder="Tugas"></textarea>
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
        <!-- /span8 -->
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
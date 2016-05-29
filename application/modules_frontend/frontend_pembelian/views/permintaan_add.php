<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_permintaan.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Add Permintaan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="" method="post">

                <div class="form-fields">

                  <div class="field">
                    <label for="name">Nama:</label>
                    <input id="name" name="name" value="" placeholder="Name" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="address">Alamat:</label>
                    <textarea id="address" name="address" value="" placeholder="Alamat"></textarea>
                  </div> <!-- /field -->


                  <div class="field">
                    <label for="phone">No Telp:</label>
                    <input id="phone" name="phone" value="" placeholder="No Telp"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="" placeholder="Email"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="note">Keterangan:</label>
                    <textarea id="note" name="note" value="" placeholder="Keterangan"></textarea>
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
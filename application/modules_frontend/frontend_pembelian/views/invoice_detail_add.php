<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_invoice.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Add Ivoice</h3>
            </div>
            <!-- /widget-header -->
             <div class="widget-content">
              <form action="" method="post">

                <div class="form-fields">

                  <div class="field">
                    <label for="invd_noinvoice">No Invoice:</label>
                    <input id="invd_noinvoice" name="invd_noinvoice" value="" placeholder="No Invoice" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="invd_jenisbarang">Jenis Barang:</label>
                    <input id="invd_jenisbarang"  name="invd_jenisbarang" value="" placeholder="Jenis Barang"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="invd_jumlah">Jumlah:</label>
                    <input type="invd_jumlah" name="invd_jumlah" value="" placeholder="Jumlah"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="invd_satuan">Satuan:</label>
                    <input type="invd_satuan" name="invd_satuan" value="" placeholder="Satuan"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="invd_hargasatuan">Harga Satuan:</label>
                    <textarea id="invd_hargasatuan" name="invd_hargasatuan" value="" placeholder="Harga Satuan"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="invd_total">Total:</label>
                    <textarea id="invd_total" name="invd_total" value="" placeholder="Total"></textarea>
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
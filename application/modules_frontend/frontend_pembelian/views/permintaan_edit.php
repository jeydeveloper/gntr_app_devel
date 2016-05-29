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
              <h3>Form Edit Permintaan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="<?php echo ($module_base_url . '/permintaan/edit/' . $detail['pp_id']); ?>" method="post">
                <input type="hidden" name="pp_id" value="<?php echo $detail['pp_id']; ?>" />

                <div class="form-fields">

                  <div class="field">
                    <label for="pp_nama">Nama</label>
                    <input id="pp_nama" name="pp_nama" value="<?php echo $detail['pp_nama']; ?>" placeholder="Nama" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pp_email">Email</label>
                    <input id="pp_email" name="pp_email" value="<?php echo $detail['pp_email']; ?>" placeholder="Email"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pp_alamat">Alamat</label>
                    <textarea id="pp_alamat" name="pp_alamat" placeholder="Alamat"><?php echo $detail['pp_alamat']; ?></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pp_telepon">Email</label>
                    <input id="pp_telepon" name="pp_telepon" value="<?php echo $detail['pp_telepon']; ?>" placeholder="No Telp"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pp_keterangan">Alamat</label>
                    <textarea id="pp_keterangan" name="pp_keterangan" placeholder="Keterangan"><?php echo $detail['pp_keterangan']; ?></textarea>
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
<style type="text/css">
.form-fields input[type="radio"] {
    width: auto;
    height: auto;
    padding: 0;
    margin: 3px 0;
    line-height: normal;
    cursor: pointer;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    border: 0 \9;
}

.rd-inline label{
  padding-left: 20px;display:inline-block;margin-right:10px;
}

.rd-inline label input[type="radio"] {
  position: absolute;margin-left: -20px;
}
</style>

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
                    <label for="brjs_nama">Nama</label>
                    <input id="brjs_nama" name="brjs_nama" placeholder="Nama" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_kategori_id">Kategori</label>
                    <select name="brjs_kategori_id" id="brjs_kategori_id" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['barjas_kategori'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_volume">Satuan</label>
                    <input id="brjs_volume" name="brjs_volume" placeholder="Satuan" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_harga_satuan">Harga Satuan</label>
                    <input class="numberformat" id="brjs_harga_satuan" name="brjs_harga_satuan" placeholder="Harga Satuan" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_over_project">Over Project</label>
                    <div class="rd-inline">
                      <label><input type="radio" name="brjs_over_project" value="1" /> Tidak</label>
                      <label><input type="radio" name="brjs_over_project" value="0" /> Ya</label>
                    </div>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="brjs_vndr_id">Vendor</label>
                    <select name="brjs_vndr_id" id="brjs_vndr_id" /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($data_source['vendor'] as $value): ?>
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

<script type="text/javascript">
  $(function(){
    $('.numberformat').number( true, 0, ',', '.' );
  })
</script>
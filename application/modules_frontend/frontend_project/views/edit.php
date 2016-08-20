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
                    <select name="proj_clnt_id" id="proj_clnt_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_client as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['proj_clnt_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_list_barang">Barang</label>
                    <select name="proj_list_barang" id="proj_list_barang" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_barangjasa as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['proj_list_barang'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_vndr_id">Vendor</label>
                    <select name="proj_vndr_id" id="proj_vndr_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_vendor as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['proj_vndr_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_nilai">Nilai Proyek</label>
                    <input class="numberformat" id="proj_nilai" name="proj_nilai" placeholder="Nilai Proyek" value="<?php echo $detail['proj_nilai']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_jangka_waktu">Jangka Waktu Proyek</label>
                    <input id="proj_jangka_waktu" name="proj_jangka_waktu" placeholder="Jangka Waktu Proyek" value="<?php echo $detail['proj_jangka_waktu']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_cp_client">CP Client</label>
                    <p class="alert" id="proj_cp_client">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_telpon_client">Telpon Client</label>
                    <p class="alert" id="proj_telpon_client">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_cp_vendor">CP Vendor</label>
                    <p class="alert" id="proj_cp_vendor">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="proj_telpon_vendor">Telpon Vendor</label>
                    <p class="alert" id="proj_telpon_vendor">-</p>
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

<script type="text/javascript">
  $(function(){
    $('.numberformat').number( true, 0, ',', '.' );
  })
</script>

<script type="text/javascript">
  $(function(){
    var get_info = function(id) {
      var url = '<?php echo site_url("project/referensi_vendor"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#proj_cp_vendor').text(data.vndr_contact_person);
        $('#proj_telpon_vendor').text(data.vndr_telpon);
      });
    };
    
    $('#proj_vndr_id').change(function(){
      var me = $(this);
      get_info(me.val());
    });

    var get_info_client = function(id) {
      var url = '<?php echo site_url("project/referensi_client"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#proj_cp_client').text(data.clnt_contact_person);
        $('#proj_telpon_client').text(data.clnt_telpon);
      });
    };
    
    $('#proj_clnt_id').change(function(){
      var me = $(this);
      get_info_client(me.val());
    });

    get_info($('#proj_vndr_id').val());
    get_info_client($('#proj_clnt_id').val());
  })
</script>
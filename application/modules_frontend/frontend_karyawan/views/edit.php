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
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['kary_id']); ?>" method="post">
                <input type="hidden" name="kary_id" value="<?php echo $detail['kary_id']; ?>" />
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="kary_nama">Nama</label>
                    <input id="kary_nama" name="kary_nama" placeholder="Nama" value="<?php echo $detail['kary_nama']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kary_alamat">Alamat</label>
                    <textarea id="kary_alamat" name="kary_alamat" placeholder="Alamat"><?php echo $detail['kary_alamat']; ?></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kary_tempat_lahir">Tempat Lahir</label>
                    <input id="kary_tempat_lahir" name="kary_tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $detail['kary_tempat_lahir']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kary_tanggal_lahir">Tanggal Lahir</label>
                    <input class="date-picker" id="kary_tanggal_lahir" name="kary_tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $detail['kary_tanggal_lahir']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kary_telpon">Telpon</label>
                    <input id="kary_telpon" name="kary_telpon" placeholder="Telpon" value="<?php echo $detail['kary_telpon']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kary_posisi_id">Posisi</label>
                    <select name="kary_posisi_id" id="kary_posisi_id" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['kary_posisi'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['kary_posisi_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kary_jabatan_id">Jabatan</label>
                    <select name="kary_jabatan_id" id="kary_jabatan_id" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['kary_jabatan'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['kary_jabatan_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kary_tipe_id">Tipe</label>
                    <select name="kary_tipe_id" id="kary_tipe_id" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['kary_tipe'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['kary_tipe_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kary_status_nikah_id">Status Nikah</label>
                    <select name="kary_status_nikah_id" id="kary_status_nikah_id" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['kary_status_nikah'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['kary_status_nikah_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="kary_status_kontrak_id">Status Kontrak</label>
                    <select name="kary_status_kontrak_id" id="kary_status_kontrak_id" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['kary_status_kontrak'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['kary_status_kontrak_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
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
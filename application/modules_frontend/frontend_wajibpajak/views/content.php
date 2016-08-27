<div class="main">
  <div class="main-inner">
    <div class="container">
      <form action="" method="post">
      <div class="row">
        <div class="span7">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Data Wajib Pajak Pribadi</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="npwp">NPWP:</label>
                    <input id="npwp" name="pribadi[npwp]" value="<?php echo (!empty($detail['pribadi']['npwp']) ? $detail['pribadi']['npwp'] : ''); ?>" placeholder="NPWP" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="nama">Nama Wajib Pajak Pribadi:</label>  
                    <input id="nama" name="pribadi[nama]" value="<?php echo (!empty($detail['pribadi']['nama']) ? $detail['pribadi']['nama'] : ''); ?>" placeholder="Nama Wajib Pajak Pribadi" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="alamat">Alamat:</label>
                    <input id="alamat" name="pribadi[alamat]" value="<?php echo (!empty($detail['pribadi']['alamat']) ? $detail['pribadi']['alamat'] : ''); ?>" placeholder="Alamat"/>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="kota">Kota:</label>
                    <input id="kota" name="pribadi[kota]" value="<?php echo (!empty($detail['pribadi']['kota']) ? $detail['pribadi']['kota'] : ''); ?>" placeholder="Kota"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="telepon">Telepon:</label>
                    <input id="telepon" name="pribadi[telepon]" value="<?php echo (!empty($detail['pribadi']['telepon']) ? $detail['pribadi']['telepon'] : ''); ?>" placeholder="Telepon"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="fax">Fax:</label>
                    <input id="fax" name="pribadi[fax]" value="<?php echo (!empty($detail['pribadi']['fax']) ? $detail['pribadi']['fax'] : ''); ?>" placeholder="Fax"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="pribadi[email]" value="<?php echo (!empty($detail['pribadi']['email']) ? $detail['pribadi']['email'] : ''); ?>" placeholder="Email"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="jenis_usaha">Jenis Usaha:</label>
                    <input id="jenis_usaha" name="pribadi[jenis_usaha]" value="<?php echo (!empty($detail['pribadi']['jenis_usaha']) ? $detail['pribadi']['jenis_usaha'] : ''); ?>" placeholder="Jenis Usaha"/>
                  </div> <!-- /field -->
                  
                </div> <!-- /form-fields -->

              
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span7 -->

        <div class="span5">

          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Data Wajib Pajak Badan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="nama">Nama Pemilik:</label>
                    <input id="nama" name="usaha[nama]" value="<?php echo (!empty($detail['usaha']['nama']) ? $detail['usaha']['nama'] : ''); ?>" placeholder="Nama Pemilik" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="phone">NPWP:</label>
                    <input id="phone" name="usaha[npwp]" value="<?php echo (!empty($detail['usaha']['npwp']) ? $detail['usaha']['npwp'] : ''); ?>" placeholder="NPWP"/>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="keterangan">Keterangan:</label>  
                    <textarea id="keterangan" name="usaha[keterangan]" placeholder="Keterangan"><?php echo (!empty($detail['usaha']['keterangan']) ? $detail['usaha']['keterangan'] : ''); ?></textarea>
                  </div> <!-- /field -->

                </div> <!-- /form-fields -->
            </div>
            <!-- /widget-content --> 
          </div>

        </div>
        <!-- /span5 -->

      </div>
      <!-- /row --> 
      <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['wajib-pajak']['update']))): ?>
      <div class="row">
        <div class="span12">
          <div class="form-actions">
            <div class="text-center">
              <button type="reset" class="button btn btn-default btn-large">Reset</button>
              <button type="submit" class="button btn btn-primary btn-large">Submit</button>
            </div>
          </div> <!-- .actions -->
        </div>
      </div>
      <?php endif; ?>
      </form>
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
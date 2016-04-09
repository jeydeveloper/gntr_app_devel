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
              <h3>Form Aktiva Tetap</h3>
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
                    <label for="cp">Kode Aktiva</label>
                    <input id="cp" name="cp" value="Kode Aktiva" placeholder="Kode Aktiva"/>
                  </div> <!-- /field -->
                  
                  
                  <div class="field">
                    <label for="cp">Keterangan</label>
                    <input id="cp" name="cp" value="Keterangan" placeholder="Keterangan"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="telpon">Tipe Aktiva</label>
                    <input id="telpon" name="telpon" value="Tipe Aktiva" placeholder="Tipe Aktiva"/>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="email">Biaya Aktiva</label>
                    <input type="email" id="email" name="email" value="Biaya Aktiva" placeholder="Biaya Aktiva"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Tgl Pakai</label>
                    <input type="email" id="email" name="email" value="Tgl Pakai" placeholder="Tgl Pakai"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Tgl Beli</label>
                    <input type="email" id="email" name="email" value="Tgl Beli" placeholder="Tgl Beli"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Qty</label>
                    <input type="email" id="email" name="email" value="Qty" placeholder="Qty"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Umur Bulan Aktiva</label>
                    <input type="email" id="email" name="email" value="Umur Bulan Aktiva" placeholder="Umur Bulan Aktiva"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">%Penyusut/Tahun</label>
                    <input type="email" id="email" name="email" value="%Penyusut/Tahun" placeholder="%Penyusut/Tahun"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Pajak</label>
                    <input type="email" id="email" name="email" value="Pajak" placeholder="Pajak"/>
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
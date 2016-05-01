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
              <form action="" method="post">
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="dakt_kode">Kode Aktiva</label>
                    <input id="dakt_kode" name="dakt_kode" placeholder="Kode Aktiva" required />
                  </div> <!-- /field -->
                  
                  
                  <div class="field">
                    <label for="dakt_keterangan">Keterangan</label>
                    <input id="dakt_keterangan" name="dakt_keterangan" placeholder="Keterangan"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="dakt_tipe">Tipe Aktiva</label>
                    <input id="dakt_tipe" name="dakt_tipe" placeholder="Tipe Aktiva"/>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="dakt_harga">Harga Aktiva</label>
                    <input id="dakt_harga" name="dakt_harga" placeholder="Biaya Aktiva"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="dakt_tanggalpakai">Tgl Pakai</label>
                    <input class="date-picker" id="dakt_tanggalpakai" name="dakt_tanggalpakai" placeholder="Tgl Pakai"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="dakt_tanggalbeli">Tgl Beli</label>
                    <input class="date-picker" id="dakt_tanggalbeli" name="dakt_tanggalbeli" placeholder="Tgl Beli"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="dakt_qty">Qty</label>
                    <input id="dakt_qty" name="dakt_qty" placeholder="Qty"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="dakt_umurbulan">Umur Bulan Aktiva</label>
                    <input id="dakt_umurbulan" name="dakt_umurbulan" placeholder="Umur Bulan Aktiva"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="dakt_persensusut">%Penyusut/Tahun</label>
                    <input id="dakt_persensusut" name="dakt_persensusut" placeholder="%Penyusut/Tahun"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="dakt_pajak">Pajak</label>
                    <input id="dakt_pajak" name="dakt_pajak" placeholder="Pajak"/>
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
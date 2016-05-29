<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_surat_jalan.php'); ?>
        </div>
        <!-- /span4 -->
         <div class="span5">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Purchase Order</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="" method="post">

                <div class="form-fields">

                  <div class="field">
                    <label for="sj_tanggal">Tanggal:</label>
                    <input id="sj_tanggal" class="date-picker" name="sj_tanggal" value="" placeholder="Tanggal" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_no">No.</label>
                    <textarea id="sj_no" name="sj_no" value="" placeholder="No"></textarea>
                  </div> <!-- /field -->


                  <div class="field">
                    <label for="sj_halaman">Halaman:</label>
                    <input id="sj_halaman" name="sj_halaman" value="" placeholder="Halaman"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_matauang">Mata Uang:</label>
                    <input type="sj_matauang" id="sj_matauang" name="sj_matauang" value="" placeholder="Mata Uang"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_vendor">Vendor</label>
                    <textarea id="sj_vendor" name="sj_vendor" value="" placeholder="Vendor"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_vendorproposalno">Vendor Proposal No:</label>
                    <textarea id="sj_vendorproposalno" name="sj_vendorproposalno" value="" placeholder="Vendor Proposal No."></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_projectcode">Project Code:</label>
                    <textarea id="sj_projectcode" name="sj_projectcode" value="" placeholder="Project Code"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_buyer">Buyer:</label>
                    <textarea id="sj_buyer" name="sj_buyer" value="" placeholder="Buyer"></textarea>
                  </div> <!-- /field -->

                </div> <!-- /form-fields -->

            </div>
            <!-- /widget-content -->
          </div>
          <!-- /widget -->
        </div>
        <!-- /span5 -->
        <div class="span5">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <div class="form-fields">

                  <div class="field">
                    <label for="sj_jenisbarang">Jenis Barang:</label>
                    <input id="sj_jenisbarang" name="sj_jenisbarang" value="" placeholder="Jenis Barang" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_deskripsi">Deskripsi:</label>
                    <textarea id="sj_deskripsi" name="sj_deskripsi" value="" placeholder="Deskripsi"></textarea>
                  </div> <!-- /field -->


                  <div class="field">
                    <label for="sj_jumlah">Jumlah:</label>
                    <input id="sj_jumlah" name="sj_jumlah" value="" placeholder="Jumlah"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_satuan">Satuan:</label>
                    <input type="sj_satuan" id="sj_satuan" name="sj_satuan" value="" placeholder="Satuan"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_hargasatuan">Harga Satuan:</label>
                    <textarea id="sj_hargasatuan" name="sj_hargasatuan" value="" placeholder="Harga Satuan"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_total">Total:</label>
                    <textarea id="sj_total" name="sj_total" value="" placeholder="Total"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_catatan">Catatan:</label>
                    <textarea id="sj_catatan" name="sj_catatan" value="" placeholder="Catatan"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_lampiran">Lampiran:</label>
                    <textarea id="sj_lampiran" name="sj_lampiran" value="" placeholder="Lampiran"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_termspembayaran">Terms Pembayaran:</label>
                    <textarea id="sj_termspembayaran" name="sj_termspembayaran" value="" placeholder="Terms Pembayaran"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_tglpenerimaan">Tanggal Penerimaan:</label>
                    <input id="sj_tglpenerimaan" class="date-picker" name="sj_tglpenerimaan" value="" placeholder="Tanggal Penerimaan" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_diterimaoleh">Diterima Oleh:</label>
                    <textarea id="sj_diterimaoleh" name="sj_diterimaoleh" value="" placeholder="Diterima Oleh"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_namapenerima">Nama Penerima:</label>
                    <textarea id="sj_namapenerima" name="sj_namapenerima" value="" placeholder="Nama Penerima"></textarea>

                  </div> <!-- /field -->

                  <div class="field">
                    <label for="sj_tgl">Tanggal:</label>
                    <input id="sj_tgl" class="date-picker" name="sj_tgl" value="" placeholder="Tanggal" />
                  </div> <!-- /field -->

                </div> <!-- /form-fields -->

                <div class="form-actions">
                  <div class="pull-right">
                    <button type="reset" class="button btn btn-default btn-large">Reset</button>
                    <button class="button btn btn-primary btn-large"><a href="print_po.html"></a> Submit</button>
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
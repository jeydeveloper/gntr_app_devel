<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_bukti_pembayaran.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Edit Bukti Pembayaran</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
               <form action="<?php echo ($module_base_url . '/bukti-pembayaran/edit/' . $detail['bp_id']); ?>" method="post">
                <input type="hidden" name="bp_id" value="<?php echo $detail['bp_id']; ?>" />
                <div class="form-fields">

                  <div class="field">
                    <label for="bp_no">Nomor:</label>
                    <input id="bp_no" name="bp_no" value="<?php echo $detail['bp_no']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bp_tgltransaksi">Tanggal Transaksi:</label>
                    <input id="bp_tgltransaksi" class="date-picker" name="bp_tgltransaksi" value="<?php echo $detail['bp_tgltransaksi']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bp_norekening">No Rekening:</label>
                    <input id="bp_norekening" name="bp_norekening" value="<?php echo $detail['bp_norekening']; ?>"/>
                  </div> <!-- /field -->

                   <div class="field">
                    <label for="bp_namarekening">Nama Rekening:</label>
                    <input id="bp_namarekening" name="bp_namarekening" value="<?php echo $detail['bp_namarekening']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bp_noinvoice">No Invoice:</label>
                    <input type="bp_noinvoice" name="bp_noinvoice" value="<?php echo $detail['bp_noinvoice']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bp_tagihan">Total Tagihan:</label>
                    <input type="bp_tagihan" name="bp_tagihan" value="<?php echo $detail['bp_tagihan']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bp_terbilang">Terbilang:</label>
                    <textarea id="bp_terbilang" name="bp_terbilang"><?php echo $detail['bp_terbilang']; ?></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bp_jamtransaksi">Jam Transaksi:</label>
                    <input type="bp_jamtransaksi" name="bp_jamtransaksi" value="<?php echo $detail['bp_jamtransaksi']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bp_jenistransaksi">Jenis Transaksi:</label>
                    <input type="bp_jenistransaksi" name="bp_jenistransaksi" value="<?php echo $detail['bp_jenistransaksi']; ?>"/>
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
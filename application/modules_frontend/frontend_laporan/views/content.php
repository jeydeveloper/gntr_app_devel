<style type="text/css">
  .filter{display: none;}
</style>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Kategori Laporan</h3>
            </div>
            <!-- /widget-header -->
            <div class="control-group">
              <div class="controls">
                <div class="accordion" id="accordion2">
                  <div class="accordion-group">

                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        Laporan Keuangan
                      </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <div>
                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="print_neraca.html" class="el-fil">Neraca</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="keuangan_neraca" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="print_general_report.html" class="el-fil">General Report</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="keuangan_general_report" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Grafik Perbandingan Akun</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="keuangan_grafik_akun" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Grafik Pendapatan dan Beban</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="keuangan_grafik_pendapatan" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <br/>

                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                        Laporan Penjualan
                      </a>
                    </div>
                    <div id="collapseThree" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <div>
                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Penjualan per Client</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="penjualan_client" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Penjualan per Barang</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="penjualan_barang" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Grafik Penjualan Barang</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="penjualan_grafik_barang" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Grafik Penjualan Client</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="penjualan_grafik_client" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <br/>
                    
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                        Laporan Pembelian
                      </a>
                    </div>
                    <div id="collapseFour" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <div>
                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Pembelian per Barang</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="pembelian_barang" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Pembelian per Vendor</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="pembelian_vendor" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Grafik Pembelian Barang</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="pembelian_grafik_barang" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Grafik Pembelian Vendor</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" class="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" class="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" class="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button class="btn_laporan" name="btn_laporan" data-type="pembelian_grafik_vendor" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <br/>
                  </div>
                </div>
              </div> <!-- /controls --> 
            </div> <!-- /control-group -->
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span4 -->
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

<script type="text/javascript">
  $(document).ready(function(){
    $('.el-fil').click(function(e){
      e.preventDefault();
      var me = $(this);
      var nxt = me.parent().next();
      if(nxt.is(':visible')) {
        nxt.hide();
      } else {
        $('.filter').hide();
        nxt.show()
      }
    });

    $('.btn_laporan').click(function(e){
      e.preventDefault();

      var me = $(this);
      var prt = me.closest('div');

      var periode_bulan_1 = prt.find('.sl_periode_bulan_1').val();
      var periode_bulan_2 = prt.find('.sl_periode_bulan_2').val();
      var periode_tahun = prt.find('.sl_periode_tahun').val();

      if(periode_bulan_1 == '' || periode_bulan_2 == '' || periode_tahun == '') {
        alert('Periode bulan atau tahun tidak boleh kosong');
        return false;
      }

      var url = '';
      var type = $(this).data('type');

      switch(type){
        case "keuangan_neraca" : 
          url = '<?php echo site_url("laporan/keuangan_neraca"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        case "keuangan_general_report" : 
          url = '<?php echo site_url("laporan/keuangan_general_report"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        case "keuangan_grafik_akun" : 
          url = '<?php echo site_url("laporan/keuangan_grafik_akun"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        case "keuangan_grafik_pendapatan" : 
          url = '<?php echo site_url("laporan/keuangan_grafik_pendapatan"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        case "penjualan_client" : 
          url = '<?php echo site_url("laporan/penjualan_client"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        case "penjualan_barang" : 
          url = '<?php echo site_url("laporan/penjualan_barang"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        case "penjualan_grafik_barang" : 
          url = '<?php echo site_url("laporan/penjualan_grafik_barang"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        case "penjualan_grafik_client" : 
          url = '<?php echo site_url("laporan/penjualan_grafik_client"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        case "pembelian_barang" : 
          url = '<?php echo site_url("laporan/pembelian_barang"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        case "pembelian_vendor" : 
          url = '<?php echo site_url("laporan/pembelian_vendor"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        case "pembelian_grafik_barang" : 
          url = '<?php echo site_url("laporan/pembelian_grafik_barang"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        case "pembelian_grafik_vendor" : 
          url = '<?php echo site_url("laporan/pembelian_grafik_vendor"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
          break;
        default :
          url = '#';
          break;
      }

      window.location.href = url;
    });
  })
</script>
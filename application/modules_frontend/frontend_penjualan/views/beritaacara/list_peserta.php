<style type="text/css">
#sticky {
    width: 100%;
    background-color: #333;
    color: #fff;
}
#sticky.stick {
    position: fixed;
    top: 0;
    z-index: 10000;
    border-radius: 0 0 0.5em 0.5em;
}
.wdclm{width:120px;}
.wdclm.no{width:50px;}
ol, ul {
  list-style: none;
}

#mytable_wrapper{
  margin: 10px auto;
}

#mytable_wrapper .row{
  margin-left: 0;
}

#mytable_wrapper select{
  width: inherit;
  padding: 4px;
}

button:disabled{cursor: not-allowed;}

#peserta_beritaacara table {
  width: 100%;
  border-collapse: collapse;
}

#peserta_beritaacara td, #peserta_beritaacara th {
  padding: 8px;
  border: 1px solid #dddddd;
}

#peserta_beritaacara tbody:nth-child(odd) {
  background: #f9f9f9;
}

#peserta_beritaacara tbody:hover td[rowspan], #peserta_beritaacara tr:hover td {
   background: #f2f2f2; 
}
</style>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_beritaacara.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div id="sticky-anchor"></div>
            <div id="sticky" class="widget-header"> <i class="icon-th-list"></i>
              <h3>List Peserta</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content" style="min-height:500px;">
              <div style="padding:10px;">
                <h3>Pilih Peserta</h3>
                <hr/>
                <table class="table table-striped table-bordered sticky-header" id="mytable">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($list_karyawan as $value): ?>
                    <tr>
                      <td><?php echo $value['kary_nama']; ?></td>
                      <td><?php echo (!empty($static_data_source['kary_jabatan'][$value['kary_jabatan_id']]) ? $static_data_source['kary_jabatan'][$value['kary_jabatan_id']]['name'] : '-'); ?></td>
                      <td>
                        <div class="peserta_add" style="<?php echo (!empty($list_beritaacara[$value['kary_id']]) ? 'display:none;' : ''); ?>">
                          <form class="frm">
                            <input type="hidden" name="baps_pbcr_id" value="<?php echo $pbcr_id; ?>">
                            <input type="hidden" name="baps_kary_id" value="<?php echo $value['kary_id']; ?>">
                            <select name="baps_group" id="baps_group">
                              <option value="">--Pilih Group--</option>
                              <?php echo $list_group; ?>
                            </select>
                            <button class="btn_submit">Submit</button>
                          </form>
                        </div>
                        <div class="peserta_edit" style="<?php echo (!empty($list_beritaacara[$value['kary_id']]) ? '' : 'display:none;'); ?>">
                          <span class="lbl_group"><?php echo $list_beritaacara[$value['kary_id']]; ?></span>
                          <button class="btn_edit">EDIT</button>
                          <button class="btn_delete">DELETE</button>
                        </div>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <div style="padding:10px;">
                <h3>Daftar Peserta</h3>
                <hr/>
                <div id="peserta_beritaacara">&nbsp;</div>
              </div>
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
  $(document).ready(function() {
      $('#mytable').dataTable({
        "columnDefs": [
          {
            "width": '200px',
            "targets": 2
          }
        ]
      });

      $('.dataTables_filter input').attr("placeholder", "Search...");

      $('.btn_submit').click(function(e){
        e.preventDefault();
        var me = $(this);
        var prt = me.closest('tr');
        var frm = prt.find('form');
        var url = '<?php echo site_url("penjualan/berita-acara-peserta/add"); ?>';
        $.post(url, frm.serialize(), function(data){
          $("#peserta_beritaacara").load("<?php echo site_url('penjualan/berita-acara-peserta/load-peserta/'.$pbcr_id); ?>");
          var txt = prt.find('#baps_group').val();
          prt.find('.lbl_group').text(txt);

          prt.find('.peserta_add').hide();
          prt.find('.peserta_edit').show();
        });
      });

      $('.btn_edit').click(function(e){
        e.preventDefault();
        var me = $(this);
        var prt = me.closest('tr');
        prt.find('.peserta_edit').hide();
        prt.find('.peserta_add').show();

        var txt = prt.find('.lbl_group').text();
        prt.find('#baps_group').val(txt);
      });

      $('.btn_delete').click(function(e){
        e.preventDefault();
        var me = $(this);
        var prt = me.closest('tr');
        var frm = prt.find('form');
        var url = '<?php echo site_url("penjualan/berita-acara-peserta/delete"); ?>';
        $.post(url, frm.serialize(), function(data){
          $("#peserta_beritaacara").load("<?php echo site_url('penjualan/berita-acara-peserta/load-peserta/'.$pbcr_id); ?>");
          prt.find('.peserta_edit').hide();
          prt.find('.peserta_add').show();
          prt.find('#baps_group').val('');
        });
      });

      $("#peserta_beritaacara").load("<?php echo site_url('penjualan/berita-acara-peserta/load-peserta/'.$pbcr_id); ?>");
  } );
</script>
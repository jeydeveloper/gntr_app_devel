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
  width: 98%;
  margin: 10px auto;
}

#mytable_wrapper .row{
  margin-left: 0;
}

#mytable_wrapper select{
  width: inherit;
  padding: 4px;
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
            <div class="widget-content" style="height:500px;">
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
                      <div>
                        <select name="sl_group" id="sl_group">
                          <option value="">--Pilih Group--</option>
                          <?php echo $list_group; ?>
                        </select>
                        <button class="btn_submit">Submit</button>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
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
  } );
</script>
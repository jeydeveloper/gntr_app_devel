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
              <h3>Daftar User Level</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th width="30"> No. </th>
                    <th> Nama </th>
                    <th> Kategori </th>
                    <th> Satuan </th>
                    <th> Harga Satuan </th>
                    <th> Over Project </th>
                    <th> Vendor </th>
                    <th class="td-actions"> Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['brjs_nama']; ?></td>
                      <td><?php echo (!empty($static_data_source['barjas_kategori'][$value['brjs_kategori_id']]) ? $static_data_source['barjas_kategori'][$value['brjs_kategori_id']]['name'] : '-'); ?></td>
                      <td><?php echo $value['brjs_volume']; ?></td>
                      <td><?php echo add_numberformat($value['brjs_harga_satuan']); ?></td>
                      <td><?php echo (!empty($value['brjs_over_project']) ? 'Ya' : 'Tidak'); ?></td>
                      <td><?php echo (!empty($value['vndr_nama']) ? $value['vndr_nama'] : '-'); ?></td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url.'/edit/'.$value['brjs_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url.'/delete/'.$value['brjs_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="10" style="background: red;color: white;">Module ini belum terisi!</td>
                    </tr>
                  <?php endif; ?>
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
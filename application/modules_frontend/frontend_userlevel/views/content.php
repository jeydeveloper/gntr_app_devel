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
                    <th> Level </th>
                    <th class="td-actions"> Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td> Admin </td>
                    <td class="td-actions"><a href="pengguna_edit.html" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a><a href="pengguna_delete.html" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> 2 </td>
                    <td> Manager </td>
                    <td class="td-actions"><a href="pengguna_edit.html" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a><a href="pengguna_delete.html" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> 3 </td>
                    <td> Staff </td>
                    <td class="td-actions"><a href="pengguna_edit.html" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a><a href="pengguna_delete.html" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
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
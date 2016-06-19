<style type="text/css">
  .tbl_role_access {border: solid 1px;margin-top: 10px;width: 100%;}
  .tbl_role_access td, .tbl_role_access th{padding: 5px;border: solid 1px;}
  .tbl_role_access ul{list-style: none;margin: 0;}
  .tbl_role_access ul li{float: left;margin-right: 10px;}
  .tbl_role_access label{display: inline-block;}
  .tbl_role_access label input{display: inline-block;}
  .tbl_role_access a{text-decoration: none;}
  hr{margin: 0;}
</style>
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
              <h3>Form Edit</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['aulv_id']); ?>" method="post">
                <input type="hidden" name="aulv_id" value="<?php echo $detail['aulv_id']; ?>" />
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="aulv_name">Level</label>
                    <input id="aulv_name" name="aulv_name" placeholder="Level" value="<?php echo $detail['aulv_name']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="aulv_name">Role Access Module</label>
                    <hr />
                    <div class="wrap-role-access">
                      <table class="tbl_role_access">
                        <tr>
                          <th>Nama Module</th>
                          <th>Role Access ( <label><input type="checkbox" id="check_all" name="check_all" value="1"> Check All</label> )</th>
                          <th>Link Module</th>
                        </tr>
                      <?php $aulv_role_access = !empty($detail['aulv_role_access']) ? unserialize($detail['aulv_role_access']) : ''; ?>
                      <?php foreach($static_data_source['role_access'] as $key => $value): ?>
                      <tr>
                        <td><?php echo $value['name']; ?></td>
                        <td>
                          <ul>
                            <li><label><input class="check_each" type="checkbox" name="aulv_role_access[<?php echo $key; ?>][create]" value="1" <?php echo (!empty($aulv_role_access[$key]['create']) ? 'checked' : ''); ?>> Create</label></li>
                            <li><label><input class="check_each" type="checkbox" name="aulv_role_access[<?php echo $key; ?>][read]" value="1" <?php echo (!empty($aulv_role_access[$key]['read']) ? 'checked' : ''); ?>> Read</label></li>
                            <li><label><input class="check_each" type="checkbox" name="aulv_role_access[<?php echo $key; ?>][update]" value="1" <?php echo (!empty($aulv_role_access[$key]['update']) ? 'checked' : ''); ?>> Update</label></li>
                            <li><label><input class="check_each" type="checkbox" name="aulv_role_access[<?php echo $key; ?>][delete]" value="1" <?php echo (!empty($aulv_role_access[$key]['delete']) ? 'checked' : ''); ?>> Delete</label></li>
                            <li>(<a class="lnk_check_each_all" href="#">Check All</a> | <a class="lnk_uncheck_each_all" href="#">Uncheck All</a>)</li>
                          </ul>
                        </td>
                        <td><a target="_blank" href="<?php echo site_url('/'.$key); ?>"><?php echo site_url('/'.$key); ?></a></td>
                      </tr>
                      <?php endforeach; ?>
                      </table>
                    </div>
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

<script type="text/javascript">
  window.onload = function(e){
    $(function(){
      $('#check_all').click(function(){
        var me = $(this);
        if(me.is(':checked')) {
          $('.check_each').attr('checked', true);
        } else {
          $('.check_each').attr('checked', false);
        }
      });

      $('.check_each').click(function(){
        var me = $(this);
        if(!me.is(':checked')) {
          $('#check_all').attr('checked', false);
        }
      });

      $('.lnk_check_each_all').click(function(ev){
        ev.preventDefault();
        var me = $(this);
        me.closest('ul').find('.check_each').attr('checked', true);
      });

      $('.lnk_uncheck_each_all').click(function(ev){
        ev.preventDefault();
        var me = $(this);
        me.closest('ul').find('.check_each').attr('checked', false);
      });
    });
  };
</script>
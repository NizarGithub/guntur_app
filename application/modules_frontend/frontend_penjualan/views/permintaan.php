<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_permintaan.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>List Permintaan Penjualan</h3>
              <!-- <div style="float:right; margin-top:5px; margin-right:5px;">
                <input type="checkbox">Menunggu
                <input type="checkbox">Diproses
                <input type="checkbox">Ditutup
              </div> -->
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> No. Permintaan </th>
                    <th> Nama Pelanggan </th>
                    <th> Status </th>
                    <th> No. PO </th>
                    <th> Uang Muka </th>
                    <th> Keterangan</th>
                    <th> File </th>
                    <th class="td-actions">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['ppmt_noso']; ?></td>
                      <td><?php echo $value['clnt_nama']; ?></td>
                      <td><?php echo (!empty($static_data_source['status_penjualan'][$value['ppmt_status']]) ? $static_data_source['status_penjualan'][$value['ppmt_status']]['name'] : ''); ?></td>
                      <td><?php echo $value['ppnw_no_penawaran']; ?></td>
                      <td><?php echo add_numberformat($value['ppmt_uangmuka']); ?></td>
                      <td><?php echo $value['ppmt_keterangan']; ?></td>
                      <td>
                        <a href="<?php echo site_url('/'); ?>assets/images/<?php echo $value['ppmt_fileupload']; ?>" target="_blank">
                          <img src="<?php echo site_url('/'); ?>assets/images/<?php echo $value['ppmt_fileupload']; ?>" width="50px" onError="this.onerror=null;this.src='http://localhost/gntr_app_devel/assets/images/noimage.png';">
                        </a>
                      </td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url_permintaan.'/edit/'.$value['ppmt_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url_permintaan.'/delete/'.$value['ppmt_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <!--<tr>
                      <td colspan="9" style="background: red;color: white;">Module ini belum terisi!</td>
                    </tr>-->
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
<!-- /main -->
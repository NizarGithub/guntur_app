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
              <h3>Slip Gaji</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No.</th>
                    <th> Nama Karyawan </th>
                    <th> Jabatan </th>
                    <th> NIK </th>
                    <th> Bulan </th>
                    <th> PRINT</th>
                    <th class="td-actions">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['bpu_penerimaankas_no_bukti']; ?></td>
                      <td><?php echo $value['bpu_penerimaankas_dari']; ?></td>
                      <td><?php echo $value['bpu_penerimaankas_jumlah']; ?></td>
                      <td><?php echo $value['bpu_penerimaankas_untuk']; ?></td>
                      <td><a href="<?php echo ($module_base_url_penawaran.'/pdf/'.$value['ppnw_id']); ?>" target="_blank">View</a></td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url_penawaran.'/edit/'.$value['ppnw_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url_penawaran.'/delete/'.$value['ppnw_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="12" style="background: red;color: white;">Module ini belum terisi!</td>
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
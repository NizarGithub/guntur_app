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
              <h3>BPU - Pengeluaran Kas</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th width="30"> No. </th>
                    <th> No. Bukti </th>
                    <th> Jumlah </th>
                    <th> Untuk </th>
                    <th> Penerima </th>
                    <th> Print </th>
                    <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['bpu-pengeluarankas']['update'])) OR (!empty($role_access['bpu-pengeluarankas']['delete'])))): ?>
                    <th class="td-actions"> Action</th>
                    
                    <?php endif; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['bpupglrnkas_nobukti']; ?></td>
                      <td><?php echo number_format($value['bpupglrnkas_jumlah']); ?></td>
                      <td><?php echo $value['bpupglrnkas_untuk']; ?></td>
                      <td><?php echo $value['bpupglrnkas_penerima']; ?></td>
                      <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['bpu-penerimaankas']['update'])) OR (!empty($role_access['bpu-penerimaankas']['delete'])))): ?>
                      <td>
                        <a href="<?php echo ($module_base_url.'/pdf/'.$value['bpupglrnkas_id']); ?>" target="_blank">View</a>
                      </td>
                      <td class="td-actions">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['bpu-penerimaankas']['update']))): ?>
                        <a href="<?php echo ($module_base_url.'/edit/'.$value['bpupglrnkas_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a>
                        <?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['bpu-penerimaankas']['delete']))): ?>
                        <a href="<?php echo ($module_base_url.'/delete/'.$value['bpupglrnkas_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a>
                        <?php endif; ?>
                      </td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <!--<tr>
                      <td colspan="8" style="background: red;color: white;">Module ini belum terisi!</td>
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
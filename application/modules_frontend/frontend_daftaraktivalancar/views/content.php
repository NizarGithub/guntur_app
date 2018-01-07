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
              <h3>Daftar Aktiva Lancar</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th width="30"> No. </th>
                    <th> Kode Aktiva </th>
                    <th> Keterangan </th>
                    <th> Tipe Aktiva </th>
                    <th> Harga Aktiva </th>
                    <th> Qty </th>
                    <th> Umur Bulan Aktiva </th>
                    <th> %Penyusut/Tahun </th>
                    <th> Nilai Penyusut/Tahun </th>
                    <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['daftar-aktiva-lancar']['update'])) OR (!empty($role_access['daftar-aktiva-lancar']['delete'])))): ?>
                    <th class="td-actions" width="130px"> Actions </th>
                    <?php endif; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['daktlcr_kode']; ?></td>
                      <td><?php echo $value['daktlcr_keterangan']; ?></td>
                      <td><?php echo (!empty($static_data_source['aktiva'][$value['daktlcr_tipe']]) ? $static_data_source['aktiva'][$value['daktlcr_tipe']]['name'] : '-'); ?></td>
                      <td style="text-align: left;"><?php echo number_format_rupiah($value['daktlcr_harga']); ?></td>
                      <td><?php echo $value['daktlcr_qty']; ?></td>
                      <td><?php echo $value['daktlcr_umurbulan']; ?></td>
                      <td><?php echo $value['daktlcr_persensusut']; ?></td>
                      <td><?php echo number_format_rupiah (($value['daktlcr_harga']*$value['daktlcr_persensusut'])/100); ?></td>
                      <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['daftar-aktiva-lancar']['update'])) OR (!empty($role_access['daftar-aktiva-lancar']['delete'])))): ?>
                      <td class="td-actions">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['daftar-aktiva-lancar']['update']))): ?>
                        <a href="<?php echo ($module_base_url.'/edit/'.$value['daktlcr_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> 
                        <?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['daftar-aktiva-lancar']['delete']))): ?>
                        <a href="<?php echo ($module_base_url.'/delete/'.$value['daktlcr_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a>
                        <?php endif; ?>
                      </td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <!--<tr>
                      <td colspan="12" style="background: red;color: white;">Module ini belum terisi!</td>
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
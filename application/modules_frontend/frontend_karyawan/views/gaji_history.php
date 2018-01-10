<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar.php'); ?>
        </div>
        <div>
          <form action="" method="post">
            <!-- /span3-->
            <div class="span3">
              <div class="widget">

                  <div class="widget-header"> <i class="icon-th-list"></i>
                    <h3>History Gaji</h3>
                  </div>
                  <!-- /widget-header -->
                  <div class="widget-content">
                    <div class="form-fields">
                      <div class="field">
                        <label for="kygj_kary_id">Karyawan</label>
                        <select name="kygj_kary_id" id="kygj_kary_id" required />
                          <option value="">-- Pilih --</option>
                          <?php foreach($option_karyawan as $value): ?>
                            <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->
                        <div class="field">
                            <label for="kygj_periode_bulan">Periode Bulan</label>
                            <select name="kygj_periode_bulan" id="kygj_periode_bulan" required />
                            <option value="">-- Pilih --</option>
                            <option value="all">Semua Bulan</option>
                            <?php foreach($option_bulan as $value): ?>
                                <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div> <!-- /field -->
                        <div class="field">
                            <label for="kygj_periode_tahun">Periode Tahun</label>
                            <input id="kygj_periode_tahun" name="kygj_periode_tahun" placeholder="Periode Tahun (ex: <?php echo date('Y');?>)" required />
                        </div> <!-- /field -->
                    </div>
					
					<div class="form-actions">
                        <div class="pull-right">
                          <button type="reset" class="button btn btn-default btn-large">Reset</button>
                          <button type="submit" class="button btn btn-primary btn-large">Submit</button>
                        </div>
                      </div> <!-- .actions -->
                  </div>
                  <!-- /widget-content --> 
              </div>
              <!-- /widget -->
            </div>
            <!-- /span3-->
          </form>
        </div>
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<script type="text/javascript">
  $(function(){
    $('.numberformat').number( true, 0, ',', '.' );
  })
</script>
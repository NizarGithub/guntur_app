<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_gaji.php'); ?>
        </div>
        <div>
          <form action="" method="post">
            <!-- /span3-->
            <div class="span3">
              <div class="widget">

                  <div class="widget-header"> <i class="icon-th-list"></i>
                    <h3>Data Karyawan</h3>
                  </div>
                  <!-- /widget-header -->
                  <div class="widget-content">
                    <div class="form-fields">
                      <div class="field">
                        <label for="kygj_kary_id">Karyawan</label>
                        <select name="kygj_kary_id" id="kygj_kary_id" />
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
                          <?php foreach($option_bulan as $value): ?>
                              <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                          <?php endforeach; ?>
                          </select>
                      </div> <!-- /field -->
                        <div class="field">
                            <label for="kygj_periode_tahun">Periode Tahun</label>
                            <input id="kygj_periode_tahun" name="kygj_periode_tahun" placeholder="Periode Tahun (ex: <?php echo date('Y');?>)" required />
                        </div> <!-- /field -->
                        <div class="field">
                            <label for="kygj_type_gaji">Tipe Gaji (THR / NON THR)</label>
                            <select name="kygj_type_gaji" id="kygj_type_gaji" required />
                            <option value="">-- Pilih --</option>
                            <?php foreach($option_type_gaji as $value): ?>
                                <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div> <!-- /field -->
                    </div>
                  </div>
                  <!-- /widget-content --> 
              </div>
              <!-- /widget -->
            </div>
            <!-- /span3-->

            <!-- /span3-->
            <div class="span3">
              <div class="widget">

                  <div class="widget-header"> <i class="icon-th-list"></i>
                    <h3>Income</h3>
                  </div>
                  <!-- /widget-header -->
                  <div class="widget-content">
                      <div class="form-fields">

                        <div class="field">
                          <label for="kygj_gaji_pokok">Gaji Pokok</label>
                          <input class="numberformat" id="kygj_gaji_pokok" name="kygj_gaji_pokok" placeholder="Gaji Pokok" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_uang_makan">Uang Makan</label>
                          <input class="numberformat" id="kygj_uang_makan" name="kygj_uang_makan" placeholder="Uang Makan" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_tunjangan">Tunjangan Jabatan</label>
                          <input class="numberformat" id="kygj_tunjangan" name="kygj_tunjangan" placeholder="Tunjangan Jabatan" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_lembur">Lembur</label>
                          <input class="numberformat" id="kygj_lembur" name="kygj_lembur" placeholder="Lembur" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_rapelanbulanlalu">Rapelan Bulan Lalu</label>
                          <input class="numberformat" id="kygj_rapelanbulanlalu" name="kygj_rapelanbulanlalu" placeholder="Rapelan Bulan Lalu" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_transport">Transport</label>
                          <input class="numberformat" id="kygj_transport" name="kygj_transport" placeholder="Transport" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_insentif">Insentif</label>
                          <input class="numberformat" id="kygj_insentif" name="kygj_insentif" placeholder="Insentif" required />
                        </div> <!-- /field -->

                      </div> <!-- /form-fields -->
                  </div>
                  <!-- /widget-content --> 
              </div>
              <!-- /widget -->
            </div>
            <!-- /span3-->

            <!-- /span3-->
            <div class="span3">
              <div class="widget">

                  <div class="widget-header"> <i class="icon-th-list"></i>
                    <h3>Deduction</h3>
                  </div>
                  <!-- /widget-header -->
                  <div class="widget-content">
                      <div class="form-fields">

                        <div class="field">
                          <label for="kygj_bpjstk">BPJS TK</label>
                          <input class="numberformat" id="kygj_bpjstk" name="kygj_bpjstk" placeholder="BPJS TK" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_potshutdown">Potongan Shutdown</label>
                          <input class="numberformat" id="kygj_potshutdown" name="kygj_potshutdown" placeholder="Potongan Shutdown" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_rapelbulandepan">Rapelan Bulan Depan</label>
                          <input class="numberformat" id="kygj_rapelbulandepan" name="kygj_rapelbulandepan" placeholder="Rapelan Bulan Depan" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_mangkir">Mangkir</label>
                          <input class="numberformat" id="kygj_mangkir" name="kygj_mangkir" placeholder="Mangkir" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_potperalatan">Potongan Seragam, Sepatu, & Helm</label>
                          <input class="numberformat" id="kygj_potperalatan" name="kygj_potperalatan" placeholder="Potongan Seragam, Sepatu, & Helm" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_pph">PPh</label>
                          <input class="numberformat" id="kygj_pph" name="kygj_pph" placeholder="PPh" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_bpjskes">BPJS Kesehatan</label>
                          <input class="numberformat" id="kygj_bpjskes" name="kygj_bpjskes" placeholder="BPJS Kesehatan" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_pinjaman">Pinjaman</label>
                          <input class="numberformat" id="kygj_pinjaman" name="kygj_pinjaman" placeholder="Pinjaman" required />
                        </div> <!-- /field -->
                                      
                      </div> <!-- /form-fields -->
                      
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
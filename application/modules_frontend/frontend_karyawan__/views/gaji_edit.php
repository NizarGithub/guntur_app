<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_gaji.php'); ?>
        </div>
        <div>
          <form action="" method="post">
            <input type="hidden" name="kygj_id" value="<?php echo($detail['kygj_id']); ?>">
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
                            <option value="<?php echo $value['value']; ?>" <?php echo ($detail['kygj_kary_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->
                      <div class="field">
                        <label for="kygj_periode">Periode</label>
                        <input id="kygj_periode" name="kygj_periode" placeholder="Periode" value="<?php echo $detail['kygj_periode']; ?>" required />
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
                          <input class="numberformat" id="kygj_gaji_pokok" name="kygj_gaji_pokok" placeholder="Gaji Pokok" value="<?php echo $detail['kygj_gaji_pokok']; ?>" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_uang_makan">Uang Makan</label>
                          <input class="numberformat" id="kygj_uang_makan" name="kygj_uang_makan" placeholder="Uang Makan" value="<?php echo $detail['kygj_uang_makan']; ?>" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_tunjangan">Tunjangan Jabatan</label>
                          <input class="numberformat" id="kygj_tunjangan" name="kygj_tunjangan" placeholder="Tunjangan Jabatan" value="<?php echo $detail['kygj_tunjangan']; ?>" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_lembur">Lembur</label>
                          <input class="numberformat" id="kygj_lembur" name="kygj_lembur" placeholder="Lembur" value="<?php echo $detail['kygj_lembur']; ?>" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_rapelanbulanlalu">Rapelan Bulan Lalu</label>
                          <input class="numberformat" id="kygj_rapelanbulanlalu" name="kygj_rapelanbulanlalu" placeholder="Rapelan Bulan Lalu" value="<?php echo $detail['kygj_rapelanbulanlalu']; ?>" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_transport">Transport</label>
                          <input class="numberformat" id="kygj_transport" name="kygj_transport" placeholder="Transport" value="<?php echo $detail['kygj_transport']; ?>" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_insentif">Insentif</label>
                          <input class="numberformat" id="kygj_insentif" name="kygj_insentif" placeholder="Insentif" value="<?php echo $detail['kygj_insentif']; ?>" required />
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
                          <input class="numberformat" id="kygj_bpjstk" name="kygj_bpjstk" placeholder="BPJS TK" value="<?php echo $detail['kygj_bpjstk']; ?>" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_potshutdown">Potongan Shutdown</label>
                          <input class="numberformat" id="kygj_potshutdown" name="kygj_potshutdown" placeholder="Potongan Shutdown" value="<?php echo $detail['kygj_potshutdown']; ?>" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_rapelbulandepan">Rapelan Bulan Depan</label>
                          <input class="numberformat" id="kygj_rapelbulandepan" name="kygj_rapelbulandepan" placeholder="Rapelan Bulan Depan" value="<?php echo $detail['kygj_rapelbulandepan']; ?>" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_mangkir">Mangkir</label>
                          <input class="numberformat" id="kygj_mangkir" name="kygj_mangkir" placeholder="Mangkir" value="<?php echo $detail['kygj_mangkir']; ?>"required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_potperalatan">Potongan Seragam, Sepatu, & Helm</label>
                          <input class="numberformat" id="kygj_potperalatan" name="kygj_potperalatan" placeholder="Potongan Seragam, Sepatu, & Helm" value="<?php echo $detail['kygj_potperalatan']; ?>" required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_pph">PPh</label>
                          <input class="numberformat" id="kygj_pph" name="kygj_pph" placeholder="PPh" value="<?php echo $detail['kygj_pph']; ?>"required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_bpjskes">BPJS Kesehatan</label>
                          <input class="numberformat" id="kygj_bpjskes" name="kygj_bpjskes" placeholder="BPJS Kesehatan" value="<?php echo $detail['kygj_bpjskes']; ?>"required />
                        </div> <!-- /field -->

                        <div class="field">
                          <label for="kygj_pinjaman">Pinjaman</label>
                          <input class="numberformat" id="kygj_pinjaman" name="kygj_pinjaman" placeholder="Pinjaman" value="<?php echo $detail['kygj_pinjaman']; ?>"required />
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
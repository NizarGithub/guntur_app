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
              <h3>Form Aktiva Lancar</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['daktlcr_id']); ?>" method="post">
                <input type="hidden" name="daktlcr_id" value="<?php echo $detail['daktlcr_id']; ?>" />
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="daktlcr_kode">Kode Aktiva</label>
                    <input id="daktlcr_kode" name="daktlcr_kode" placeholder="Kode Aktiva" value="<?php echo $detail['daktlcr_kode']; ?>" required />
                  </div> <!-- /field -->
                  
                  
                  <div class="field">
                    <label for="daktlcr_keterangan">Keterangan</label>
                    <input id="daktlcr_keterangan" name="daktlcr_keterangan" value="<?php echo $detail['daktlcr_keterangan']; ?>" placeholder="Keterangan"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="daktlcr_tipe">Tipe Aktiva</label>
                    <select name="daktlcr_tipe" id="daktlcr_tipe" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['aktiva'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['daktlcr_tipe'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="daktlcr_harga">Harga Aktiva</label>
                    <input id="daktlcr_harga" name="daktlcr_harga" value="<?php echo $detail['daktlcr_harga']; ?>" placeholder="Biaya Aktiva"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="daktlcr_tanggalpakai">Tgl Pakai</label>
                    <input class="date-picker" id="daktlcr_tanggalpakai" name="daktlcr_tanggalpakai" value="<?php echo $detail['daktlcr_tanggalpakai']; ?>" placeholder="Tgl Pakai"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="daktlcr_tanggalbeli">Tgl Beli</label>
                    <input class="date-picker" id="daktlcr_tanggalbeli" name="daktlcr_tanggalbeli" value="<?php echo $detail['daktlcr_tanggalbeli']; ?>" placeholder="Tgl Beli"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="daktlcr_qty">Qty</label>
                    <input id="daktlcr_qty" name="daktlcr_qty" value="<?php echo $detail['daktlcr_qty']; ?>" placeholder="Qty"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="daktlcr_umurbulan">Umur Bulan Aktiva</label>
                    <input id="daktlcr_umurbulan" name="daktlcr_umurbulan" value="<?php echo $detail['daktlcr_umurbulan']; ?>" placeholder="Umur Bulan Aktiva"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="daktlcr_persensusut">%Penyusut/Tahun</label>
                    <input id="daktlcr_persensusut" name="daktlcr_persensusut" value="<?php echo $detail['daktlcr_persensusut']; ?>" placeholder="%Penyusut/Tahun"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="daktlcr_pajak">Pajak</label>
                    <input id="daktlcr_pajak" name="daktlcr_pajak" value="<?php echo $detail['daktlcr_pajak']; ?>" placeholder="Pajak"/>
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
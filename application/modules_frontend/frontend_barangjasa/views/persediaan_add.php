<style type="text/css">
.form-fields input[type="radio"] {
    width: auto;
    height: auto;
    padding: 0;
    margin: 3px 0;
    line-height: normal;
    cursor: pointer;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    border: 0 \9;
}

.rd-inline label{
  padding-left: 20px;display:inline-block;margin-right:10px;
}

.rd-inline label input[type="radio"] {
  position: absolute;margin-left: -20px;
}
</style>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_persediaan.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Add</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="" method="post">
                
                <div class="form-fields">

                  <div class="field">
                    <label for="psdbrg_brjs_id">Barang/Jasa</label>
                    <select name="psdbrg_brjs_id" id="psdbrg_brjs_id" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($data_source['barangjasa'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->
             
				  <div class="field">
                    <label for="psdbrg_debit">Debit</label>
                    <input class="numberformat" id="psdbrg_debit" name="psdbrg_debit" placeholder="Debit" />
                  </div> <!-- /field -->
				  
				  <div class="field">
                    <label for="psdbrg_kredit">Kredit</label>
                    <input class="numberformat" id="psdbrg_kredit" name="psdbrg_kredit" placeholder="Kredit" />
                  </div> <!-- /field -->

				  <div class="field">
                    <label for="psdbrg_tanggal">Tanggal</label>
					<input type="date" id="psdbrg_tanggal" name="psdbrg_tanggal" placeholder="Tanggal" />                    
                  </div> <!-- /field -->
				  
				  <div class="field">
                    <label for="psdbrg_user">User</label>
					<input type="text" id="psdbrg_user" name="psdbrg_user" placeholder="User" />                    
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
  $(function(){
    $('.numberformat').number( true, 0, ',', '.' );
  })
</script>
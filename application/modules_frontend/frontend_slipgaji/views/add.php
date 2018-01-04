<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar.php'); ?>
        </div>
        <!-- /span4 -->
        <form action="" method="post">
          <div class="span3">
            <div class="widget">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>P R O F I L E</h3>
              </div>
              <!-- /widget-header -->
              <div class="widget-content">
                  <div class="form-fields">

                  </div> <!-- /form-fields -->
                  <div class="extraPersonTemplate form-fields">

                    <div class="field">
                      <label for="slipgaji_kary_id">Karyawan</label>
                      <select name="slipgaji_kary_id" id="slipgaji_kary_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_karyawan as $value): ?>
                      <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                      </select>
                    </div> <!-- /field -->

                    <div class="field">
                      <label for="slipgaji_jabatan">Jabatan :</label>
                      <input id="slipgaji_jabatan[]" name="slipgaji_jabatan[]" value="" placeholder="Jabatan"/>
                    </div> <!-- /field -->
                  </div>
              </div>
              <!-- /widget-content -->
            </div>
            <!-- /widget -->
          </div>
          <div class="span3">
            <div class="widget">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>I N C O M E</h3>
              </div>
              <!-- /widget-header -->
              <div class="widget-content">

                  <div class="form-fields">

                    <div class="field">
                      <label for="slipgaji_gajipokok">Gaji Pokok :</label>
                      <input type="text" id="slipgaji_gajipokok" name="slipgaji_gajipokok" value="" placeholder="Gaji Pokok :" />
                    </div> <!-- /field -->

                    <div class="field">
                      <label for="  slipgaji_uangmakan">Uang Makan :</label>
                      <input type="text" id=" slipgaji_uangmakan" name=" slipgaji_uangmakan" value="" placeholder="Uang Makan :" />
                    </div> <!-- /field -->

                    <div class="field">
                      <label for="slipgaji_tunjjabtan">Tunjangan Jabatan :</label>
                      <input type="text" id="slipgaji_tunjjabtan" name="slipgaji_tunjjabtan" value="" placeholder="Tunjangan Jabatan :" />
                    </div> <!-- /field -->

                    <div class="field">
                      <label for="slipgaji_lembur">LEMBUR :</label>
                      <input type="text" id="slipgaji_lembur" name="slipgaji_lembur" value="" placeholder="LEMBUR :" />
                    </div> <!-- /field -->

                    <div class="field">
                      <label for="slipgaji_rapelbulanlau">RAPELAN BULAN LALU</label>
                      <input type="text" id="slipgaji_rapelbulanlau" name="slipgaji_rapelbulanlau" value="" placeholder="RAPELAN BULAN LALU" />
                    </div> <!-- /field -->

                    <div class="field">
                      <label for="slipgaji_catatan">Catatan:</label>
                      <textarea id="slipgaji_catatan" name="slipgaji_catatan" value="" placeholder="Catatan"></textarea>
                    </div> <!-- /field -->
                  </div> <!-- /form-fields -->
              </div>
              <!-- /widget-content -->
            </div>
            <!-- /widget -->
          </div>
          <div class="span4">
            <div class="widget">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>D E D U C T I O N</h3>
              </div>
              <!-- /widget-header -->
              <div class="widget-content">
                  <div class="form-fields">

                  </div> <!-- /form-fields -->
                  <div class="extraPersonTemplate form-fields">
                    
                    <div class="field">
                      <label for="slipgaji_bpjstk">BPJS TK :</label>
                      <input type="text" id="slipgaji_bpjstk" name="slipgaji_bpjstk" value="" placeholder="BPJS TK :" />
                    </div> <!-- /field -->

                    <div class="field">
                      <label for="slipgaji_potshutdown">POTONGAN SHUTDOWN :</label>
                      <input type="text" id="slipgaji_potshutdown" name="slipgaji_potshutdown" value="" placeholder="POTONGAN SHUTDOWN :" />
                    </div> <!-- /field -->

                    <div class="field">
                      <label for="slipgaji_rapelbulandepan">RAPELAN BULAN DEPAN :</label>
                      <input type="text" id="slipgaji_rapelbulandepan" name="slipgaji_rapelbulandepan" value="" placeholder="RAPELAN BULAN DEPAN :" />
                    </div> <!-- /field -->

                    <div class="field">
                      <label for="slipgaji_mangkir">MANGKIR :</label>
                      <input type="text" id="slipgaji_mangkir" name="slipgaji_mangkir" value="" placeholder="MANGKIR :" />
                    </div> <!-- /field -->

                    <div class="field">
                      <label for="slipgaji_potperalatan">POTONGAN SERAGAM, SEPATU & HELM ;</label>
                      <input type="text" id="slipgaji_potperalatan" name="slipgaji_potperalatan" value="" placeholder="POTONGAN SERAGAM, SEPATU & HELM ;" />
                    </div> <!-- /field -->
                    
                  </div>

                  <div id="container"></div>
                  <div class="form-actions">
                    <div class="pull-right">
                      <button type="reset" class="button btn btn-default btn-large">Reset</button>
                      <button class="button btn btn-primary btn-large"><a href="print_invoice.html"></a> Submit</button>
                    </div>
                  </div> <!-- .actions -->
              </div>
              <!-- /widget-content -->
            </div>
            <!-- /widget -->
          </div>
        </form>
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

<script type="text/javascript">
  $(function(){
    var get_info = function(id) {
      if(id == '') {
        $('#bpu_terbilang').text('-');
        return true;
      }

      var url = '<?php echo site_url("bpu/terbilang"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#bpu_terbilang').text(data.terbilang);
      });
    };

    var delay = (function(){
      var timer = 0;
      return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
      };
    })();

    $('#bpu_harga').keyup(function() {
        delay(function(){
          var me = $('#bpu_harga');
          get_info(me.val());
        }, 500 );
    });

    delay(function(){
      var me = $('#bpu_harga');
      get_info(me.val());
    }, 500 );
  })
</script>
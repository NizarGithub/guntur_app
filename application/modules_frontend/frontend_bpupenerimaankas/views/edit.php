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
              <h3>Edit BPU - Penerimaan Kas</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['bpupnrmkas_id']); ?>" method="post">
                <input type="hidden" name="bpupnrmkas_id" value="<?php echo $detail['bpupnrmkas_id']; ?>" />

                <div class="form-fields">
                  
                  <div class="field">
                    <label for="bpupnrmkas_nobukti">No. Bukti</label>
                    <input type="text" id="bpupnrmkas_nobukti" name="bpupnrmkas_nobukti" placeholder="No. Bukti" value="<?php echo $detail['bpupnrmkas_nobukti']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpupnrmkas_noakun">No. Akun</label>
                    <select name="bpupnrmkas_noakun">
                      <option value="">-- pilih --</option>
                      <?php foreach($optDaftarAkun as $key => $value): ?>
                        <option <?php echo ($detail['bpupnrmkas_noakun'] == $value['value'] ? 'selected' : ''); ?> value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpupnrmkas_tanggal">Tanggal</label>
                    <input value="<?php echo $detail['bpupnrmkas_tanggal']; ?>" type="text" class="date-picker hasDatepicker" id="bpupnrmkas_tanggal" name="bpupnrmkas_tanggal" placeholder="Tanggal" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpupnrmkas_dari">Dari</label>
                    <input value="<?php echo $detail['bpupnrmkas_dari']; ?>" type="text" id="bpupnrmkas_dari" name="bpupnrmkas_dari" placeholder="Dari" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpupnrmkas_jumlah">Jumlah</label>
                    <input value="<?php echo $detail['bpupnrmkas_jumlah']; ?>" class="numberformat" type="text" id="bpupnrmkas_jumlah" name="bpupnrmkas_jumlah" placeholder="Jumlah" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpupnrmkas_untuk">Untuk</label>
                    <input value="<?php echo $detail['bpupnrmkas_untuk']; ?>" type="text" id="bpupnrmkas_untuk" name="bpupnrmkas_untuk" placeholder="Untuk" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpupnrmkas_penerima">Penerima</label>
                    <input value="<?php echo $detail['bpupnrmkas_penerima']; ?>" type="text" id="bpupnrmkas_penerima" name="bpupnrmkas_penerima" placeholder="Penerima" />
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

<script type="text/javascript">
  $(function(){
    var get_info = function(id) {
      if(id == '') {
        $('#bpu_pnrmkasterbilang').text('-');
        return true;
      }

      var url = '<?php echo site_url("bpu/terbilang"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#bpu_pnrmkasterbilang').text(data.terbilang);
      });
    };

    var delay = (function(){
      var timer = 0;
      return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
      };
    })();

    $('#bpu_pnrmkasharga').keyup(function() {
        delay(function(){
          var me = $('#bpu_pnrmkasharga');
          get_info(me.val());
        }, 500 );
    });

    delay(function(){
      var me = $('#bpu_pnrmkasharga');
      get_info(me.val());
    }, 500 );
  })
</script>
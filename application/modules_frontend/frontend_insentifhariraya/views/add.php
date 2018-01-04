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
              <h3>Form Add</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="form-fields">

              </div> <!-- /form-fields -->
              <div class="extraPersonTemplate form-fields">
                <div style="text-align: right;">
                  <a class="add_form" href="#">[ HAPUS ]</a>
                </div>

                <div class="field">
                  <label for="pbptnd_jenisbarang">Jenis Barang:</label>
                  <select name="pbptnd_jenisbarang[]" id="pbptnd_jenisbarang[]" />
                  <option value="">-- Pilih --</option>
                  <?php foreach($option_barang as $value): ?>
                  <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div> <!-- /field -->

                <div class="field">
                  <label for="pbptnd_jumlah">Volume:</label>
                  <input id="pbptnd_jumlah[]" name="pbptnd_jumlah[]" value="" placeholder="Volume"/>
                </div> <!-- /field -->
              </div>

              <div id="container"></div>
              <a href="#" id="addRow"><i class="icon-plus-sign icon-white"></i> Tambah Barang</p></a>
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
        <!-- /span10 -->
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<script type="text/javascript">
  $(document).ready(function () {
     $('<div/>', {
         'class' : 'extraPerson form-fields', html: GetHtml()
     }).appendTo('#container');
     $('#addRow').click(function (e) {
        e.preventDefault();
           $('<div/>', {
               'class' : 'extraPerson form-fields', html: GetHtml()
     }).hide().appendTo('#container').slideDown('slow');

     });

     $('.add_form').live('click', function(e){
      e.preventDefault();
      $(this).closest('.extraPerson').remove();
     });
 })
 function GetHtml()
{
    var len = $('.extraPerson form-fields').length;
    var $html = $('.extraPersonTemplate').clone();
    $html.find('[name=pbptnd_jenisbarang]').name="pbptnd_jenisbarang[]" + len;
    $html.find('[name=pbptnd_jumlah]').name="pbptnd_jumlah[]" + len;
    $html.find('.add_form').show();
    return $html.html();
}
</script>
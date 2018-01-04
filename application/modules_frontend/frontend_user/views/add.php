<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar.php'); ?>
        </div>
        <!-- /span2 -->
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
                    <label for="admusr_username">Username</label>
                    <input id="admusr_username" name="admusr_username" placeholder="Username" required />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="admusr_userpasswd">Password</label>
                    <input type="password" id="admusr_userpasswd" name="admusr_userpasswd" placeholder="Password" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="re_password">Re-Password</label>
                    <input type="password" id="re_password" name="re_password" placeholder="Re-Password" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="admusr_aulv_id">Level</label>
                    <select name="admusr_aulv_id" id="admusr_aulv_id" required />
                      <option value="">--Pilih User Level--</option>
                      <?php foreach($option_level as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="admusr_user_status">Status</label>
                    <select name="admusr_user_status" id="admusr_user_status" required /> 
                      <?php foreach($option_status as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
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
        <!-- /span10 -->
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
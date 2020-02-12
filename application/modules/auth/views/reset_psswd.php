<?php $this->load->view('header') ?>

<div class="login-box-body">
    <p class="login-box-msg">Masukkan Password Baru</p>

    <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="New Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
<!--             <label>
              <a href="forget">Forget Password</a>
            </label> -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

<?php $this->load->view('footer') ?>
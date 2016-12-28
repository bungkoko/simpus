<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/vendor.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/flat-admin.css">

      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/theme/blue-sky.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/theme/blue.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/theme/red.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/theme/yellow.css">
      <title>Administrasi - Login</title>
    </head>
    <body>
      <div class="app app-default">
      <div class="app-container app-login">
        <div class="flex-center">
          <div class="app-header"></div>
          <div class="app-body">
            <div class="loader-container text-center">
                <div class="icon">
                  <div class="sk-folding-cube">
                      <div class="sk-cube1 sk-cube"></div>
                      <div class="sk-cube2 sk-cube"></div>
                      <div class="sk-cube4 sk-cube"></div>
                      <div class="sk-cube3 sk-cube"></div>
                    </div>
                  </div>
                <div class="title">Logging in...</div>
            </div>
            <div class="app-block">
              <div class="app-form">
                <div class="form-header">
                  <div class="app-brand"><span class="highlight">Simplio</span> Admin</div>
                </div>
                <form method="post" action="<?php echo site_url('dashboard/signin')?>">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">
                        <i class="fa fa-user" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon2">
                        <i class="fa fa-key" aria-hidden="true"></i>
                      </span>
                      <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon2">
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-success btn-submit" value="Login">
                    </div>
                </form>
              </div>
            </div>
          </div>
          <div class="app-footer">
          </div>
        </div>
      </div>
    </div>




    </body>
</html>

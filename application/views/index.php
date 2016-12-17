<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/vendor.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/flat-admin.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/fileinput.css">

      <title><?php echo $title;?></title>
    </head>
    <body>
      <div class="app app-default">
          <?php $this->load->view($content);?>
      </div>
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/vendor.js"></script>

    </body>
</html>

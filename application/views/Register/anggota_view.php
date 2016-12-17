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
        <div class="app-right-section">
          <div class="app-brand"><span class="highlight">Sistem Manajemen</span> Perpustakaan</div>
          <div class="app-info">

            <ul class="list">
              <li>
                <div class="icon">
                  <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                </div>
                <div class="title">Increase <b>Productivity</b></div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-cubes" aria-hidden="true"></i>
                </div>
                <div class="title">Lot of <b>Components</b></div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-usd" aria-hidden="true"></i>
                </div>
                <div class="title">Forever <b>Free</b></div>
              </li>
            </ul>
          </div>
        </div>
        <div class="app-form">
          <div class="step">
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li role="step" class="active">
                <a href="#step1" id="step1-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                  <div class="icon fa fa-exclamation-circle"></div>
                  <div class="heading">
                    <div class="title">Petunjuk Registrasi Anggota Perpustakaan Daerah Kota Bengkulu</div>
                    <div class="description">Tata Cara Registrasi Online</div>
                  </div>
                </a>
              </li>
              <li role="step" >
                <a href="#step2" role="tab" id="step2-tab" data-toggle="tab" aria-controls="profile">
                  <div class="icon fa fa-registered"></div>
                  <div class="heading">
                    <div class="title">Registrasi Anggota</div>
                    <div class="description">Halaman Registrasi</div>
                  </div>
                </a>
              </li>
            </ul>
          <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="step1">
                <b>Step1</b> : Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
              </div>
              <div role="tabpanel" class="tab-pane" id="step2">
                <form action="<?php echo site_url('anggota/proses_reg');?>" method="POST" enctype="multipart/form-data">
                  <div class="col-sm-6 col-xs-6">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">
                        <i class="fa fa-user-o" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="anggota_nm" placeholder="Nama Lengkap" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon2">
                        <i class="fa fa-envelope" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="anggota_email" placeholder="Email" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon2">
                        <i class="fa fa-address-card" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="anggota_tmplahir" placeholder="Tempat Lahir" aria-describedby="basic-addon2">
                    </div>
                    <div class="form-group">
                      <div class="input-group date form_date col-md-5">
                        <span class="input-group-addon" id="basic-addon2">
                          <i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input class="form-control" name="anggota_tgllahir" placeholder="Tanggal Lahir" size="16" type="text" value="" readonly>
                      </div>
				           </div>
                   <div class="input-group">
                     <span class="input-group-addon" id="basic-addon2">
                       <i class="fa fa-phone" aria-hidden="true"></i></span>
                     <input type="text" class="form-control" name="anggota_notelpon" placeholder="Nomor Telpon / Handphone" aria-describedby="basic-addon2">
                   </div>
                    <div>
                      <div class="radio radio-inline">
                        <input type="radio" name="anggota_jeniskelamin" id="l" value="L">
                          <label for="l">Laki-laki</label>
                      </div>
                      <div class="radio radio-inline">
                         <input type="radio" name="anggota_jeniskelamin" id="p" value="P" >
                         <label for="p">Perempuan</label>
                      </div>
                    </div>

                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i></span>
                      <textarea type="text" class="form-control" name="anggota_alamat" placeholder="Alamat" aria-describedby="basic-addon1"></textarea>
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                      </span>
                        <select class="select2" name="anggota_status">
                          <option value="" disabled>-Status Pendidikan-</option>
                          <option value="pelajar">Pelajar</option>
                          <option value="mahasiswa">Mahasiswa</option>
                          <option value="Umum">Umum</option>
                        </select>
                    </div>
                  </div>

                  <div class="col-sm-6 col-xs-6">
                    <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
                    <div class="kv-avatar center-block" style="width:200px">
                      <input id="avatar" name="anggota_avatar" type="file" class="file-loading">
                    </div>
                  </div>
                  <div class="text-center">
                      <input type="submit" name="submit" class="btn btn-success btn-submit" value="Register">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="app-footer">
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/fileinput.js"></script>
<script type="text/javascript">
$('.form_date').datetimepicker({
      weekStart: 1,
      format:'yyyy-mm-dd',
      todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
  });
  $("#avatar").fileinput({
      overwriteInitial: true,
      maxFileSize: 2000,
      showClose: false,
      showCaption: false,
      showBrowse: false,
      browseOnZoneClick:true,
      removeLabel: '',
      removeIcon: '<i class="fa fa-remove"></i>',
      removeTitle: 'Cancel or reset changes',
      elErrorContainer: '#kv-avatar-errors-2',
      msgErrorClass: 'alert alert-block alert-danger',
      defaultPreviewContent: '<img src="<?php echo base_url()?>upload/anggota/default_avatar_male.jpg" alt="Your Avatar" style="width:160px;text-align:center;"><h6 class="text-muted" style="text-align:center">Pilih Gambar Max 2 MB</h6>',
      layoutTemplates: {main2: '{preview} ' + '<div style="text-align:center">' + ' {remove} {browse}'+'</div>'},
      allowedFileExtensions: ["jpg", "png", "gif"]
  });
</script>

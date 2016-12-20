<form action="<?php echo site_url('koleksi/getkode_otomatis');?>" method="POST" enctype="multipart/form-data">
  <select name="simpus_genre_genre_kd">
    <?php foreach($gtgenre as $genre):?>
    <<option value="<?php echo $genre->genre_kd?>"><?php echo $genre->genre_judul ?></option>
    <?php endforeach;?>
  </select>
  <input name="submit" value="submit" type="submit">
</form>

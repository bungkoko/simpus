 <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form class="form form-horizontal">
          <div class="section">
            <div class="section-title">Input Koleksi</div>
            <div class="section-body">
              <div class="form-group">
                <label class="col-md-3 control-label">Judul Koleksi</label>
                <div class="col-md-9">
                  <input type="text" name="koleksi_judul" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Genre Koleksi</label>
                <div class="col-md-9">
                  <select name="simpus_genre_genre_id">
                  <?php foreach ($gtgenre as $genre):?>
                      <option value="<?php echo $genre->genre_kd?>"><?php echo $genre->genre_judul;?></option>
                  <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Price</label>
                <div class="col-md-9">
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section">
            <div class="section-title">Warranty</div>
            <div class="section-body">
              <div class="form-group">
                <label class="col-md-3 control-label">Type</label>
                <div class="col-md-9">
                  <div class="radio radio-inline">
                      <input type="radio" name="radio4" id="radio10" value="option10">
                      <label for="radio10">
                        Global
                      </label>
                  </div>
                  <div class="radio radio-inline">
                      <input type="radio" name="radio4" id="radio11" value="option11" checked>
                      <label for="radio11">
                        Local
                      </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Cover</label>
                <div class="col-md-4">
                  <div class="input-group">
                    <select class="select2">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                    <span class="input-group-addon">Years</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-footer">
            <div class="form-group">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

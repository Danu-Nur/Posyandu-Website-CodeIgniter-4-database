<div class="col-md-12">


<!-- general form elements -->
<div class="card card-primary">
<?php 
            $errors = $validation->getErrors();
            if(!empty($errors))
            {
                echo $validation->listErrors('err_list');
            }
        ?>
              <div class="card-header">
                <h3 class="card-title">Edit Artikel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= form_open_multipart(base_url('artikel/update/'.$artikel['ID_ARTIKEL'])); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Judul</label>
                    <input name="JUDUL" class="form-control" value="<?= $artikel['JUDUL']?>">
                  </div>

                  <div class="form-group">
                    <label>Foto Artikel</label>
                    <input type="file" name="FOTO_ARTIKEL" class="form-control"><img src="<?= base_url('uploads/'.$artikel['FOTO_ARTIKEL']) ?> " width="100">
                    
                  </div>
                  <div class="form-group">
                    <label>Isi Artikel</label>
                    <textarea name="ISI_ARTIKEL" class="form-control" rows="3"><?= $artikel['ISI_ARTIKEL']?></textarea>
                  </div>
                  
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


</div>
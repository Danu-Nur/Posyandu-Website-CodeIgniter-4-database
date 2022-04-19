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
                <h3 class="card-title">Add Artikel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= form_open_multipart(base_url('artikel/save_add')); ?>
              
                <div class="card-body">
                  <div class="form-group">
                    <label>Judul</label>
                    <input name="JUDUL" class="form-control" placeholder="judul artikel">
                  </div>
                  <div class="form-group">
                    <label>Foto Artikel</label>
                    <input type="file" name="FOTO_ARTIKEL" class="form-control" placeholder="foto artikel">
                  </div>
                  <div class="form-group">
                    <label>Isi Artikel</label>
                    <textarea name="ISI_ARTIKEL" class="form-control" rows="3" placeholder="isi artikel"></textarea>
                  </div>
                  
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
             
            </div>
            <!-- /.card -->


</div>
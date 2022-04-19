<div class="col-md-12">


<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Vitamin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('vitamin/update/'.$vitamin['ID_VITAMIN'])?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Vitamin</label>
                    <input name="NAMA_VITAMIN" class="form-control" value="<?= $vitamin['NAMA_VITAMIN']?>">
                  </div>
                  <div class="form-group">
                    <label>Keterangan Vitamin</label>
                    <textarea name="KETERANGAN_VIT" rows="3" class="form-control"><?= $vitamin['KETERANGAN_VIT']?></textarea>
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
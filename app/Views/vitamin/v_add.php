<div class="col-md-12">


<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Vitamin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('vitamin/save_add');?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Vitamin</label>
                    <input name="NAMA_VITAMIN" class="form-control" placeholder="nama vitamin">
                  </div>
                  <div class="form-group">
                    <label>Keterangan Vitamin</label>
                    <textarea name="KETERANGAN_VIT" class="form-control" rows="3" placeholder="keterangan vitamin"></textarea>
                  </div>
                  
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


</div>
<div class="col-md-12">


<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Imunisasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('imunisasi/save_add');?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Jenis Imunisasi</label>
                    <input name="JENIS_IMUN" class="form-control" placeholder="jenis imunisasi">
                  </div>
                  <div class="form-group">
                    <label>Keterangan Imunisasi</label>
                    <textarea name="KETERANGAN_IMUN" rows="3" class="form-control" placeholder="keterangan imunisasi"></textarea>
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
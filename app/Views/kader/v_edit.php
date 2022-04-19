<div class="col-md-12">


<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Kader</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('kader/update/'.$kader['ID_KADER'])?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Kader</label>
                    <input name="NAMA_KADER" class="form-control" value="<?= $kader['NAMA_KADER']?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat Kader</label>
                    <input name="ALAMAT_KADER" class="form-control" value="<?= $kader['ALAMAT_KADER']?>">
                  </div>
                  <div class="form-group">
                    <label>Telepon</label>
                    <input name="TELP" class="form-control" value="<?= $kader['TELP']?>">
                  </div>
                  <div class="form-group">
                  <label>Jenis Kelamin</label>
         <select class="custom-select"  name="ID_JK"> 
         <?php
foreach ($jenis_kelamin as $key => $value){
    ?>
         <option value="<?= $value['ID_JK']?>"><?= $value['JENIS_KELAMIN']?></option>
         <?php
}
?>
</select>
</div>
<div class="form-group">
                    <label>Username</label>
                    <input name="USERNAMEE" class="form-control" value="<?= $kader['USERNAMEE']?>">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input name="PASW" class="form-control" value="<?= $kader['PASW']?>">
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
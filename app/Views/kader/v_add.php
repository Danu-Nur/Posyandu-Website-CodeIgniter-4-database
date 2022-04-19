<div class="col-md-12">


<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Kader</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('kader/save_add');?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Kader</label>
                    <input name="NAMA_KADER" class="form-control" placeholder="nama kader">
                  </div>
                  <div class="form-group">
                    <label>Alamat Kader</label>
                    <input name="ALAMAT_KADER" class="form-control" placeholder="alamat kader">
                  </div>
                  <div class="form-group">
                    <label>Telepon</label>
                    <input name="TELP" class="form-control" placeholder="telepon">
                  </div>
                  <div class="form-group">
                  <label>Jenis Kelamin</label>
         <select class="custom-select"  name="ID_JK"> 
         <option selected>Pilih...</option>
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
                    <input name="USERNAMEE" class="form-control" placeholder="username">
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input name="PASW" class="form-control" placeholder="password">
                  </div>
                  
<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->  
                  
                </div>
                <!-- /.card-body -->

                


</div>
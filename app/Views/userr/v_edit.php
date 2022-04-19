<div class="col-md-12">


<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('userr/update/'.$userr['ID_USER'])?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>No KK</label>
                    <input name="NO_KK" class="form-control" value="<?= $userr['NO_KK']?>">
                  </div>
                  <div class="form-group">
                    <label>Nama Ayah</label>
                    <input name="NAMA_AYAH" class="form-control" value="<?= $userr['NAMA_AYAH']?>">
                  </div>
                  <div class="form-group">
                    <label>Nama Ibu</label>
                    <input name="NAMA_IBU" class="form-control" value="<?= $userr['NAMA_IBU']?>">
                  </div>
                  <div class="form-group">
                    <label>Nama Balita</label>
                    <input name="NAMA_BALITA" class="form-control" value="<?= $userr['NAMA_BALITA']?>">
                  </div>
            
                  <div class="form-group">
                    <label>TTL Balita</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input name="TTL_BALITA" class="form-control" value="<?= $userr['TTL_BALITA']?>" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask>
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

<div class="form-group">
                    <label>Alamat</label>
                    <textarea name="ALAMAT" rows="3" class="form-control"><?= $userr['ALAMAT']?></textarea>
                  </div>
                  <div class="form-group">
                    <label>No Telp</label>
                    <input name="NO_TELP" class="form-control" value="<?= $userr['NO_TELP']?>">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input name="USERNAMA" class="form-control" value="<?= $userr['USERNAMA']?>">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input name="PASS" class="form-control" value="<?= $userr['PASS']?>">
                  </div>

                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>

            

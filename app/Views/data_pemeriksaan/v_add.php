<div class="col-md-12">


<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Data Pemeriksaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="<?= base_url('data_pemeriksaan/save_add');?>" method="post">
              
                <div class="card-body">
                
                <div class="form-group">
                  <label>Nama Kader</label>
         <select class="custom-select"  name="ID_KADER"> 
         <option selected>Pilih...</option>
         <?php
foreach ($kader as $key => $value){
    ?>
         <option value="<?= $value['ID_KADER']?>"><?= $value['NAMA_KADER']?></option>
         <?php
}
?>
</select>
</div>

<div class="form-group">
                  <label>Nama Balita</label>
         <select class="custom-select"  name="ID_USER"> 
         <option selected>Pilih...</option>
         <?php
foreach ($userr as $key => $value){
    ?>
         <option value="<?= $value['ID_USER']?>"><?= $value['NAMA_BALITA']?></option>
         <?php
}
?>
</select>
</div>
   
<div class="form-group">
                  <label>Nama Vitamin</label>
         <select class="custom-select"  name="ID_VITAMIN"> 
         <option selected>Pilih...</option>
         <?php
foreach ($vitamin as $key => $value){
    ?>
         <option value="<?= $value['ID_VITAMIN']?>"><?= $value['NAMA_VITAMIN']?></option>
         <?php
}
?>
</select>
</div>
     
<div class="form-group">
                  <label>Nama Imunisasi</label>
         <select class="custom-select"  name="ID_IMUN"> 
         <option selected>Pilih...</option>
         <?php
foreach ($imunisasi as $key => $value){
    ?>
         <option value="<?= $value['ID_IMUN']?>"><?= $value['JENIS_IMUN']?></option>
         <?php
}
?>
</select>
</div>
     
<div class="form-group">
                  <label>Jadwal</label>
         <select class="custom-select"  name="ID_JADWAL"> 
         <option selected>Pilih...</option>
         <?php
foreach ($waktu as $key => $value){
    ?>
         <option value="<?= $value['ID_WAKTU']?>"><?= $value['TGL']?> <?= $value['JAM']?></option>
         <?php
}
?>
</select>
</div>
     
     <div class="form-group">
                    <label>Berat Badan</label>
                    <input name="BERAT_BADAN" class="form-control" placeholder="berat badan">
                  </div>

                  <div class="form-body">
                    <label>Tinggi Badan</label>
                    <input name="TINGGI_BADAN" class="form-control" placeholder="tinggi badan">
                  </div>
                
                <!-- /.card-body -->
               
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            
</div>
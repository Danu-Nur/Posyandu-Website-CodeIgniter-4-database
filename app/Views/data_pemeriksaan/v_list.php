<div class="col-sm-12">

<a href="<?= base_url('data_pemeriksaan/add')?>" class="btn btn-primary">Add Data</a>

<br></br>

<?php
if(!empty(session()->getFlashdata('success')))
{
    ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success');?>
</div>
<?php
}
?>
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>Id Periksa</th>
<th>Kader</th>
<th>Nama Balita</th>
<th>Vitamin</th>
<th>Imunisasi</th>
<th>Tgl Periksa</th>
<th>Berat Badan</th>
<th>Tinggi Badan</th>
<th>action</th>
</tr>
</thead>
<tbody>

<tr>
<?php
foreach ($data_pemeriksaan as $key => $value){
    ?>
<td scope="row"><?= $value['ID_PERIKSA']?></td>
<td><?= $value['NAMA_KADER']?></td>
<td><?= $value['NAMA_BALITA']?></td>
<td><?= $value['NAMA_VITAMIN']?></td>
<td><?= $value['JENIS_IMUN']?></td>
<td><?= $value['TGL']?></td>
<td><?= $value['BERAT_BADAN']?></td>
<td><?= $value['TINGGI_BADAN']?></td>

<td>
<a href="<?= base_url('data_pemeriksaan/edit/'.$value['ID_PERIKSA'])?>" class="btn btn-warning">edit</a>
<a href="<?= base_url('data_pemeriksaan/delete/'.$value['ID_PERIKSA'])?>" class="btn btn-danger" onClick="return confirm('Apakah yakin data ini dihapus..?')">delete</a>
</td>
</tr>
<?php
}
?>

</tbody>
</table>
</div>
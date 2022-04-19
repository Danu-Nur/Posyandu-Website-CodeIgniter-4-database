<div class="col-sm-12">

<a href="<?= base_url('userr/add')?>" class="btn btn-primary">Add Data</a>

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
<th>Id User</th>
<th>No KK</th>
<th>Nama Ayah</th>
<th>Nama Ibu</th>
<th>Nama Balita</th>
<th>TTL Balita</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>No Telp</th>
<th>Username</th>
<th>Password</th>
<th>action</th>
</tr>
</thead>
<tbody>
<?php
foreach ($userr as $key => $value){
    ?>

<tr>
<td scope="row"><?= $value['ID_USER']?></td>
<td><?= $value['NO_KK']?></td>
<td><?= $value['NAMA_AYAH']?></td>
<td><?= $value['NAMA_IBU']?></td>
<td><?= $value['NAMA_BALITA']?></td>
<td><?= $value['TTL_BALITA']?></td>
<td><?= $value['JENIS_KELAMIN']?></td>
<td><?= $value['ALAMAT']?></td>
<td><?= $value['NO_TELP']?></td>
<td><?= $value['USERNAMA']?></td>
<td><?= $value['PASS']?></td>
<td>
<a href="<?= base_url('userr/edit/'.$value['ID_USER'])?>" class="btn btn-warning">edit</a>
<a href="<?= base_url('userr/delete/'.$value['ID_USER'])?>" class="btn btn-danger" onClick="return confirm('Apakah yakin data ini dihapus..?')">delete</a>
</td>
</tr>
<?php
}
?>

</tbody>
</table>
</div>
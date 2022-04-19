<div class="col-sm-12">

<a href="<?= base_url('kader/add')?>" class="btn btn-primary">Add Data</a>

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
<th>Id Kader</th>
<th>Nama</th>
<th>Alamat</th>
<th>Telp</th>
<th>Jenis Kelamin</th>
<th>Username</th>
<th>Password</th>
<th>action</th>
</tr>
</thead>
<tbody>
<?php
foreach ($kader as $key => $value){
    ?>

<tr>
<td scope="row"><?= $value['ID_KADER']?></td>
<td><?= $value['NAMA_KADER']?></td>
<td><?= $value['ALAMAT_KADER']?></td>
<td><?= $value['TELP']?></td>
<td><?= $value['JENIS_KELAMIN']?></td>
<td><?= $value['USERNAMEE']?></td>
<td><?= $value['PASW']?></td>
<td>
<a href="<?= base_url('kader/edit/'.$value['ID_KADER'])?>" class="btn btn-warning">edit</a>
<a href="<?= base_url('kader/delete/'.$value['ID_KADER'])?>" class="btn btn-danger" onClick="return confirm('Apakah yakin data ini dihapus..?')">delete</a>
</td>
</tr>
<?php
}
?>

</tbody>
</table>
</div>
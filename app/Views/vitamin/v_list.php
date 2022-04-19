<div class="col-sm-12">

<a href="<?= base_url('vitamin/add')?>" class="btn btn-primary">Add Data</a>

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
<th>Id</th>
<th>Nama Vitamin</th>
<th>Keterangan</th>
<th>action</th>
</tr>
</thead>
<tbody>
<?php
foreach ($vitamin as $key => $value){
    ?>

<tr>
<td scope="row"><?= $value['ID_VITAMIN']?></td>
<td><?= $value['NAMA_VITAMIN']?></td>
<td><?= $value['KETERANGAN_VIT']?></td>
<td>
<a href="<?= base_url('vitamin/edit/'.$value['ID_VITAMIN'])?>" class="btn btn-warning">edit</a>
<a href="<?= base_url('vitamin/delete/'.$value['ID_VITAMIN'])?>" class="btn btn-danger" onClick="return confirm('Apakah yakin data ini dihapus..?')">delete</a>
</td>
</tr>
<?php
}
?>

</tbody>
</table>
</div>
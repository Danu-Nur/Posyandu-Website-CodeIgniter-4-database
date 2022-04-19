<div class="col-sm-12">

<a href="<?= base_url('waktu/add')?>" class="btn btn-primary">Add Data</a>

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
<th>Tanggal</th>
<th>Jam</th>
<th>action</th>
</tr>
</thead>
<tbody>
<?php
foreach ($waktu as $key => $value){
    ?>

<tr>
<td scope="row"><?= $value['ID_WAKTU']?></td>
<td><?= $value['TGL']?></td>
<td><?= $value['JAM']?></td>
<td>
<a href="<?= base_url('waktu/edit/'.$value['ID_WAKTU'])?>" class="btn btn-warning">edit</a>
<a href="<?= base_url('waktu/delete/'.$value['ID_WAKTU'])?>" class="btn btn-danger" onClick="return confirm('Apakah yakin data ini dihapus..?')">delete</a>
</td>
</tr>
<?php
}
?>

</tbody>
</table>
</div>
<div class="col-sm-12">

<a href="<?= base_url('imunisasi/add')?>" class="btn btn-primary">Add Data</a>

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
<th>Jenis</th>
<th>Keterangan</th>
<th>action</th>
</tr>
</thead>
<tbody>
<?php
foreach ($imunisasi as $key => $value){
    ?>

<tr>
<td scope="row"><?= $value['ID_IMUN']?></td>
<td><?= $value['JENIS_IMUN']?></td>
<td><?= $value['KETERANGAN_IMUN']?></td>
<td>
<a href="<?= base_url('imunisasi/edit/'.$value['ID_IMUN'])?>" class="btn btn-warning">edit</a>
<a href="<?= base_url('imunisasi/delete/'.$value['ID_IMUN'])?>" class="btn btn-danger" onClick="return confirm('Apakah yakin data ini dihapus..?')">delete</a>
</td>
</tr>
<?php
}
?>

</tbody>
</table>
</div>
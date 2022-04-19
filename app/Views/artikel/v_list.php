<div class="col-sm-12">

<a href="<?= base_url('artikel/add')?>" class="btn btn-primary">Add Data</a>

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
<?php 
            $errors = $validation->getErrors();
            if(!empty($errors))
            {
                echo $validation->listErrors('err_list');
            }
        ?>


<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>Id</th>
<th>Judul</th>
<th>Foto</th>
<th>Isi</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
foreach ($artikel as $key => $value){
    ?>

<tr>
<td scope="row"><?= $value['ID_ARTIKEL']?></td>
<td><?= $value['JUDUL']?></td>
<td><img src=" <?= base_url('uploads/'.$value['FOTO_ARTIKEL']) ?> " width="100"></td>
<td><?= $value['ISI_ARTIKEL']?></td>
<td>
<a href="<?= base_url('artikel/edit/'.$value['ID_ARTIKEL'])?>" class="btn btn-warning">edit</a>
<a href="<?= base_url('artikel/delete/'.$value['ID_ARTIKEL'])?>" class="btn btn-danger" onClick="return confirm('Apakah yakin data ini dihapus..?')">delete</a>
</td>
</tr>
<?php
}
?>

</tbody>
</table>
</div>
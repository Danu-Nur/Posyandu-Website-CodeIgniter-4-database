<div class="col-sm-12">

<br></br>

<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th><h2>Tanggal</h2></th>
<th><h2>Jam</h2></th>
</tr>
</thead>
<tbody>
<?php
foreach ($waktu as $key => $value){
    ?>

<tr>
<td><h2><?= $value['TGL']?></h2></td>
<td><h2><?= $value['JAM']?></h2></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
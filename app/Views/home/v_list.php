<div class="col-sm-12">
<h2 style="color:green;text-align:center;"><b>JADWAL PELAKSANAAN POSYANDU</b> </h2>
<br></br>

<table class="table table-bordered table-striped">
<thead>
<tr>
<th><h2>Tanggal</h2></th>
<th><h2>Jam</h2></th>
</tr>
</thead>
<tbody>
<?php
foreach ($jadwal as $key => $value){
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
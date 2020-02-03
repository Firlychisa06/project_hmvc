<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1px">
<tr>
    <th>Username</th>
    <th>Email</th>
    <th>Aksi</th>

  </tr>
  <?php
foreach ($list as $key ) {
	?>
  <tr>

    <td><?php echo $key->username ?> </td>
	<td><?php echo $key->email ?> </td>
	<td><a type="submit" href= "<?php echo base_url('contoh/editdata/'.$key->id_user)?>" >Edit</a>
		<a type="submit" href= <?php echo base_url("contoh/hapusdata".$key->id_user)?> >Hapus</a> </td>

</tr>
<?php } ?>
</table>
</body>
</html>
<?php 
$this->load->view('headerupdate');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD</title>
</head>
<body>
	<form action=<?php echo base_url("contoh/simpan")?> method="POST">
		<input type="hidden" name="id_user" value="<?php echo $daftar['id_user']?>">
		<!-- input type= jenis masukkan(text,date,int,hidden) -->
		<label>Username</label>
		<input type="text" name="nama" value="<?php echo $daftar['username'] ?>"><br>
		<!-- name digunakan untuk $this->input-post di controller -->
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $daftar['email'] ?>"><br>
		<!-- value untuk menampung data dari data base -->
		<input type="submit" name="simpan">

</body>
</html>
<?php 
$this->load->view('footerupdate');
?>
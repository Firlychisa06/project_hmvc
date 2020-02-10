<?php $this->load->view('header') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Manajemen Surat
			<!-- <small>Optional description</small> -->
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
			<li class="active">Here</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">
        	<div class="col-xs-12">
        		<div class="box">
        			<div class="box-header">
        				<h3 class="box-title">List Surat Masuk</h3>
        			</div>
        			<!-- /.box-header -->
        			<div class="box-body">
                    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Asal surat</th>
                      <th>Tanggal masuk</th>
                      <th>Asal surat/instansi</th>
                      <th>Tujuan surat</th>
                      <th>Judul surat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Semarang</td>
                      <td>09 febuari 2020</td>
                      <td>Polines Semarang</td>
                      <td>Purwokerto</td>
                      <td>Daftar Ulang Polines</td>
                      <td><a type="submit">Edit</a> <a type="submit">Delete</a> </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jakarta</td>
                        <td>12 januari 2020</td>
                        <td>Pos Indonesia</td>
                        <td>Surabaya</td>
                        <td>Panggilan kerja</td>
                        <td><a type="submit">Edit</a> <a type="submit">Delete</a> </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Jogja</td>
                        <td>12 maret 2019</td>
                        <td>Kantor Pajak</td>
                        <td>Jogja</td>
                        <td>Tagihan Pajak</td>
                        <td><a type="submit">Edit</a> <a type="submit">Delete</a> </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Purwokerto</td>
                        <td>25 januari 2020</td>
                        <td>SMK Telkom Purwokerto</td>
                        <td>Jogja</td>
                        <td>Tagihan SPP</td>
                        <td><a type="submit">Edit</a> <a type="submit">Delete</a> </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Jakarta</td>
                        <td>10 november 2020</td>
                        <td>PT KAI</td>
                        <td>Malang</td>
                        <td>Panggilan kerja</td>
                        <td><a type="submit">Edit</a> <a type="submit">Delete</a> </td>
                    </tr>
                  </tbody>
                    <!-- table memuat:
                            no
                            asal surat
                            tanggal masuk
                            asal surat/instansi
                            tujuan surat
                            judul surat
                            aksi(button edit dan delete) -->
                        </table>
                    </div>

                    </div>
        <!-- /.end-box-header -->
                </div>
            </div>
        </div>
<!-- /.end-row -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php $this->load->view('footer') ?>
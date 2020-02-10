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
                        <!-- table memuat:
                            no
                            asal surat
                            tanggal masuk
                            asal surat/instansi
                            tujuan surat
                            judul surat
                            aksi(button edit dan delete) -->
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
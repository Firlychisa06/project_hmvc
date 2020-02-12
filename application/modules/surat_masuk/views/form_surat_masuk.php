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
        				<h3 class="box-title">Surat Masuk</h3>
        			</div>
        			<!-- /.box-header -->
        			<div class="box-body">
        				<form action="simpan" method="POST">
                            <div class="form-group">
                                <label>TANGGAL MASUK</label>
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker">
                            </div>
                        </div>
                        <div>
                            <label>ASAL SURAT/ INSTANSI</label>
                            <input type="text" name="asal_surat" class="form-control" placeholder="Masukkan Asal Surat" required>
                        </div>
                        <div class="form-group">
                            <label>TUJUAN SURAT</label>
                            <input type="text" name="tujuan_surat" class="form-control" placeholder="Masukkan Tujuan Surat" required>
                        </div>
                        <div class="form-group">
                            <label>JUDUL SURAT</label>
                            <input type="text" name="judul_surat" class="form-control" placeholder="Masukkan Judul Surat" required>
                        </div>
                           <!--  <div class="form-group">
                                <label >DESKRIPSI</label>
                            <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi atau Alamat Surat"> 
                        </div> -->
                        <label>DESKRIPSI</label>
                        <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">KOLOM DESKRIPSI
                                <small>Masukkan Deskripsi Alamat Surat</small>
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fa fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                          <form>
                            <textarea class="textarea" placeholder="Ketikkan Deskripsi Lengkap dari Surat"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </form>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Pilih File</p>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>

                </form>
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
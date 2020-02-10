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
                                <!-- <div class='input-group date' id='datetimepicker1'> -->

                    <!-- <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span> -->
                     <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
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
                            <div class="form-group">
                                <label >DESKRIPSI</label>
                            <textarea name="deskripsi" class="form-control" placeholder="Tulis Deskripsi Singkat atau Alamat Pengirim" rows="3"></textarea> 
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